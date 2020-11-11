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
   
   
        public function directory(){
            $productos = Product::all();
            $subsections= Subsection::all();
            $sections= Section::all();
            return view("productos", compact("productos", "subsections","sections"));
          }
      
         


      public function show ($id){
      
	  $producto = Product::find($id);
		return view('producto-show', compact('producto'));
  }
  

    


}