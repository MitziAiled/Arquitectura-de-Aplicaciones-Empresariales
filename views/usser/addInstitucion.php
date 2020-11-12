<html>
    <head>
        <title>Puppy Rescue: Registro de Mascota</title>
        <link href="../assets/css/add_institucion.css" rel="stylesheet" type="text/css">
        <LINK href="../assets/css/menu.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
			function confirmLogout() {
				if(confirm('¿Deseas cerrar sesion?')) {
					return true;
				}
				else {
					return false;
				}
			}

		</script>
    </head>
    <body>
        <div id="menu">
			<ul class="nav">
                <li>
                    <a href="">ADOPCIONES</a>
                </li>
                <li><a href="">CALLEJEROS</a>
                    <ul>
						<li><form action="./registrarCallejero"><button>Registrar</button></form></li>
						<li><form action="./consultaCallejero"> <button>Consultar</button></form></li>
						<li><form action="./consultaCallejero2"><button>Adoptar</button></form></li>
					</ul>
                </li>
				<li><a href="">INSTITUCI&Oacute;N</a>
                    <ul>
                        <li><form action="./consultaInstitucion"><button>Consultar</button></form></li>
						<li><form action="./consultaInstitucion2"><button>Modificar Datos</button></form></li>
					</ul>
                </li>
                <li><a href="">USUARIO</a>
                    <ul>
                        <li>
                            <form action="./perfilUsuario"><button>Perfil</button></form>
                        </li>
                        <li>
                            <form action="./logout" method="POST">
						        <button type="submit" value="Log out" onclick="return confirmLogout()">Cerrar Sesion</button>
					        </form>
                        </li>
                    </ul>
                </li>
			</ul>
		</div>
        <div id="rectangle1">
            <form action="
				<!--?php 
				if($institucion->getID() == null) {
					echo './add-institucion';
				} 
				else {
					echo './updateInstitucion';
				}
				?-->" 
                method="POST">
                <label>INSTITUCIÓN:</label>
                <br><br>
                <label>Nombre:</label>
                <input type="hidden" name="id" value="">
                <input type="text" name="nomInst" id="nombre" value=""/>
                <br>
                <label>Dirección:</label>
                <input type="text" name="dirInst" id="direccion" value=""/>
                <br>
                <label>Teléfono:</label>
                <input type="text" name="telInst" id="telefono" value=""/>
                <br>
                <label>Código Postal:</label>
                <input type="text" name="cp" id="cp" value=""/>
        </div>
        <div id="rectangle2">
                <label>REPRESENTANTE:</label>
                <br><br>
                <label>Nombre Completo:</label>
                <input type="text" name="nomRep" id="nombre" value=""/>
                <br>
                <label>Cargo:</label>
                <input type="text" name="cargo" id="Cargo" value=""/>
                <br>
                <label>Tipo de Institución:</label>
                <input type="text" name="tipoInst" id="TipoInst" value=""/>
                <br>
                <label>Ident. Tributaria:</label>
                <input type="text" name="ideTrib" id="IdTrib" value=""/>
        </div>
                <input id="enviar_formulario" type="submit" value="Enviar Datos"/>
            </form>
    </body>
</html>