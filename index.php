<?php 
session_start();
$query= "select *  from visitors";
$result=mysqli_query($query);
?>
<!DOCTYPE html>
<head>
	<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
	<link rel="stylesheet" href="css/morris.css" type="text/css"/>
	<!-- calendar -->
	<link rel="stylesheet" href="css/monthly.css">
	<!-- //calendar -->
	<!-- //font-awesome icons -->
	<script src="js/jquery2.0.3.min.js"></script>
	<script src="js/raphael-min.js"></script>
	<script src="js/morris.js"></script>
</head>
<body>
	<section id="container">
	<!--header start-->
	<header class="header fixed-top clearfix">
	<!--logo start-->
	<div class="brand">
	    <a href="index.html" class="logo">
	        VISITORS
	    </a>
	    <div class="sidebar-toggle-box">
	        <div class="fa fa-bars"></div>
	    </div>
	</div>
	<!--logo end-->

	        <!-- settings end -->

	        <!-- inbox dropdown end -->
	        <!-- notification dropdown start-->
	   
	               
	             
	        <!-- notification dropdown end -->
	    </ul>
	    <!--  notification end -->
	</div>
	<div class="top-nav clearfix">
	    <!--search & user info start-->
	    <ul class="nav pull-right top-menu">
	        
	        <!-- user login dropdown start-->
	        <li class="dropdown">
	            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
	                <img src="/admin.png">
	                <span class="username">Admin</span>
	                <strong class="caret"></strong>
	            </a>
	            <ul class="dropdown-menu extended logout">
	                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
	                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
	               <!--  <li><button onclick="logout()"><a href="finalLogin.php"><i class="fa fa-key"></i>  Log Out </a></button></li> -->
	               <a href="finalLogin.php" onclick="<?php session_destroy();?>">Logout</a>

	            </ul>
	        </li>
	        <!-- user login dropdown end -->
	       
	    </ul>
	    <!--search & user info end-->
	</div>
	</header>
	<!--header end-->
	<!--sidebar start-->
	<aside>
	    <div id="sidebar" class="nav-collapse">
	        <!-- sidebar menu start-->
	        <div class="leftside-navigation">
	            <ul class="sidebar-menu" id="nav-accordion">
	                <li>
	                    <a class="active" href="index.html">
	                        <i class="fa fa-dashboard"></i>
	                        <span>Dashboard</span>
	                    </a>
	                </li>
	                
	                <li class="sub-menu">
	                    <a href="javascript:;">
	                        <i class="fa fa-book"></i>
	                        <span>Visitor Pass </span>
	                    </a>
	                    <ul class="sub">
							<li><a href="Generate.php">Generate Pass</a></li>
	                    </ul>
	                </li>
	               
	       
	         
	                <li class="sub-menu">
	                    <a href="javascript:;">
	                        <i class="fa fa-th"></i>
	                        <span>Data Tables</span>
	                    </a>
	                    <ul class="sub">
	                        <li><a href="basic_table.html">Basic Table</a></li>
	                        <li><a href="responsive_table.html">Responsive Table</a></li>
	                    </ul>
	                </li>
	                
	                
	                <li class="sub-menu">
	                    <a href="javascript:;">
	                        <i class=" fa fa-bar-chart-o"></i>
	                        <span>Backup</span>
	                    </a>
	                    
	                </li>
	                
	                
	                       </div>
	        <!-- sidebar menu end-->
	    </div>
	</aside>
	<!--sidebar end-->
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			<!-- //market-->
			<div class="market-updates">
				<div class="col-md-3 market-update-gd">
					<div class="market-update-block clr-block-2">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-eye"> </i>
						</div>
						 <div class="col-md-8 market-update-left">
						 <h4>ToatalVisitors</h4>
						<h3>13,500</h3>
						<p>Other hand, we denounce</p>
					  </div>
					  <div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 market-update-gd">
					<div class="market-update-block clr-block-1">
						<div class="col-md-4 market-update-right">
							<i class="fa fa-users" ></i>
						</div>
						<div class="col-md-8 market-update-left">
						<h4>Today's Visitors</h4>
							<h3>1,250</h3>
							<p>Other hand, we denounce</p>
						</div>
					  <div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 market-update-gd">
					<div class="market-update-block clr-block-3">
						<div class="col-md-4 market-update-right"><em class="fa fa-usd"></em></div>
						<div class="col-md-8 market-update-left">
							<h4>In Campus</h4>
							<h3>1,500</h3>
						  <p>Other hand, we denounce</p>
						</div>
					  <div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 market-update-gd">
					<div class="market-update-block clr-block-4">
						<div class="col-md-4 market-update-right"><em class="fa fa-shopping-cart" aria-hidden="true"></em></div>
						<div class="col-md-8 market-update-left">
						  <h4>Leave Campus</h4>
						  <h3>1,500</h3>
							<p>Other hand, we denounce</p>
					  </div>
					  <div class="clearfix"> </div>
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>	
			<!-- //market-->
			<div class="row">
				<div class="panel-body">
					<div class="col-md-12 w3ls-graph">
						<!--agileinfo-grap-->
						
							<div class="agileinfo-grap">
								<div class="agileits-box">
									<header class="agileits-box-header clearfix">
										<h3>Recent Visitors </h3>
												<table align="center"   border="1px" style="width: 600px ;line-height: 40px">
													<t>
														<th>FNAME</th>
														<th>FNAME</th>
														<th>FNAME</th>
													</t>
													<?php 
													while ($rows=mysql_fetch_assoc($result)) {
													?><tr><td>
														<?php echo $rows['FNAME']; ?>
													</td></tr>
													<?php  
													}
													?>
												</table>
											
											 	
											</div>
									</header>
									<div>
									  <div ></div>
									</div>
								</div>
							</div>
		<!--//agileinfo-grap-->

					</div>
				</div>
			</div>
		
				<!-- tasks -->
				
						
							

						</div>
					</div>
				
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //tasks -->
			<div class="agileits-w3layouts-stats">

					
					</div>
	</section>
	 <!-- footer -->
			  <div class="footer">
				<div class="wthree-copyright">
				  <p>© 2018 Visitors. All rights reserved |  </p>

			  </div>
	  <!-- / footer -->
	</section>
	<!--main content end-->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/jquery.slimscroll.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
	<script src="js/jquery.scrollTo.js"></script>
	<!-- morris JavaScript -->	
	<script>
		$(document).ready(function() {
			//BOX BUTTON SHOW AND CLOSE
		   jQuery('.small-graph-box').hover(function() {
			  jQuery(this).find('.box-button').fadeIn('fast');
		   }, function() {
			  jQuery(this).find('.box-button').fadeOut('fast');
		   });
		   jQuery('.small-graph-box .box-close').click(function() {
			  jQuery(this).closest('.small-graph-box').fadeOut(200);
			  return false;
		   });
		   
		    //CHARTS
		    function gd(year, day, month) {
				return new Date(year, month - 1, day).getTime();
			}
			
			graphArea2 = Morris.Area({
				element: 'hero-area',
				padding: 10,
	        behaveLikeLine: true,
	        gridEnabled: false,
	        gridLineColor: '#dddddd',
	        axes: true,
	        resize: true,
	        smooth:true,
	        pointSize: 0,
	        lineWidth: 0,
	        fillOpacity:0.85,
			
				lineColors:['#eb6f6f','#926383','#eb6f6f'],
				xkey: 'period',
	            redraw: true,
	            ykeys: ['iphone', 'ipad', 'itouch'],
	            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
				pointSize: 2,
				hideHover: 'auto',
				resize: true
			});
			
		   
		});
		</script>
	<!-- calendar -->
		<script type="text/javascript" src="js/monthly.js"></script>
		<script type="text/javascript">
			$(window).load( function() {

				$('#mycalendar').monthly({
					mode: 'event',
					
				});

				$('#mycalendar2').monthly({
					mode: 'picker',
					target: '#mytarget',
					setWidth: '250px',
					startHidden: true,
					showTrigger: '#mytarget',
					stylePast: true,
					disablePast: true
				});

			switch(window.location.protocol) {
			case 'http:':
			case 'https:':
			// running on a server, should be good.
			break;
			case 'file:':
			alert('Just a heads-up, events will not work when run locally.');
			}

			});
		</script>
	<!-- //calendar -->
	<script type="text/javascript">
// 		}
	</script>
</body>
</html>
