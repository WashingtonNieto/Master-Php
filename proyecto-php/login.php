<?php

// Iniciar la sesion y la conexion db
require_once 'includes/conexion.php';
 
// Recoger datos del formulario
if(isset($_POST)){
    
    // Cierro la sesion antigua o de un usuario anterior
    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    // Consultar para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    //var_dump($sql);
    //die();
    
    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        
        // Comprobar la contrasena
        $verify = password_verify($password, $usuario['password']);
        
        if($verify){
            // Utilizar una sesion para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario;
            
        }else{
            // Si algo falla enviar una session con el fallo
            $_SESSION['error_login'] = "Login incorrecto!!";
        }
        
    }else {
        // Si algo falla enviar una session con el fallo
        $_SESSION['error_login'] = "Login incorrecto!!";
    }
} 

// Redigir al index.php
header('Location: index.php');