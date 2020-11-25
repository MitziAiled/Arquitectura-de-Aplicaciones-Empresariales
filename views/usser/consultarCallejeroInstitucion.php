<html>
    <head>
        <title>Puppy Rescue: Consulta de Callejeros</title>
        <link href="../assets/css/consultar_callejero.css" rel="stylesheet" type="text/css">
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
						<li><form action="./consultaCallejero"> <button id="btn_consultar">Consultar</button></form></li>
					</ul>
                </li>
				<li><a href="">INSTITUCI&Oacute;N</a>
                    <ul>
						<li><form action="./consultaInstitucion2"><button>Modificar Datos</button></form></li>
					</ul>
                </li>
                <li>
                    <form action="./logout" method="POST">
                        <button type="submit" value="Log out" onclick="return confirmLogout()">Cerrar Sesion</button>
                    </form>
                </li>
			</ul>
		</div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>Rasgos F&iacute;sicos</th>
                    <th>Condici&oacute;n del canino</th>
                </tr>
            </thead>
            <tbody>
            <!--?php foreach ($this->caninos as $canino) { ?>
                <tr>
                  <td><php echo $canino->getID(); ?></td>  
                  <td><php echo $canino->getCalle(); ?></td>
                  <td><php echo $canino->getColonia(); ?></td>
                  <td><php echo $canino->getRasgo(); ?></td>
                  <td><php echo $canino->getCondicion(); ?></td>      
                </tr>
              <php } ?--> 
            </tbody>
        </table>
    </body>
</html>