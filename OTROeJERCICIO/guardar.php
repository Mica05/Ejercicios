<?php

var_dump($_REQUEST);
var_dump($_POST);
$_nombre= $_POST['nombre'];


$archivo= fopen("datos.txt","w" );
fwrite($archivo, $_nombre);
fclose($archivo);
?>