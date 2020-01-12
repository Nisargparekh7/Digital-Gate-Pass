<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
	<title>GatePass</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font.css" type="text/css"/>
	<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
	<script src="js/jquery2.0.3.min.js"></script>
	<style type="text/css">
	#b{
		width: 30%
	}
</style>

</head>
<body>
<center><br><br><br><br>
	<!-- <div class="log-w3">
	<div class="w3layouts-main">
	 -->
<h2>Welcome To Charusat</h2>
	 <br> 
<hr width="450" >
<h3>Visitor's Pass</h3>
<hr width="450"><br>
<form id="b" >
	<input type="text" class="ggg"  name="vname" placeholder="Visitor's name" value="<?php echo($_SESSION['vname']) ?>"   disabled><br><br>
	<input type="text" name="vname" class="ggg"  placeholder="Visitor's Place" value="<?php echo( $_SESSION['city']) ?>" disabled><br><br>
	<input type="text" name="vname" class="ggg"  placeholder="Visitor's Intime" value="<?php date_default_timezone_set("Asia/Kolkata");
echo " " . date("h:i:sa"); ?>" disabled><br><br>
	<input type="text" name="vname" class="ggg"  placeholder="Visitor's Outtime" disabled><br><br>

	<input type="text" name="vname" class="ggg"  placeholder="date" value="<?php echo "" . date("d/m/Y")  ;
?>" disabled><br><br>
</form>	
</center>



</body>
</html>