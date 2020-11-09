@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
@include('partials.botonera')
<main class="containerP">
    <aside class="menuLeft">
        <nav>
            <ul>
                <li>
                    <a href="">
                        <div>
                            corte</div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div>
                            corte</div>
                    </a>
                </li>
            </ul>
        </nav>

    </aside>
    
    
    
    <section class="contenidoProds">
    <div class="centrarProductos">
       <div class="center">
       @foreach ($productos as $producto)
        <article class="card bg-light m-3 " style="width:250px;">
            <div class="card-header">{{$producto->title}}</div>
            
            <div class="card-body">
                <figure style="display:flex; justify-content: center;"><img src="data:image/jpeg;base64,{{base64_encode( $producto->image_1 )}}" style="max-width:100%" alt=""></figure>
                <h6>{{$producto->characterist}}</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success">Detalle</button>
                <button class="btn btn-danger">Cotizar</button></div>
            
        </article>
        @endforeach
        </div>
        </div>
    </section>


</main>



@include('partials.suscription')
@include('partials.marcas')
@endsection