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

class SeguridadController extends Controller
{
   
   
        public function directory(){
            $productos = Product::all();
            $subsections= Subsection::all();
            $sections= Section::all();
            return view("productos", compact("productos", "subsections","sections"));
          }
      
         


   
  
  public function listadoGuantes (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '42')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '42')->get();

    return view('seguridad', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

  public function listadoRespiratoria (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '43')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '43')->get();

    return view('seguridad', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

  public function listadoAuditiva(){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '44')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '44')->get();

    return view('seguridad', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

  public function listadoFacial (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '45')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '45')->get();

    return view('seguridad', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

public function listadoFajas (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '46')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '46')->get();

    return view('seguridad', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

 




}