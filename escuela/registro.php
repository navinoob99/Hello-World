<?php
$conexion= mysql_connect("localhost","root","inscripcion")

//recepcion de datos y almacenamiento
$nivel=$ POST["nivel"];
$nombre=$ POST["name"];
$apellido=$ POST["apellido"];
$sexo=$ POST["sexo"];
$fechaN=$ POST["fechaN"];
$dni=$ POST["dni"];
//consulta para insertar
$insertar="INSERT INTO datos del alumno(nivel a inscribir, nombre, apellido, sexo, fecha nacimiento, dni) VALUES ('$nivel', '$nombre', '$apellido', '$sexo', 'fechaN', '$dni')";  

//ejecucion de consulta
$resultado=mysql_query($conexion, $insertar);
?>