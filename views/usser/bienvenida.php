<html>
    <head>
        <title>Puppy Rescue: Registro de Mascota</title>
        <link href="../assets/css/bienvenida.css" rel="stylesheet" type="text/css">
        <LINK href="../assets/css/menu.css" rel="stylesheet" type="text/css">
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
    </body>
</html>