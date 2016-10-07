<?php
include 'conecta.php';
$query="select * from editoriales";
$resultado=mysql_query($query);
$editoriales=array();
$macedo=0;
while ($campos=mysql_fetch_array($resultado)) {
	$editoriales[$macedo]=array('id'=>$campos['id'],'nombre'=>$campos['nombre']);
	$macedo=$macedo+1;
}
echo json_encode($editoriales);
?>