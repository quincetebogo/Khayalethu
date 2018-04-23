<?php
session_start();


require ('Connect.php');
require ('Users.php');
require ('General.php');

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
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		
		<?php
			if(1 == 1)
			{

		?>
		<div class="collapse navbar-collapse" id ="myNavbar">
			<ul class="nav navbar-nav">
			<li><a href="AdminHome.php">Home</a></li>
			
			<li><a href="RecordPayments.php">Record payments</a></li>
			<li><a href="ViewFinancialStatements.php">Financial statements</a></li>
			<li><a href="Complaints.php">Complaints</a></li>

			<li><a href="PostAnnouncements.php">Post announcements</a></li>
			<li><a href="Announcements.php">View announcements</a></li>
			<li><a href="DeleteAnnouncements.php">Delete announcements</a></li>
			<li><a href="ProcessApplications.php">Process New Applications</a></li>
			<!--
			<li><a href="ProcessChangeRoon.php">Room change applications</a></li>
			
			<li><a href="SignOut.php">Sign resident out</a></li>-->
	

		</ul>
		</div>	

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

<style type="text/css">
	
   .bg
        {

        background-image: url("images/20.jpg"); 

        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;
        }

         .logContainer
        {
            width: 95%;
            min-height: 100%;
            height: relative;
            background-color: rgba(255,255,255,0.8);
            border-radius: 4px;
            margin-left: 3%;
            
        }
        .txtAlign
        {
        	margin-left: 15%;

        }

</style>