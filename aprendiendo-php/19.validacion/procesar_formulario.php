<?php
    $error = 'Faltan_valores';
    
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) &&
            !empty($_POST['edad']) && !empty($_POST['email']) && 
            !empty ($_POST['pass'])){
        $error = 'ok';
        
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        // Validar el nombre
        if (!is_string($nombre) || !preg_match("/[a-zA-Z]+/",$nombre)){
            $error = 'nombre';
        }
        // Validar el apellido
        if (!is_string($apellidos) || !preg_match("/[a-zA-Z]+/",$apellidos)){
            $error = 'apellidos';
        }
        // Validar el edad
        if (!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)){
            $error = 'edad';
        }
        // Validar el email
        if (!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error = 'email';
        }
        // Validar el password
        if (empty($pass) || strlen($pass)<5){
            $error = 'password';
        }
        
        var_dump($_POST);
        var_dump($error);
        die();
    }else{
        $error = 'faltan_valores';
    }
    if($error != 'ok'){
        header("Location:index.php?error=$error");
    }
?>
<!DOCTYPE HTML>
<HTML lang="es">
    <HEAD>
        <META charset="utf-8" />
        <TITLE>Validacion de formularios php</TITLE>
    </HEAD>
    <BODY>
        <?php if($error == 'ok'): ?>
        <h1>Datos Validados correctamente</h1>
            <p><?=$nombre?></p>
            <p><?=$apellidos ?></p>
            <p><?=$edad ?></p>
            <p><?=$email ?></p>
        <?php endif;?>
    </BODY>
</HTML>>