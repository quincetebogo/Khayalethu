<?php


include "StudentInterface.php";

if(isset($_COOKIE['username']) == true)
{

	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Application Status</title>
</head>
<body>
<div class="bg">
<div class ="container-fluid">
	
		<form action="" method="post">
			<div class="logContainer">
			</br>
				<h3 style="margin-left: 15%;">Check your admission status</h3>
                    
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
				<div class="row">
                    <div class="col-sm-2">
                        Application status
                    </div>
                    <div class="col-sm-4">
                        <?php  echo studentStatus($_SESSION['username']);
                            

                        ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                        <?php
                        if(studentStatus($_SESSION['username']) != "Waiting List")
                            {
                                echo ' </br></br></br></br><input type="submit" name="Send" value="Re-Apply" class="btn btn-success">';
                            }

                        ?>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    </div>
			</div>
		</div>
</form>
</div>
</div>


</body>
</html>

<style type="text/css">
	
   .bg
        {

        background-image: url("images/19.jpg"); 
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
            width: relative;
            
        }
        .txtAlign
        {
        	margin-left: 10%;

        }

</style>

<?php
}

else 
{
    echo"<script> window.location.href = 'Login.php'; </script>";
}
?>