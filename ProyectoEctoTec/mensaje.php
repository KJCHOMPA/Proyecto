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
    <div class="row">
      <span style="font-size:20px">
      <div class="offset-2 col-8"><br><br>
        Estimado <strong><?php $n=$_POST[ 'nombre']; echo $n;?></strong>,<br>
        Hemos recibido sus datos y nos pondremos en contacto con usted a la brevedad posible. Enviaremos un correo con información a su cuenta:
      <span class="color_azul">
        <strong><u><?php $c=$_POST[ 'email']; echo $c;?></u></strong>.
      </span>

      </div>
      <div class="offset-2">
      </div>
      </span>
    </div>
    <div class="row">
      <div class="derecha offset-6 col-4 ">
          <strong>Atte.</strong><br>
          <span class="color_verde">
            <strong>Green Leaves</strong><br>
          </span>
          <span style="font-size:15px">
            <?php $ciu=$_POST[ 'ciudad']; echo $ciu;?> a <?php $f=$_POST[ 'fecha']; echo $f;?>
          </span>

        </div>
      <div class="offset-2">
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="../Bootstrap4/js/jquery-3.1.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="../Bootstrap4/js/bootstrap.min.js"></script>





  </body>
</html>
