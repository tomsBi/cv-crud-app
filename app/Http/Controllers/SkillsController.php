<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use App\Models\Experience;
use App\Models\Skills;

class SkillsController extends Controller
{
    public function index(Resume $resume)
    {
        $skills = Skills::where('resume_id', $resume->id)->get();
        return view('skills.index', [
            'skills' => $skills,
            'resume' => $resume,
        ]);
    }

    public function create(Resume $resume)
    {
        $experiences = Experience::where('resume_id', $resume->id)->get();
        return view('skills.create', [
            'resume' => $resume,
            'experiences' => $experiences,
        ]);
    }

    public function store(Request $request)
    {
        $resume_id = $request->resume;

        $data = $request->validate([
            'description' => 'required',
            'type' => 'required',
            'experience_id' => 'required|numeric'
        ]);

        $data['resume_id'] = $resume_id;

        $newSkill = Skills::create($data);

        return redirect(route('skill.index', ['resume' => $resume_id]))->with('success', 'Skill added succesfully!');
    }

    public function edit(Skills $skill)
    {
        $experiences = Experience::where('resume_id', $skill->resume_id)->get();
        return view('skills.edit', [
            'skill' => $skill,
            'experiences' => $experiences,
        ]);
    }

    public function update(Skills $skill, Request $request)
    {
        $data = $request->validate([
            'description' => 'required',
            'type' => 'required',
            'experience_id' => 'required|numeric'
        ]);

        $skill->update($data);
        
        return redirect(route('skill.index', ['resume' => $skill->resume_id]))->with('success', 'Skill updated succesfully!');
    }

    public function destroy(Skills $skill)
    {
        $skill->delete();
        return redirect(route('skill.index'))->with('danger', 'Skill deleted succesfully!');
    }
}
