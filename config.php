<?php
$server="localhost";
$user="root";
$pass="";
$database="loginsystem";

 $con= mysqli_connect($server,$user,$pass,$database);
 if(!$con)
 {
die("connection failed to database due to". mysqli_connect_error());
 }
//echo "Conection successful";

?>