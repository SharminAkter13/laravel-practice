<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

       public function editStore(Request $request)
    {
       $resume = Resume::find($request->resume_id);
        $resume->name = $request->name;
        $resume->amount = $request->amount;
        $resume->price = $request->price;
        $resume->save();
        return Redirect::to('/resume');
    }

}
