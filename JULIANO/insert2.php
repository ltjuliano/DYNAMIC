<html>

<?php
require("homepage.html");

?>
<form method="POST" action="insert.php">
<p>
Date (yyyy-mm-dd): <input type="text" name="date">
<br></p>
<p>
Day (M,T,W,Th,F,Sat, Sun):<input type="text" name="day">
<br></p>
<p>
Activity: <input type="text" name="activity">
<br></p>
<p>
Mood: <input type="text" name="mood">
<br></p>
<p>
Entry: <input type="text" name="entry">
<br></p>

<input type="submit" value="submit">

</form>

</html>