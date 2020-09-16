@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
<div>
    <main class="productos">
        <nav>
            <ul>
                <li><a href="javascript:void(0);" onclick="construccion()">
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
                            <h2>Mosaicos,<br> Refractarios<br> y Viguetas</h2>
                        </div>
                    </a></li>
                <li><a href="javascript:void(0);" onclick="maquinas()">
                        <div id="link6">
                            <h2>Máquinas,<br> Equipamiento,<br> Seguridad y <br>Accesorios</h2>
                        </div>
                    </a></li>
            </ul>
        </nav>
    </main>
    <nav id="menusProd">
        <div id="menuConstruccion" style="display: none; border-top:7px solid yellow">
            <ul>
                <li><a href="/construccionCorte">Corte</a></li>
                <li><a href="/construccionPerforado">Perforado</a></li>
                <li><a href="/construccionDesbaste">Desbaste / Pulido</a></li>
                <li><a href="/construccionDemolicion">Demolición</a></li>
                <li><a href="/construccionAdhesivos">Adhesivos y Selladores</a></li>
            </ul>
        </div>
        <div id="menuMarmoleria" style="display: none; border-top:7px solid yellowgreen">
            <ul style=" justify-content:flex-start;">
                <li><a style="margin:0 85px;" href="/marmoleriaCorte">Corte</a></li>
                <li><a style="margin:0 85px;" href="/marmoleriaAdhesivos">Perforado</a></li>
            </ul>
        </div>
        <div id="menuDesbaste" style="display: none; border-top:7px solid #ff931e">
            <ul>
                <li><a href="/desbastePlatosPulidores">Platos Pulidores</a></li>
                <li><a href="/desbasteRinconeras">Rinconeras</a></li>
                <li><a href="/desbasteFresasMuelas">Fresas y Muelas</a></li>
                <li><a href="/desbastePulido">Pulido de Mármol y/o Granito</a></li>
                <li><a href="/desbasteLustrado">Insumos para Lustrado</a></li>
            </ul>
        </div>

        <div id="menuMaquinas" style="display: none; border-top:7px solid #F41B7A;">
            <ul style=" justify-content:flex-end;">
                <li><a style="margin:0 85px;" href="/herramientas">Herramientas Eléctricas y con Motor a Explosión</a></li>
                <li><a style="margin:0 85px;" href="/seguridad">Seguridad y Protección Personal</a></li>

            </ul>
        </div>
    </nav>
</div>

<!--
menu responsive
-->
<div class="menu-collapse ">


    <div class="accordion" id="accordionExample">

        <div class="">
            <div class="fdoCon" id="btn-contruccion">
                <h2 class="mb-0">
                    <button class="btn-secundario  collapsed " type="button" data-toggle="collapse" 
                    data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Construcción, Obra Civil, Obra Vial, y Pisos Industriales
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="btn-contruccion" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li><a href="/construccionCorte">Corte</a></li>
                        <li><a href="/construccionPerforado">Perforado</a></li>
                        <li><a href="/construccionDesbaste">Desbaste / Pulido</a></li>
                        <li><a href="/construccionDemolicion">Demolición</a></li>
                        <li><a href="/construccionAdhesivos">Adhesivos y Selladores</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="">
            <div class="" id="btn-marmoleria">
                <h2 class="mb-0">
                    <button class="btn-secundario collapsed" type="button" 
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Marmolería y Piedras Industriales
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="btn-marmoleria" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li><a href="/construccionCorte">Corte</a></li>
                        <li><a href="/construccionPerforado">Perforado</a></li>

                    </ul>
                </div>
            </div>
        </div>


        <div class="">
            <div class="" id="btn-desbaste">
                <h2 class="mb-0">
                    <button class="btn-secundario  collapsed" type="button" 
                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Desbaste, Pulido y Lustrado
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="btn-desbaste" data-parent="#accordionExample">
                <div class="card-body">

                    <ul>
                        <li><a href="/construccionCorte">Corte</a></li>
                        <li><a href="/construccionPerforado">Perforado</a></li>
                        <li><a href="/construccionDesbaste">Desbaste / Pulido</a></li>
                        <li><a href="/construccionDemolicion">Demolición</a></li>
                        <li><a href="/construccionAdhesivos">Adhesivos y Selladores</a></li>
                    </ul>

                </div>
            </div>
        </div>


        <div class="">
            <div class="" id="btn-gress">
                <h2 class="mb-0">
                    <button class="btn-secundario collapsed" type="button" 
                    data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseFour">
                        Gress, Porcelanato y Cerámicas
                    </button>
                </h2>
            </div>
        </div>


        <div class="">
            <div class="" id="btn-mosaicos">
                <h2 class="mb-0">
                    <button class="btn-secundario collapsed" type="button" 
                    data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseFive">
                        Mosaicos, Refractarios y Viguetas
                    </button>
                </h2>
            </div>
        </div>


        <div class="">
            <div class="" id="btn-maquinas">
                <h2 class="mb-0">
                    <button class="btn-secundario collapsed" type="button" 
                    data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Máquinas, Equipamiento, Seguridad y Accesorios
                    </button>
                </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="btn-maquinas" data-parent="#accordionExample">
                <div class="card-body">

                    <ul>
                        <li><a href="/construccionCorte">Corte</a></li>
                        <li><a href="/construccionPerforado">Perforado</a></li>
                    </ul>

                </div>
            </div>
        </div>


    </div>























</div>


@include('partials.suscription')
@include('partials.marcas')
@endsection