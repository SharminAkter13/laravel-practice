<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
         public function index()
     
    {
        $resume = Resume::all();
        return view('pages.resume.resumes',compact('resume'));
    }

    
       public function create()
    {
        return view('pages.create-resume');
    }

    public function store(Request $request)
    {

        Resume::create($request->only([
            'name',
            'amount',
            'price',
        ]));
        // dd($request->all());


        return Redirect::to('/Resume');
    }

    
    public function destroy(Request $request)
    {
        $product = Resume::find($request->resume_id);
        $product->delete();
        return Redirect::to('/Resume');
}


 public function update($resume_id)
    {
        $cat = Resume::find($resume_id);
        return view('pages.Resume.edit-resume',compact('resume'));
    }

}
