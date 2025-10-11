<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        return view('pages.home');
    }
     public function update($catagory_id)
    {
        $cat = Category::find($catagory_id);
        return view('pages.category.edit',compact('cat'));
    }

}
