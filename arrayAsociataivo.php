<?php
$persona = [
    "nombre" => "Laura",
    "edad"   => 31,
    "ciudad" => "Bogotá",
];

echo $persona["nombre"], " vive en ", $persona["ciudad"], "<br>";
$persona["profesion"] = "Ingeniera";

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
echo isset($persona["telefono"]) ? "tiene" : "sin teléfono", "<br>";
