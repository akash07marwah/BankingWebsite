


<?php 

session_start();
//connect to mysql

$conn = mysqli_connect('localhost','root','Rishabh135','xyz_bank');
 
//test Conection

if(mysqli_connect_errno())
    
{
    echo 'Db connection error'.mysqli_connect_error();
    
    
}
$account=$_SESSION['account'];

if(isset($_POST['return']))
{
    
    header('Location:myacc.php');

}
if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    
    
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      
<SCRIPT type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
</SCRIPT>
    <meta charset="utf-8">
    <title> Net Banking </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
      <link rel="stylesheet" href="Main.css">
      <link rel="stylesheet" href="login.css">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
  </head>
  <body onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload="">
     <h1> Welcome to XYZ Bank  <img style="height:50px; width:80px;" src="a.jpg" > </h1>
    <nav class="navbar navbar-default navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

            <!--  Code for the hamburger icon-->
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul class="navbar-nav">
            <li class="active"> <a class="navbar-brand" href="#"> XYZ Internet Banking </a></li>
          </ul>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <form  method="post" action="" class="navbar-form navbar-right">
          <button type="submit"  name="logout" class="btn btn-default"> <a href='logout.php'> Logout  </a> </button>

        </form>
          <ul class="nav navbar-nav navbar-center">

            <li class="def"><a href="aboutus.html"> ABOUT US </a></li>
            <li><a href="Main.html"> Our Products </a></li>
            <li><a href="cc.html"> Customer Care </a></li>
            <li class="abc"><a href="gr.html"> Greivance Redressal  </a></li>
          </ul>
              <!-- <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> New Delhi <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li ><a href="#"> Bangalore </a></li>
              <li><a href="#"> Chennai </a></li>
              <li><a href="#"> Hyderabad </a></li>
                <li><a href="#"> Mumbai </a></li>
                <li><a href="#"> Pune </a></li>
             Use this to separate a new link

               <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
          </ul> -->
          <!-- SEARCH BAR -->
          <!-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> -->



          <!-- Stuff on the Right -->


        </div>
      </div>
    </nav>

     <div>
      <h2>TRANSACTION SUCCESSFULL</h2>
         <div class="login-box">
     <form method="post" action="">
           <h1>transaction was successfull!!!</h1>
         
        <input type="submit" name="return" value="Return To Home Page">
             </form></div>
      <div class="col-xs-2" id="three">
        <h4> Account Information </h4>

        <ul>
            <li id="one"> <h5>Name:<?php
          $query=mysqli_query($conn,"SELECT name FROM user WHERE acc_no='$account'");
           $result=mysqli_fetch_assoc($query);
          $a=$result['name'];
          echo "$a"; ?></h5> </li>
          <br>
          <li id="one"><h5>Account Number:<?php
          $query=mysqli_query($conn,"SELECT acc_no FROM user WHERE acc_no='$account'");
           $result=mysqli_fetch_assoc($query);
          $a=$result['acc_no'];
          echo "$a"; ?> </h5></li>
          <br>
          <li id="one"> <h5>Email:<?php
          $query=mysqli_query($conn,"SELECT email FROM user WHERE acc_no='$account'");
           $result=mysqli_fetch_assoc($query);
          $a=$result['email'];
          echo "$a"; ?> </h5> </li>
          <br>
          <li id="one"><h5>Aadhaar:<?php
          $query=mysqli_query($conn,"SELECT aadhar FROM user WHERE acc_no='$account'");
           $result=mysqli_fetch_assoc($query);
          $a=$result['aadhar'];
          echo "$a"; ?> </h5> </li>
        </ul>

      </div>
 
      </div>
    <script
      src="http://code.jquery.com/jquery-3.1.1.js"
      integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
      crossorigin="anonymous"></script>
    </body>
</html>
