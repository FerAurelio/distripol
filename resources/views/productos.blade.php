@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
   
        
<section class="contenidoProds">

    <div class="centrarProductos">
       <div class="center">
          
       @foreach ($productos as $producto)       
               <article class="card bg-light m-3 " >
                      <div class="card-header">{{$producto->title}}</div>
           
                       <div class="card-body">
               <figure style="display:flex; justify-content: center; align-items:flex-end; flex-wrap:wrap" > 
               <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_1 )}}" style="max-width:120px" alt="{{$producto->title}}">
                @if ($producto->brand_id != NULL)
                <br>
                <img src= "data:image/jpeg;base64,{{base64_encode( $producto->brand->photo )}}" alt="{{$producto->brand->title}}" class="mt-1">
                @endif
               </figure>
               <h6>{{cortarPalabras($producto->characterist)}}</h6>
                   </div>
                    <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/{{$producto->detalle}}/{{$producto->id}}'" id="detalle">Detalle</button>
       <!--     <button class="btn btn-danger" id="cotizar">Cotizar</button></div>   -->
           
              </article>
          @endforeach


          @foreach ($productosC as $productoC)       
               <article class="card bg-light m-3 " >
                      <div class="card-header">{{$productoC->title}}</div>
           
                       <div class="card-body">
               <figure style="display:flex; justify-content: center; align-items:flex-end; flex-wrap:wrap" > 
               <img src=  "data:image/jpeg;base64,{{base64_encode( $productoC->image_1 )}}" style="max-width:120px" alt="{{$productoC->title}}">
                @if ($productoC->brand_id != NULL)
                <br>
                <img src= "data:image/jpeg;base64,{{base64_encode( $productoC->brand->photo )}}" alt="{{$productoC->brand->title}}" class="mt-1">
                @endif
               </figure>
               <h6>{{cortarPalabras($productoC->characterist)}}</h6>
                   </div>
                    <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/{{$productoC->detalle}}/{{$productoC->id}}'" id="detalle">Detalle</button>
            <!--     <button class="btn btn-danger" id="cotizar">Cotizar</button></div>   -->
           
              </article>
          @endforeach



          @foreach ($productosA as $productoA) 
      
            <article class="card bg-light m-3 " >
               <div class="card-header">{{$productoA->title}}</div>
           
                   <div class="card-body">
               <figure style="display:flex; justify-content: center; align-items:flex-end; flex-wrap:wrap" > 
               <img src=  "data:image/jpeg;base64,{{base64_encode( $productoA->image_1 )}}" style="max-width:120px" alt="{{$productoA->title}}">
                @if ($productoA->brand_id != NULL)
                <br>
                <img src= "data:image/jpeg;base64,{{base64_encode( $productoA->brand->photo )}}" alt="{{$productoA->brand->title}}" class="mt-1">
                @endif
               </figure>
               <h6>{{cortarPalabras($productoA->characterist)}}</h6>
                 </div>
                 <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/{{$productoA->detalle}}/{{$productoA->id}}'" id="detalle">Detalle</button>
               <!--     <button class="btn btn-danger" id="cotizar">Cotizar</button></div>   -->
           </article>
          @endforeach



          @foreach ($productosB as $productoB) 
      
              <article class="card bg-light m-3 " >
                  <div class="card-header">{{$productoB->title}}</div>
           
                  <div class="card-body">
                 <figure style="display:flex; justify-content: center; align-items:flex-end; flex-wrap:wrap" > 
                 <img src=  "data:image/jpeg;base64,{{base64_encode( $productoB->image_1 )}}" style="max-width:120px" alt="{{$productoB->title}}">
                  @if ($productoB->brand_id != NULL)
                  <br>
                  <img src= "data:image/jpeg;base64,{{base64_encode( $productoB->brand->photo )}}" alt="{{$productoB->brand->title}}" class="mt-1">
                  @endif
                 </figure>
                  <h6>{{cortarPalabras($productoB->characterist)}}</h6>
                 </div>
                  <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/{{$productoB->detalle}}/{{$productoB->id}}'" id="detalle">Detalle</button>
                 <!--     <button class="btn btn-danger" id="cotizar">Cotizar</button></div>   -->
              </article>
           @endforeach






        </div>
  </div>
</section>


</main>




@endsection