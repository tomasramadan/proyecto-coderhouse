<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$mensaje = "Este mensaje fue enviado por " . $nombre , ",\r\n";
$mensaje = "Con la dirección de correo " . $correo , ",\r\n";
$mensaje = "Mensaje " . $_POST["mensaje"] , ",\r\n";
$mensaje = "Enviado el " . date("d/m/y", time());

$destinatario = "tomasramadan4@gmail.com";
$asunto = "Cerrajeria David";

mail($destinatario, $asunto, utf8_decode($mensaje), $header);
include "index.html";
?>
