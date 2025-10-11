<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
        public function index()
     
    {
        $profile = Profile::all();
        return view('pages.profile.profiles',compact('profile'));
    }

    
       public function create()
    {
        return view('pages.create-profile');
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
        $product = Profile::find($request->profile_id);
        $product->delete();
        return Redirect::to('/Profile');
}


 public function update($profile_id)
    {
        $profile = Profile::find($profile_id);
        return view('pages.profile.edit-profile',compact('profile'));
    }

}
