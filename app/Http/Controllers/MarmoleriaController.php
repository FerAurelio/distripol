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

class MarmoleriaController extends Controller
{
   
   
        public function directory(){
            $productos = Product::all();
            $subsections= Subsection::all();
            $sections= Section::all();
            return view("productos", compact("productos", "subsections","sections"));
          }
      
         


   
  
  public function listadoCorte (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '9')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '9')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
  }
  public function listadoCorte2 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '10')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '10')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
 }
  public function listadoCorte3 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '11')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '11')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}
  
  public function listadoPerforado (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '12')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '12')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

  public function listadoPerforado2 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '13')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '13')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

  public function listadoDesbaste (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '14')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '14')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

  public function listadoDesbaste2 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '15')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '15')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

public function listadoDesbaste3 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '16')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '16')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}
  public function listadoDesbaste4 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '17')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '17')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

  public function listadoDesbaste5 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '18')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '18')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

  public function listadoDesbaste6 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '19')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '19')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

  public function listadoDesbaste7 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '20')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '20')->get();

    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

  public function listadoDesbaste8 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '33')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '33')->get();
    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

public function listadoDesbaste9 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '48')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '48')->get();
    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

public function listadoAdhesivos (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '22')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '22')->get();
    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

public function listadoAdhesivos2 (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '23')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '23')->get();
    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}

public function listadoEquipos (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '24')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '24')->get();
    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}
public function listadoAccesorios (){
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '25')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
    $productos= Product::where("subsection_id", "=" , '25')->get();
    return view('marmoleria', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','productos','sections'));
}


public function show ($id)
  {      
    $producto = Product::find($id);
    $sections= Section::where("category_id", "=" , '2')->get();
    $subsections= Subsection::where("id", "=" , '25')->get();
    $subsectionC= Subsection::where('section_id','=', '1')->get();
    $subsectionP= Subsection::where('section_id','=', '2')->get();
    $subsectionD= Subsection::where('section_id','=', '3')->get();
    $subsectionAS= Subsection::where('section_id','=', '4')->get();
    $subsectionAE= Subsection::where('section_id','=', '5')->get();
		return view('marmoleria-detalle', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAE','subsectionAS','producto','sections'));
  }








}