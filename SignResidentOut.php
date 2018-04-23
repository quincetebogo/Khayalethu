<?php
	include 'AdminInterface.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Out resident</title>
</head>
<body>

	<div class="bg">
		<div class="container-fluid">
		<div class="logContainer">
			<form action="" method="post">
			</br>
			</br>
			</br>
				<h3 style="margin-left: 9%;">Sign a resident Out</h3> 
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
           				<input type="radio" name="filterType" onchange="this.form.submit()" value="RefNumber"<?php if($_POST["filterType"] == "RefNumber") {echo 'checked = "true"';} elseif ($_POST["filterType"] !=  "Surname" AND $_POST["filterType"] !=  "Name" AND $_POST["filterType"] !=  "RefNumber") 
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
						$results = 'Accepted';
						$xArrayData = getAllStudents($results);

					echo'<select name = "Residents" style ="height: 5%;"  onchange="this.form.submit()">';

       				for($x = 0; $x < sizeof($xArrayData); $x++)
       				{
						
       					if($_POST['filterType'] == 'Name') 
                		{
                		?>
                		<option value = <?php echo '"'.$xArrayData[$x][0].'"'; if($_POST['Residents'] == $xArrayData[$x][0]){echo "selected=\"selected\"";}?>>  <?php echo $xArrayData[$x][2]. ' '.$xArrayData[$x][3]. ' - '.$xArrayData[$x][0];?>    </option>

            		   <?php
            		   	}
            		   	elseif($_POST['filterType'] == 'Surname') 
                		{
                		?>
                		<option value = <?php echo '"'.$xArrayData[$x][0].'"'; if($_POST['Residents'] == $xArrayData[$x][0]){echo "selected=\"selected\"";}?>>  <?php echo $xArrayData[$x][3]. ' '.$xArrayData[$x][2]. ' - '.$xArrayData[$x][0] ;?>    </option>

            		   <?php
            		   	}
            		   	elseif($_POST['filterType'] == 'RefNumber') 
                		{
                		?>
                		<option value = <?php echo '"'.$xArrayData[$x][0].'"'; if($_POST['Residents'] == $xArrayData[$x][0]){echo "selected=\"selected\"";}?>>  <?php echo $xArrayData[$x][0]. ' '.$xArrayData[$x][2]. ' '.$xArrayData[$x][3];?>    </option>

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
						Current room type:
					</div>
					<div class="col-sm-4">
						<?php

						
						$moreDetails = getgetChangeRoomData($_POST['Residents']);

						$roomTpeData = getResidentProfile($_POST['Residents']);

						
						
						for($a = 0; $a < sizeof($roomTpeData); $a++)
						{
							
							$firstName = $roomTpeData[$a][2]; 
							$lastName = $roomTpeData[$a][3]; 
							$applicationDate = $roomTpeData[$a][10];
							$roomType = $roomTpeData[$a][15];
							$idNumber = $roomTpeData[$a][0]; 
							$occupationDate = $roomTpeData[$a][14];
							$roomNumber =  $roomTpeData[$a][13];
							$resRefNumber = $roomTpeData[$a][12];


						}
						echo $roomType;
						
						?>
					</div>
				</div>
			</br>
			<div class="row">
					<div class="col-sm-2">
						Current Room no:
					</div>
					<div class="col-sm-4">
						<?php echo $roomNumber?>
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
						Res Ref number: 
					</div>
					<div class="col-sm-4">
						<?php echo $resRefNumber?>
					</div>
				</div>
			</br>

				<div class="row">
					<div class="col-sm-2">
						Occupation date :
					</div>
					<div class="col-sm-4">
						<?php echo $occupationDate ?>
					</div>

				</div>
			</br>
			</br>
			</br>
			</br>
			
				<div class="row">
					<div class="col-sm-2" style="margin-left: -4%;">
						<input type="submit" value ="Sign out" name="Send" class="btn btn-danger" style="margin-left: 20%; width: 200px;">
					</div>
					<div class="col-sm-4">
						<?php
						if(isset($_POST['Send']) == true)
						{

							signOut($idNumber);
							echo "<script> alert('Resident Successfully signed out');
								window.location.href = 'SignResidentOut.php';
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

