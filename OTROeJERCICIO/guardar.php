<?php

var_dump($_REQUEST);
var_dump($_POST);
$_nombre= $_POST['nombre'];


$archivo= fopen("datos.txt","w" );
fwrite($archivo, $_nombre);
fclose($archivo);

/* Se ingresara el nombre de la persona y archivo guardando el dato en el archivo  al presionar el boton guardar se verificara si el archivo existe 
De ya existir el archivo se copiara y se movera a la carpeta backup cambiandole el nombre mas la fecha 
Al precionar el boton leer si el archivo existe se mostrara el contenido de no existir el archivo se informara que no existe */
?>

/* hf*/