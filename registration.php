<?php

session_start();
header('location:login.php');

$con=mysqli_connect('localhost','root');
if ($con) {
echo "connection succesfull";
}
else{
	echo "not succesfull";
}

mysqli_select_db($con,'sessionpractical');

$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from signin where name='$name' and password='$pass'";

$result=mysqli_query($con,$q);


$num=mysqli_num_rows($result);

if($num==1){

	echo "duplicate data"; 
}
else{
	$qy="insert into signin(name,password) values('$name','$pass')";
	mysqli_query($con,$qy);
}




  ?>