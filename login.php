<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: repositorio.php");
  exit;
}

// Include config file
require_once "databaseconfig.php";

// Define variables and initialize with empty values
$noEstacion = $password = "";
$noEstacion_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if noEstacion is empty
    if(empty(trim($_POST["noEstacion"]))){
        $noEstacion_err = "Por favor ingrese su Numero de estacion.";
    } else{
        $noEstacion = trim($_POST["noEstacion"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($noEstacion_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT noEstacion, tipo, password FROM tblUsuarios WHERE noEstacion = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_noEstacion);

            // Set parameters
            $param_noEstacion = $noEstacion;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if noEstacion exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $noEstacion, $tipo, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["noEstacion"] = $noEstacion;
                            $_SESSION["tipo"] = $tipo;
                            if($tipo==1){
                            // Redirect user to welcome page
                                header("location: repositorio.php");
                            }
                            else{
                                header("location: repositorioUsuarios.php");
                            }
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "La contraseña que has ingresado no es válida.";
                        }
                    }
                } else{
                    // Display an error message if noEstacion doesn't exist
                    $noEstacion_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            } else{
                echo "Algo salió mal, por favor vuelve a intentarlo.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

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
      <h1>Inicio de Sesión</h1>                                                 <!--Titulo-->
    </div>
    <!-- Creamos el Formulario de login-->
    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($noEstacion_err)) ? 'has-error' : ''; ?>">
                <input placeholder="No. Estacion"type="text" name="noEstacion" class="fadeIn second" value="<?php echo $noEstacion; ?>">  
                <span class="help-block"><?php echo $noEstacion_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input id="password" placeholder="Password" type="password" name="password" class="fadeIn third">
                <button id="btnpassword" type="button" onclick="mostrarpassword()"></button><br>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="fadeIn fourth" value="Entrar">
            </div>
        </form>
<!--Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.php">INICIO</a>        <!--Hacemos un vinculo para hacer el registro-->
    </div>
  </div>
</div>
<script>
            function mostrarpassword(){
                var tipo = document.getElementById("password");
                if(tipo.type == "password"){
                    tipo.type = "text";
                }else{
                    tipo.type = "password";
                }
            }
        </script>

    </body>
</html>