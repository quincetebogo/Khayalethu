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

      $idNum = $b[0];
      $address = $_POST['txtAddress'];
      $contactNo = $_POST['txtContactNo'];
      $email = $_POST['txtEmail'];
    
      
      updateProfile($idNum, $address, $contactNo,$email);
      
      echo "<script> alert('Your profile has been successfully updated!');
      window.location.href = 'ResidentHome.php';
      </script>";
      
      } 

	
		
?>


<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Profile</title>
</head>
<body>

</style>

<div class="container-fluid">
	<form action="" method="post" >
	<div class ="logContainer">
		<br/>
<br/>
  <h1  style="color: white; color: #e0d490; margin-left: 10%;">My Profile</h1>




<br/>
<div class="logContainer1">
<div class="row">
<div class ="col-lg-8">


<div class = "row">

		<div class="col-lg-9" style="margin-left: 15%">
			
		
	<br />

			<div class ="row">
					<?php
        
      echo '<strong>Name : </strong>'.$b[1].'<br/'.
      '<strong>Surname : </strong>'.$b[2].'<br/>'.
      '<strong>Gender : </strong>'.$b[3].'<br/>'.
      '<strong>ID Number : </strong>'.$b[0].'<br/>'.
      '<strong>Address : </strong> <input required type="textbox" name ="txtAddress" value = "'.$b[4].'"><br/>'.
      '<strong>Contact No : </strong><input required type="textbox" name ="txtContactNo" value = "'.$b[5].'"><br/>'.
      '<strong>Email : </strong><input required type="textbox" name ="txtEmail" value = "'.$b[11].'"><br/>'.
      '<strong>Nationality : </strong>'.$b[6].'<br/>'.
      '<strong>Ref Number : </strong>'.$b[7].'<br/>'.
      '<strong>Current Room Number : </strong>'.$b[8].'<br/>'.
      '<strong>Current Room Type : </strong>'.$b[10].'<br/>'.
      '<strong>Occupation Date : </strong>'.$b[9].'<br/>'.'</div>';

					?>	
			</div>
		</div>

		
		</div>

		


</div>



<div class = "col-sm-4">

</div>
<br/>
<br/>

<input type="submit" value ="Update Profile" name="Send" class="btn btn-success" style="margin-left: 12%; width: 200px;">

<br/>
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
        min-height: 100%;
        background-repeat: no-repeat;
        

        }

         .logContainer
        {
         
            width: 95%;
            height: relative;  
            background-color: rgba(0,0,20,0.5);
            border-radius: 4px;
            margin-left: 3%;
            min-height: 80%;
            
        }

         .logContainer1
        {
            width: 94%;
            height: relative;
            min-height: 20%;
            background-color: rgba(255,255,255,0.9);
            border-radius: 4px;
            margin-left: 3%;
              min-height: 55%;
            
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