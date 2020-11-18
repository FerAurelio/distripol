@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
<div>
    <main class="productos">
        <nav>
            <ul>
                <li><a href="javascript:void(0);" onclick="construccion()">
                        <div id="link1">
                            <h2>Construcción,<br> Obra Civil y Obra Vial
                        </div>
                    </a></li>
                <li><a href="javascript:void(0);" onclick="marmoleria()">
                        <div id="link2">
                            <h2>Marmolería y <br> Piedras Naturales</h2>
                        </div>
                    </a></li>
                <li><a href="javascript:void(0);" onclick="industriales()">
                        <div id="link3">
                            <h2>Pisos Industriales</h2>
                        </div>
                    </a></li>
                <li><a href="/gress/corte" onclick="gress()">
                        <div id="link4">
                            <h2>Gress, Porcelanato<br> y Cerámicas</h2>
                        </div>
                    </a></li>
                <li><a href="/mosaicos/corte" onclick="mosaicos()">
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
                <li><a href="/construccion/corte">Corte</a></li>
                <li><a href="/construccion/perforado">Perforado</a></li>
                <li><a href="/construccion/demolicion">Demolición</a></li>               
            </ul>
        </div>
        <div id="menuMarmoleria" style="display: none; border-top:7px solid yellowgreen">
            <ul >
              <li><a  href="/marmoleria/corte">Corte</a></li>
              <li><a href="/marmoleria/perforado">Perforado</a></li>
              <li><a href="/marmoleria/desbaste">Desbaste / Pulido / Lustrado</a></li>
              <li><a href="/marmoleria/adhesivos">Adhesivos y Selladores</a></li>
              <li><a href="/marmoleria/equipos">Accesorios y Equipos</a></li>
            </ul>
        </div>
        <div id="menuIndustriales" style="display: none; border-top:7px solid #ff931e">
            <ul>
            <li><a href="/pisosIndustriales/corte">Corte</a></li>
            <li><a href="/pisosIndustriales/perforado">Perforado</a></li>
            <li><a href="/pisosIndustriales/pulido">Pulido</a></li>
            <li><a href="/pisosIndustriales/adhesivos">Adhesivos y Selladores</a></li>
            </ul>
        </div>

        <div id="menuMaquinas" style="display: none; border-top:7px solid #F41B7A;">
            <ul style=" justify-content:flex-end;">
                <li><a style="margin:0 85px;" href="maquinas/herramientas">Herramientas Eléctricas y con Motor a Explosión</a></li>
                <li><a style="margin:0 85px;" href="maquinas/seguridad">Seguridad y Protección Personal</a></li>

            </ul>
        </div>
    </nav>
</div>

<!--
menu responsive
-->
<div class="menu-collapse ">


    <div class="accordion" id="accordionExample">


        <div class="fdoCon" id="btn-contruccion">
            <a class="btn-secundario  collapsed " href="#collapseOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <div><img src="/img/botonera-ppal/btn_fdo_const-ch.png" alt=" Construcción, Obra Civil, Obra Vial, y Pisos Industriales"></div>
                Construcción, Obra Civil y Obra Vial
            </a>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="btn-contruccion" data-parent="#accordionExample">
            <div class="card card-body fdoMenuColl">
                <ul>
                    <li><a class="MenColl" href="/construccion/corte">Corte</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/construccion/perforado">Perforado</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/construccion/demolicion">Demolición</a></li>
                   
                </ul>
            </div>
        </div>






        <div class="fdoCon" id="btn-marmoleria">
            <a class="btn-secundario  collapsed " href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div><img src="/img/botonera-ppal/btn_fdo_marm-ch.png" alt="Marmolería y Piedras Industriales"></div>
                Marmolería y Piedras Industriales
            </a>

        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="btn-marmoleria" data-parent="#accordionExample">
            <div class="card card-body fdoMenuColl">
                <ul>
                    <li><a class="MenColl" href="/marmoleria/corte">Corte</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/marmoleria/perforado">Perforado</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/marmoleria/desbaste">Desbaste / Pulido / Lustrado</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/marmoleria/adhesivos">Adhesivos y Selladores</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/marmoleria/equipos">Accesorios y Equipos</a></li>
                </ul>
            </div>
        </div>




        <div class="fdoCon" id="btn-industriales">
            <a class="btn-secundario  collapsed " href="#collapseThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div><img src="/img/botonera-ppal/btn_fdo_des-ch.png" alt="Pisos Industriales"></div>
                Pisos Industriales    
            </a>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="btn-industriales" data-parent="#accordionExample">
            <div class="card card-body fdoMenuColl">
                <ul>
                    <li><a class="MenColl" href="/industriales/corte">Corte</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/industriales/perforado">Perforado</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/industriales/pulido">Pulido</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/industriales/adhesivos">Adhesivos y Selladores</a></li>
                </ul>
            </div>
        </div>







        <div class="fdoCon" id="btn-gress">
            <a class="btn-secundario collapsed" href="/gress/corte">
                <div><img src="/img/botonera-ppal/btn_fdo_gress-ch.png" alt="Gress, Porcelanato y Cerámicas "></div>
                Gress, Porcelanato y Cerámicas
            </a>

        </div>




        <div class="fdoCon" id="btn-mosaicos">
            <a class="btn-secundario collapsed" href="/mosaicos/corte">
                <div><img src="/img/botonera-ppal/btn_fdo_mos-ch.png" alt=" Mosaicos, Refractarios y Viguetas"></div>
                Mosaicos, Refractarios y Viguetas
            </a>

        </div>




        <div class="fdoCon" id="btn-maquinas">
            <a class="btn-secundario  collapsed " href="#collapseSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <div><img src="/img/botonera-ppal/btn_fdo_herr-ch.png" alt=" Máquinas, Equipamiento, Seguridad y Accesorios"></div>
                Máquinas, Equipamiento, Seguridad y Accesorios
            </a>

        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="btn-maquinas" data-parent="#accordionExample">
            <div class="card card-body fdoMenuColl">

                <ul>
                    <li><a class="MenColl" href="/maquinas/herramientas">Herramientas Eléctricas y con Motor a Explosión</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="MenColl" href="/maquinas/seguridad">Seguridad y Protección Personal</a></li>
                </ul>

            </div>
        </div>
    </div>


</div>























</div>



@endsection