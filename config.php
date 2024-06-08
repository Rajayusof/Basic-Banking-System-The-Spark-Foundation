<?php 

$server="myserver32327.database.windows.net,1433";
$username="sqladmin";
$password="admin98_";
$db="sparks_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
