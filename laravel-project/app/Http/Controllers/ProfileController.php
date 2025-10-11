<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
        public function index()
     
    {
        $cats = Profile::all();
        return view('pages.categories',compact('cats'));
    }

    
       public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {

        Profile::create($request->only([
            'name',
            'amount',
            'price',
        ]));
        // dd($request->all());


        return Redirect::to('/Profile');
    }

    
    public function destroy(Request $request)
    {
        $product = Profile::find($request->catagory_id);
        $product->delete();
        return Redirect::to('/Profile');
}

}
