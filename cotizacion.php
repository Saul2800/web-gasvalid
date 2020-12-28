<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"> 
        <link rel ="icon" type="icon/png" href="recursos/gasvalid_logo.jpeg" > 
        <link rel="stylesheet" href="css/cotizacion.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Cotizacion GasValid</title>
       
<div class="wrapper fadeInDown">
<div id="formContent">
    <img src="recursos/gasvalid_logo.jpeg" id="icon" alt="User Icon" />                <!--Imagen de presentacion-->
    <h1>Cotizacion</h1> 
  <!-- Icon -->
<div class="fadeIn first">
    <form action="enviar.php" method="post">
        <input type="text" id="asunto" class="fadeIn asunto" name="asunto" placeholder="asunto" required> <!--input asunto-->
        <input type="text" id="email" class="fadeIn email" name="email" placeholder="example@algo.com" required><!--input correo-->
        <textarea id="mensaje" class="fadeIn mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
        <input type="submit" class="fadeIn registrar" value="enviar" name="enviar">
        <div id="resultado"></div>
    </form>
   
      
    <!-- Remind Passowrd -->
    <div id="formFooter">
    <a class="underlineHover" href="inicio.php">Inicio</a>        <!--Hacemos un vinculo para hacer el registro-->
    </div> 
    </div>
  </div>
</div> 
    
    </body>
</html>
