
<section class="sus">
   <div class="susDiv">

<button onclick="mostrarFormSus()" id="suscribirme">Suscríbase para recibir nuestras OFERTAS</button>

   </div>  
  
   <div class="bg"></div>
    <form class="formSuscrip" method="post" action="/">
    @csrf   
        <a class="close" title="Cerrar y seguir navegando" href="#">X</a>
        <h1 style="text-align: center;">¿Quiere Suscribirse 
        <br>
        a nuestras Ofertas Especiales?</h1>
        <br>
        <label>
          Nombre*                   
        </label>
        <br>
        <input class="form-control form-control-sm" type="text" name="name" required/><br>
        <label>
          E-mail*         
          </label>
          <br>
          <input class="form-control form-control-sm" type="email" name="email" required />
          <br>
        <div class="d-flex justify-content-center" ><button class="btn btn-success" type="submit">Enviar</button></div>
        
    </form>

</section>

