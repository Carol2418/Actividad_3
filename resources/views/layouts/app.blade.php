<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Aplicación Sena</title>
</head>
<body>
<br>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light "style="background-color: #f44611;" >
    <div class="container-fluid">
        <a class="navbar-brand" style="color: #f7fafc; padding-left: 100px" href="{{route('apprentice.index')}}"><b>Aprendices</b></a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="navbar-brand" aria-current="page" style="color: #f7fafc; padding-left: 120px" href="{{route('program.index')}}"><b>Programas</b></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" style="color: #f7fafc; padding-left: 140px" href="{{route('day.index')}}"><b>Jornadas</b></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" style="color: #f7fafc; padding-left: 160px" href="#"><b>Reportes</b></a>
                </li>
            </ul>
            <span class="navbar-image">
                <img src="{{asset('IMAGENES/sena.png') }}" alt="" width="60" height="54">
      </span>
        </div>
    </div>
</nav>
</div>
@yield('content')
</body>
</html>
