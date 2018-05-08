<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Bootstrap4/css/bootstrap.min.css" >
    <link rel = "stylesheet"  href = "../Bootstrap4/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilos.css">


  <link rel="stylesheet" href="calendario/jquery-ui.css">

    <title>Green Leaves</title>
  </head>
  <body >
    <div class="row">
      <div class="offset-2 col-8">
        <div class="cuadro_verde" role="alert">
          <div class="row">
            <div class="col-4">
              <h1>Green Leaves</h1>
            </div>
            <div class="offset-4 col-4">
              <img src="imagenes/hoja1.png" id="logo"/>
            </div>
          </div>
        </div>
      </div>
      <div class="offset-2">
      </div>
    </div>
    <form id="formularios" action="mensaje.php" method="post">
      <div class="row">
          <div class=" offset-2 col-2 "><br><br>
            Nombre:
          </div><div class="col-4 "><br><br>
          <div class=" form-group ">
            <input class="form-control" type="text" name="nombre" />
          </div>
        </div>
    </div>
    <div class="row">
        <div class=" offset-2 col-2 "><br>
          E-mail:
        </div><div class="col-4 "><br>
        <div class=" form-group ">
            <input class="form-control" type="text" name="email" />
        </div>
      </div>
  </div>
  <div class="row">
      <div class=" offset-2 col-2 "><br>
        Teléfono:
      </div><div class="col-4 "><br>
      <div class=" form-group ">
          <input class="form-control" type="text" name="telefono" />
      </div>
    </div>
</div>
<div class="row">
    <div class=" offset-2 col-2 "><br>
      Fecha:
    </div><div class="col-4 "><br>
    <div class=" form-group ">
        <input type="text" class="form-control" placeholder="aaaa-mm-dd" readonly name="fecha" id="datepickerE" >
    </div>
  </div>
</div>
<div class="row">
    <div class=" offset-2 col-2 "><br>
        Ciudad y Estado:
    </div><div class="col-4 "><br>
    <div class=" form-group ">
        <input  class="form-control" type="text" name="ciudad" />
    </div>
  </div>
</div>
<div class="row">
  <div class="offset-2 col-8"><br>
        <div class="text-center"><button name="guarda" type="submit" class="btn btn-primary">Enviar</button></div>
  </div>
  <div class="offset-2">
  </div>
</div>
  	</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="../Bootstrap4/js/jquery-3.1.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="../Bootstrap4/js/bootstrap.min.js"></script>
    <script src="calendario/jquery-ui.js"></script>
    <script src="js/script.js"> </script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/valida_formularios.js"></script>




  </body>
</html>
