<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">  
        <title>Login GasValid</title>                                       <!--Titulo a pestañaa-->
        <link rel ="icon" type="icon/png" href="recursos/gasicon.png">           <!--Icono a pestaña-->
        <link rel="stylesheet" type="text/css" href="css/login.css">        <!--estilo del login css-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="libraries/bootstrap4/bootstrap.min.css"> <!--libreria Para el cel-->
    </head>
    <body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="recursos/gasicon.png"id="icon" alt="User Icon" />                <!--Imagen de presentacion-->
      <h1>GasValid Web</h1>                                                 <!--Titulo-->
    </div>
    <!-- Creamos el Formulario de login-->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="usuario"> <!--input usuario-->
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password"> <!--input password-->
      <!--<input type="submit" class="fadeIn fourth" value="Entrar">                              Enviar info para entrar-->
      <a class="underlineHover" href="repositorio.php"> <br> !probando! <br> </a>                                      <!-- usaremos esto para entrar por el momento-->
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="inicio.php">HOME</a>        <!--Hacemos un vinculo para hacer el registro-->
    </div>

  </div>
</div>                     
    </body>
</html>