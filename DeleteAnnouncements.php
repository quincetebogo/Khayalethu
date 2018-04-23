<?php
include 'AdminInterface.php';
			
?>


<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Delete Announcements</title>
</head>
<body>

</style>

<div class="container-fluid">
	<form action="" method="post" >
	<div class ="logContainer">
		<br/>
<br/>
<h3 style="margin-left: 9%">Delete Announcements</h3> 




<br/>
<div class="row">



<div class = "row">

		<div class="col-lg-10" style="margin-left: 5%">
			
		
	<br />

			<div class ="row">

					<?php

					
					echo'All Announcements <br /><br /> <table width = "1200" cellpadding = "2" cellspacing = "2"> 
						<th>Ann ID</th>
						<th>Announcemnt</th>
						<th>Date</th>
						<th>Delete</th>';
					$Announcements =  getAnnouncements();

				 	for($n =0; $n < sizeof($Announcements); $n++)
				 	{
				 		echo'<tr>';
				 		echo '<td>'.$Announcements[$n][0].'</td> <td>'.$Announcements[$n][1].'</td> <td>'.$Announcements[$n][2].'</td> <td>'.'<input type="submit" value = "Delete" class = "btn btn-danger" name = '.$Announcements[$n][0].'></td>';
				 		echo '</tr>';

				 		if(isset($_POST[$Announcements[$n][0]]) ==  true)
				 		{
				 			deleteAnnouncements($Announcements[$n][0]);
				 		}

				 	}
				 	echo '</table>';

					?>	
			</div>



		</div>

		
		</div>

		




<div class = "col-sm-4">
	

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
            min-height: 100%;
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