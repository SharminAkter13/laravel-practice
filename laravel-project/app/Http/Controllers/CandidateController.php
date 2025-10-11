<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
         public function index()
     
    {
        $cnd = Candidate::all();
        return view('pages.candidate.candidates',compact('cnd'));
    }

    
       public function create()
    {
        return view('pages.create-cnd');
    }

    public function store(Request $request)
    {

        Candidate::create($request->only([
            'name',
            'amount',
            'price',
        ]));
        // dd($request->all());


        return Redirect::to('/Candidate');
    }

    
    public function destroy(Request $request)
    {
        $product = Candidate::find($request->candidate_id);
        $product->delete();
        return Redirect::to('/Candidate');
}

 public function update($candidate_id)
    {
        $cnd = Candidate::find($candidate_id);
        return view('pages.candidate.edit-cnd',compact('cnd'));
    }


}
