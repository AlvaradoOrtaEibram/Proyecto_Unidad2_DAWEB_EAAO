<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regitro</title>
  <link rel="stylesheet" href="estilo.css">
      <body id="fon">
          <?php include ('menu.php'); ?>
                  
      <blockquote>

   <p>
     <center><h2>Registro del producto</h2></center>
    </p>

<section class="form-registro">

  <center><h4>-------------</h4></center>
  <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingresa el/los nombres del articulo">
  <input class="controls" type="text" name="Codigo" id="apellidos" placeholder="Ingresa el codigo del articulo">
  <input class="controls" type="text" name="Observaciones" id="apellidos" placeholder="Observaciones del articulo">
  <p>Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p>
  <input class="buttons" type="submit" value="Registrar">
</section>
</blockquote>

<?php include('footer.php');?>

      </body>
    </html>