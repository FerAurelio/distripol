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
  
    $productos = Product::where('title', 'like', "%$request->title%")->get();

    return view('productos', compact('productos'));

  }


 public function show ($id)
  {      
	  $producto = Product::find($id);
		return view('productos', compact('producto'));
  }
  function dd()
{
    array_map(function($x) { var_dump($x); }, func_get_args()); die;
}
}