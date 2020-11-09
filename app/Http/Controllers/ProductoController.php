<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductoController extends Controller
{
   
   
        public function directory(){
            $productos = Product::all();
            return view("productos", compact("productos"));
          }
      
         


      public function show ($id){
      
	  $producto = Product::find($id);
		return view('producto-show', compact('producto'));
	}
    
    


}