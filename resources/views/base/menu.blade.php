<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title><!--espacio de titulo-->
    <link rel="stylesheet" href="/css/base/menu.css">
    @stack('styles')<!--agrupacion de estilos-->
    <link rel="icon" type="image/x-icon" href="{{asset('SnappyLogo.ico')}}">
    <!-- Iconos -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    @stack('head-elements')<!--agrupacion de scripts-->
</head>
<body>
  <!--Menu-->
  <div class="menu">
    <div class="menu-logo">
        <div class="marco-logo">
            <img src="{{asset('SnappyLogo.png')}}" alt="cat" class="logo">
        </div>
        <div class="logo-titulo">Snappy Burgers</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="menu-opciones">
      <li>
        <a href="{{url('cobrar')}}">
          <i class='bx bx-calculator'></i>
          <span class="opcion_texto">Cobrar</span>
        </a>
         <span class="tooltip">Cobrar</span>
      </li>
      <li>
        <a href="{{url('ordenes')}}">
          <i class='bx bxs-notepad'></i>
          <span class="opcion_texto">Ordenes</span>
        </a>
         <span class="tooltip">Ordenes</span>
      </li>
      <li>
        <a href="{{url('disponibilidad')}}">
          <i class='bx bxs-box'></i>
          <span class="opcion_texto">Disponibilidad</span>
        </a>
         <span class="tooltip">Disponibilidad</span>
      </li>
      <li>
        <a href="{{url('proveedores')}}">
          <i class='bx bxs-truck'></i>
          <span class="opcion_texto">Proveedores</span>
        </a>
         <span class="tooltip">Proveedores</span>
      </li>
      <li>
        <a href="{{url('items')}}">
          <i class='bx bxs-dish'></i>
          <span class="opcion_texto">Items</span>
        </a>
         <span class="tooltip">Items</span>
      </li>
      <li>
      <li>
        <a href="#">
          <i class='bx bxs-exit'></i>
          <span class="opcion_texto">Salir</span>
        </a>
         <span class="tooltip">Usuario: Sebastian </span>
      </li>

    </ul>
  </div>
  <!--Contenido-->
  <section class="contenido">
    @yield('content') <!--espacio contenido-->
  </section>

  <!--Scripts de body-->  
  <script src="/js/menu.js"></script>
  @stack('scripts') <!--agrupacion de scripts-->

</body>


</html>