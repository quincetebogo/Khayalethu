<?php
include 'AdminInterface.php';




           if(isset($_POST['Send']) == true AND empty($_POST) == false) 
			{

			$motivation = $_POST['Reasons'];
			
			$date = date("y-m-d");
			
			postAnnouncements($motivation, $date);
			
			echo "<script> alert('Your announcement was successfully posted and it will appear shortly');
			window.location.href = 'AdminHome.php';
			</script>";
			
			}	
	
		
?>


<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Post Announcements</title>
</head>
<body>

</style>

<div class="container-fluid">
	<form action="" method="post" >
	<div class ="logContainer">
		<br/>
<br/>
<h3 style="margin-left: 9%">Post Announcements</h3> 




<br/>
<div class="row">
<div class ="col-sm-8">


<div class = "row">

		<div class="col-sm-4" style="margin-left: 15%">
	
         <br/>
           <div class ="row">
           <div class ="col-sm-7">
        	Message/Announcement:
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
	

</div>
</div>
</form>
</div>

</div>
</body>
</div>

</div>
</html>


          
