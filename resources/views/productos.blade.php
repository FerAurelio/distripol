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
       <div>
        <article class="card bg-light m-3" style="width:250px;">
            <div class="card-header">Codigo producto</div>
            <div class="card-body">
                <figure style="display:flex; justify-content: center;"><img src="/img/construccion/corte/BCR-av-350-25-1.jpg" alt=""></figure>
                <h6>Hormigón fresco, Canto Rodado Premium.</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success">Detalle</button>
                <button class="btn btn-danger">Cotizar</button></div>
            

        </article>
        
        <article class="card bg-light m-3" style="width:250px;">
            <div class="card-header">Codigo producto</div>
            <div class="card-body">
                <figure style="display:flex; justify-content: center;"><img src="/img/construccion/corte/BCR-av-350-25-1.jpg" alt=""></figure>
                <h6>Hormigón fresco, Canto Rodado Premium.</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success">Detalle</button>
                <button class="btn btn-danger">Cotizar</button></div>
            

        </article>

        <article class="card bg-light m-3" style="width:250px;">
            <div class="card-header">Codigo producto</div>
            <div class="card-body">
                <figure style="display:flex; justify-content: center;"><img src="/img/construccion/corte/BCR-av-350-25-1.jpg" alt=""></figure>
                <h6>Hormigón fresco, Canto Rodado Premium.</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success">Detalle</button>
                <button class="btn btn-danger">Cotizar</button></div>
            

        </article>
        <article class="card bg-light m-3" style="width:250px;">
            <div class="card-header">Codigo producto</div>
            <div class="card-body">
                <figure style="display:flex; justify-content: center;"><img src="/img/construccion/corte/BCR-av-350-25-1.jpg" alt=""></figure>
                <h6>Hormigón fresco, Canto Rodado Premium.</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success">Detalle</button>
                <button class="btn btn-danger">Cotizar</button></div>
            

        </article>

        <article class="card bg-light m-3" style="width:250px;">
            <div class="card-header">Codigo producto</div>
            <div class="card-body">
                <figure style="display:flex; justify-content: center;"><img src="/img/construccion/corte/BCR-av-350-25-1.jpg" alt=""></figure>
                <h6>Hormigón fresco, Canto Rodado Premium.</h6>
            </div>
            <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success">Detalle</button>
                <button class="btn btn-danger">Cotizar</button></div>
            

        </article>

        </div>
    </section>
</main>



@include('partials.suscription')
@include('partials.marcas')
@endsection