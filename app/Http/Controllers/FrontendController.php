<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class FrontendController extends Controller
{
  public function home($value='')
  {
    $items = Item::all();
    $categories = Category::all();
    return view('frontend.mainpage',compact('items','categories'));
  }

  public function itemdetail($id)
  {
    $item = Item::find($id);
    return view('frontend.itemdetail',compact('item'));
  }

  public function signin($value='')
  {
    return view('frontend.signinpage');
  }

  public function signup($value='')
  {
    return view('frontend.signuppage');
  }
}
