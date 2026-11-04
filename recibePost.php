<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$curso = $_POST['curso'];
$modalidad = $_POST['modalidad'];

$faltan_datos = false;
if ($nombre == "") {
    echo "Falta el nombre" . "<br>";
    $faltan_datos = true;
}
if ($correo == "") {
    echo "Falta el correo" . "<br>";
    $faltan_datos = true;
}
if ($edad == "") {
    echo "Falta la edad" . "<br>";
    $faltan_datos = true;
}
if ($curso == "") {
    echo "Falta el curso" . "<br>";
    $faltan_datos = true;
}
if ($modalidad == "") {
    echo "Falta la modalidad" . "<br>";
    $faltan_datos = true;
}
if ($faltan_datos == false) {
    echo "Inscripción Recibida" . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo: " . $correo . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "Curso: " . $curso . "<br>";
    echo "Modalidad: " . $modalidad . "<br>";
}
