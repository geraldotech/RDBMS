<?php
$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");

$query ="select * from company";
$result = pg_query($query);
//while ($row = pg_fetch_object($result))

//{

//echo "<br />Nome: ". $row -> name."<br>City: ".$row->city."<br>Status: ".$row->status.'<hr>';

//}
//pg_close($cn);
?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;text-align: center;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th> Name </th> 			  
			  <th> City </th> 			  
		</tr> 
		
		<?php while($row=pg_fetch_object($result)) 
		{ 
		?> 
		<tr> <td><?php echo $row -> name; ?></td> 
		<td><?php echo $row -> city ?></td>  
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>