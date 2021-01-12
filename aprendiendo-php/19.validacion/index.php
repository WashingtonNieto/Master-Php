<!DOCTYPE HTML>
<HTML lang="es">
    <HEAD>
        <META charset="utf-8" />
        <TITLE>Validacion de formularios php</TITLE>
    </HEAD>
    <BODY>
        <H1>Validar Formularios en PHP</H1>
        
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'Faltan_valores'){
                    echo '<strong style="color:red">Introduce todos los datos en los campos del formulario </strong>';
                }else{
                   echo '<strong style="color:blue">Datos ok </strong>'; 
                }
            }
        
        ?>
        
        
        <FORM method="POST" action="procesar_formulario.php">
            <LABEL for="nombre">Nombre</LABEL><br/>
            <INPUT type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/>

            <LABEL for="apellidos">Apellidos</LABEL><br/>
            <INPUT type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br/>

            <LABEL for="edad">Edad</LABEL><br/>
            <INPUT type="number" name="edad" required="required" pattern="[0-9]+"><br/>

            <LABEL for="email">Email</LABEL><br/>
            <INPUT type="email" name="email" required="required"><br/>

            <LABEL for="pass">Contrasena</LABEL><br/>
            <INPUT type="password" name="pass" required="required" minlength="5"><br/>
            
            <INPUT type="submit" value="Enviar" />
        </FORM>
    </BODY>