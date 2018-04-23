<?php
include 'ResidentInterface.php';
protect_page();


			$z =  userProfile($_SESSION['Uname']);
			$a = 0;
			$b = array();
			foreach ($z as $key => $value) 
			{

				$b[$a] = $value;
				$a++;
					# code...
			}
			

	
		
?>


<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Financial Statements</title>
</head>
<body>

</style>

<div class="container-fluid">
	<form action="" method="post" >
	<div class ="logContainer">
		<br/>
<br/>
<h3 style="margin-left: 9%">Financial Statements</h3> 




<br/>
<div class="row">
<div class ="col-lg-8">


<div class = "row">

		<div class="col-lg-9" style="margin-left: 15%">
			Filters : <select name ="drpDate"  onchange="this.form.submit()">

				<option value = 0 <?php if(isset($_POST['drpDate']) == 0) {echo "selected=\"selected\"";}?>> All Records</option>
				<option value = 30 <?php if($_POST['drpDate'] == 30) {echo "selected=\"selected\"";}?>> 30 days</option>
				<option value = 60 <?php if($_POST['drpDate'] == 60) {echo "selected=\"selected\"";}?>> 60 days</option>
				<option value = 90 <?php if($_POST['drpDate'] == 90) {echo "selected=\"selected\"";}?>> 90 days</option>
				<option value = 120 <?php if($_POST['drpDate'] == 120) {echo "selected=\"selected\"";}?>> 120 days</option>
			</select>
		

			<br />

			<div class ="row">
					<?php
					$dates = $_POST['drpDate'];
					
					echo'Records of the last <strong>'.$dates.'</strong> days ordered by date  <br /><br /> <table width = "600" cellpadding = "2" cellspacing = "2"> 
						<th>Deposit Number</th>
						<th>Payment Date</th>
						<th>Amount</th>
						<th>Payment Type</th>
						<th>Payment Method</th>';

						$records = getFinancialRecords($b[7], $dates);

					for($x = 0; $x < sizeof($records); $x++)
					{
						echo '<tr>';
						echo '<td>'.$records[$x][0].'</td> <td>'.$records[$x][1].'</td> <td>'.$records[$x][2].'</td> <td> '.$records[$x][3].' </td> <td> '.$records[$x][4].'</td>';

						echo'</tr>';
					}
		    
					echo '</table>';

?>	
			</div>
		</div>

		
		</div>

		


</div>



<div class = "col-sm-4">
		<fieldset style= " border: solid; text-align: left; width: 80%; margin-left: 15%; top: 10%" >
			<legend >
				
				<img src="images\user.png" style = "width: 100px; height: 100px; border-radius: 50%; top:-38%; left: calc(40%); position: absolute; overflow: hidden">
			
			</legend>
			<border>
		
					<div class = "txtAlign">
				

				<?php
			echo '<strong>Name : </strong>'.$b[1].'<br/'.
			'<strong>Surname : </strong>'.$b[2].'<br/>'.
			'<strong>Gender : </strong>'.$b[3].'<br/>'.
			'<strong>ID Number : </strong>'.$b[0].'<br/>'.
			'<strong>Address : </strong>'.$b[4].'<br/>'.
			'<strong>Contact No : </strong>'.$b[5].'<br/>'.
			'<strong>Nationality : </strong>'.$b[6].'<br/>'.
			'<strong>Ref Number : </strong>'.$b[7].'<br/>'.
			'<strong>Current Room Number : </strong>'.$b[8].'<br/>'.
			'<strong>Current Room Type : </strong>'.$b[10].'<br/>'.
			'<strong>Occupation Date : </strong>'.$b[9].'<br/>';
			?>
		</div>

		

		
		
			
		</border>
		</fieldset>

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

        background-image: url("images/4.jpg"); 

        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;

        }

         .logContainer
        {
            width: 95%;
            height: 100%;
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