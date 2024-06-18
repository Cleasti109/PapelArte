<html lang="es">
<head>
    <meta charset="utf-8">
    <title>-Inicio de sesion-</title>
    <link rel="stylesheet" href="estilo/design7.css">
    <link rel="shortcut icon" href="pape.png">
    </head>
    <body><table>
        <tr><td valign="top">
            <a href="main.php"><button id="rgs">Regresar al inicio</button></a></td><td><br>
    <fieldset class="inc2" align="center"><br>
        
            <img src="pape.png" width="100px" height="90px" class="imgs">
        <br><br>
        <fieldset class="peq2" align="center">
            <form action="crear.php" method="post">
            <label for="usuario" id="rr">Usuario</label><br>
            <input type="text" name="usuario" id="usuario" class="reg" required><br><br>
            <label for="email" id="rr">Correo</label><br>
            <input type="email" name="email" id="email" class="reg" required><br><br>
            <label for="password" id="rr">Contraseña</label><br>
            <input type="text" name="password" id="password" class="reg" required><br><br>
            <label for="telefono" id="rr">Telefono</label><br>
            <input type="text" name="telefono" id="telefono" class="reg" required><br><br>
                <button type="submit">Registrarse</button>
            </form>
            <a href="IniciarSesion.php">¿Ya tienes cuenta? Inicia Sesión aquí</a>
        </fieldset>
        
        </fieldset></td></tr></table>
    </body>
</html>