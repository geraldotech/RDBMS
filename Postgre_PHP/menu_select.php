<form method="post">

Name: <input type="name" name="user" required> <br><br>
City: <input type="name" name="local" >
<select name="opt">
<option value="1">Action</option>
<option value="2">Insert</option>D
<option value="3">Delete</option>D
	</select>
<input type="submit" name="sent" value="Confirmar">

</form>

<button onclick="location.reload()">reload</button>
<?php

//base para se conectar ao databse
$connect = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");

if(isset($_POST['sent'])){
	$name = $_POST['user'];
	$cit = $_POST['local'];

	$opt = $_POST['opt'];
if ($opt === '2'){
	pg_query($connect,"INSERT INTO COMPANY (NAME,CITY) VALUES ('$name','$cit');");
} else if ($opt === '3') {
	pg_query($connect, "DELETE FROM COMPANY WHERE NAME = '$name';");
} else {
	echo 'selecionar!';
}
}

?>