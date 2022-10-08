<?php


$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");
if($cn)
{
	echo "connected";
}



?>