<?php

include_once ("login.php");
require ("homepage.html");


$date = $_POST['date'];
$activity= $_POST ['activity'];
$entry2 = $_POST ['entry2'];

$query = ("UPDATE journal SET entry = '$entry2' WHERE date = '$date'&& activity = '$activity'");
$result = mysqli_query($link, $query);

print "<p><br>Successfully updated entry.</p>";


?>