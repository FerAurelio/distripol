<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('pageTitle')</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/app.css">
  <link id="pagestyle" rel="stylesheet" href="/css/style.css">


</head>

<body>

    @include('partials.navbar')
    @yield('content')
  
  @include('suscription')
@include('partials.marcas')
  @include('partials.footer')
</body>
</html>
