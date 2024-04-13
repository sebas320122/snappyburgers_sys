<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ingresar </title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="icon" type="image/x-icon" href="SnappyLogo.ico">
    <!-- Iconos -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
  <!--Recuadro login-->
    <div class="main-content">
        <div class="box">
            <div class="box-header">
                <!--Seccion del logo-->
                <div class="contenedor-logo">
                    <div class="marco-logo">
                        <img src="SnappyLogo.png" alt="cat" class="logo">
                    </div>
                    <div class="logo-titulo">Snappy Burgers</div>
                </div>
            </div>
            <!--Seccion del formulario-->
            <div class="box-content">
                <form action="{{ route('iniciar.sesion') }}" method="POST">
                    @csrf
                    <input class="dato" type="text"  placeholder="Correo" name="email">
                    <input class="dato segundo" type="password" placeholder="Contraseña" name="password">
                    <input class="boton" type="submit" value="Iniciar sesión">
                </form> 
            </div>
        </div>
    </div>

    <!--Seccion de alertas-->
    @if ($message = Session::get('error'))
        <div class="mensaje-alerta">
            <p>{{$message}}</p>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="mensaje-alerta">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
  
  
</body>


</html>