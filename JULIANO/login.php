<?php

$link = mysqli_connect("sql103.byethost.com","b22_22135537","lealyn98","b22_22135537_moodtracker");

if ($link){
	print "Go to <a href = homepage.html> HOMEPAGE <a>";
}
else {
	print "failed to connect";
}

?>
