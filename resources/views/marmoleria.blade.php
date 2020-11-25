@extends('layouts.master')
@section('pageTitle',"Marmoleria")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
<aside class="menuLeft">
<div class="p-2" style="border-top: 7px solid #7ac943; background-color:#006837;color:white" >
        
            
        Marmolería y Piedras Naturales
                
            </div
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
  <ul ><b>DESBASTE / PULIDO / LUSTRADO</b>
           
       
                      @foreach($subsectionD as $subsectionDe)
                      
                <li>
                    <a href="{{$subsectionDe->links}}">
                        <div>
                            {{$subsectionDe->title}}</div>
                    </a>
                </li>
              @endforeach

  </ul>
  <ul ><b>ADHESIVOS Y SELLADORES</b>
           
       
           @foreach($subsectionAS as $subsectionAse)
           
     <li>
         <a href="{{$subsectionAse->links}}">
             <div>
                 {{$subsectionAse->title}}</div>
         </a>
     </li>
   @endforeach

</ul>
<ul ><b>ACCESORIOS Y EQUIPOS</b>
           
       
           @foreach($subsectionAE as $subsectionAeq)
           
     <li>
         <a href="{{$subsectionAeq->links}}">
             <div>
                 {{$subsectionAeq->title}}</div>
         </a>
     </li>
   @endforeach

</ul>
        </nav>

    </aside>

    
    
    
    <section class="contenidoProds">
    @foreach ($subsections as $subsection)
      
       • {{$subsection->title}}
      
       @endforeach
       <br>
    <div class="centrarProductos">
       <div class="center">
      
       @foreach ($productos as $producto)
       
      
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
                @endif
                </h6>
            </div>
            @if ($producto->detalle != NULL)
            
            <div class="d-flex justify-content-md-around m-1">
            <button class="btn btn-success" onclick= "location.href = '/marmoleria-detalle/{{$producto->id}}'" id="detalle">Detalle</button>
           
      <!--     <button class="btn btn-danger" id="cotizar">Cotizar</button></div>  -->
            @else            
     <!--    <div class="d-flex justify-content-md-around m-1">
           <button class="btn btn-danger" id="cotizar">Cotizar</button></div>   -->
            @endif 
        </article>
       
        @endforeach
        </div>
        </div>
    </section>


</main>




@endsection