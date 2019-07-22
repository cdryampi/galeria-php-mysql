<?php
session_start();
$_SESSION['seccion'] ="yampi";
$_SESSION['seccion2'] ="sanchez";

 ?>
<!doctype html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./files/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <title>Projecte1</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<main class="container-fluid">

  <header class="row">
    <nav class="navbar navbar-expand-sm navbar-dark bg-warning fixed-top">
      <a href="#" class="navbar-brand"><img src="img/logo-lux.png" id="lux"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggle-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="#" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Noticias</a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Últimas Noticias</a>
              <a href="#" class="dropdown-item">Noticas Destacadas</a>
            </div>
          </li>
          <li class="nav-item dropdown" >
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Nosotros</a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">La empresa</a>
              <a href="#" class="dropdown-item">Trabaja con nostros</a>
            </div>
          </li>
          <li class="nav-item dropdown" >
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contacto</a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">¿Donde estamos?</a>
              <a href="#" class="dropdown-item">Servicio al cliente</a>
            </div>
          </li>
        </ul>
      </div>
      <form class="form-inline">
            <input class="btn btn-danger btn-sm mr-2" data-toggle="modal" data-target="#login" type="button" value="Login">
            <input class="btn btn-danger btn-sm" data-toggle="modal" data-target="#registro" type="button" value="Registro">
      </form>
    </nav>
  </header>

  <section class="modal" id="login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-warning text-write">
          <div class="modal-title">
            Entrar en sección
          </div>
          <span data-dismiss="modal">X</span>
          </div>
          <div class="modal-body">
            <form  method="post" action="leer.php" role="form" id="enviarPutoPost">
              <div class="form-group">
                <label class="col-label-sm control-label">Email:</label>
                <input class="form-control" name="email" type="email" placeholder="Introduce tu email"/>
              </div>
              <div class="form-group">
                <label class="col-label-sm control-label">Contraseña:</label>
                <input class="form-control" name="pass" type="password" placeholder="Introduce tu contraseña"/>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="text-right">
              <input  type="submit" value="Envia" class="btn btn-warning" onclick="form_submit()" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal" id="registro">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-primary text-write">
          <div class="modal-title">
            Registro de usuario
          </div>
          <span data-dismiss="modal">X</span>
          </div>
          <div class="modal-body">
            <form method="post" action="get_post.php" enctype="multipart/form-data" role="form" id="enviarPutoPost2">
              <div class="form-group">
                <label class="col-label-sm">Nombre:</label>
                <input class="form-control" type="text" placeholder="Introduce tu nombre" name="nombre"/>
              </div>
              <div class="form-group">
                <label class="col-label-sm">Apellido:</label>
                <input class="form-control" type="text" placeholder="Introduce tu apellido" name="apellido"/>
              </div>
              <div class="form-group">
                <label class="col-label-sm">Email:</label>
                <input class="form-control" type="email" placeholder="Introduce tu email" name="email"/>
              </div>
              <div class="form-group">
                <label class="col-label-sm">Contraseña:</label>
                <input class="form-control" type="password" placeholder="Introduce tu contraseña" name="contrasenya"/>
              </div>
              <div class="form-group">
                <span class="col-label-sm">Fichero:</span>
                <input class="form-control-file" type="file" name="ficheri" value="ficheri">
              </div>
              <div class="form-group">
                <label>Sexo:</label>
                <div class="btn btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-warning">
                    <input type="radio" name="sexo" id="H"/>Hombre
                  </label>
                  <label class="btn btn-warning">
                    <input type="radio" name="sexo" id="M"/>Mujer
                  </label>
                  <label class="btn btn-warning active">
                    <input type="radio" name="sexo" id="B"/>No binario
                  </label>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="text-right">
              <input type="submit" value="Registrar" class="btn btn-primary" onclick="form_submit2()">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="row justify-content-center mt-5 container-fluid">
<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Galeria de fotos con PHP</h1>

<hr class="mt-2 mb-5">

<div class="row text-center text-lg-left">

  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
        </a>
  </div>
</div> 
</section>
</main>
<script>
    $(function () {
        //Habilita los tooltips
        $('[data-toggle="tooltip"]').tooltip({
            container: 'body'
        });
    });



</script>
<script>
 function form_submit() {
        document.getElementById("enviarPutoPost").submit();
}
function form_submit2() {
  document.getElementById("enviarPutoPost2").submit();
}
</script>


</body>
</html>
