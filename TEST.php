<?php 
include 'init.php';
?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>





<section id="Home">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/21.jpg" alt="Los Angeles" style="width:100%; height: 100%; ">
      <div class="carousel-caption">

        <h1><p>Khayalethu student Res Welcomes you</p></h1>

        <h4>
               
          <p> Khayalethu Residence is a self-catering hostel facility, situated at the corner of Schoeman and Leyds Streets.</p>
               
         <p> Providing affordable accommodation for tertiary students, it offers a peaceful environment conducive</p>
          
          <p>to studying and is close to most amenities and various tertiary institutions in Pretoria.</p>
            <br/>
            <button data-target = "Register.php" type='button' name="btnApply" class="btn btn-primary"> Apply now!</button>
            <button data-toggle="modal" data-target="#loginModal1" type='button' name="btnLogin" class="btn btn-success"> Sign In</button> 
             </h4>
            <br/>


   
      </div>
    </div>

    <div class="item">
      <img src="images/22.jpg" alt="Chicago" style="width:100%; height:100%">
    </div>

    <div class="item">
      <img src="images/23.jpg" alt="New York" style="width:100%; height:100%">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
</section>

<section class="aboutus">
  <br/>
  <br/>
<div class="logContainer">
<div class="row" >
  <div class="col-lg-4" style ="margin-left:2%;">

  <strong><h1 style="color: white; color: #e0d490;">Visit us </h1></strong>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28750.50805949778!2d28.228391591922907!3d-25.743680156521222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9561ae185dd369%3A0xa7e1038621177980!2sTuks+Village!5e0!3m2!1sen!2sza!4v1519915445064" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

  <div class="col-sm-1">
<div id="vertical-line" ></div>
</div>

<div class="col-lg-6">
    
 <h1  style="color: white; color: #e0d490;">About us </h1>

<div class ="AboutTexts">
Khayalethu Residence  by Marriott® is one of the most widely recognized hospitality brand in Africa with the most extensive footprint. With nearly 100 hotels across 8 countries including South Africa, Zambia, Nigeria, Namibia, Ghana, Tanzania and Uganda, Khayalethu Residence  has the largest strategic footprint throughout the Continent and is highly committed to delivering every guest with a personalized service experience.  
</br>
</br>
</br>
The Khayalethu Residence  portfolio comprises of two brands, the mid-up market Khayalethu Residence  by Marriott (including the lifestyle brand Protea Hotel Fire and Ice! by Marriott) brand and the superior deluxe African Pride Hotels brand.The portfolio presents a full and diverse range of outstanding hotels, each is uniquely designed with its own personality, providing guests an opportunity to get a taste of the local flavor in a truly authentic way.  
</br>
</br>
</br>
Khayalethu Residence  offers updated facilities, a unique service culture and consistent amenities such as full service restaurants, meeting spaces, complimentary Wi-Fi access and well-appointed rooms to ensure a comfortable, relaxed and successful stay.Khayalethu Residence  is proud to be part of Marriott International, the world’s largest hotel company based in Bethesda, Maryland, USA, with nearly 6,000 properties in 120 countries and territories, including gateway cities such as London, Dubai and New York.The company’s 30 leading brands include: Bulgari®, The Ritz-Carlton® and The Ritz-Carlton Reserve®, St. Regis®, W®, EDITION®, JW Marriott®, The Luxury Collection®, Marriott Hotels®, Westin®, Le Méridien®, Renaissance® Hotels, Sheraton®, Delta Hotels by MarriottSM, Marriott Executive Apartments®, Marriott Vacation Club®, Autograph Collection® Hotels, Tribute Portfolio™, Design Hotels™, Gaylord Hotels®, Courtyard®, Four Points® by Sheraton, SpringHill Suites®, Fairfield Inn and Suites®, Residence Inn®, TownePlace Suites®, AC Hotels by Marriott®, Aloft®, Element®, Moxy® Hotels, and Khayalethu Residence  by Marriott®. The company also operates award-winning loyalty programs: Marriott Rewards®, which includes The Ritz-Carlton Rewards®, and Starwood Preferred Guest®.From luxurious resorts to urban retreats, bold boutiques to spacious suites, there’s a Marriott hotel brand as unique as you.
</br>
</br>
</div> 
   </div>

   


</div>
</div>
</div>
</section>


<section class="contactus">
    <br/>
  <br/>
    <br/>
  <br/>
