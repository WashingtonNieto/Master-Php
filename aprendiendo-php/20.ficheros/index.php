<?php

//abrir archivo
$archivo = fopen("fichero_texto.txt","a+");

//leer archivo
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

// escribir en el archivo
fwrite($archivo, "soy un texto metido desde php"); 

//cerrar archivo
fclose($archivo);

//Copiar
copy('fichero_texto.txt','fichero_texto_copia.txt');

//renombrar
rename('fichero_texto.txt','fichero_texto_copia_renombrado.txt');

//borrar
unlink('fichero_texto_copia_renombrado.txt') or die('error al borrar');

//comprobar existencia de archivo
if(file_exists('fichero_texto.txt')){
    echo "El archivo existe";
}else {
    echo "El archivo NO existe!";
}
      
      
