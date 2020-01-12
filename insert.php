 <?php
$FName=$_POST['FName'];
$LName=$_POST['LName'];
$email=$_POST['email'];
$PHONE=$_POST['PHONE'];
$Username=$_POST['uname'];
$Password=$_POST['psw'];
if (!empty($FName) || !empty($LName) || !empty(PHONE)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="nisarg";

	//create connection
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if (mysqli_connect_error()){
		die('connect Error('.mysqli_errno().')'.mysqli_connect_error());
	}else{
		$SELECT ="SELECT email from admin where email= ? Limit 1";   
		$INSERT = "INSERT Into admin (FName,LName,email,PHONE,Username,Password) values(?,?,?,?,?,?)";

		//prepare statement
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if($rnum==0){
			$stmt->close(); 

			 $stmt = $conn->prepare($INSERT);
		$stmt->bind_param("sssiss",$FName,$LName,$email,$PHONE,$Username,$Password);
		$stmt->execute();
		//echo "New record inserted sucessfully";
		//$message = "Respond Submitted";
		echo "<script> location.href='finalLogin.php'; </script>";
		//header("location:http://localhost/nisarg1.html?mg=$message?");

		}else{
			echo "Sombody already register using this.";
		}

	$stmt->close();
		$conn->close();}

}
else{
	echo "ALL field are required";
	die();
}
   
 ?>