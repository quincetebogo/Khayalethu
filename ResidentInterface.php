<?php
include 'init.php';
protect_page();
?>
   <head>
  
   <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type ="text/css">
   <link href="bootstrap/css/Custom-Cs.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<meta charset= "UTF-8">

	<nav class="navbar  navbar-inverse navbar-fixed-top" >
		<div class = "container-fluid">
		<div class="navbar-header">

		<ul class="nav navbar-nav">
		<?php
			if(userLogin($_SESSION['username'], $_SESSION['password']) == true)
			{

		?>
			<li><a href="ResidentHome.php">Home</a></li>
			<li><a href="ViewBalance.php">Financial Statments</a></li>
			<li><a href="Announcements.php">Announcements</a></li>
			<li><a href="Profile.php">Update Profile</a></li>
			<li><a href="LodgeComplaint.php">Lodge Complaint</a></li>
	

		</ul>	
	</div>
		<ul class="nav navbar-nav navbar-right">
			<!--<button type="button" name ="login" id="login" class="btn btn-success" data-toggle = "modal" data-target = "#loginModal" >Login</button>-->

			<li><a href="SessionDestroy.php" >Logout</a></li>

		</ul>
		<?php
			}
			else 

			{
		?>
		<ul class="nav navbar-nav navbar-right">
			<!--<button type="button" name ="login" id="login" class="btn btn-success" data-toggle = "modal" data-target = "#loginModal" >Login</button>-->

			<li><a href="#loginModal" data-toggle="modal" data-target="#loginModal">Login</a></li>
		</ul>

		<?php
		}
		?>
		</div>
	</nav> 	
   
<!--Beginning of Modal-->
