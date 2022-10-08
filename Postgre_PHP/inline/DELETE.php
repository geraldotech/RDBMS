<?php
$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");

$deleted = pg_query($cn, "DELETE FROM COMPANY WHERE NAME = 'NOICE';");
if($deleted){
	echo "deleted!";
}
?>