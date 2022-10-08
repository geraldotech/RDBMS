<?php
$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");
$inserir = pg_query($cn, "INSERT INTO COMPANY (NAME,CITY) VALUES ('OROCHI2','ALAGOAS');");
if($inserir){
	echo 'Valor inserido!';
}
?>