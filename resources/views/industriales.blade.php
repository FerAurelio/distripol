@extends('layouts.master')
@section('pageTitle',"Marmoleria")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
<aside class="menuLeft">


<div class="p-2" style="border-top: 7px solid #ff931e;background-color:#006837;color:white" >
        
            
Pisos Industriales
        
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
  <ul ><b>PULIDO</b>
           
       
                      @foreach($subsectionD as $subsectionDe)
                      
                <li>
                    <a href="{{$subsectionDe->links}}">
                        <div>
                            {{$subsectionDe->title}}</div>
                    </a>
                </li>
              @endforeach

  </ul>
  <ul ><b>ADHESIVOS</b>
           
       
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
                <h6>{{cortarPalabras($producto->characterist)}}</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/productos/{{$producto->id}}'" id="detalle">Detalle</button>
                <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
            
        </article>
       
        @endforeach
        </div>
        </div>
    </section>


</main>




@endsection