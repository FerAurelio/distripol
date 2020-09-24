<?php
$navAdmin = [
  "Cargar Productos" => "productAdminForm",
];
$navAccess=[
  "Inicio" => "/",
  "Empresa" => "/home",
  "Productos" => "/productos",
  "Cotizar" => "/cotizar",
  "Servicios" => "/servicios",
  "Contacto" => "/contacto",
];
$secProduct=[
  "Construcción, Obra Civil y Obra Vial" => "/construccion/corte",
  "Marmolería y Piedras Naturales" => "/marmoleria/corte",
  "Pisos Industriales" => "/industriales/corte",
  "Gress, Porcelanato y Cerámicas" => "/gress",
  "Mosaicos, Refractarios y Viguetas" => "/mosaicos",
  "Máquinas, Equipamientos, Seguridad y Accesorios" => "/maquinas/herramientas",
];

?>
<header> <!-- Encabezadp -->
<div class="navRight" > 
  <nav class="main-nav" >
     

   @guest  

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand" href="#"><img src="img/logo-distripol-herramientas.png" alt="Distripol Herramientas" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
      
          @foreach ($navAccess as $linkAcc => $links)
            @if ($linkAcc == "Productos")
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="/productos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$linkAcc}}
                </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 @foreach ($secProduct as $linkProd => $prod)
                  @if ($linkProd == "Máquinas, Equipamientos, Seguridad y Accesorios")
                    <a class="dropdown-item" href="{{$prod}}">{{$linkProd}}</a>
                    @else
                      <a class="dropdown-item" href="{{$prod}}">{{$linkProd}}</a>
                      <div class="dropdown-divider"></div>
                    @endif
                  @endforeach         
               </div>
             </li>
            @else
             <li class="nav-item active navLink"><a class="nav-link" href="{{$links}}"> {{$linkAcc}}
                       <span class="sr-only">(current)</span></a>
            </li>

            @endif
          @endforeach     
   
       </ul>

       <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="¿Qué está buscando?" aria-label="Search">
         <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
       </form>
     </div>
   </nav>

    @endguest


  </nav>
  </div>  
</header>
<div class="textoLogo" ><img class="imgLogo" src="img/Herramientas-e-Insumos-para-Empresas-Constructoras.png" alt="Herramientas e Insumos para Marmolerías y Empresas Constructoras">
  <div class="textML"> <a href="https://listado.mercadolibre.com.ar/_CustId_228264258">Visite Nuestro E-Shop <img src="img/logo-ML.png" alt="E-shop Mercado Libre"></a></div>
</div>
