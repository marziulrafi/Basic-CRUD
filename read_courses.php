<?php
require_once('db_connect.php');

$connect = mysqli_connect(HOST, USER, PASS, DB)
or die("Cannot connect");

$result = mysqli_query($connect, "SELECT * FROM Course")
or die("Cannot execute query");

echo "<h2>Course List</h2>";

while($row = mysqli_fetch_array($result))
{
    echo "Course ID: ".$row['course_id']." | ";
    echo "Title: ".$row['title']."<br>";
}

echo "<p><a href=index.php>Home</a>";
?>
