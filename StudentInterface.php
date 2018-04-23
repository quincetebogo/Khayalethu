<?php
include 'init.php';

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
			if(logged_in() == true)
			{
			if(userLogin($_SESSION['username'], $_SESSION['password']) == true)
			{

		?>
			<li><a href="#">Home</a></li>
			<li><a href="#">Check Application Status</a></li>
			<li><a href="#">Gallery</a></li>
		</ul>	
	</div>
		<ul class="nav navbar-nav navbar-right">
			<!--<button type="button" name ="login" id="login" class="btn btn-success" data-toggle = "modal" data-target = "#loginModal" >Login</button>-->

			<li><a href="SessionDestroy.php">Logout</a></li>

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
	}
		else 
		{
			    echo"<script> window.location.href = 'Login.php'; </script>";
		}
		?>
		</div>
	</nav> 	
   
<!--Beginning of Modal-->
