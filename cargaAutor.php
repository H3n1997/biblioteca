<?php
include 'conecta.php';
$query="select * from autores";
$resultado=mysql_query($query);
$autores=array();
$macedo=0;
while ($campos=mysql_fetch_array($resultado)) {
	$autores[$macedo]=array('id'=>$campos['id'],'nombre'=>$campos['nombre']);
	$macedo=$macedo+1;
}
echo json_encode($autores);
?>