<?php

$f0 = $_GET["f0"]; 
$f1 = $_GET["f1"]; 

require_once('db_connect.php');

$connect = mysqli_connect(HOST, USER, PASS, DB)
or die("Cannot connect");

mysqli_query($connect,
"INSERT INTO Teacher VALUES ('', '$f0', '$f1')")
or die("Cannot execute query");

echo "Teacher inserted:<br> Name = $f0 <br> Course ID = $f1";

echo "<p><a href=read_teachers.php>Read Teachers</a>";

?>
