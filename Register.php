<?php
  include 'init.php';


  if(empty($_POST) == false && isset($_POST['Submit']))
  {
    $birthYear = substr($_POST['IDno'], 0, 2);;
    $birthDay = substr($_POST['IDno'], 2, 2);;
    $birthMonth = substr($_POST['IDno'], 4, 2);

    $birthDate = $birthYear + $birthDay + $birthMonth; 
    $address = $_POST['houseNo'] + $_POST['strName'] + ','+ $_POST['suburb'] +  ','+ $_POST['city'] + ','+  $_POST['pCode']; 

    $register_data = array('st_'



      );


  }
?>

   

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}
.bg
{
      background-size: cover;
      min-height: 100%;
      height: relative;
      min-width: 100%;
      width:100%;
      background-image: url("Images/18.jpg");
      background-attachment: fixed;
}

body {
  background-color: #f1f1f1;

}

#regForm {
  background-color: rgba(255,255,255,0.8);
  margin: 10% auto;
  margin-bottom: 0%;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
<div class ="bg">

<h1>Residence Applications for 2018</h1>

<form id="regForm" action="" method="post">

      <h4>Register</h4>

  <!-- One "tab" for each step in the form: -->  

  <div class="tab">Name:
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname" type ="text"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"  type ="text"></p>

  </div>
   <div class="tab">Birthday:
    <p><input placeholder="ID No..." oninput="this.className = ''" name="IDno" id="IDno" type ="number" maxlength="13" ></p>
    <!--<p><input type = "numnber" placeholder="dd" oninput="this.className = ''" name="dd" type="number"></p>
    <p><input type = "numnber" placeholder="mm" oninput="this.className = ''" name="nn" type="number"></p>
    <p><input type = "numnber" placeholder="yyyy" oninput="this.className = ''" name="yyyy" type="number"></p>-->
  </div>
  <div class="tab">Contact Info:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email" type="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone" type="numnber"></p>
    <p><input placeholder="Nationality" oninput="this.className = ''" name="nationality" type="text"></p>
  </div>
  <div class="tab">Postal Address:
    <p><input placeholder="House no..." oninput="this.className = ''" name="houseNo" type ="number"></p>
    <p><input placeholder="Street name..." oninput="this.className = ''" name="strName"></p>
    <p><input placeholder="Suburb..." oninput="this.className = ''" name="suburb"></p>
    <p><input placeholder="City..." oninput="this.className = ''" name="city"></p>
    <p><input placeholder="Postal code..." oninput="this.className = ''" name="pCode" type ="number"></p>
  </div>



  <div class="tab">Login Info:
 
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type = "password" onchange="UpdateInfo()"></p>
    
    
  </div>




  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
     <span class="step"></span>
  </div>


</form>
</div>


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  q = x[0].getElementsByTagName("select");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }

  }


  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


</body>