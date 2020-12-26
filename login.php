<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">  
        <title>Login GasValid</title>                                       <!--Titulo a pestañaa-->
        <link rel ="icon" type="icon/png" href="recursos/gasvalid_logo.jpeg">           <!--Icono a pestaña-->
        <link rel="stylesheet" type="text/css" href="css/login.css">        <!--estilo del login css-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="libraries/bootstrap4/bootstrap.min.css"> <!--libreria Para el cel-->
    </head>
    <body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="recursos/gasvalid_logo.jpeg"id="icon" alt="Icono gv" />                <!--Imagen de presentacion-->
      <h1>Inicio de Sesion</h1>                                                 <!--Titulo-->
    </div>
    <!-- Creamos el Formulario de login-->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="user"> <!--input usuario-->
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password"> <!--input password-->
      <input type="submit" class="fadeIn fourth" value="Entrar">                              <!--Enviar info para entrar-->
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="inicio.php">HOME</a>        <!--Hacemos un vinculo para hacer el registro-->
    </div>

  </div>
</div>                     
    </body>
</html>