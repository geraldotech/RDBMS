<?php 
//codigo funcionando
$host = "localhost"; 
$user = "postgres"; 
$pass = "masterx"; 
$db = "pessoas"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "SELECT VERSION()"; 
$rs = pg_query($con, $query) or die("Cannot execute query: $query\n"); 
$row = pg_fetch_row($rs);

echo $row[0] . "\n";

$name = 'performance2';

$query = "INSERT INTO COMPANY VALUES(59,'$name',21606)"; 
pg_query($con, $query) or die("Cannot execute query: $query\n"); 

pg_close($con); 

?>