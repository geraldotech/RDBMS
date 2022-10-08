<?php

//after execution open this url
header('Location: http://127.0.0.1/Dev/PHP/sql/postgre/deletef-form.html');

if(isset($_POST['btn'])){
	$user = $_POST['user'];
}

$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");

$deleted = pg_query($cn, "DELETE FROM COMPANY WHERE name = '$user';");
if($deleted){
	echo ('apagado');
} 
?>