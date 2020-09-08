<?php
namespace App\Http\Controllers;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;

use Illuminate\Http\Request;

/*use Illuminate\Support\Facades\Route;*/

class PageController extends Controller
{
     public function mainfun($value='')
    {
         $items=Item::all()->take(6);
         $brands = Brand::take(6)->get();
    	return view('frontend.main',compact('items','brands'));
    }

   public function itemsbybrand($id)
  {
    $brand = Brand::find($id);
    return view('frontend.itemsbybrand',compact('brand'));
  }

      public function itemdetail($id)
      {
         $item = Item::find($id);
         $items=Item::all()->take(4);
         return view('frontend.itemdetail',compact('item','items'));
      }

     public function loginfun($value='')
    {
        return view('frontend.login');
    }

     public function promotionfun($value='')
    {
           $items=Item::all()->take(6);
        return view('frontend.promotion',compact('items'));
    }

      public function registerfun($value='')
    {
        return view('frontend.register');
    }

      public function shoppingcartfun($value='')
    {
        return view('frontend.shoppingcart');
    }

      public function subcategoryfun($id)
    {
          $subcategory = Subcategory::find($id);
          $subcategory->setRelation('items', $subcategory->items()->paginate(3));
        return view('frontend.subcategory',compact('subcategory'));
    }

     

}
