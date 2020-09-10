@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
<main class="productos">

    <nav>
        <ul>
            <li><div id="link1"><a href="">
                    <h2>Construcción,<br> Obra Civil, Obra Vial,<br> y Pisos Industriales</h2>
                </a></div></li>
            <li><div id="link2"><a href="">
                    <h2>Marmolería y <br> Piedras Industriales</h2>
                </a></div></li>
            <li><div id="link3"><a href="">
                    <h2>Desbaste, Pulido y<br> Lustrado</h2>
                </a></div></li>
            <li><div id="link4"><a href="">
                    <h2>Gress, Porcelanato<br> y Cerámicas</h2>
                </a></div></li>
            <li><div id="link5"><a href="">
                    <h2>Mosaicos, Refractarios<br> y Viguetas</h2>
                </a></div></li>
            <li><div id="link6"><a href="">
                    <h2>Máquinas,<br> Equipamiento,<br> Seguridad y Accesorios</h2>
                </a></div></li>
        </ul>
    </nav>

</main>
@include('partials.suscription')
@include('partials.marcas')
@endsection