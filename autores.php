<?php
$conecta=mysql_connect('localhost','root','') or die('tu jefa no se pudo conectar'.mysql_error());
mysql_select_db('biblioteca') or die('No cargo la BD');
$consulta='select * from autores';
$resultado=mysql_query($consulta);

while ($arreglo=mysql_fetch_array($resultado)){
	$asoc = array('nombre'=>$arreglo['nombre']);
}
echo json_encode($asoc);
?>