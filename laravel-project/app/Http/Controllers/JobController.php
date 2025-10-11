<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
        public function index()
     
    {
        $cats = Job::all();
        return view('pages.categories',compact('cats'));
    }

    
       public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {

        Job::create($request->only([
            'name',
            'amount',
            'price',
        ]));
        // dd($request->all());


        return Redirect::to('/Job');
    }

    
    public function destroy(Request $request)
    {
        $product = Job::find($request->catagory_id);
        $product->delete();
        return Redirect::to('/Job');
}

}
