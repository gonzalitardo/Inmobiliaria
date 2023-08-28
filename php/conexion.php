<?php
$servidor="localhost";
$usuario="root";
$password="";
$db="bdwir";
$conexion=mysqli_connect($servidor,$usuario,$password,$db)or die(mysqli_error());
if ($conexion) {
    echo "Se realizo la conexión";
}else{
    echo "No se realizo la conexión";
}




?>