<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Subsection;
use App\Section;
use App\Brand;
use App\Power;
use App\Aplication;
use App\Quality;
use App\Segment;

class ProductoController extends Controller
{
   
   
 public function directory()
  {
    $productos = Product::all();
    $subsections= Subsection::all();
    $sections= Section::all();
    return view("productos", compact("productos", "subsections","sections"));
  }
      
  public function busqueda(Request $request)
  {
    $productos = Product::where( 'title', 'like', "%$request->title%")->get();
    $productosC = Product::where( 'characterist', 'like', "%$request->title%")->get();
    $productosA= Product::join('aplications', 'aplications.id', '=', 'products.aplication_id' )
    ->select('products.id','products.title','products.characterist','products.image_1','products.brand_id','products.aplication_id')
    ->where('aplications.description','like', "%$request->title%")->get();
    $productosB= Product::join('brands', 'brands.id', '=', 'products.brand_id' )
    ->select('products.id','products.title','products.characterist','products.image_1','products.brand_id')
    ->where('brands.title','like', "%$request->title%")->get();

    return view('productos', compact('productos','productosC','productosA','productosB' ));

  }


 
 
}