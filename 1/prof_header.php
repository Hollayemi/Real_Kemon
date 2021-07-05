<?php 
session_start();
include('session.php');
$mysqli=mysqli_connect('sql105.epizy.com','epiz_28257429','BHiMYLgFzV3pjb','epiz_28257429_market');
$Reg = 'True';
if(isset($_GET['theme'])){
    if($_GET['theme']=="changed");{
      echo "<script>alert('Your theme has been changed')</script>";
    }
}
$_SESSION['curPageName'];
     //========================-------size of folder-----------==================   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kemon-Market</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/km.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../up/v2.3.2/jquery.rateyo.min.css"/>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style2.css" rel="stylesheet">

  <style>
      #portfolio{
        width:80%;
        margin-left:20%;
      }

  </style>
</head>

<body class="profBody" style="background-color:#f5f8fd">
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="https://twitter.com/oluwasusi_ola?s=09" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://mobile.facebook.com/Stephanyemmitty" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://api.whatsapp.com/send?phone=08147702684&text=Hi,%20from%20Kemon-Market.%20my%20name%20is%20" class="linkedin"><i class="fa fa-whatsapp"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="Mycontainer" style="width:100%">

      <div class="logo float-left" style="margin-left:5%">
        <!-- <h1 class="text-light"><a href="../index.php" class="scrollto"><span>Ke<span style="color:skyblue">M</span>on</span></a></h1> -->
        <a href="#header" class="scrollto"><img src="../img/myKemon.png" alt="" class="img-fluid"></a>
      </div>
      
      <nav class="main-nav float-right d-none d-lg-block margin-rt">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li class="scrollto"><a href="../Register.php">Register</a></li>
          <li><a href="../Register.php#team">Team</a></li>
          <li class="scrollto"><a href="../Agent.php">Agent</a></li>
          <li><a href="#footer">Contact Us</a></li>
          <?php 
          
           $username = $_SESSION['username'];
          $sql="SELECT veri_payment FROM users Where id='$user_id'";
          
                $emailNames = $_SESSION['emailNameReal'];
                $run=mysqli_query($mysqli,$sql);
                $row = mysqli_fetch_assoc($run);

                $_SESSION['veri_payment'] = $row['veri_payment'];
                if($row['veri_payment'] == "False"){
                    echo "<li title='Register before setting your profile'><a href='#Payment'>Dashboard</a></li>";
                }else{
                    echo "<li class='active'><a href='".$username.($user_id+30).".php'>Dashboard</a></li>";
                } 
                $mylink = $user_id+30;
            ?>
          
            
            <li class='top'><a href='#'><img src='../up/<?php echo $_SESSION['shop_nick'] ?>/profile.png' height='60' width='60' style="border-radius:50%;margin-top:-20px" class='arrTop'></a></li>
            <li class='drop-down float-rt'><a href="#"  style="margin:-10px 0px 0px -12px"><?php echo $_SESSION['username'] ?></i></a>
                <ul class='subscription  logout-left'>
                  <li class='top'><a href="../exp.php">Logout</a></li>
                </ul>
        </ul>
      </nav>
      
    </div>
  </header>
  <div >
        <button class="arrRight">&#x2192</button>
  </div>

  <div >
        <div class="bell">
          <button onclick="moveNotify()" class="bell"><i style="color: rgb(62, 7, 107);" class="fa fa-bell"></i></button>
        </div>
  </div>
  <div class="cloudCover"></div>