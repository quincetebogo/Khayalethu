<?php
include 'ResidentInterface.php';
protect_page();
			
?>


<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Announcements</title>
</head>
<body>

</style>

<div class="container-fluid">
	<form action="" method="post" >
	<div class ="logContainer">
		<br/>
<br/>
<h3 style="margin-left: 9%">Announcements</h3> 




<br/>
<div class="row">
<div class ="col-lg-8">


<div class = "row">

		<div class="col-lg-9" style="margin-left: 15%">
			
		
	<br />

			<div class ="row">
					<?php
					$Announcements =  getAnnouncements();

				 	for($n =0; $n < sizeof($Announcements); $n++)
				 	{
				 		echo $Announcements[$n][1]. " </br></br>";

				 	}

					?>	
			</div>
		</div>

		
		</div>

		


</div>



<div class = "col-sm-4">
	<?php
		asideProfile();
	?>

</div>
</div>
</form>
</div>

</div>
</body>
</div>

</div>
</html>


          

<style type="text/css">
	
   .bg
        {

        background-image: url("images/18.jpg"); 
        background-size: cover;
        background-attachment: fixed;

        }

         .logContainer
        {
            width: 95%;
            height: relative;
            background-color: rgba(255,255,255,0.5);
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