<div class ="logContainer">
  <h1  style="color: white; color: #e0d490; margin-left: 40%;">Contact us </h1>
  <div id="horizontalLine"></div>
      </br>
      </br>
      </br>
      <form action ="" method="post">
      <div class ="contactForm">
        <div class="row">
            <div class="col-sm-2" style=" color: white;">
            First Name:
            </div>

            <div class ="col-sm-2">
            <input required type ="text" name="first_name" placeholder="First name">
            </div>
            
              <div class="col-sm-2 " style=" color: white; margin-left: 5%;">
            Last Name:
            </div>

            <div class="col-sm-2">
            <input required type="text" name ="last_name" placeholder="Last name">
            </div>


          </div>




        
        <br/>
          <div class="row">
          
          </div>
       
         <div class="row">
            <div class="col-sm-2 " style=" color: white;">
            Cellphone
            </div>

            <div class="col-sm-2">
            <input required type="text" name ="last_name" placeholder="Cellphone">
            </div>
        
       
            <div class="col-sm-2" style=" color: white; margin-left: 5%;">
            Email:
            </div>

            <div class="col-sm-2">
            <input required type="email" name ="last_name" placeholder="someone@yahoo.com">
            </div>
          </div>
        
</br>
      </br>
      </br>

         <div class="row">
            <div class="col-sm-2" style=" color: white;">
            Message:
            </div>

            <div class="col-lg-7">
              <textarea required type="text" name="Message" placeholder="Message" cols="70" rows="5"></textarea>
        
            </div>
        
        </div>
      </br>
      </br>
    
      </br>
      </br>
      <input type="submit" name="Send Message" class="button">
      </br>
    
      </br>
    </div>
  </form>

</section>
 <form action="" method="post">
<div id="loginModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class = "close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Login</h4>

      </div>
      <div class="modal-body">
       
        <label>Username :</label>
        <input type="text" name="username" id="username" class="form-control"/>
        <br/>
        <label>Password :</label>
        <input type="password" name="password" id="password" class="form-control"/>
        <br/>
    
        <button type="submit" name="loginButton" id="loginButton" class="btn btn-success">Login</button>
        
      </div>
    </div>
  </div>
</div>
    </form>


<?php
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
        $_SESSION['Uname'] = $username;
        $_SESSION['pwd'] = $password; 
        
      echo "<script>
      window.location.href = 'ResidentHome.php';
      </script>";
        
      
      }
      else if(studentStatus($username) == 'Waiting List' OR studentStatus($username) == 'Moved Out')
      {
        $_SESSION['Uname'] = $username;
        $_SESSION['pwd'] = $password;
           echo "<script>
      window.location.href = 'StudentHome.php';
      </script>";
         
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





<style type="text/css">
.contactForm
{
  margin-left: 15%;
  text-align: left;
  margin-right: 15%;
  margin-top: 5%;
  margin-bottom: 5%;

}
.logContainer
    {
      size: 90%;
      width: 90%;
      height: relative;
      background-color: rgba(0,0,20,0.7);
      
      border-radius: 4px;
      margin: auto;
      
      
    }
    .AboutTexts
    {
      position: relative;
      transform: translateY(0%);
      text-shadow: none;
      color: #e0d490;
      font-weight: lighter;
      font-family: 'Roboto', sans-serif;

    }

    .body-content
    {
      margin-top: 0px;
      
    }
    .aboutus
    {
      
      background-size: 100%;
      background-image: url("Images/20.jpg");
      background-attachment: fixed; 
     

    }

    .contactus
    {

      background-size: relative;
      background-image: url("Images/18.jpg");
      background-attachment: fixed;



    }
    #carousel1
    {
      height:95%;
    }

    #vertical-line
    {
      margin-top: 15%;
      width:1px;
      height: 500px;
      background-color: #e0d490;

    }

    #horizontalLine
    {
      margin-top: 1%;
      margin-left: 25%;
      width:600px;
      height:2px;
      background-color: #e0d490;
      margin-right: 25%;
      margin-bottom: 0%;
    }

    .button
    {
      background-color: #e0d490;
    
      width: 200px;
      height: 40px;
      border: none;
      text-align: center;
      font-size: 18px;

    }

    .carousel-caption
    {
      left:0;
      right:0;
      bottom:0;
      width:100%;
      height:100%;
      background-color: rgba(100,100,100,0.5);
    }

    .carousel-caption h1, p, h4
    {
      position: relative;
      top:45%;
      left:0%;
      right:0%;
      transform: translateY(-50%);
      text-shadow: none;
      font-family: 'Roboto', sans-serif;

    }

     .carousel-caption h1
     {
        font-size: 4em;
     }

      .carousel-caption p
      {

        font-size: 1em;
      }
    
  </style>
