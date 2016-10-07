<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Biblioteca</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sistema de Biblioteca</h1>
	</header>
	<section>
		<table>
			<thead>
				<th>Nombre</th>
				<th>Nacionalidad</th>
			</thead>
			<tbody>
				<?php
				$conecta=mysql_connect('localhost','root','') or die('tu jefa no se pudo conectar'.mysql_error());
				mysql_select_db('biblioteca') or die('No cargo la BD');
				$consulta='select * from autores';
				$resultado=mysql_query($consulta);

				while ($arreglo=mysql_fetch_array($resultado)){
					echo '<tr><td>'.$arreglo['nombre'].'</td><td>'.$arreglo['nacionalidad'].'</td></tr>';
				}
				?>
			</tbody>
		</table>
	</section>
</body>
</html>