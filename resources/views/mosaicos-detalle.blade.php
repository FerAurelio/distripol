@extends('layouts.master')
@section('pageTitle',"Mosaicos, Refractarios y Viguetas")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
<aside class="menuLeft">
<div class="p-2" style="border-top: 7px solid #29abe2;background-color:#006837;color:white" >
        
            
        Mosaicos, Refractarios y Viguetas
                
</div>
        <nav>
            <ul ><b>CORTE</b>
           
       
            @foreach($subsectionC as $subsectionCo)
                      
                <li>
                    <a href="{{$subsectionCo->links}}">
                        <div>
                            {{$subsectionCo->title}}</div>
                    </a>
                </li>
            @endforeach

  </ul>
 

        </nav>

    </aside>

    
    
    
    <section class="contenidoProds">
   
    <div class="centrarProductos">
       <div class="center">
      
       
       
      
        <article class="card bg-light m-3 " >
            <div class="card-header">{{$producto->title}}</div>
            
            <div class="card-body">
                <figure style="display:flex; justify-content: center; align-items:flex-end; flex-wrap:wrap" > 
                <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_1 )}}" style="max-width:100%" alt="{{$producto->title}}">
                 @if ($producto->brand_id != NULL)
                 <br>
                 <img src= "data:image/jpeg;base64,{{base64_encode( $producto->brand->photo )}}" alt="{{$producto->brand->title}}" class="mt-1">
                 @endif
                </figure>
                <h6>@if ($producto->aplication_id != NULL)
                    {{cortarPalabras($producto->aplication->description)}}
                    @elseif($producto->aplication_id === NULL)
                    {{cortarPalabras($producto->characterist)}}
                @endif</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/mosaicos-detalle/{{$producto->id}}'" id="detalle">Detalle</button>
                <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
            
        </article>
       
        
        </div>
        </div>
    </section>


</main>




@endsection