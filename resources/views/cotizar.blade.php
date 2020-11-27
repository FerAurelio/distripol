@extends('layouts.master')
@section('pageTitle',"Cotizar")
@section('content')
<main>
<aside class="asideLeft"><img src="img/fachada.png" alt="Fachada de la Empresa"></aside>
<section class="sectionCon">
        <h1>COTIZAR</h1>
        <div>
            <form id="contact-form" name="contact-form" method="POST" action="/cotizarenviado">
            @csrf
                <div class="row justify-content-center">

                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Nombre y Apellido*</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Escriba su nombre" required>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Empresa</label>
                            <input type="empresa" class="form-control" id="empresa" name="empresa" placeholder="Escriba el nombre de su empresa">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Domicilio*</label>
                            <input type="address" class="form-control" id="address" name="address" placeholder="Escriba su domicilio" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="state">Provincia*</label>
                            <input type="state" class="form-control" id="state" name="state" placeholder="Escriba su provincia" required>
                       
                          
                       </div>
                       
                        <div class="form-group">
                            <label>Localidad*</label>
                            <input type="city" class="form-control" id="city" name="city" placeholder="Escriba su localidad" required>
                       
                        </div>



                    
                        <div class="form-group">
                            <label>Teléfono / Celular*</label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Escriba su número telefónico" required>
                        
                    </div>
                    
                   
                   
                        <div class="form-group">
                            <label>E-mail*</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Escriba su e-mail" required>
                        </div>
                   
                    
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Consulta*</label>
                            <textarea class="form-control" id="consulta" name="consulta" placeholder="Escriba su consulta..." rows="3" required></textarea>
                        </div>
                   
                   
                        <div class="d-flex row justify-content-center">
                            <button data-sitekey="reCAPTCHA_site_key" 
        data-callback='onSubmit' 
        data-action='submit'type="submit" class="btn btn-success m-4">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
  <aside class="asideRight"><img src="img/showroom1.jpg" alt="Nuestro Showroom"></aside>
</main>
</main>
@endsection