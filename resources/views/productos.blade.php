@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
@include('partials.botonera')
<main class="containerP">
<aside class="menuLeft">
     
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
                 <img src= "data:image/jpeg;base64,{{base64_encode( $producto->brand->photo )}}" alt="{{$producto->brand->title}}" class="mt-1">
                 @endif
                </figure>
                <h6>{{$producto->characterist}}</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" id="detalle">Detalle</button>
                <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
            
        </article>
       
       
        </div>
        </div>
    </section>


</main>




@endsection