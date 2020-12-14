@extends('layouts.master')
@section('pageTitle',"Máquinas, Equipamiento, Seguridad y Accesorios")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
<aside class="menuLeft">
<div class="p-2" style="border-top: 7px solid #ed1e79;background-color:#006837;color:white" >
        
            
        Máquinas, Equipamiento, Seguridad y Accesorios
                
</div>
        <nav class="displayMenu">
            <ul ><b>Máquinas y Equipamiento</b>
           
       
            @foreach($subsectionC as $subsectionCo)
                      
                <li>
                    <a href="{{$subsectionCo->links}}">
                        <div>
                            {{$subsectionCo->title}}</div>
                    </a>
                </li>
            @endforeach


            <ul ><b>Seguridad y Accesorios</b>
           
       
            @foreach($subsectionS as $subsectionSe)
                      
                <li>
                    <a href="{{$subsectionSe->links}}">
                        <div>
                            {{$subsectionSe->title}}</div>
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
                <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_1 )}}" style="width:130px" alt="{{$producto->title}}">
                 @if ($producto->brand_id != NULL)
                 <br>
                 <img src= "data:image/jpeg;base64,{{base64_encode( $producto->brand->photo )}}" alt="{{$producto->brand->title}}" class="mt-1">
                 @endif
                </figure>
                <h6>{{cortarPalabras($producto->characterist)}}</h6>
            </div>
            @if ($producto->detalle != NULL)
            
            <div class="d-flex justify-content-md-around m-1">
            <button class="btn btn-success" onclick= "location.href = '{{$producto->detalle}}/{{$producto->id}}'" id="detalle">Detalle</button>
           
     <!--     <button class="btn btn-danger" id="cotizar">Cotizar</button></div>   -->
            @else            
     <!--      <div class="d-flex justify-content-md-around m-1">
           <button class="btn btn-danger" id="cotizar">Cotizar</button></div>   -->
            @endif 
        </article>
       
        @endforeach
        </div>
        </div>
      <!--  <div class="displayAtras"><button class="btn btn-success " onClick="window.location.href='/'" id="volver">Volver</button></div>
-->
    </section>


    <aside class="menuLeft asideMobile">
<div class="p-2" style="border-top: 7px solid #ed1e79;background-color:#006837;color:white" >
        
            
        Máquinas, Equipamiento, Seguridad y Accesorios
                
</div>
        <nav >
            <ul ><b>Máquinas y Equipamiento</b>
           
       
            @foreach($subsectionC as $subsectionCo)
                      
                <li>
                    <a href="{{$subsectionCo->links}}">
                        <div>
                            {{$subsectionCo->title}}</div>
                    </a>
                </li>
            @endforeach


            <ul ><b>Seguridad y Accesorios</b>
           
       
            @foreach($subsectionS as $subsectionSe)
                      
                <li>
                    <a href="{{$subsectionSe->links}}">
                        <div>
                            {{$subsectionSe->title}}</div>
                    </a>
                </li>
            @endforeach


  </ul>
 

        </nav>

    </aside>


</main>




@endsection