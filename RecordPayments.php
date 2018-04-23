<?php
include 'AdminInterface.php';



?>


<!DOCTYPE html>
<html>
<div class ="bg">
	
<head>
	<title>Record Payments</title>
</head>
<body>

</style>

<div class="container-fluid">
	<form action="" method="post" >
	<div class ="logContainer">
		<br/>
<br/>
<h3 style="margin-left: 9%">Record Payments</h3> 




<br/>


<div class ="txtAlign">
<div class="row">

    <div class ="col-sm-2">
           Filter by :
    </div>

          <div class="col-sm-4">
           <input type="radio" name="filterType" onchange="this.form.submit()" value="Name" <?php if($_POST["filterType"] == "Name") {echo 'checked = "true"';}?> > Name
           <input type="radio" name="filterType" onchange="this.form.submit()" value="Surname" <?php if($_POST["filterType"] == "Surname") {echo 'checked = "true"';}?>>Surname
           <input type="radio" name="filterType" onchange="this.form.submit()" value="RefNumber" <?php if($_POST["filterType"] == "RefNumber") {echo 'checked = "true"';}?>>RefNumber
          </div>

</div> 
</br>
<div class="row">
          <div class ="col-sm-2">
       			Resident Name and Ref Number:
          </div>

          <div class ="col-sm-4">
       			<?php
     

       				$xArrayData = allResidents();
					echo'<select name = "Residents" style ="height: 5%; width: 60%;">';
       				for($x = 0; $x < sizeof($xArrayData); $x++)
       				{

       					if($_POST['filterType'] == 'Name')
                {
            			echo '<option value="'.$xArrayData[$x][0].'">'.$xArrayData[$x][1].' '.$xArrayData[$x][2]. ' - '.$xArrayData[$x][0].'</option>';
                }
                elseif ($_POST['filterType'] == 'Surname') {
                  # code...
                  echo '<option value="'.$xArrayData[$x][0].'">'.$xArrayData[$x][2].'  '.$xArrayData[$x][1]. ' - '.$xArrayData[$x][0].'</option>';
                }
                elseif ($_POST['filterType'] == 'RefNumber') {
                  # code...
                  echo '<option value="'.$xArrayData[$x][0].'">'.$xArrayData[$x][0].' - '.$xArrayData[$x][1]. ' '.$xArrayData[$x][2].'</option>';
                }
       				}
       				echo '</select>';
       			?>
          </div>
</div>

      	</br>
<div class ="row">
            <div class="col-sm-2">
              Payment date:

            </div>

            <div class="col-sm-4">

           		 	<input type="date" placeholder ="YYYY-MM-DD" format="dd-mm-yyyy" name ="PaymentDate" style="width: 60%; height: 5%; "><br> 

            </div>


</div>
  </br>   
<div class ="row">
            <div class="col-sm-2">
              Amount:

            </div>

            <div class="col-sm-4">

                <input required type="number" placeholder ="e.g 2100" name="paymentAmount" style="width: 60%; height:5%;"><br> 

            </div>


</div>

  </br>   
<div class ="row">
            <div class="col-sm-2">
              Payment Type:

            </div>

            <div class="col-sm-4">

                <select name ="paymentType" style="width: 60%; height: 5%;">
                  <option  value="Deposit">Deposit</option>
                  <option value="Rent">Rent</option>

                </select>

            </div>
</div>

     </br>   
<div class ="row">
            <div class="col-sm-2">
              Payment Method:

            </div>

            <div class="col-sm-4">

                  <select name ="paymentMethod" style="width: 60%; height:5%;">
                  <option value="EFT">EFT</option>
                  <option value="Cash">Cash</option>
                  <option value="Credit">Credit</option>

                </select>

            </div>


</div>         







  </br>
  </br>
  </br>
<div class="row">
      <div class ="col-sm-2">
            <input type="submit" value ="Send Application" name="Send" class="btn btn-success" style="margin-left: 20%; width: 200px;">
      </div>
      <div class ="col-sm-4">
      </div>
</div>
		
	



</div>
</div>

</form>
</div>

</div>
</body>
</div>
</html>


<?php


      if(isset($_POST['Send']) == true AND empty($_POST) == false) 
      {
      $date = $_POST['PaymentDate'];
      $amount = $_POST['paymentAmount'];
      $refNum = $_POST['Residents'];
      $paymentType = $_POST['paymentType'];
      $paymentMethod = $_POST['paymentMethod'];
      recordPayments($date, $amount, $refNum, $paymentType, $paymentMethod);
      
      echo "<script> alert('Record was succesfully made!');
      window.location.href = 'AdminHome.php';
      </script>";
      
      } 


?>

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
            background-color: rgba(0,0,0,0.8);
            border-radius: 4px;
            margin-left: 3%;
            width: relative;
            
        }
        .txtAlign
        {
        	margin-left: 10%;

        }

</style>