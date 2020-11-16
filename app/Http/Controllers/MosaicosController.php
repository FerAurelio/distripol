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

class MosaicosController extends Controller
{
   
   
        public function directory(){
            $productos = Product::all();
            $subsections= Subsection::all();
            $sections= Section::all();
            return view("productos", compact("productos", "subsections","sections"));
          }
      
         


   
  
  public function listadoCorte (){
    $sections= Section::where("category_id", "=" , '4')->get();
    $subsections= Subsection::where("id", "=" , '36')->get();
    $subsectionC= Subsection::where('section_id','=', '16')->get();
    
   
    $productos= Product::where("subsection_id", "=" , '36')->get();

    return view('gress', compact('subsections','subsectionC', 'productos','sections',));
  }
 








}