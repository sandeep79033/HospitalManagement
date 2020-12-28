<?php 

$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpass = "sandeep"; 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass); 
if(!$conn ) { 
	die('Could not connect: ' . mysqli_error($conn )); 
} 
$sql = 'SELECT * FROM hospital'; 
mysqli_select_db($conn,'medicalinfo'); 
$retval = mysqli_query($conn,$sql); 
if(! $retval ) { 
	die('Could not get data: ' . mysqli_error($conn )); 
} 
$emparray = array();
while($row = mysqli_fetch_assoc($retval)) 
{ 
 $emparray['hosdetails'][] = $row;
	 
} 

$result=json_encode($emparray);
echo $result;
return $result;


?>
