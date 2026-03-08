<?php

$teacher_id = $_GET["teacher_id"];
$course_id = $_GET["course_id"];

require_once('db_connect.php');

$connect = mysqli_connect(HOST, USER, PASS, DB)
or die("Cannot connect");

mysqli_query($connect,
"UPDATE Teacher SET course_id='$course_id' WHERE teacher_id='$teacher_id'")
or die("Cannot execute query");

echo "Teacher assigned to course successfully.";

echo "<p><a href=index.php>Home</a>";

?>
