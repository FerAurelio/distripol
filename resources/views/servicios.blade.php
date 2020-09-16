@extends('layouts.master')
@section('pageTitle',"Servicios - Distripol Herramientas SRL")
@section('content')
<main>
    <aside class="asideLeftSer"></aside>
    <section class="sectionSer">
        <h1>SERVICIOS</h1>
        <div>
            <p class="i"><i class="fas fa-check-square"></i></p>
            <p>Chequeo y Control Técnico de Cortadoras, Aserradoras de Juntas, Perforadoras de Banco, etc.
                <br>
                En obra ó taller, sin cargo, como así también Asesoramiento y Presupuestos.</p>
        </div>
        
        <div>
            <p class="i"><i class="fas fa-tools"></i></p>
            <p>Servicio de Reparación de Herramientas Eléctricas, con Presupuesto previo.</p>
        </div>
        
        <div>
            <p class="i"><i class="fas fa-truck"></i></p>
            <p>Entregas Express en el día en Obra, Obrador ó Taller dentro de Capital y Conurbano.</p>
        </div>
        
        <div>
            <p class="i"><i class="fas fa-box-open"></i> </p>
            <p>Despachos dentro de las 24 horas a cualquier destino del Interior del País.
            </p>
        </div>
    </section>
    <aside class="asideRightSer"><img src="img/showroom2.jpg" alt="Nuestro Showroom"></aside>
</main>
@include('partials.suscription')
@include('partials.marcas')
@endsection