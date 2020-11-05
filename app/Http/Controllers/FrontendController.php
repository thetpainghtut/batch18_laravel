<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;
use App\Brand;

class FrontendController extends Controller
{
  public function home($value='')
  {
    $items = Item::take(2)->get();
    $brands = Brand::all();
    return view('frontend.mainpage',compact('items','brands'));
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

  public function itemsbysubcategory($id)
  {
    $mysubcategory = Subcategory::find($id);
    return view('frontend.itemsbysubcategory',compact('mysubcategory'));
  }

  public function bysubcategory(Request $request)
  {
    $id = $request->id;
    $items = Item::where('subcategory_id',$id)->get();
    return $items;
  }

  public function cart($value='')
  {
    return view('frontend.cartpage');
  }
}
