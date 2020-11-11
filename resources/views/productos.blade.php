@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
@include('partials.botonera')
<main class="containerP">
<aside class="menuLeft">
        <nav>
            <ul id="corte"><b>CORTE</b>
           
       
                      @foreach($subsections as $subsection)
                      @if($subsection->section_id === 8)
                <li>
                    <a href="">
                        <div>
                            {{$subsection->title}}</div>
                    </a>
                </li>@endif
              @endforeach

  </ul>
  <ul id="perforado"><b>PERFORADO</b>
           
       
                      @foreach($subsections as $subsection)
                      @if($subsection->section_id === 9)
                <li>
                    <a href="">
                        <div>
                            {{$subsection->title}}</div>
                    </a>
                </li>@endif
              @endforeach

  </ul>
  <ul id="demolicion"><b>DEMOLICION</b>
           
       
                      @foreach($subsections as $subsection)
                      @if($subsection->section_id === 10)
                <li>
                    <a href="">
                        <div>
                            {{$subsection->title}}</div>
                    </a>
                </li>@endif
              @endforeach

  </ul>
        </nav>

    </aside>

    
    
    
    <section class="contenidoProds">
    @foreach ($subsections as $subsection)
       @if($subsection->id === 1)
       • {{$subsection->title}}
       @endif
       @endforeach
       <br>
    <div class="centrarProductos">
       <div class="center">
      
       @foreach ($productos as $producto)
       
       @if($producto->subsection_id === 1)
        <article class="card bg-light m-3 " >
            <div class="card-header">{{$producto->title}}</div>
            
            <div class="card-body">
                <figure style="display:flex; justify-content: center; align-items:flex-end"><img src="data:image/jpeg;base64,{{base64_encode( $producto->image_1 )}}" style="max-width:100%" alt=""><img src="data:image/jpeg;base64,{{base64_encode( $producto->brand->image_1 )}}"  alt="{{$producto->brand->title}}"></figure>
                <h6>{{$producto->characterist}}</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" id="detalle">Detalle</button>
                <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
            
        </article>
        @endif
        @endforeach
        </div>
        </div>
    </section>


</main>




@endsection