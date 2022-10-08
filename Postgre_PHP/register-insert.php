<?php
$hostname = "localhost"; //hostname
$dbname = "pessoas"; //database name
$username = "postgres"; //username
$pass = "masterx"; //password

// Create connection
$db_conn = pg_connect(" host = $hostname dbname = $dbname user = $username password = $pass ");

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $address = $_POST['lastname'];

    $query = pg_query($db_conn, "INSERT  INTO COMPANY(name, city) VALUES ('$fname','$address');");
    if ( $query ) {
        echo  "Record Successfully Added!";
    }
}
?>