@extends('layouts.master')
@section('pageTitle',"Marmoleria")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
<aside class="menuLeft">
        <nav>
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
            <div class="d-flex justify-content-md-around m-1">
                <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
            
        </article>
       
        @endforeach
        </div>
        </div>
    </section>


</main>




@endsection