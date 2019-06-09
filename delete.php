<?php
include('dataconnect.php');
$id =$_GET['id'];
$q="DELETE FROM blood WHERE id=$id";
mysqli_query($con,$q);
header('location: viewrequest.php');





?>