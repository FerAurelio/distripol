@extends('layouts.master')
@section('pageTitle',"Productos")
@section('content')
@include('partials.botonera')
<main class="containerP">
    <aside class="menuLeft">
        <nav>
            <ul>
                <li>
                    <a href="">
                        <div>
                            corte</div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div>
                            corte</div>
                    </a>
                </li>
            </ul>
        </nav>

    </aside>
    

  
    {{$producto->title}}: <br>
        
        Rating: {{$producto->title}};
    
          		
        <img src="{{ $producto->image_1 }}" width="100"><br><br>
        
</main>



@include('partials.suscription')
@include('partials.marcas')
@endsection