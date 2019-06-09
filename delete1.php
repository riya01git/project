<?php
include('dataconnect.php');
$id =$_GET['id'];
$q="DELETE FROM hospital WHERE id=$id";
mysqli_query($con,$q);
header('location: viewrequest.php');





?>