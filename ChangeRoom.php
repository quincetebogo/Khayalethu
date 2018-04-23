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

			$motivation = $_POST['Reasons'];
			$roomType = $_POST['roomType'];
		
			
			changerooms($b[7], $motivation, $roomType, $b[8]);
			
			
			
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
<h3 style="margin-left: 9%">Change Room Application</h3> 




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
						Room Type: 
					</div>

					<div class ="col-sm-4">
						<select name='roomType'>
            			<option value='Single'>Single</option>
           				<option value='Double'>Double</option>
            			<option value='Triple'>Triple</option>
           				</select>
           			</div>
         		</div>


         <br/>
           <div class ="row">
           <div class ="col-sm-7">
           Please state reasons for changing your room (Motivation) :
       		</div>

       		<div class ="col-sm-4">
           
           <textarea required type="textbox" name ="Reasons" cols="80" rows="5"></textarea>
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

        background-image: url("images/20.jpg"); 

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

</style>