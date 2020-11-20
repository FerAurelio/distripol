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


       <div class="col-md-12 card mb-3">       
  <div class="row no-gutters">
    <div class="col-md-3">
    <div class="card-header">{{$producto->title}}</div>
    <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_2 )}}" class="card-img" style="max-width:100%" alt="{{$producto->title}}">
    </div>
    <div class="col-md-9">
    <div class="row no-gutters">
    <div class="col-md-1">
    <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->quality->image_1)}}" class="card-img  m-1 " style="width:85%" alt="{{$producto->title}}">
    <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_1)}}" class="card-img  m-1 " style="width:85%" alt="{{$producto->title}}">
    <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_3 )}}" class="card-img  m-1" style="max-width:100%" alt="{{$producto->title}}">    
</div>
      <div class="card-body">
        <h5 class="card-title">Aplicación</h5> 
        <div class="tProd">   {{$producto->aplication->description}}    </div>
        <div class="tProd">{{$producto->aplication->item1}}</div>
        <div class="tProd">{{$producto->aplication->item2}}</div>
        <div class="tProd">{{$producto->aplication->item3}}</div>
        <div class="tProd">{{$producto->aplication->item4}}</div>
        <br>
        <h5 class="card-title">Características</h5> 
        <div class="tProd">   {{$producto->characterist}}    </div>
        @if ($producto->brand_id != NULL)
                 <br>
                 <img src= "data:image/jpeg;base64,{{base64_encode( $producto->brand->photo )}}" alt="{{$producto->brand->title}}" class="mt-1">
                 @endif
                 <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/{{$producto->detalle}}/{{$producto->id}}'" id="detalle">Detalle</button>
                <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
            
      </div>
    </div>
  </div>
</div>
      
       
           
            
               
           
           
      
      
       
        @endforeach


        @foreach ($productosC as $productoC) 
      
      <article class="card bg-light m-3 " >
           <div class="card-header">{{$productoC->title}}</div>
           
           <div class="card-body">
               <figure style="display:flex; justify-content: center; align-items:flex-end; flex-wrap:wrap" > 
               <img src=  "data:image/jpeg;base64,{{base64_encode( $productoC->image_1 )}}" style="max-width:100%" alt="{{$productoC->title}}">
                @if ($productoC->brand_id != NULL)
                <br>
                <img src= "data:image/jpeg;base64,{{base64_encode( $productoC->brand->photo )}}" alt="{{$productoC->brand->title}}" class="mt-1">
                @endif
               </figure>
               <h6>{{cortarPalabras($productoC->characterist)}}</h6>
           </div>
           <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/productos/detalle/{{$productoC->id}}'" id="detalle">Detalle</button>
               <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
           
       </article>
     
      
       @endforeach



       @foreach ($productosA as $productoA) 
      
      <article class="card bg-light m-3 " >
           <div class="card-header">{{$productoA->title}}</div>
           
           <div class="card-body">
               <figure style="display:flex; justify-content: center; align-items:flex-end; flex-wrap:wrap" > 
               <img src=  "data:image/jpeg;base64,{{base64_encode( $productoA->image_1 )}}" style="max-width:100%" alt="{{$productoA->title}}">
                @if ($productoA->brand_id != NULL)
                <br>
                <img src= "data:image/jpeg;base64,{{base64_encode( $productoA->brand->photo )}}" alt="{{$productoA->brand->title}}" class="mt-1">
                @endif
               </figure>
               <h6>{{cortarPalabras($productoA->characterist)}}</h6>
           </div>
           <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/productos/detalle/{{$productoA->id}}'" id="detalle">Detalle</button>
               <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
           
       </article>
     
      
       @endforeach



       @foreach ($productosB as $productoB) 
      
      <article class="card bg-light m-3 " >
           <div class="card-header">{{$productoB->title}}</div>
           
           <div class="card-body">
               <figure style="display:flex; justify-content: center; align-items:flex-end; flex-wrap:wrap" > 
               <img src=  "data:image/jpeg;base64,{{base64_encode( $productoB->image_1 )}}" style="max-width:100%" alt="{{$productoB->title}}">
                @if ($productoB->brand_id != NULL)
                <br>
                <img src= "data:image/jpeg;base64,{{base64_encode( $productoB->brand->photo )}}" alt="{{$productoB->brand->title}}" class="mt-1">
                @endif
               </figure>
               <h6>{{cortarPalabras($productoB->characterist)}}</h6>
           </div>
           <div class="d-flex justify-content-md-around m-1"><button class="btn btn-success" onclick= "location.href = '/productos/detalle/{{$productoB->id}}'" id="detalle">Detalle</button>
               <button class="btn btn-danger" id="cotizar">Cotizar</button></div>
           
       </article>
     
      
       @endforeach






        </div>
        </div>
    </section>


</main>




@endsection