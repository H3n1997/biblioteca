<?php
session_start();
if($_SESSION['admin']==false){
	if($_SESSION['admin']!=0){
		header('location:index.html');
	}
}
else{
	header('location:index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de Adnministrador</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<header>
		<h1>Panel de Adnministrador</h1>
		<hav>
			<ul class="menu">
				<li>Altas
				<ul class="submenu">
				    <li class="autor">Autor</li>
				    <li class="editorial">Editorial</li>
				    <li class="libro">Libro</li>
				</ul>
				</li>
				<li>Bajas</li>
				<li>Actualizacion</li>
				<li>Cerrar Sesion</li>
			</ul>
		</hav>
	</header>
	<section class="altas">
		<div class="autor">
			<form id="fromAutor">
				<input type="text" placeholder="Nombre del autor" required id="autor">
				<input type="text" placeholder="Nacionalidad" required id="nacionalidad">
				<input type="submit" value="Dar Alta">
			</form>
		</div>
		<div class="editorial">
			<form id="formEditorial">
				<input type="text" placeholder="Editorial" id="nombreEditorial">
				<input type="submit" value="Dar Alta">
			</form>
		</div>
		<div class="libros">
			<form class="formLibros">
				<input type="text" placeholder="titulo" id="titulo">
				<select class="autor">
					<option value="0">Escoga Autor</option>
				</select>
				<select class="editorial">
					<option value="0">Escoga Editorial</option>
				</select>
				<input type="text" placeholder="Categoria" id="categoria">
				<input type="number" placeholder="Precio" id="precio">
				<input type="submit" value="Dar Alta">
			</form>
		</div>
	</section>
	<section class="bajas">
		<form class="bajas-from">
			<input type="text" id="bajas-from-search" placeholder="Busqueda por autor" required>
			<input type="submit" value="Buscar">
		</form>
		<table id="bajas">
			<thead>
				<th>Titulo</th>
				<th>Autor</th>
				<th>Editorial</th>
				<th>Categoria</th>
				<th>Precio</th>
				<th>Eliminar</th>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</section>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="codigo.js"></script>
</body>
</html>