<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Robles Payan y Asociados | Corporativo Juridico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){

          var ventana = $("#ventana").val();
          $("#"+ventana).parent().addClass("active");
      })
    </script>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        /*padding-bottom: 40px;*/
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icono para la pestaña superior del navegador -->
    <link rel="shortcut icon" href="img/logo-corporativo-icon-tab.ico">
  </head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- menu principal del sitio -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <a class="mute" href="index.php"><img src="img/logo-principal.png" alt="logotipo Robles Payan y Asociados Corpotarivo Juridico Corporativo Juridico"></a>
                <div class="nav-collapse collapse pull-right">
                  <ul class="nav">
                    <li><a href="index.php" id = "index">Principal</a></li>
                    <li><a href="nuestra-empresa.php"  id = "nuestra-empresa">Nuestra Empresa</a></li>
                    <li><a href="productos-y-servicios.php"  id = "productos-y-servicios">Productos y Servicios</a></li>
                    <li><a href="directorio.php" id = "directorio">Directorio</a></li>
                    <li><a href="trabajo.php" id="trabajo">Trabajo</a></li>
                    <li><a href="eventos.php" id="eventos">Eventos</a></li>
                    <li><a href="contactanos.php" id="contactanos">Contáctanos</a></li>
                  </ul>
                 
                </div><!-- fin nav-collapse -->
            </div><!-- fin container -->
        </div><!-- fin de navbar inner -->
    </div><!-- fin nav -->

<!-- fin de la cebecera -->