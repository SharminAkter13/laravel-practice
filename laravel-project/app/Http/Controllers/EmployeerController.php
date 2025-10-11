<?php

namespace App\Http\Controllers;

use App\Models\Employeer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeerController extends Controller
{
         public function index()
     
    {
        $cats = Employeer::all();
        return view('pages.categories',compact('cats'));
    }

    
       public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {

        Employeer::create($request->only([
            'name',
            'amount',
            'price',
        ]));
        // dd($request->all());


        return Redirect::to('/Employeer');
    }

    
    public function destroy(Request $request)
    {
        $product = Employeer::find($request->catagory_id);
        $product->delete();
        return Redirect::to('/Employeer');
}

 public function update($catagory_id)
    {
        $cat = Category::find($catagory_id);
        return view('pages.category.edit',compact('cat'));
    }


}
