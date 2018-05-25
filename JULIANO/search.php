<?php

include_once ("login.php");
require ("homepage.html");

$mood = $_POST ['mood'];

$query = ("SELECT * FROM journal WHERE mood = \"$mood\"");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows ($result);

print "<p><br>There is/are $num_rows row/s.</p>";
echo "<br>";
echo "<br>";

print "<table border='1'\n";
while ($a_row = mysqli_fetch_row($result))
{
print "<tr>\n";
foreach ($a_row as $field){
print "\t<td>".$field."</td>\n";
}
print "<tr>\n";
}
print "</table>\n";



?>