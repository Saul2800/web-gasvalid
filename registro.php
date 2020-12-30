
<?php
session_start();
if($_SESSION["loggedin"] == false){
  header("location: login.php");
  exit;
}
// Include config file
require_once "databaseconfig.php";
 
// Define variables and initialize with empty values
$noEstacion = $password = $email = $referencia = $tipo = "";
$noEstacion_err = $password_err = $email_err = $referencia_err = $tipo_err = "";
 
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
                    $noEstacion_err = "Este No. de estacion ya es usado.";
                } else{
                    $noEstacion = trim($_POST["noEstacion"]);
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
             mysqli_stmt_close($stmt);
              // Close statement
        }
         
       
       
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingresa una contraseña.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "El password al menos debe tener 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Ingrese su correo.";     
    } else{
        $email = trim($_POST["email"]);
    }

    //valida tipo
    if (isset($_POST["tipo"])){
    $tipo=$_POST["tipo"]; 
    }

      // Validate referencia
    if(empty(trim($_POST["referencia"]))){
        $referencia_err = "Por favor ingresa una referencia.";     
    } elseif(strlen(trim($_POST["referencia"])) > 20){
        $referencia_err = "La referencia no debe tener mas de 20 caracteres";
    } else{
        $referencia = trim($_POST["referencia"]);
    }

   
    // Check input errors before inserting in database
    if(empty($noEstacion_err) && empty($password_err) && empty($email_err) && empty($referencia_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO tblUsuarios (noEstacion, tipo, email, password, referencia) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iisss", $param_noEstacion, $param_tipo, $param_email, $param_password,  $param_referencia);    //int, int, string, string, string
            
            // Set parameters
            $param_noEstacion = $noEstacion;
            $param_tipo=$tipo;
            $param_email=$email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_referencia=$referencia;
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
               echo '<script language="javascript">
                    alert("Usuario Registrado Correctamente");
                    window.location.href="registro.php";
                    </script>';
 
            } else{
                echo "Algo salió mal, por favor inténtalo de nuevo.";
            }
            // Close statement
        mysqli_stmt_close($stmt);
        }
         
        
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">  
        <title>Registro GasValid</title>                                       <!--Titulo a pestañaa-->
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
      <h1>Registro de Clientes</h1>                                                 <!--Titulo-->
    </div>
    <!-- Creamos el Formulario de registro-->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

      <div class="form-group <?php echo (!empty($noEstacion_err)) ? 'has-error' : ''; ?>">
      <input type="text" id="login" class="fadeIn noestacion" name="noEstacion" placeholder="No. de estacion" pattern="[0-9]+" value="<?php echo $noEstacion; ?>"> <br> 
      <span class="help-block"><?php echo $noEstacion_err; ?></span>  
      </div>  <!--input usuario-->

      <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
      <input type="password" id="password" class="fadeIn password" name="password" placeholder="password" value="<?php echo $password; ?>"> <br>
      <span class="help-block"><?php echo $password_err; ?></span>
      </div><!--input password-->

      <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
      <input type="text" id="email" class="fadeIn email" name="email" placeholder="example@algo.com" value="<?php echo $email; ?>"> <br>
      <span class="help-block"><?php echo $email_err; ?></span>
       </div><!--input correo-->

       <div id="tipo" class="fadeIn" >
      <input type="checkbox" name="tipo" placeholder="tipo" value="1">Hacer administrador. <!--tipo-->
    </div>

      <div class="form-group <?php echo (!empty($referencia_err)) ? 'has-error' : ''; ?>">
      <input type="text" id="referencia" class="fadeIn referencia" name="referencia" placeholder="referencia" value="<?php echo $referencia; ?>"> <br>
      <span class="help-block"><?php echo $referencia_err; ?></span>
      </div> <!--input refer-->

      <input type="submit" class="fadeIn" value="Registrar">                     <!--  Enviar info para registrar-->
    </form>
    <!-- Remind Passowrd -->

    <div id="formFooter">
      <a class="underlineHover" href="repositorio.php">REPOSITORIO</a>        <!--Hacemos un vinculo para hacer el registro-->
    </div>
  </div>
</div>                     
    </body>
</html>