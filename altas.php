<?php
include 'conecta.php';
$tipo=$_POST['tipo'];
if($tipo==0){
	$autor=$_POST['autor'];
	$nacionalidad=$_POST['pais'];
	$query="insert into autores(nombre,nacionalidad)values('$autor','$nacionalidad')";	
}
elseif($tipo==1){
	$editorial=$_POST['editorial'];
	$query="insert into editoriales(nombre)values('$editorial')";
}
elseif ($tipo==2){
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	$editorial=$_POST['editorial'];
	$categoria=$_POST['categoria'];
	$precio=$_POST['precio'];
	$query="insert into libros(titulo,id_autor,id_editorial,categoria,presio)values('$titulo','$autor','$editorial','$categoria','$precio')";
}
mysql_query($query);
?>