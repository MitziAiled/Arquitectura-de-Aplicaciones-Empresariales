<html>
    <head>
        <title>Puppy Rescue: Registro de Usuario</title>
        <link href="../views/assets/css/registro_usuario.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="rectangle">
            <form action="./registro_usuario/create-account" method="POST">
                <label>Nombre(s):</label>
                <input type="text" name="nomUs" autocomplete="off" required/>
                <br>
                <label>Apellido(s):</label>
                <input type="text" name="apellUs" autocomplete="off" required/>
                <br>
                <label>Teléfono:</label>
                <input type="text" name="telUs" autocomplete="off" required/>
                <br>
                <label>Dirección:</label>
                <input type="text" name="dirUs" autocomplete="off" required/>
                <br>
                <label>C.P:</label>
                <input type="text" name="cpUs" autocomplete="off" required/>
                <br>
                <label>Correo Electrónico:</label>
                <input type="text" name="emailUs" autocomplete="off" required/>
                <br>
                <label>Usuario:</label>
                <input type="text" name="Us" autocomplete="off" required/>
                <br>
                <label>Contraseña:</label>
                <input type="text" name="passUs" autocomplete="off" required/>
                <button type="submit" id="enviar_formulario">REGISTRAR</button>
            </form>
            <button id="volver">
                <a href="../">Volver</a>
            </button>
        </div>
    </body>
</html>