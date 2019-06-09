<?php

$con=mysqli_connect('localhost','root','','project');
if ($con) {
	"connected";
}
else{
	echo "not connected";
}


?>