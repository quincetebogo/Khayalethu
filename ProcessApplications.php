<?php
	include 'AdminInterface.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Process new applications</title>
</head>
<body>

	<div class="bg">
		<div class="container-fluid">
		<div class="logContainer">
			<form action="" method="post">
			</br>
			</br>
			</br>
				<h3 style="margin-left: 9%;">Process New Applications</h3> 
			</br>
			</br>
			</br>
			
				<div class ="row" style="margin-left: 9%">
				<div class="row">
					<div class="col-sm-2">
						Filter by:
					</div>
					<div class="col-sm-4">
						<input type="radio" name="filterType" onchange="this.form.submit()" value="Name" <?php if($_POST["filterType"] == "Name") {echo 'checked = "true"';}?> > Name
           				<input type="radio" name="filterType" onchange="this.form.submit()" value="Surname" <?php if($_POST["filterType"] == "Surname") {echo 'checked = "true"';}?>>Surname
           				<input type="radio" name="filterType" onchange="this.form.submit()" value="RefNumber"<?php if($_POST["filterType"] == "RefNumber") {echo 'checked = "true"';}elseif ($_POST["filterType"] !=  "Surname" AND $_POST["filterType"] !=  "Name" AND $_POST["filterType"] !=  "RefNumber") 
           				{
           					# code...
           					echo 'checked = "true"';
           				}

           				?> >ID Number
					</div>
				</div>


			
			</br>

				<div class="row">
					<div class ="col-sm-2">
						Name and Surname :
					</div>

					<div class="col-sm-4">
						<?php
						$xArrayData = getAllStudents('Waiting List');

					echo'<select name = "Residents" style ="height: 5%;"  onchange="this.form.submit()">';

       				for($x = 0; $x < sizeof($xArrayData); $x++)
       				{
						
       					if($_POST['filterType'] == 'Name') 
                		{
                		?>
                		<option value = <?php echo '"'.$xArrayData[$x][0].'"'; if($_POST['Residents'] == $xArrayData[$x][0]){echo "selected=\"selected\"";}?>>  <?php echo $xArrayData[$x][2].' '.$xArrayData[$x][3]. ' - '.$xArrayData[$x][0];?>    </option>

            		   <?php
            		   	}
            		   	elseif($_POST['filterType'] == 'Surname') 
                		{
                		?>
                		<option value = <?php echo '"'.$xArrayData[$x][0].'"'; if($_POST['Residents'] == $xArrayData[$x][0]){echo "selected=\"selected\"";}?>>  <?php echo $xArrayData[$x][3].' '.$xArrayData[$x][2]. ' - '.$xArrayData[$x][0];?>    </option>

            		   <?php
            		   	}
            		   	elseif($_POST['filterType'] == 'RefNumber') 
                		{
                		?>
                		<option value = <?php echo '"'.$xArrayData[$x][0].'"'; if($_POST['Residents'] == $xArrayData[$x][0]){echo "selected=\"selected\"";}?>>  <?php echo $xArrayData[$x][0].'-'.$xArrayData[$x][2]. ' - '.$xArrayData[$x][3];?>    </option>

            		   <?php
            		   	}


            		   }
            		   echo '</select>';
						?>
					</div>
				</div>
			</br>

				<div class="row">
					<div class="col-sm-2">
						Requested room type:
					</div>
					<div class="col-sm-4">
						<?php
						$roomTpeData = getSingleStudent($_POST['Residents']);
						for($a = 0; $a < sizeof($roomTpeData); $a++)
						{
							
							$roomType = $roomTpeData[$a][12]; 
							$firstName = $roomTpeData[$a][2]; 
							$lastName = $roomTpeData[$a][3]; 
							$applicationDate = $roomTpeData[$a][10];
							$idNumber = $roomTpeData[$a][0]; 

						}
						echo $roomType;
						
						?>
					</div>
				</div>
			</br>
				<div class="row">
					<div class="col-sm-2">
						First name:
					</div>
					<div class="col-sm-4">
						<?php echo $firstName?>
					</div>
				</div>
			</br>
				<div class="row">
					<div class="col-sm-2">
						Last name:
					</div>
					<div class="col-sm-4">
						<?php echo $lastName ?>
					</div>
				</div>
			</br>
				<div class="row">
					<div class="col-sm-2">
						ID Number:
					</div>
					<div class="col-sm-4">
						<?php echo $idNumber ?>
					</div>
				</div>
			</br>
				<div class="row">
					<div class="col-sm-2">
						Application date: 
					</div>
					<div class="col-sm-4">
						<?php echo $applicationDate ?>
					</div>
				</div>
			</br>
				<div class="row">
					<div class="col-sm-2">
						Rooms Available :
					</div>
					<div class="col-sm-4">
						<?php
						$roomsAvailable = getAvailableRoom($roomType);
						echo'<select name = "drpRooms" style ="height: 5%; width: 55%;">';
							if(sizeof($roomsAvailable) >= 1){

							for($b = 0; $b < sizeof($roomsAvailable); $b++)
							{
								echo '<option value="'.$roomsAvailable[$b][0].'">'.$roomsAvailable[$b][0].'-'.$roomsAvailable[$b][1].'</option>';

							} 
						}
						else 
						{
							echo '<option value="0">No '.$roomType.' rooms available</option>';
						}
							echo '</select>';
						
						?>
					</div>

				</div>
			</br>
				<div class="row">
					<div class="col-sm-2">
						Status :
					</div>
					<div class="col-sm-4">
						<input type="radio" name="status"  value="Accepted"  checked="true"> Approve
						<input type="radio" name="status"  value="Rejected"  > Decline
					</div>

				</div>
			</br>
			</br>
			</br>
			</br>
			
				<div class="row">
					<div class="col-sm-2" style="margin-left: -4%;">
						<input type="submit" value ="Process Application" name="Send" class="btn btn-success" style="margin-left: 20%; width: 200px;">
					</div>
					<div class="col-sm-4">
						<?php
						if(isset($_POST['Send']) == true)
						{

							$status = $_POST['status'];	
							$Approvedroom  = $_POST['drpRooms'];
							processApplications($idNumber, $status, $Approvedroom);
							echo "<script> alert('Application successfully processed');
								window.location.href = 'ProcessApplications.php';
								</script>";	

						}
						?>
					</div>
				</div>
			</div>
			</form>
		</div>
	  </div>
	</div>
</body>
</html>

