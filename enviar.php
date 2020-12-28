<?php

$destino= "robertonerinavarro@gmail.com";
$asunto=$_POST['asunto'];
$correo =$_POST['email'];
$mensaje=$_POST['mensaje'];
$contenido= "Asunto: " . $asunto . "\nCorreo" . $correo . "\nMensaje" . $mensaje;
$mail=@mail($destino,"contacto",$contenido);
if($mail)
        header("Location:cotizacion.php");