<?php
include 'conecta.php';
$id=$_POST['id'];
$query="delete from libros where id=$id";
mysql_query($query);
?>