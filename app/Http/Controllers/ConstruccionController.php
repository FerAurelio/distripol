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

class ConstruccionController extends Controller
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
  
  public function listadoCorte (){
    $sections= Section::where("category_id", "=" , '1')->get();
    $subsections= Subsection::where("id", "=" , '1')->get();
    $subsectionC= Subsection::where('section_id','=', '8')->get();
    $subsectionP= Subsection::where('section_id','=', '9')->get();
    $subsectionD= Subsection::where('section_id','=', '10')->get();
    $productos= Product::where("subsection_id", "=" , '1')->get();

    return view('construccion', compact('subsections','subsectionC','subsectionP','subsectionD','productos','sections'));
  }
  public function listadoCorte2 (){
    $sections= Section::where("category_id", "=" , '1')->get();
    $subsections= Subsection::where("id", "=" , '3')->get();
    $subsectionC= Subsection::where('section_id','=', '8')->get();
    $subsectionP= Subsection::where('section_id','=', '9')->get();
    $subsectionD= Subsection::where('section_id','=', '10')->get();
    $productos= Product::where("subsection_id", "=" , '3')->get();

    return view('construccion', compact('subsections','subsectionC','subsectionP','subsectionD','productos','sections'));
  }
  
  public function listadoPerforado (){
    $sections= Section::where("category_id", "=" , '1')->get();
    $subsections= Subsection::where("id", "=" , '4')->get();
    $subsectionC= Subsection::where('section_id','=', '8')->get();
    $subsectionP= Subsection::where('section_id','=', '9')->get();
    $subsectionD= Subsection::where('section_id','=', '10')->get();
    $productos= Product::where("subsection_id", "=" , '4')->get();

    return view('construccion', compact('subsections','subsectionC','subsectionP','subsectionD','productos','sections'));
  }

  public function listadoPerforado2 (){
    $sections= Section::where("category_id", "=" , '1')->get();
    $subsections= Subsection::where("id", "=" , '5')->get();
    $subsectionC= Subsection::where('section_id','=', '8')->get();
    $subsectionP= Subsection::where('section_id','=', '9')->get();
    $subsectionD= Subsection::where('section_id','=', '10')->get();
    $productos= Product::where("subsection_id", "=" , '5')->get();

    return view('construccion', compact('subsections','subsectionC','subsectionP','subsectionD','productos','sections'));
  }

  public function listadoDemolicion (){
    $sections= Section::where("category_id", "=" , '1')->get();
    $subsections= Subsection::where("id", "=" , '32')->get();
    $subsectionC= Subsection::where('section_id','=', '8')->get();
    $subsectionP= Subsection::where('section_id','=', '9')->get();
    $subsectionD= Subsection::where('section_id','=', '10')->get();
    $productos= Product::where("subsection_id", "=" , '32')->get();

    return view('construccion', compact('subsections','subsectionC','subsectionP','subsectionD','productos','sections'));
  }
    


}