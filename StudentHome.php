<?php
include 'StudentInterface.php';
protect_page();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<div class ="bg">
<form action="" method="post">

<div class="container-fluid">
	<div class="logContainer">
<h1>Welcome back

<?php $firstName = getName($_SESSION['username']);
echo $firstName;


?>
</h1>
<br/>
<div class = "row" style ="text-align: center;">
<br/>

		<div class="col-lg-2">

		</div>
		<div class="col-lg-4">
			<div class="panel">

		    <a  href ="StatusReapplication.php" target="_blank"> 	<img hrel ="StatusReapplication.php" src="images/Apply.png" style="height: 150px; width: 150px"></a>
			</div>
			
			<a  href ="StatusReapplication.php" target="_blank"> <h3 href ="StatusReapplication.php"> Re-Apply for Accommodation</h3></a>
		</div>

		<div class="col-lg-4">
			<div class="panel" style="color: black">

			<a  href ="StatusReapplication.php" target="_blank"> <img href ="StatusReapplication.php" src="images/Status.png" style="height: 150px; width: 150px"></a>
			</div>
			
			<a  href ="StatusReapplication.php" target="_blank"> <h3 href ="StatusReapplication.php" >Application Status</h3> </a>
		</div>

		
		<div class="col-lg-2">

		</div>

</div>

<div class = "row">

		

		<div class="col-lg-1">
		</div>

		<div class="col-lg-1">
		</div>

</div>

<div class = "row">

		<div class="col-lg-1">
		</div>

		<div class="col-lg-1">
		</div>

		<div class="col-lg-1">
		</div>

</div>
</div>
</div>
</body>
</form>
</div>

</html>


<style type="text/css">
	
   .bg
        {

        background-image: url("images/18.jpg"); 
        background-size: cover;
        background-attachment: fixed;
        min-height: 100%;

        }

         .logContainer
        {
            width: 95%;
            min-height: 95%;
            height: relative;
            background-color: rgba(255,255,255,0.8);
            border-radius: 4px;
            margin-left: 3%;
            
        }
        .txtAlign
        {
        	margin-left: 15%;

        }

        #fieldset { border:1px solid green }

		#legend {
  padding: 0.2em 0.5em;
  border:1px solid green;
  color:green;
  font-size:90%;
  text-align:right;
  }

</style>