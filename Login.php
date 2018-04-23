<?php 
include 'init.php';

$errorList = '';
if(empty($_POST['username']) == false)
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($_POST['password']) == false)
	{
		if(userlogin($username, $password) == true)
		{
			if(studentStatus($username) == 'Accepted')
			{
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password; 
				header('location: ResidentHome.php');
				
			
			}
			else if(studentStatus($username) == 'Waiting List' OR studentStatus($username) == 'Moved Out' )
			{
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('location: StudentHome.php');
				 
			}

			
			
		}
		else 
		{
			 $errorList = 'Invalid username or password. Please try again';
		}
	}
	else 
	{
	
	}
}
else 
{
	
}


?>
<html>
	<title>Login</title>

<form action="" method="post" >
	

<div class="bg">

<div class="container-fluid">


	<div class="logContainer">
 		<img src="images\user.png" style = "width: 150px; height: 150px; border-radius: 50%; top:13%; left: calc(45%); position: absolute; overflow: hidden">
<?php
echo $errorList;
?>
	
	
			<h2 style="color: white">Log in</h2>
			<br/>
			<br/>
			<div class="txtBoxes">
			<input required type="textbox" name="username" placeholder="someone@yahoo.com">
			</div>
			<br/>
			<br/>
			<div class="txtBoxes">
			<input required type="password" name="password" placeholder="Password" >
			</div>
		
		

	<br/>
	<br/>

	<input type="submit" name="Login" value ="Log in" class="btn btn-success" style="width: 200px">
</div>
  </div>
</div>
</form>



	<style type="text/css">
		
		.bg
		{

		background-image: url("images/2.jpg"); 
		
	
		background-size: 100%;
		background-attachment: fixed;

		}

		.logContainer
		{
			width:400px;
			height:420px;
			text-align: center;
			background-color: rgba(0,0,20,0.3);
		
			border-radius: 4px;
			margin: 10% auto;
			text-align: center;
			
		}

		.txtBoxes
		{
			padding: 10px 70px;
			font-size: 20px;
			width: 200px;
			height:10px;
			background: transparent;

		}


	</style>
</html>

