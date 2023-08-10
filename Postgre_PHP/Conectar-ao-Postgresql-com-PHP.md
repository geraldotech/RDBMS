Arquivo para testar conexão com o servidor:

```php
<?php
$cn = pg_connect("host=localhost port=5432 dbname=filmes user=postgres password=masterx");
if($cn)
{
	echo "connected";
}
?>
```

Ler dados do servidor:

```php
<?php
$cn = pg_connect("host=localhost port=5432 dbname=DATABASE user=postgres password=password");

$result = pg_query($cn, "select * from company");
while ($row = pg_fetch_object($result))
{

echo "<br />Nome: ". $row -> name."<br>Address: ".$row->address."<br>Status: ".$row->status;	
}
pg_close($cn);

?>
```
DELETE DADOS

```php
<?php
$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");
pg_query($cn, "DELETE FROM COMPANY WHERE name = 'Geraldo';");
?>
```
INSERT DADOS

```php
<?php
$cn = pg_connect("host=localhost port=5432 dbname=pessoas user=postgres password=masterx");
$inserir = pg_query($cn, "INSERT INTO COMPANY (NAME,CITY) VALUES ('OROCHI2','ALAGOAS');");
if($inserir){
	echo 'Valor inserido!';
}
?>

```

- https://www.youtube.com/watch?v=jUNYkgjysK8&list=PL_VP_qub8HfIva3X7o4FbRqoqg9K-s8z4&index=2
- https://stackoverflow.com/questions/18907868/call-to-undefined-function-pg-connect-wamp
- https://stackoverflow.com/questions/15722313/cant-connect-to-postgres-from-php-call-to-undefined-function-pg-connect
- https://kb.objectrocket.com/postgresql/create-a-file-php-in-postgres-to-insert-in-web-app-1257


