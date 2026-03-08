<?php
require_once('db_connect.php');

$connect = mysqli_connect(HOST, USER, PASS, DB)
or die("Cannot connect");

$result = mysqli_query($connect, "SELECT * FROM Teacher")
or die("Cannot execute query");

echo "<h2>Teachers List</h2>";

while($row = mysqli_fetch_array($result))
{
    echo "Teacher ID: ".$row['teacher_id']." | ";
    echo "Name: ".$row['name']." | ";
    echo "Course ID: ".$row['course_id']."<br>";
}

echo "<p><a href=index.php>Home</a>";
?>
