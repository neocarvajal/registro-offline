<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro Participantes Offline</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="complementos/css/bootstrap.min.css" />
        <link rel="stylesheet" href="complementos/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="complementos/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="complementos/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    </head>
    <body>
    <div class="container">

      <!--banner -->
      
        <div id="banner">
          <img class="img-responsive" src="complementos/img/banner.jpg">
        </div>

      <!-- Barra nav -->
       <nav class="navbar navbar-inverse navbar-fixed-top">
        <!-- <div class="container-fluid"> -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Sistema de registro</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <form id="frm-cedula" class="navbar-form navbar-right" action="?control=Participante&accion=Buscar" method="post" enctype="multipart/form-data">
              <input type="text" id="valor" name="Cedula" class="form-control" placeholder="Cedula..." autofocus>
                  <button id="buscar" class="btn btn-default">
                      Buscar <span class="glyphicon glyphicon-search aria-hidden="true"></span>
                  </button>
            </form>
          </div>
        <!-- </div> -->
      </nav>  