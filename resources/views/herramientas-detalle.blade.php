@extends('layouts.master')
@section('pageTitle',"Máquinas, Equipamiento, Seguridad y Accesorios")
@section('content')
@include('partials.botonera')
@include('partials.cortarP')
<main class="containerP">
<aside class="menuLeft">
<div class="p-2" style="border-top: 7px solid #ed1e79;background-color:#006837;color:white" >
        
            
        Máquinas, Equipamiento, Seguridad y Accesorios
                
            </div>
            <nav class="displayMenu">
            <ul ><b>Máquinas y Equipamiento</b>
           
       
            @foreach($subsectionC as $subsectionCo)
                      
                <li>
                    <a href="{{$subsectionCo->links}}">
                        <div>
                            {{$subsectionCo->title}}</div>
                    </a>
                </li>
            @endforeach


            <ul ><b>Seguridad y Accesorios</b>
           
       
            @foreach($subsectionS as $subsectionSe)
                      
                <li>
                    <a href="{{$subsectionSe->links}}">
                        <div>
                            {{$subsectionSe->title}}</div>
                    </a>
                </li>
            @endforeach


  </ul>
 

        </nav>

    </aside>

    
    
    
    <section class="contenidoProds">
   
    <div class="centrarProductos">
    <br>
    @foreach ($subsections as $subsection)
      
      • {{$subsection->title}}
     
      @endforeach
      <br><br>
       <div class="center">
      
       
       
      
       <div class="col-md-12  mb-3">       
                  <div class="row no-gutters border border-#f1f1f1 rounded-sm">
                                  <div class="col-md-3">
                                     <div class="d-flex justify-content-center p-3" style="background-color: #f1f1f1">{{$producto->title}}</div>
                                        @if ($producto->image_1 != NULL)
                                        
                                                  <div class="d-flex justify-content-center align-items-end p-2" style="background-color: #f9f9f9">
                                                  <img  src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_1 )}}" style="width: 100%" class="card-img "  alt="{{$producto->title}}">
                                              @endif 
                                                   </div> 
                                                   <div class="d-flex justify-content-center align-items-end p-2" style="background-color: #f9f9f9">
                                                   @if ($producto->brand_id != NULL)                                                         
                                                            <img class="ml-2" src= "data:image/jpeg;base64,{{base64_encode( $producto->brand->photo )}}" alt="{{$producto->brand->title}}"  >
                                                       @endif
                                                   </div>
                                      </div>

                                       <div class="col-md-9 ">
                                           <div class="row no-gutters">
                                            <div class="col-md-1 ">
                                             <!--  <div class="d-flex flex-column justify-content-center align-items-center flex-wrap"  style="flex-direction: column">
                                           
                                               
                                           
                                           
                                           
                                                      <div class="d-flex justify-content-center p-2">  -->
                                                  @if ($producto->image_2 != NULL)
                                                  @if ($producto->image_3 != NULL) <a href="data:image/jpeg;base64,{{base64_encode( $producto->image_3 )}}" data-lightbox="image2" data-title="{{$producto->title}}" data-lightbox="image" data-title="{{$producto->title}}">@endif
                                                 <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_2)}}" class="card-img  m-1 img4" style="width:90%" alt="{{$producto->title}}"></a>
                                                   <p style="font-size:0.7em;">Click para Ampliar</p>
                                                 
                                                 @endif
                                             <!--      @if ($producto->image_3 != NULL)
                                                   <img src=  "data:image/jpeg;base64,{{base64_encode( $producto->image_3 )}}" class="card-img  m-1" style="max-height:20%; width:44%" alt="{{$producto->title}}">    
                                                  @endif
                                             </div>  
                                             @if ($producto->image_4 != NULL) <a href="data:image/jpeg;base64,{{base64_encode( $producto->image_4 )}}" data-lightbox="image2" data-title="{{$producto->title}}"></a>@endif
                                             @if ($producto->image_5 != NULL) <a href="data:image/jpeg;base64,{{base64_encode( $producto->image_5 )}}" data-lightbox="image2" data-title="{{$producto->title}}"></a>@endif
                                             @if ($producto->video != NULL)   <a href="data:image/jpeg;base64,{{base64_encode( $producto->video )}}" data-lightbox="image2" data-title="{{$producto->title}}"></a>@endif
                                             
                                                   
                                                  
                                               </div>-->
                                            </div>  

                                            <div class="col-md-8 ">
                                                
                                               
                                              @if ($producto->characterist != NULL)
                                              <div >
                                                   <h5 class="card-title pl-2" style="background-color: #f1f1f1 ">Características</h5> 
                                                 <div class="tProd pl-3">   {{$producto->characterist}}   
                                                   </div >
                                                   <br><br><br>
                                              </div>
                                               @endif
                                              
                                                                             
                                             
                                              
                                               @if ($producto->diameters != NULL)  
                                               <div >
                                               <h5 class="card-title pl-2" style="background-color: #f1f1f1">Medidas</h5> 
                                                   <div class="tProd pl-3">{{$producto->diameters}}
                                                  
                                                   </div> 
                                                   </div>
                                                 @endif
                                                 </div>  
                                               
                                           </div>
                                           <br><br><br>


                  

                                           </div></div>

                                       
                                     <div class="d-flex justify-content-md-around m-1">
                                     @if ($producto->mlLink != NULL)  <button class="btn btn-warning font-weight-bold" style="color:darkblue" onclick= "window.open('{{$producto->mlLink}}','_blank') " id="detalle"> Comprar en <img src="../img/logo-ML.png" style="width: 100px; margin-left:10px" alt="Comprar en Mercado Libre"></button>
                                     @else 
                             <!--   <button class="btn btn-danger" id="cotizar">Cotizar</button> -->
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