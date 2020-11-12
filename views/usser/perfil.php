<html>
    <head>
        <title>Puppy Rescue: Perfil</title>
        <link href="../assets/css/perfil.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="rectangle">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>
                            <label>Nombre(s):</label>
                            <input type="text" class="nomUs" name="nomUs" autocomplete="off" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Apellido(s):</label>
                            <input type="text" class="apellUs" name="apellUs" autocomplete="off" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Teléfono:</label>
                            <input type="text" class="telUs" name="telUs" autocomplete="off" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Dirección:</label>
                            <input type="text" class="dirUs" name="dirUs" autocomplete="off" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>C.P:</label>
                            <input type="text" class="cpUs" name="cpUs" autocomplete="off" required/>
                            <label>Contraseña:</label>
                            <input type="text" class="passUs" name="passUs" autocomplete="off" required/>
                       </td> 
                    </tr>
                </table>
                <button type="submit" id="modificar_formulario">Modificar</button>
            </form>
            <br><br>
            <button id="volver">
                <a href="login.php">Volver</a> <!--Verificar si esto es correcto ya que antes era "../"-->
            </button>
        </div>
    </body>
</html>