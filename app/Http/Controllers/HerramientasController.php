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

class HerramientasController extends Controller
{
   
   
        public function directory(){
            $productos = Product::all();
            $subsections= Subsection::all();
            $sections= Section::all();
            return view("productos", compact("productos", "subsections","sections"));
          }
      
         


   
  
  public function listadoAmoladoras (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '26')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '26')->get();

    return view('herramientas', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

  public function listadoAserradoras (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '27')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '27')->get();

    return view('herramientas', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

  public function listadoPulidoras (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '28')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '28')->get();

    return view('herramientas', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

  public function listadoMartillos (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '29')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '29')->get();

    return view('herramientas', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

public function listadoTaladrosEB (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '30')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '30')->get();

    return view('herramientas', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }

  public function listadoTaladrosC (){
    $sections= Section::where("category_id", "=" , '6')->get();
    $subsections= Subsection::where("id", "=" , '31')->get();
    $subsectionC= Subsection::where('section_id','=', '6')->get();
    $subsectionS= Subsection::where('section_id','=', '7')->get();
    $productos= Product::where("subsection_id", "=" , '31')->get();

    return view('herramientas', compact('subsections','subsectionC','subsectionS', 'productos','sections'));
  }




}