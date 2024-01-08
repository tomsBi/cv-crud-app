<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Resume;

class EducationController extends Controller
{
    public function index($resume_id)
    {
        $educations = Education::where('resume_id', $resume_id)->get();
        return view('educations.index', [
            'educations' => $educations,
            'resume' => $resume_id,
        ]);
    }

    public function create(Resume $resume)
    {
        return view('educations.create', ['resume' => $resume]);
    }

    public function edit(Education $education)
    {
        return view('educations.edit', ['education' => $education]);
    }

    public function update(Education $education, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'faculty' => 'nullable',
            'study_programme' => 'nullable',
            'study_type' => 'required',
            'status' => 'required',
            'study_duration' => 'required|numeric',
            'start_year' => 'required|numeric',
            'end_year' => 'numeric',
        ]);

        $education->update($data);
        
        return redirect(route('education.index', ['resume' => $education->resume_id]))->with('success', 'Education updated succesfully!');
    }

    public function store(Request $request)
    {
        $resume_id = $request->resume;

        $data = $request->validate([
            'name' => 'required',
            'faculty' => 'nullable',
            'study_programme' => 'nullable',
            'study_type' => 'required',
            'status' => 'required',
            'study_duration' => 'required|numeric',
            'start_year' => 'required|numeric',
            'end_year' => 'numeric|nullable',
        ]);

        $data['resume_id'] = $resume_id;

        $newEducation = Education::create($data);

        return redirect(route('education.index', ['resume' => $resume_id]))->with('success', 'Education added succesfully!');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return redirect(route('education.index'))->with('danger', 'Education deleted succesfully!');
    }
}
