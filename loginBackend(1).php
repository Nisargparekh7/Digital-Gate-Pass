<?php

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="nisarg";

	//create connection
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname) ;

if (mysqli_connect_error()){
		die('connect Error('.mysqli_errno().')'.mysqli_connect_error());
	}
 
if(isset($_POST['uname'])){

	$uname=mysqli_real_escape_string($conn,$_POST['uname']);
	$psw = mysqli_real_escape_string($conn,$_POST['psw']);
	
	$sql = "select   *  from admin where Username='".$uname."' AND Password= '".$psw."' limit 1";

	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		echo "<script> location.href='index.php'; </script>";
	
	}
	else {
	echo "You have Entered Incorrect data";
	}
}


?> 