<?php

if(isset($_POST)){

    //incluir la funcion de conexion
    require_once 'includes/conexion.php';
    
    //mysqli_real_escape_string se usa para escapar el insertar en la base de datos
    //si el usuario se equivoca o no ingresando comillas, quiere decir que si por 
    //error o no incluye comillas estas quedan grabadas en la base de datos
    // asi un campo washington" (con comillas) tal cual queda grabada en la base de datos
    //asi si alguien de mala fe quiere saltarse el sistema incluyendo " no va a fallar
    //porque el programa acepta comillas y seran incluidas en el campo
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email = isset ($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    
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


    $guardar_usuario = false;
    if(count($errores) == 0){
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;
        
        //comprobar si el email ya existe
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_Fetch_assoc($isset_email);
        
        if($isset_user['id'] == $usuario['id'] || empty($isset_user) ){
            
            //Actualizar usuario

            $sql =  "UPDATE usuarios SET ".
                    "nombre = '$nombre', ".
                    "apellidos = '$apellidos', ".
                    "email = '$email' ".
                    "WHERE id = ".$usuario['id'];

            $guardar = mysqli_query($db, $sql);

            //var_dump(mysqli_error($db));
            //die();
            if($guardar){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = 'Tus datos se han actualizado con exito';
            }else{
                $_SESSION['errores']['general'] = 'Fallo al actualizar tus datos!';
            }
        }else{
            $_SESSION['errores']['general'] = 'El usuario ya existe!';
        }
    }else{
        $_SESSION['errores'] = $errores;
    }

}
header('Location: mis-datos.php');

