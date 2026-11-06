<?php
$edad = 22;
echo $edad >= 18 ? "mayor" : "menor", "<br>";

$usuario = null;
echo $usuario ?? "invitado", "<br>";

$config = [];
$config['tema'] ??= "claro";
echo $config['tema'], "<br>";

echo $_GET['pagina'] ?? 1, "<br>";
