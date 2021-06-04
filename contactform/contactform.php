<?php 
$destino = "customgaragempro@gmail.com"
$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['subject'];
$empresa = $_POST['message'];
$contenido = "nombre:" , $nombre , "\nmail" $mail , "\ntelefono:", $telefono , "\nmessage" $empresa

 mail($destino,$telefono,$empresa);
 header("location:./index.html")

 ?>