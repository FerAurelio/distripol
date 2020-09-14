@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
<main class="productos">

    <nav>
        <ul>
            <li><a href="javascript:void(0);" onclick="construccion()"  >
                    <div id="link1">
                        <h2>Construcción,<br> Obra Civil, Obra Vial,<br> y Pisos Industriales</h2>
                    </div>
                </a></li>
            <li><a href="javascript:void(0);" onclick="marmoleria()">
                    <div id="link2">
                        <h2>Marmolería y <br> Piedras Industriales</h2>
                    </div>
                </a></li>
            <li><a href="javascript:void(0);" onclick="desbaste()">
                    <div id="link3">
                        <h2>Desbaste, Pulido y<br> Lustrado</h2>
                    </div>
                </a></li>
            <li><a href="/gress" onclick="gress()">
                    <div id="link4">
                        <h2>Gress, Porcelanato<br> y Cerámicas</h2>
                    </div>
                </a></li>
            <li><a href="/mosaico" onclick="mosaicos()">
                    <div id="link5">
                        <h2>Mosaicos, Refractarios<br> y Viguetas</h2>
                    </div>
                </a></li>
            <li><a href="javascript:void(0);" onclick="maquinas()">
                    <div id="link6">
                        <h2>Máquinas,<br> Equipamiento,<br> Seguridad y Accesorios</h2>
                    </div>
                </a></li>
        </ul>
    </nav>

</main>
<nav id="menusProd">
<div id="menuConstruccion" style="display: none;">
    <ul>
        <li><a href="/construccionCorte">Corte</a></li>
        <li><a href="/construccionPerforado">Perforado</a></li>
        <li><a href="/construccionDesbaste">Desbaste / Pulido</a></li>
        <li><a href="/construccionDemolicion">Demolición</a></li>
        <li><a href="/construccionAdhesivos">Adhesivos y Selladores</a></li>
    </ul>
</div>
<div id="menuMarmoleria" style="display: none;">
    <ul style=" justify-content:flex-start;">
        <li><a style="margin:0 85px;" href="/marmoleriaCorte">Corte</a></li>
        <li><a style="margin:0 85px;" href="/marmoleriaAdhesivos">Perforado</a></li>
    </ul>
</div>
<div id="menuDesbaste" style="display: none;">
    <ul>
        <li><a href="/desbastePlatosPulidores">Platos Pulidores</a></li>
        <li><a href="/desbasteRinconeras">Rinconeras</a></li>
        <li><a href="/desbasteFresasMuelas">Fresas y Muelas</a></li>
        <li><a href="/desbastePulido">Pulido de Mármol y/o Granito</a></li>
        <li><a href="/desbasteLustrado">Insumos para Lustrado</a></li>
    </ul>
</div>

<div id="menuMaquinas" style="display: none;">
<ul style=" justify-content:flex-end;">
        <li><a style="margin:0 85px;" href="/herramientas">Herramientas Eléctricas y con Motor a Explosión</a></li>
        <li><a style="margin:0 85px;" href="/seguridad">Seguridad y Protección Personal</a></li>
        
    </ul>
</div>
</nav>
@include('partials.suscription')
@include('partials.marcas')
@endsection