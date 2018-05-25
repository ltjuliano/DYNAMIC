<?php

$link = mysqli_connect("localhost","lea","lea","menagerie");

if ($link){
	print "Go to <a href = homepage.html> HOMEPAGE <a>";
}
else {
	print "failed to connect";
}

?>
