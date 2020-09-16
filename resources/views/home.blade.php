@extends('layouts.master')
@section('pageTitle',"Home - Distripol Herramientas SRL")
@section('content')
<main>
  <aside class="asideLeft"><img src="img/fachada.png" alt="Fachada de la Empresa"></aside>
  <section class="sectionEmp">
    <h1>LA EMPRESA</h1>
    <p><em><b> DISTRIPOL HERRAMIENTAS SRL</b> </em> es una Pyme argentina que comercializa herramientas e insumos de alta calidad.</p>

    <p>Nuestras marcas están en la vanguardia tecnológica, pudiendo ofrecer una amplia gama de herramientas e insumos sobresalientes, que redundan en menores costos y mayor calidad.</p>
    <p class="pEm"><em>Estar a la altura de lo que se espera de nosotros -ha sido, es y será- nuestra razón de ser. Confianza y servicio, pruébenos y estableceremos una larga y mutuamente fructífera relación comercial.</em> </p>
    Lo esperamos. </p>

  </section>
  <aside class="asideRight"><img src="img/showroom1.jpg" alt="Nuestro Showroom"></aside>
</main>
@include('partials.suscription')
@include('partials.marcas')
@endsection