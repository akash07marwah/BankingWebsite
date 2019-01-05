

<?php 
session_start();
session_id();

//connect to mysql

$conn = mysqli_connect('localhost','root','Rishabh135','xyz_bank');
 
//test Conection

if(mysqli_connect_errno())
    
{
    echo 'Db connection error'.mysqli_connect_error();
    
    
}
if (isset($_POST['login']))
{
    $account=$_POST['acc'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM user WHERE acc_no='$account'");
    if(mysqli_num_rows($query)>0)
    {
        $result=mysqli_fetch_assoc($query);
        
    
        if($result['pass']==$password)
        {
          
            $_SESSION['account']=$account;
             mysqli_query($conn,"INSERT INTO log (acc_no) VALUES ('$account')");
            header('Location:myacc.php');
        }
        else{
            echo "<script> alert('Password is incorrect!') </script>";
        }
        
    }
     else
    {
        
        echo "<script>alert('Your account is not  registered with us or you have entered wrong Account No.!')</script>";
    }
    
   
}
   
    
    


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Net Banking </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
      <link rel="stylesheet" href="Main.css">
      <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
  </head>
  <body>
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
            <li class="active"> <a class="navbar-brand" href="Main.php"> XYZ Internet Banking </a></li>
          </ul>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-right">
         
           <button type="submit" class="btn btn-default"> <a href='nr.php'> New Registration  </a> </button>
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
           <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default btn-success">Submit</button>
          </form>



          <!-- Stuff on the Right -->


        </div>
      </div>
    </nav>

     <div>
      <h2> Login </h2>
      <div class="col-xs-2" id="two">
        <h4> Whats New </h4>
        <marquee direction="up"
        <ul>
          <li id="one"> <a href="#">Please Note That Non-CTS Compliant Cheques Shall Not Be Processed For Clearing At CTS Centers Across The Banks In India W.E.F January 1,2019. Please Get Your Non-CTS Cheque Book Replaced Immediately. </a> </li>
          <br>
          <li id="one"> <a href="#">A Concession/ Discount Of 20 Percent Is Allowed In Respect Of All Sized Lockers If The Locker Rent Is Paid In Advance For A Period Of Five Years In Lump Sum.</a> </li>
          <br>
          <li id="one"> <a href="#"> Waivement Of 50 Percent Security Deposit To Regular Housing Loan Customers Of The Bank Only </a> </li>
          <br>
          <li id="one"><a href="#">Apply For OTS In NPA Accounts. Link Also Under Products-Loans-Retail</a> </li>
        </ul>
      </marquee>
    </div>
      <div class="col-xs-2" id="three">
        <h4> Services </h4>

        <ul>
          <li id="one"> <a href="#"> Update Aadhar </a> </li>
          <br>
          <li id="one"> <a href="#"> Cards </a> </li>
          <br>
          <li id="one"> <a href="#"> Get your Form 16A </a> </li>
          <br>
          <li id="one"><a href="#"> Locate </a> </li>
        </ul>

      </div>
      <div id="carousel1" class="carousel slide" data-ride="carousel" style="align-items:center; margin-left: 350px; height:500px; width:800px;">
    <div class="login-box">
    <img src="avatar.png" class="avatar">
    <form action="" method="post">
        <h1>
            Login Here
        </h1>
        <p>
            Account Number
        </p>
        <input type="text"  name="acc" placeholder="Account Number">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="login" value="Login">
        <a href="#" style="color:white;"> Forget Password</a>
    </form>
</div>

       </div>
    </div>

    <script
      src="http://code.jquery.com/jquery-3.1.1.js"
      integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
      crossorigin="anonymous"></script>
    </body>
</html>
