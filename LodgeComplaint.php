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
			


           if(isset($_POST['Send']) == true AND empty($_POST) == false) 
			{

			$Details = $_POST['Reason'];
			$compType = $_POST['compType'];
			$floorNumber = $_POST['floorNumber'];
			$date = date('y-m-d');
		
			
			lodgeComplaint($compType, $Details, $floorNumber, $b[7], $date);
			
			echo "<script> alert('Thank you for your message, we will attend your query as soon as possible');
			window.location.href = 'ResidentHome.php';
			</script>";
			
			}	
	
		
?>


<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Chnage Room</title>
</head>
<body>

</style>

<div class="container-fluid">
	<form action="" method="post" >
	<div class ="logContainer">
		<br/>
<br/>
<h3 style="margin-left: 9%">Lodge Complaint</h3> 




<br/>
<div class="row">
<div class ="col-sm-8">


<div class = "row">

		<div class="col-sm-4" style="margin-left: 15%">
			<div class ="row">
				<div class="row">
					<div class ="col-sm-7">
						Current Room Type : 
					</div>

					<div class ="col-sm-4">
						<?php
						echo $b[10];
						?>
           			</div>
         		</div>
         		<br/>
         		<div class="row">
					<div class ="col-sm-7">
						Current Room Number : 
					</div>

					<div class ="col-sm-4">
						<?php
						echo $b[8];
						?>
           			</div>
         		</div>
         		<br/>
         		<div class="row">
					<div class ="col-sm-7">
						Floor Number:
					</div>

					<div class ="col-sm-4">
						<select name='floorNumber'>
            			<option value='1'>1st Floor</option>
           				<option value='2'>2nd Floor</option>
           				<option value='3'>3rd Floor</option>
            			<option value='4'>4th Floor</option>
           				</select>
           			</div>
         		</div>
         		<br/>
				<div class="row">
					<div class ="col-sm-7">
						Description:
					</div>

					<div class ="col-sm-4">
						<select name='compType'>
            			<option value='Repairs'>Repairs</option>
           				<option value='Noise'>Noise</option>
           				<option value='Maintenance'>Maintenance</option>
            			<option value='General'>General</option>
           				</select>
           			</div>
         		</div>


         <br/>
           <div class ="row">
           <div class ="col-sm-7">
           Details:
       		</div>

       		<div class ="col-sm-4">
           <textarea required  type="textbox" name="Reason" cols="75" rows="5"></textarea>
            <div class ="row">
            	<br/>
        	<br/>
            <input type="submit" value ="Send Application" name="Send" class="btn btn-success" style="margin-left: 20%; width: 200px;">
            
         
        </div>
            </div>
        </div>
        
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

        background-image: url("images/4.jpg"); 

        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;


        }

         .logContainer
        {
            width: 95%;
            height: relative;
            min-height: 100%;
            background-color: rgba(255,255,255,0.8);
            border-radius: 4px;
            margin-left: 3%;

            
        }
        .txtAlign
        {
        	margin-left: 15%;

        }

</style>