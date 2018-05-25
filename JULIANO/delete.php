<?php

include_once ("login.php");
require ("homepage.html");

$date = $_POST ['date'];
$activity = $_POST ['activity'];
$query = ("DELETE FROM journal WHERE date = \"$date\" && activity =\"$activity\"");



print "<p><br>$activity on $date has been successfully deleted.</p>";
mysqli_query($link, $query);



?>