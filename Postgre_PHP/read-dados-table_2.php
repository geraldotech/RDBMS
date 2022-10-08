<?php
$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");

$result = pg_query($cn, "select * from company");
while ($row = pg_fetch_object($result))

{

echo "<br />Nome: ". $row -> name."<br>City: ".$row->city."<br>Status: ".$row->status.'<hr>';
	
}
pg_close($cn);

?>