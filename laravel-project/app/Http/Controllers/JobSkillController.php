<?php

namespace App\Http\Controllers;

use App\Models\JobSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobSkillController extends Controller
{
         public function index()
     
    {
        $cats = JobSkill::all();
        return view('pages.categories',compact('cats'));
    }

    
       public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {

        JobSkill::create($request->only([
            'name',
            'amount',
            'price',
        ]));
        // dd($request->all());


        return Redirect::to('/JobSkill');
    }

    
    public function destroy(Request $request)
    {
        $product = JobSkill::find($request->catagory_id);
        $product->delete();
        return Redirect::to('/JobSkill');
}

}