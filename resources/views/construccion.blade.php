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
    <nav class="displayMenu">
  
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
                <figure> 
                <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_1 )}}" style="max-width:120px" alt="{{$producto->title}}">
                 @if ($producto->brand_id != NULL)
                 <br>
                 <img src= "data:image/jpeg;base64,{{base64_encode( $producto->brand->photo )}}" alt="{{$producto->brand->title}}" class="mt-1">
                 @endif
                </figure>
                @if ($producto->aplication_id != NULL)
                <div class="tProd pl-3">{{$producto->aplication->description}}</div>
                @if ($producto->aplication->item1 != NULL)<div class="tProd pl-3">{{$producto->aplication->item1}}</div> @endif
                 @if ($producto->aplication->item2 != NULL)<div class="tProd pl-3">{{$producto->aplication->item2}}</div> @endif
                @if ($producto->aplication->item3 != NULL)<div class="tProd pl-3">{{$producto->aplication->item3}}</div> @endif
                @if ($producto->aplication->item4 != NULL)<div class="tProd pl-3">{{$producto->aplication->item4}}</div> @endif
                                                 

                    @elseif($producto->aplication_id === NULL)
                    <h6>  {{cortarPalabras($producto->characterist)}}
                @endif</h6>
            </div>
            @if ($producto->detalle != NULL)
            
            <div class="d-flex justify-content-md-around m-1">
            <button class="btn btn-success" onclick= "location.href = '/{{$producto->detalle}}/{{$producto->id}}'" id="detalle">Detalle</button>
           
          <!--  <button class="btn btn-danger" onclick="agregarArticulo()"id="articulo" name="{{$producto->title}}">Cotizar</button></div>
          -->  
          @else            
           <!-- <div class="d-flex justify-content-md-around m-1">
           <button class="btn btn-danger" onclick="agregarArticulo()" id="articulo" name="{{$producto->title}}">Cotizar</button></div>
-->
           @endif 
        </article>
       
        @endforeach
        </div>
        </div>
      <!--  <div class="displayAtras"><button class="btn btn-success " onClick="window.location.href='/'" id="volver">Volver</button></div>
-->
    </section>

    <aside class="menuLeft asideMobile">

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


</main>




@endsection