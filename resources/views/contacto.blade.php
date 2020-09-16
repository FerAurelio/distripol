@extends('layouts.master')
@section('pageTitle',"Contacto")
@section('content')
<main class="mainCon">
    <aside class="asideLeftCon">
        <div class="divLeft">
        <div class="leftCon">  Si usted quiere visitar nuestro showroom, conserte telefonicamente una entrevista
para ser asesorado correctamente:
</div>
<div class="leftCon">
**(54) 11 4567-1026 <br>(líneas rotativas) distripol@distripol.com.ar</div>
</div>
    </aside>
    <section class="sectionCon">
        <h1>CONTACTO</h1>
        <div>
            <form>
                <div class="row justify-content-center">

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Nombre*</label>
                            <input type="name" class="form-control" id="name" placeholder="Escriba su nombre" required>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Teléfono*</label>
                            <input type="phone" class="form-control" id="phone" placeholder="Escriba su número telefónico" required>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Empresa</label>
                            <input type="empresa" class="form-control" id="empresa" placeholder="Escriba el nombre de su empresa">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>E-mail*</label>
                            <input type="email" class="form-control" id="email" placeholder="Escriba su e-mail" required>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Consulta*</label>
                            <textarea class="form-control" id="consulta" placeholder="Escriba su consulta..." rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex row justify-content-center">
                            <button type="submit" class="btn btn-success m-4">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <aside class="asideRightCon"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6566.85409707781!2d-58.484555!3d-34.618647!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc9c524dd85a3%3A0x18034f0f5eac050d!2sDISTRIPOL%20HERRAMIENTAS%20SRL!5e0!3m2!1ses!2sar!4v1599578719057!5m2!1ses!2sar" width="250" height="300" frameborder="0" style="border:0; margin:15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></aside>
</main>
@include('partials.suscription')
@include('partials.marcas')
@endsection