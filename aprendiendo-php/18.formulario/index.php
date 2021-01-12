<!DOCTYPE HTML>
<HTML lang="es">
    <HEAD>
        <META charset="utp-8" />
        <TITLE>Formularios PHP y HTML</TITLE>
    </HEAD>
    <BODY>
        <H1>Formulario</H1>
        <FORM action="" method="POST" enctype="multiplart/form-data">
            <P>
                <LABEL for="nombre">Nombre: </LABEL> 
                <input type="text" name="nombre"/>
            </P>
            <P>
                <LABEL for="boton">Boton: </LABEL>
                <input type="button" name="boton" value="Aceptar"/>
            </P>
            <P>
                <LABEL for="sexo">Sexo: </LABEL> 
                Hombre <input type="checkbox" name="sexo" value="hombre"/>
                Mujer <input type="checkbox" name="sexo" value="mujer" checked="checked"/>
            </P>
            <P>
                <LABEL for="color">Color: </LABEL>
                <input type="color" name="color"/>
            </P>
            <P>
                <LABEL for="fecha">Fecha: </LABEL>
                <input type="date" name="fecha"/>
            </P>
            <P>
                <LABEL for="correo">Email: </LABEL>
                <input type="email" name="correo"/>
            </P>
            <P>
                <LABEL for="archivo">Archivo: </LABEL>
                <input type="file" name="achivo" multiple="multiple"/>
            </P>
            <P>
                <LABEL for="numero">Numero: </LABEL>
                <input type="number" name="numero"/>
            </P>
            <P>
                <LABEL for="continente">Continente: </LABEL>
               America del sur <input type="radio" name="continente" value="America del sur"/>
               Europa <input type="radio" name="continente" value="America del sur"/>
               Asia <input type="radio" name="continente" value="Asia"/>
            </P>
            <P>
                <LABEL for="contrasena">Contrasena: </LABEL>
                <input type="password" name="contrasena"/>
            </P>
            <P>
                <LABEL for="textarea">Textarea: </LABEL>
                <TEXTAREA></TEXTAREA>
            </P>
            <P>
                <LABEL for="Peliculas">Peliculas: </LABEL>
                <SELECT name="peliculas">
                    <OPTION value="Spiderman">Spiderman</OPTION>
                    <OPTION value="Batman">Batman</OPTION>
                    <OPTION value="Superman">Superman</OPTION>
                    <OPTION>Avanger</OPTION>
                </SELECT>
            </P>
            <P><input type="submit" value="Enviar"></P>
        </FORM>
    </BODY>
</HTML>