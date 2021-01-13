<?php

if(isset($_POST)){

    //incluir la funcion de conexion
    require_once 'includes/conexion.php';

    //iniciar sesion
    if(!isset($_SESSION)){
        session_start();
    }
    
    //mysqli_real_escape_string se usa para escapar el insertar en la base de datos
    //si el usuario se equivoca o no ingresando comillas, quiere decir que si por 
    //error o no incluye comillas estas quedan grabadas en la base de datos
    // asi un campo washington" (con comillas) tal cual queda grabada en la base de datos
    //asi si alguien de mala fe quiere saltarse el sistema incluyendo " no va a fallar
    //porque el programa acepta comillas y seran incluidas en el campo
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email = isset ($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $password = isset ($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']) : false;
    
    // array de errores
    $errores = array();
    
    //validar los campos
    //Validar Nombre
    //si el nombre no esta vacion y no es numerico y dentro del numbre no hay caracteres extranos...
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    // Validar Apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }

    // Validar mail
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    }else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }

    // Validar el password
    if(!empty($password)){
        $password_validado = true;
    }else {
        $password_validado = false;
        $errores['password'] = "La contrasena esta vacia";
    }
    
  
    $guardar_usuario = false;
    if(count($errores) == 0){
        $guardar_usuario = true;
        
        //cifrar la contrasena
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        // ojo cost ( el numero de pasadas para encriptar)
        //var_dump($password);
        //var_dump($password_segura);
        //var_dump(password_verify($password, $password_segura));
        //die();
        $fechaActual = date('Y-m-d');
        
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', '$fechaActual');";
        $guardar = mysqli_query($db, $sql);
        
        //var_dump(mysqli_error($db));
        //die();
        if($guardar){
            $_SESSION['completado'] = 'El registro se ha completado con exito';
        }else{
            $_SESSION['errores']['general'] = 'Fallo al guardar el usuario!';
        }
    }else{
        $_SESSION['errores'] = $errores;
    }
}
header('Location: index.php');

