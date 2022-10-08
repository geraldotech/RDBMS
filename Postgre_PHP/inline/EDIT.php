<?php
$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");
$inserir = pg_query($cn, "UPDATE COMPANY SET city='Palmeira' WHERE city='freitas';");
if($inserir){
	echo 'Editado!';
}
?>