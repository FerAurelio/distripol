@extends('layouts.master')
@section('pageTitle',"Pisos Industriales")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
<aside class="menuLeft">
<div class="p-2" style="border-top: 7px solid #ff931e;background-color:#006837;color:white" >
        
            
        Pisos Industriales
                
            </div>
        <nav>
            <ul ><b>CORTE</b>
           
       
            @foreach($subsectionC as $subsectionCo)
                      
                <li>
                    <a href="{{$subsectionCo->links}}">
                        <div>
                            {{$subsectionCo->title}}</div>
                    </a>
                </li>
            @endforeach

  </ul>
  <ul ><b>PERFORADO</b>
           
       
                      @foreach($subsectionP as $subsectionPe)
                      
                <li>
                    <a href="{{$subsectionPe->links}}">
                        <div>
                            {{$subsectionPe->title}}</div>
                    </a>
                </li>
              @endforeach

  </ul>
  <ul ><b>PULIDO</b>
           
       
                      @foreach($subsectionD as $subsectionDe)
                      
                <li>
                    <a href="{{$subsectionDe->links}}">
                        <div>
                            {{$subsectionDe->title}}</div>
                    </a>
                </li>
              @endforeach

  </ul>
  <ul ><b>ADHESIVOS</b>
           
       
           @foreach($subsectionAS as $subsectionAse)
           
     <li>
         <a href="{{$subsectionAse->links}}">
             <div>
                 {{$subsectionAse->title}}</div>
         </a>
     </li>
   @endforeach

