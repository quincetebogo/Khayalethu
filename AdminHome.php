<?php
include 'AdminInterface.php';
 if (1 == 1 )
        {
        header('Location: Login.php');
        
        exit();
        }
?>

<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Home</title>
</head>
<body>

</style>

<div class="container-fluid">
	<div class ="logContainer">
<h3>Welcome back </h3> 
<h2><? 


?></h2>


<br/>
<div class="row">
<div class ="col-sm-8">

<div class = "row" style ="text-align: center;">
<br/>
		<div class="col-lg-4">
			

			<a  href ="ChangeRoom.php" target="_blank"> <img src="images/ChangeRoom.png" style="height: 150px; width: 150px"></a>
			
			
			<a  href ="ChangeRoom.php" target="_blank"> <h2> Change Room </h2></a>
		</div>

		<div class="col-lg-4">
			<div style="color: black">

			<a href="ViewBalance.php" target="_blank"><img src="images/Balance.png" style="height: 150px; width: 150px; border-color: black;"></a>

			</div>
			
			<a href ="ViewBalance.php" target="_blank" > <h2>Financial statments </h2></a>

		</div>

		<div class="col-lg-4">
		
			<a href ="Announcements.php" target="_blank"> <img src ="images/Announcement.png "  style="height: 150px; width: 150px"></a>
			
		
			<a href ="Announcements.php" target="_blank" ><h2> View announcements</h2></a>
		</div>

</div>
<br/>
<div class = "row" style="text-align: center">

		<div class="col-lg-6">
			

			<a  href ="LodgeComplaint.php" target="_blank"> <img src="images/Complaint.png" style="height: 150px; width: 175px"></a>
			
			
			<a  href ="LodgeComplaint.php" target="_blank"> <h2> Lodge Complaint</h2></a>
		</div>

	

		


</div>


</div>

<div class = "col-sm-4">
	
</div>
</div>
</div>
</body>
</div>
</div>
</html>
<style type="text/css">
	
   .bg
        {

        background-image: url("images/4.jpg"); 

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