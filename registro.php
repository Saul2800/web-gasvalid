<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">  
        <title>Registro GasValid</title>                                       <!--Titulo a pestañaa-->
        <link rel ="icon" type="icon/png" href="recursos/gasicon.png">           <!--Icono a pestaña-->
        <link rel="stylesheet" type="text/css" href="css/registro.css">        <!--estilo del login css-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="libraries/bootstrap4/bootstrap.min.css"> <!--libreria Para el cel-->
    </head>
    <body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="recursos/gasicon.png"id="icon" alt="User Icon" />                <!--Imagen de presentacion-->
      <h1>Registro de Clientes</h1>                                                 <!--Titulo-->
    </div>
    <!-- Creamos el Formulario de login-->
    <form>
      <input type="text" id="login" class="fadeIn noestacion" name="login" placeholder="No. de estacion"> <!--input usuario-->
      <input type="password" id="password" class="fadeIn password" name="login" placeholder="password"> <!--input password-->
      <input type="text" id="email" class="fadeIn email" name="email" placeholder="example@algo.com"><!--input correo-->
      <input type="text" id="referencia" class="fadeIn referencia" name="referencia" placeholder="referencia"><!--input refer-->
      <input type="submit" class="fadeIn registrar" value="Registrar">                     <!--  Enviar info para registrar-->
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="repositorio.php">REPOSITORIO</a>        <!--Hacemos un vinculo para hacer el registro-->
    </div>

  </div>
</div>                     
    </body>
</html>