<?php
include 'AdminInterface.php';
  
    
?>


<!DOCTYPE html>
<html>

<div class ="bg">
  
<head>
  <title>Financial Statements</title>
</head>
<body>
<form action="" method="post">
</style>

<div class="container-fluid">
  
  <div class ="logContainer">
    <br/>
<br/>
<h3 style="margin-left: 9%">Financial Statements</h3> 




<br/>
<div class="row">
<div class ="col-lg-8">


<div class="row">
  <div class ="col-sm-2" style="margin-left: 15%">
    Resident name and Ref Number :
  </div>
  <div class ="col-sm-4">
 <?php
              $xArrayData = allResidents();
              echo'<select name = "Residents" onchange="this.form.submit()">';
              for($x = 0; $x < sizeof($xArrayData); $x++)
              {

               
                  echo '<option value="'.$xArrayData[$x][0].'">'.$xArrayData[$x][0].' - '.$xArrayData[$x][1]. ' '.$xArrayData[$x][2].'</option>';
                $_SESSION['Residents'] = $xArrayData[$x][0];
              }
              echo '</select>';

    ?>
  
  </div>
</div>
</br>
<div class = "row">
            

    <div class="col-lg-9" style="margin-left: 15%">
      Filters : <select name ="drpDate"  onchange="this.form.submit()">
        <option value = 0> All Records</option>
        <option value = 30 > 30 days</option>
        <option value = 60 > 60 days</option>
        <option value = 90 > 90 days</option>
        <option value = 120 > 120 days</option>
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

            $records = getFinancialRecords($_POST['Residents'], $dates);

          for($x = 0; $x < sizeof($records); $x++)
          {
            echo '<tr>';
            echo '<td>'.$records[$x][1].'</td> <td>'.$records[$x][2].'</td> <td>'.$records[$x][3].'</td> <td> '.$records[$x][4].' </td> <td> '.$records[$x][5].'</td>';

            echo'</tr>';
          }
        
          echo '</table>';

?>  
      </div>
    </div>

    
    </div>

    


</div>

</div>
</div>

</div>
</form>
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

        #fieldset { border:1px solid green }

    #legend {
  padding: 0.2em 0.5em;
  border:1px solid green;
  color:green;
  font-size:90%;
  text-align:right;
  }

</style>