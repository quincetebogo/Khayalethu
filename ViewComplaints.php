<?php
include 'AdminInterface.php';
			
?>


<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Complaints</title>
</head>
<body>

</style>

<div class="container-fluid">
	<form action="" method="post" >
	<div class ="logContainer">
		<br/>
<br/>
<h3 style="margin-left: 9%">Complaints</h3> 




<br/>
<div class="row">
<div class ="col-lg-8">


<div class = "row">

		<div class="col-lg-10" style="margin-left: 15%">
			
		
	<br />

			<div class ="row">
						<select name='compType' onchange="this.form.submit()" style ="width: 20%; height: 5%;">
						<option value=''>Select</option>
						<option value='All Records'>All complaints</option>	
            			<option value='Repairs'>Repairs</option>
           				<option value='Noise'>Noise</option>
           				<option value='Maintenance'>Maintenance</option>
            			<option value='General'>General</option>
           				</select>
           				<input type="date" placeholder ="YYYY-MM-DD" format="dd-mm-yyyy" style ="width: 20%; height: 5%;" name ="compDate" onchange="this.form.submit()"><br> 
					<?php
					echo'</br>All Complaints from the most recent ones to the oldest ones <br /><br /> <table width = "1000" cellpadding = "2" cellspacing = "4"> 
						<th>Comp ID</th>
						<th>Description</th>
						<th>Message</th>
						<th>Floor No.</th>
						<th>Date</th>
						<th>Status</th>';
						$date = $_POST['compDate'];
						$desc = $_POST['compType'];
					    $Announcements =  getComplaints( $desc);
						if(sizeof($Announcements) >= 2)
				 		{

				 	for($n =0; $n < sizeof($Announcements); $n++)
				 	{
				 		
				 						 		echo'<tr>';
				 		echo '<td>'.$Announcements[$n][0].'</td> <td>'.$Announcements[$n][1].'</td> <td>'.$Announcements[$n][2].'</td> <td>'.$Announcements[$n][3].'</td> <td>'.$Announcements[$n][6].'</td> <td>'.'<input type="submit" value = "Fixed" name = '.$Announcements[$n][0].'><input type="submit" value = "Not Fixed" name = '.$Announcements[$n][0].'></td>';
				 		echo '</tr>';

				 		if(isset($_POST[$Announcements[$n][0]]) ==  true)
				 		{
				 			$compID = $Announcements[$n][0];
				 			$status = $_POST[$Announcements[$n][0]];

				 			attendComplaints($compID, $status);
				 		}
				 	
				 		
				 	}
				 	}
				 	else
				 		{
				 			echo 'No records found for the chosen option';
				 		}
				 	echo '</table>';

					?>	
			</div>



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