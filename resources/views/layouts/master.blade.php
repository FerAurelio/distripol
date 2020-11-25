<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('pageTitle')</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/app.css">
  <link  rel="stylesheet" href="/css/lightbox.css">
  <link id="pagestyle" rel="stylesheet" href="/css/style.css">
  
  <style type="text/css" id="gwd-lightbox-style">
    .gwd-lightbox {
      overflow: hidden;
    }
  </style>
  <style type="text/css" id="gwd-text-style">
    p {
      margin: 0px;
    }
    h1 {
      margin: 0px;
    }
    h2 {
      margin: 0px;
    }
    h3 {
      margin: 0px;
    }
  </style>
  <style type="text/css">
    html, body {
      width: 100%;
      height: 100%;
      margin: 0px;
    }
    .gwd-page-container {
      position: relative;
      width: 100%;
      height: 100%;
    }
    .gwd-page-content {
      transform: perspective(1400px) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
      transform-style: preserve-3d;
      position: absolute;
      background-color: transparent;
    }
    .gwd-page-wrapper {
      position: absolute;
      transform: translateZ(0px);
      background-color: rgb(255, 255, 255);
    }
    .gwd-page-size {
      width: 650px;
      height: 102px;
    }
    .gwd-div-1y8s {
      height: 110px;
      background-image: none;
      background-color: rgb(248, 232, 25);
    }
    .gwd-swipegallery-1q2q {
      position: absolute;
      width: 650px;
      height: 102px;
      left: 0px;
      top: 8px;
    }
    .gwd-div-18tr {
      height: 110px;
    }
    </style>
</head>

<body>

    @include('partials.navbar')
    @yield('content')
  
  @include('suscription')
@include('partials.marcas')
  @include('partials.footer')
</body>
</html>
