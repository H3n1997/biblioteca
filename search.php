<?php
include 'conecta.php';
$autor=$_GET['autor'];
$query="select id from autores where nombre='$autor'";
$resultados=mysql_query($query);
if($persona=mysql_fetch_array($resultados)){
	$id=$persona['id'];
	$query="select * from libros where id_autor=$id";
	$resultados=mysql_query($query);
	while ($libros=mysql_fetch_array($resultados)) {
		$arreglo=array('id'=>$libros['id'],'idAutor'=>$libros['id_autor'],'titulo'=>$libros['titulo'],'idEditorial'=>$libros['id_editorial'],'categoria'=>$libros['categoria'],'precio'=>$libros['presio']);
	}
}

echo json_encode($arreglo);
?>
