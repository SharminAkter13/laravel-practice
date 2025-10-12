<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::with(['educations', 'experiences', 'skills'])->get();
        return view('pages.resume.index', compact('resumes'));
    }

    public function create()
    {
        return view('pages.resume.create');
    }

    public function store(Request $request)
    {
        $resume = Resume::create($request->only([
            'user_id', 'name', 'email', 'profession_title',
            'location', 'web', 'pre_hour', 'age', 'cover_image'
        ]));

        // Save related data if provided
        if ($request->educations) {
            foreach ($request->educations as $edu) {
                $resume->educations()->create($edu);
            }
        }

        if ($request->experiences) {
            foreach ($request->experiences as $exp) {
                $resume->experiences()->create($exp);
            }
        }

        if ($request->skills) {
            foreach ($request->skills as $skill) {
                $resume->skills()->create($skill);
            }
        }

        return redirect()->route('resume.index')->with('success', 'Resume created successfully!');
    }

    public function show($id)
    {
        $resume = Resume::with(['educations', 'experiences', 'skills'])->findOrFail($id);
        return view('pages.resume.show', compact('resume'));
    }

    public function destroy($id)
    {
        Resume::findOrFail($id)->delete();
        return redirect()->route('resume.index')->with('success', 'Resume deleted successfully.');
    }
}
