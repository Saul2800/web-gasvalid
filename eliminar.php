
<?php
session_start();
//si no a ingresado al sistema lo saca
if($_SESSION["loggedin"] == false){
  header("location: login.php");
  exit;
}
//si no es admin lo saca
if($_SESSION["tipo"]==0){
  header("location: repositorio.php");
  exit;
}

// Include config file
require_once "databaseconfig.php";
 
// Define variables and initialize with empty values
$noEstacion = $noEstacion2 = "";
$noEstacion_err = $noEstacion2_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate noEstacion
    if(empty(trim($_POST["noEstacion"]))){
        $noEstacion_err = "Por favor ingrese el No. de estacion.";
    } else{
        // Prepare a select statement
        $sql = "SELECT noEstacion FROM tblUsuarios WHERE noEstacion = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_noEstacion);
            
            // Set parameters
            $param_noEstacion = trim($_POST["noEstacion"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $noEstacion = trim($_POST["noEstacion"]);
                } else{
                $noEstacion_err = "Este No. de estacion no existe.";

                }
            } else{
                echo "Al parecer algo salió mal.";
            }
             mysqli_stmt_close($stmt);
              // Close statement
        } }

        //validar noEstacion2
       if(empty(trim($_POST["noEstacion2"]))){
        $noEstacion2_err = "Por favor ingrese el No de estacion.";     
          }else{
        $noEstacion2 = trim($_POST["noEstacion2"]);
    }

      if($_POST["noEstacion2"]!=$_POST["noEstacion"]){
        $noEstacion0_err = "Los datos no coinciden";
      } 

   
    // Check input errors before inserting in database
    if(empty($noEstacion_err) && empty($noEstacion2_err) && $noEstacion2 == $noEstacion){
        
         // Prepare a select statement
        $sql = "DELETE FROM tblUsuarios WHERE noEstacion = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_noEstacion);
            
            // Set parameters
            $param_noEstacion = trim($_POST["noEstacion"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                               echo '<script language="javascript">
                    alert("Usuario Eliminado Correctamente");
                    window.location.href="eliminar.php";
                    </script>';
            } else{
                echo "Al parecer algo salió mal.";
            }
             mysqli_stmt_close($stmt);
              // Close statement
        } } 
    
    // Close connection
    mysqli_close($link);
 }   
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">  
        <title>Eliminar usuarios</title>                                       <!--Titulo a pestañaa-->
        <link rel ="icon" type="icon/png" href="recursos/gasvalid_logo.jpeg">           <!--Icono a pestaña-->
        <link rel="stylesheet" type="text/css" href="css/registro.css">        <!--estilo del login css-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="libraries/bootstrap4/bootstrap.min.css"> <!--libreria Para el cel-->
    </head>
    <body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="recursos/gasvalid_logo.jpeg" id="icon" alt="User Icon" />                <!--Imagen de presentacion-->
      <h1>Eliminar Clientes</h1>
      <h4 id="alert">Al eliminar este cliente se eliminaran todos los archivos del mismo</h4>                                                 <!--Titulo-->
    </div>
    <!-- Creamos el Formulario de registro-->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

      <div class="form-group <?php echo (!empty($noEstacion_err)) ? 'has-error' : ''; ?>">
      <input type="text" id="login" class="fadeIn noestacion" name="noEstacion" placeholder="No. de estación"  value="<?php echo $noEstacion; ?>"> <br> 
      <span class="help-block"><?php echo $noEstacion_err; ?></span>  
      </div>  <!--input usuario-->

      <div class="form-group <?php echo (!empty($noEstacion2_err)) ? 'has-error' : ''; ?>">
      <input type="text" id="noEstacion2" class="fadeIn noestacion" name="noEstacion2" placeholder="Reingrese el No. de estación" value="<?php echo $noEstacion2; ?>"> <br>
      <span class="help-block"><?php echo $noEstacion2_err; ?></span>
      <span class="help-block"><?php echo $noEstacion0_err; ?></span>
      </div><!--input password-->

      <input type="submit" class="fadeIn" value="Eliminar">                     <!--  Enviar info para registrar-->
    </form>
    <!-- Remind Passowrd -->

    <div id="formFooter">
      <a class="underlineHover" href="repositorio.php">REPOSITORIO</a>        <!--Hacemos un vinculo para hacer el registro-->
    </div>
  </div>
</div>        
    </body>
</html>