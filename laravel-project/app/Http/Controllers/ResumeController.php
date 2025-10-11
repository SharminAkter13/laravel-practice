<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
         public function index()
     
    {
        $cats = Resume::all();
        return view('pages.categories',compact('cats'));
    }

    
       public function create()
    {
        return view('pages.create');
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
        $product = Resume::find($request->catagory_id);
        $product->delete();
        return Redirect::to('/Resume');
}

}
