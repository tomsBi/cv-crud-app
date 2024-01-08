<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return view('resumes.index', ['resumes' => $resumes]);
    }

    public function create()
    {
        return view('resumes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'profession' => 'required',
            'phone_number' => 'required|size:8',
            'email' => 'required|email',
        ]);

        $newResume = Resume::create($data);

        return redirect(route('education.index', ['resume' => $newResume]))->with('success', 'Basic information added succesfully!');
    }

    public function edit(Resume $resume)
    {
        return view('resumes.edit', ['resume' => $resume]);
    }

    public function update(Resume $resume, Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'profession' => 'required',
            'phone_number' => 'required|size:8',
            'email' => 'required|email',
        ]);

        $resume->update($data);
        
        return redirect(route('education.index', ['resume' => $resume]))->with('success', 'Basic information updated succesfully!');
    }

    public function destroy(Resume $resume)
    {
        $resume->delete();
        return redirect(route('resume.index'))->with('danger', 'Resume deleted succesfully!');
    }

    public function view(Resume $resume)
    {
        return view('resumes.view', ['resume' => $resume]);
    }
}
