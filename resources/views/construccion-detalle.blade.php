@extends('layouts.master')
@section('pageTitle',"Construccion")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
<aside class="menuLeft">

<div class="p-2" style="border-top: 7px solid #fcee21;background-color:#006837;color:white" >
        
            
            Construcción, Obra Civil y Obra Vial
        
    </div>
  <nav>
  
<ul> 
            
           <b>CORTE</b>
            
            
     
             @foreach($subsectionC as $subsectionCo)
                      
                <li>
                    <a href="{{$subsectionCo->links}}">
                        <div>
                            {{$subsectionCo->title}}</div>
                    </a>
                </li>
            @endforeach
            
           </ul>
          

           <ul ><b>PERFORADO</b>
           
       
                      @foreach($subsectionP as $subsectionPe)
                      
                <li>
                    <a href="{{$subsectionPe->links}}">
                        <div>
                            {{$subsectionPe->title}}</div>
                    </a>
                </li>
              @endforeach

               </ul>
  <ul ><b>DEMOLICION</b>
           
       
                      @foreach($subsectionD as $subsectionDe)
                      
                <li>
                    <a href="{{$subsectionDe->links}}">
                        <div>
                            {{$subsectionDe->title}}</div>
                    </a>
                </li>
              @endforeach

  </ul>
</div>
</div>
    </aside>

    
    
    
    <section class="contenidoProds">
    
    <div class="centrarProductos">
       <div class="center">
      
       
      
        <article class="card bg-light m-3 " >
            <div class="card-header">{{$producto->title}}</div>
            
            <div class="card-body">
                <figure> 
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
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success"  onclick= "location.href = '/construccion-detalle/{{$producto->id}}'" id="detalle">Detalle</button>
                <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
            
        </article>
       
        
        </div>
        </div>
    </section>


</main>




@endsection