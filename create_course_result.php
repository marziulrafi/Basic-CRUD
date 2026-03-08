<?php

$f0 = $_GET["f0"];

require_once('db_connect.php');

$connect = mysqli_connect(HOST, USER, PASS, DB)
or die("Cannot connect");

mysqli_query($connect,
"INSERT INTO Course VALUES ('', '$f0')")
or die("Cannot execute query");

echo "Course inserted:<br> Title = $f0";

echo "<p><a href=read_courses.php>Read Courses</a>";

?>
