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


class IndustrialesController extends Controller
{
   
   
        public function directory(){
            $productos = Product::all();
            $subsections= Subsection::all();
            $sections= Section::all();
            return view("productos", compact("productos", "subsections","sections"));
          }
      
         


   
  
  public function listadoCorte (){
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '37')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
   
    $productos= Product::where("subsection_id", "=" , '37')->get();

    return view('pisosIndustriales', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','productos','sections'));
  }
 
  
  public function listadoPerforado (){
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '47')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
    
    $productos= Product::where("subsection_id", "=" , '47')->get();

    return view('pisosIndustriales', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','productos','sections'));
}

  

  public function listadoPulido (){
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '38')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
   
    $productos= Product::where("subsection_id", "=" , '38')->get();

    return view('pisosIndustriales', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','productos','sections'));
}

  public function listadoPulido2 (){
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '39')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
   
    $productos= Product::where("subsection_id", "=" , '39')->get();

    return view('pisosIndustriales', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','productos','sections'));
}

public function listadoPulido3 (){
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '40')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
    
    $productos= Product::where("subsection_id", "=" , '40')->get();

    return view('pisosIndustriales', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','productos','sections'));
}
  public function listadoPulido4 (){
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '41')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
   
    $productos= Product::where("subsection_id", "=" , '41')->get();

    return view('pisosIndustriales', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','productos','sections'));
}

 

 
public function listadoAdhesivos (){
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '7')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
   
    $productos= Product::where("subsection_id", "=" , '7')->get();
    return view('pisosIndustriales', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','productos','sections'));
}

public function listadoAdhesivos2 (){
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '8')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
    
    $productos= Product::where("subsection_id", "=" , '8')->get();
    return view('pisosIndustriales', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','productos','sections'));
}


public function show ($id)
  {      
    $producto = Product::find($id);
    $sections= Section::where("category_id", "=" , '3')->get();
    $subsections= Subsection::where("id", "=" , '8')->get();
    $subsectionC= Subsection::where('section_id','=', '12')->get();
    $subsectionP= Subsection::where('section_id','=', '13')->get();
    $subsectionD= Subsection::where('section_id','=', '14')->get();
    $subsectionAS= Subsection::where('section_id','=', '11')->get();
    
		return view('pisosIndustriales-detalle', compact('subsections','subsectionC','subsectionP','subsectionD','subsectionAS','producto','sections'));
  }


}