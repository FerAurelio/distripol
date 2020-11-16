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

class GressController extends Controller
{
   
   
        public function directory(){
            $productos = Product::all();
            $subsections= Subsection::all();
            $sections= Section::all();
            return view("productos", compact("productos", "subsections","sections"));
          }
      
         


   
  
  public function listadoCorte (){
    $sections= Section::where("category_id", "=" , '4')->get();
    $subsections= Subsection::where("id", "=" , '34')->get();
    $subsectionC= Subsection::where('section_id','=', '15')->get();
    
   
    $productos= Product::where("subsection_id", "=" , '34')->get();

    return view('mosaicos', compact('subsections','subsectionC', 'productos','sections',));
  }
  public function listadoCorte2 (){
    $sections= Section::where("category_id", "=" , '4')->get();
    $subsections= Subsection::where("id", "=" , '35')->get();
    $subsectionC= Subsection::where('section_id','=', '15')->get();
    
   
    $productos= Product::where("subsection_id", "=" , '35')->get();

    return view('mosaicos', compact('subsections','subsectionC', 'productos','sections',));
  }









}