</ul>

        </nav>

    </aside>

    
    
    
    <section class="contenidoProds">
   
    <div class="centrarProductos">
       <div class="center">
      
       
       
      
       <div class="col-md-12  mb-3">       
                  <div class="row no-gutters border border-#f1f1f1 rounded-sm">
                                  <div class="col-md-3">
                                     <div class="d-flex justify-content-center p-3" style="background-color: #f1f1f1">{{$producto->title}}</div>
                                        @if ($producto->image_1 != NULL)
                                        
                                                  <div class="d-flex justify-content-center align-items-end p-2" style="background-color: #f9f9f9">
                                                  <img  src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_1 )}}" style="width: 120px;" class="card-img "  alt="{{$producto->title}}">
                                              @endif                                            
                                            
                                                      @if ($producto->brand_id != NULL)                                                         
                                                            <img class="ml-2" src= "data:image/jpeg;base64,{{base64_encode( $producto->brand->photo )}}" alt="{{$producto->brand->title}}"  >
                                                       @endif
                                                   </div>                                       
                                            @if ($producto->power_id != NULL)<div class="tProd text-sm-center mt-1">{{$producto->power->description}}</div> @endif
                                      </div>

                                       <div class="col-md-9 ">
                                           <div class="row no-gutters">
                                            <div class="col-md-2 ">
                                               <div class="d-flex flex-column justify-content-center align-items-center flex-wrap"  style="flex-direction: column">
                                           
                                               @if ($producto->quality_id != NULL)
                                                         <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->quality->image_1)}}" style="width: 80%;" class="card-img  " alt="{{$producto->title}}">
                                                       @endif
                                           
                                           
                                           
                                               <!--          <div class="d-flex justify-content-center p-2">  -->
                                                  @if ($producto->image_2 != NULL)
                                                  @if ($producto->image_3 != NULL) <a href="data:image/jpeg;base64,{{base64_encode( $producto->image_3 )}}" data-lightbox="image2" data-title="{{$producto->title}}" data-lightbox="image" data-title="{{$producto->title}}">@endif
                                                 <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_2)}}" class="card-img  m-1 img4" style="width:90%" alt="{{$producto->title}}"></a>
                                                 <p style="font-size:0.7em;">Click para Ampliar</p>
                                                 
                                                 @endif
                                             <!--      @if ($producto->image_3 != NULL)
                                                   <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_3 )}}" class="card-img  m-1" style="max-height:20%; width:44%" alt="{{$producto->title}}">    
                                                  @endif
                                             </div>   -->
                                             @if ($producto->image_4 != NULL) <a href="data:image/jpeg;base64,{{base64_encode( $producto->image_4 )}}" data-lightbox="image2" data-title="{{$producto->title}}"></a>@endif
                                             @if ($producto->image_5 != NULL) <a href="data:image/jpeg;base64,{{base64_encode( $producto->image_5 )}}" data-lightbox="image2" data-title="{{$producto->title}}"></a>@endif
                                             @if ($producto->video != NULL)   <a href="data:image/jpeg;base64,{{base64_encode( $producto->video )}}" data-lightbox="image2" data-title="{{$producto->title}}"></a>@endif
                                             
                                                   
                                                  
                                               </div>
                                            </div> 

                                            <div class="col-md-5  ml-3 mr-4 " >
                                                
                                               @if ($producto->aplication_id != NULL)
                                               <div style="min-height: 180px;"> <h5 class="card-title pl-2" style="background-color: #f1f1f1">Aplicación</h5> 
                                                 <div class="tProd pl-3">{{$producto->aplication->description}}    
                                                 </div>
                                                 @if ($producto->aplication->item1 != NULL)<div class="tProd pl-3">{{$producto->aplication->item1}}</div> @endif
                                                 @if ($producto->aplication->item2 != NULL)<div class="tProd pl-3">{{$producto->aplication->item2}}</div> @endif
                                                 @if ($producto->aplication->item3 != NULL)<div class="tProd pl-3">{{$producto->aplication->item3}}</div> @endif
                                                 @if ($producto->aplication->item4 != NULL)<div class="tProd pl-3">{{$producto->aplication->item4}}</div> @endif
                                                 </div> 
                                                @endif
                                              @if ($producto->characterist != NULL)
                                              <div >
                                                   <h5 class="card-title pl-2" style="background-color: #f1f1f1 ">Características</h5> 
                                                 <div class="tProd pl-3">   {{$producto->characterist}}   
                                                   </div >
                                                   <br><br><br>
                                              </div>
                                               @endif
                                           </div>   
                                                                  
                                           <div class="col-md-4">
                                               
                                              @if ($producto->segment_id != NULL) 
                                              <div style="min-height: 180px;">
                                                 <h5 class="card-title pl-2" style="background-color: #f1f1f1">Segmentos</h5> 
                                                   @if ($producto->segment->cantidad != NULL)<div class="tProd pl-3">{{$producto->segment->cantidad}}</div> @endif
                                                   @if ($producto->segment->altura != NULL)<div class="tProd pl-3">{{$producto->segment->altura}}</div> @endif
                                                   @if ($producto->segment->espesor != NULL)<div class="tProd pl-3">{{$producto->segment->espesor}}</div> @endif
                                                   <br>
                                                   @if ($producto->segment->cantidad_2 != NULL)<div class="tProd pl-3">{{$producto->segment->cantidad_2}}</div> @endif
                                                   @if ($producto->segment->altura_2 != NULL)<div class="tProd pl-3">{{$producto->segment->altura_2}}</div> @endif
                                                   @if ($producto->segment->espesor_2 != NULL)<div class="tProd pl-3">{{$producto->segment->espesor_2}}</div> @endif
                                                   <br>
                                                   @if ($producto->segment->cantidad_3 != NULL)<div class="tProd pl-3">{{$producto->segment->cantidad_3}}</div> @endif
                                                   @if ($producto->segment->altura_3 != NULL)<div class="tProd pl-3">{{$producto->segment->altura_3}}</div> @endif
                                                   @if ($producto->segment->espesor_3 != NULL)<div class="tProd pl-3">{{$producto->segment->espesor_3}}</div> @endif
                                               
                                                   </div>
                                               @endif
                                              
                                               @if ($producto->diameters != NULL)  
                                               <div >
                                               <h5 class="card-title pl-2" style="background-color: #f1f1f1">Medidas</h5> 
                                                   <div class="tProd pl-3">{{$producto->diameters}}
                                                   <br><br><br>
                                                   </div> 
                                                 @endif
                                                 
                                               </div>
                                           </div>
                                      </div>


                  



                                       
                                     <div class="d-flex justify-content-md-around m-1">
                                     @if ($producto->mlLink != NULL)  <button class="btn btn-warning font-weight-bold" style="color:darkblue" onclick= "window.open('{{$producto->mlLink}}','_blank') " id="detalle"> Comprar en <img src="../img/logo-ML.png" style="width: 100px; margin-left:10px" alt="Comprar en Mercado Libre"></button>
                                     @else 
                              <!--     <button class="btn btn-danger" id="cotizar">Cotizar</button>    -->
                                     @endif
                                     <button class="btn btn-success " onClick="history.go(-1);" id="volver">Volver</button>
                                     </div> 
                                   </div>
                             </div>
                         </div>
                     </div>
                 </div>
              </div>

              <!-- -->
                   
       
        
        </div>
        </div>
    </section>


</main>




@endsection