 <?php
$title=$_POST['title'];
$Summary=$_POST['Summary'];
$article=$_POST['article'];
$date=$_POST['date'];

if (!empty($title) || !empty($Summary) || !empty($date)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword="";
	$dbname="internship_project";

	//create connection
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if (mysqli_connect_error()){
		die('connect Error('.mysqli_errno().')'.mysqli_connect_error());
	}else{
		$SELECT ="SELECT title from article where title= ? AND Summary=? AND article=? AND date=?";   
		$INSERT = "INSERT Into article (title,Summary,article,date) values(?,?,?,?)";

		//prepare statement
		$stmt=$conn->prepare($SELECT);
		print_r($stmt);
		$stmt->bind_param("sssd", $title,$Summary,$article,$date);
		$stmt->execute();
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if($rnum==0){
			$stmt->close(); 

			 $stmt = $conn->prepare($INSERT);
		$stmt->bind_param("sssd", $title,$Summary,$article,$date);
		$stmt->execute();
		echo "New record inserted sucessfully";

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