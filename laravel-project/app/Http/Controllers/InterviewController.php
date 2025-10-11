<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
         public function index()
     
    {
        $cats = Interview::all();
        return view('pages.categories',compact('cats'));
    }

    
       public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {

        Interview::create($request->only([
            'name',
            'amount',
            'price',
        ]));
        // dd($request->all());


        return Redirect::to('/Interview');
    }

    
    public function destroy(Request $request)
    {
        $product = Interview::find($request->catagory_id);
        $product->delete();
        return Redirect::to('/Interview');
}

}
