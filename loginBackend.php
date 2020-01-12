 <?php
$uname=$_POST['uname'];
$psw=$_POST['psw'];

if (!empty($uname) || !empty($psw) ){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="nisarg";

	//create connection
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if (mysqli_connect_error()){
		die('connect Error('.mysqli_errno().')'.mysqli_connect_error());
	}else{
		$SELECT ="SELECT Username from login where Username= ? AND Password=? Limit 1";   
		$INSERT = "INSERT Into login (Username,Password) values(?,?)";

		//prepare statement
		$stmt=$conn->prepare($SELECT);
		print_r($stmt);
		$stmt->bind_param("ss", $uname,$psw);
		$stmt->execute();
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if($rnum==0){
			$stmt->close(); 

			 $stmt = $conn->prepare($INSERT);
		$stmt->bind_param("ss",$uname,$psw);
		$stmt->execute();
		echo "New record inserted sucessfully";
		$message = "Respond Submitted";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:http://localhost/login.html?mg=$message?");

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