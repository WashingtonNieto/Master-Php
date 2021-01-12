<?php

//para crear un directorio / carpeta
if(!is_dir('mi_carpeta')){
    mkdir("mi_carpeta", 0777) or die('No se puede crear la carpeta');
    echo 'carpeta creada!';
}else {
    echo "ya existe la carpeta";
}

// borrar directorio
rmdir('mi_carpeta');

//para ver el contenido de una carpeta
echo "<hr> <h1>Contenido carpeta</h1>";
if($gestor = opendir('./mi_carpea')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."br/";
        }
    }
}