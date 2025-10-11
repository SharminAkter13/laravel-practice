<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
         public function index()
     
    {
        $cats = Candidate::all();
        return view('pages.categories',compact('cats'));
    }

    
       public function create()
    {
        return view('pages.create');
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
        $product = Candidate::find($request->catagory_id);
        $product->delete();
        return Redirect::to('/Candidate');
}

 public function update($catagory_id)
    {
        $cat = Category::find($catagory_id);
        return view('pages.category.edit',compact('cat'));
    }


}
