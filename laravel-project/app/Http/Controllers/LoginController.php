<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
         public function index()
     
    {
        $cats = Login::all();
        return view('pages.categories',compact('cats'));
    }

    
       public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {

        Login::create($request->only([
            'name',
            'amount',
            'price',
        ]));
        // dd($request->all());


        return Redirect::to('/Login');
    }

    
    public function destroy(Request $request)
    {
        $product = Login::find($request->catagory_id);
        $product->delete();
        return Redirect::to('/Login');
}

}
