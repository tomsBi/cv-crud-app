<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Resume;

class ExperienceController extends Controller
{

    public function index($resume_id)
    {
        $experiences = Experience::where('resume_id', $resume_id)->get();
        return view('experiences.index', [
            'experiences' => $experiences,
            'resume' => $resume_id,
        ]);
    }

    public function create(Resume $resume)
    {
        return view('experiences.create', ['resume' => $resume]);
    }

    public function store(Request $request)
    {
        $resume_id = $request->resume;

        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'job_type' => 'required',
            'duration' => 'required|numeric',
        ]);

        $data['resume_id'] = $resume_id;

        $newExperience = Experience::create($data);

        return redirect(route('experience.index', ['resume' => $resume_id]))->with('success', 'Experience added succesfully!');
    }

    public function edit(Experience $experience)
    {
        return view('experiences.edit', ['experience' => $experience]);
    }

    public function update(Experience $experience, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'job_type' => 'required',
            'duration' => 'required|numeric',
        ]);

        $experience->update($data);
        
        return redirect(route('experience.index', ['resume' => $experience->resume_id]))->with('success', 'Experience updated succesfully!');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect(route('experience.index'))->with('danger', 'Experience deleted succesfully!');
    }
}
