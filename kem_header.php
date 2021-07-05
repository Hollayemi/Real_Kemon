<?php
session_start();
include('session.php');
$user_id = $_SESSION['user_info_id'];
$username = $_SESSION['username'];

$MyProf =  '1/'.$username.($user_id+30).'.php';
$contents ="<?php
include('Myprofile.php'); ?>";

$MyLoader =  '1/'.$username.($user_id+30).'loader.php';
$contents2 ="<?php  
include('../loader.php'); 
?>";
if(file_put_contents($MyProf,$contents))
if(file_put_contents($MyLoader,$contents2))


$mysqli=mysqli_connect('sql105.epizy.com','epiz_28257429','BHiMYLgFzV3pjb','epiz_28257429_market');
$Reg = 'True';
$_SESSION['curPageName'];
$shop_nickss   =   $_SESSION['shop_nick']; 
if (isset($_POST['submit'])){
    
    $Shop_Name       =    $mysqli->real_escape_string($_POST['Shop_Name']);
    $shop_nick       =    ucwords(strtolower($mysqli->real_escape_string($_POST['aka'])));
    $website         =    $mysqli->real_escape_string($_POST['website']);
    $OPH             =    $mysqli->real_escape_string($_POST['Opening']);
    $CLH             =    $mysqli->real_escape_string($_POST['Closing']);
    // $CLH             =    $mysqli->real_escape_string($_POST['ckHour']);
    $country         =    $mysqli->real_escape_string($_POST['Country']);
    $state           =    $mysqli->real_escape_string($_POST['state']);
    $City            =    $mysqli->real_escape_string($_POST['City']);
    $Junction        =    $mysqli->real_escape_string($_POST['Junction']);
    $Bustop          =    $mysqli->real_escape_string($_POST['Bustop']);
    $VCT             =    $mysqli->real_escape_string($_POST['VCT']);
    $facebook        =    $mysqli->real_escape_string($_POST['Facebook']);
    $whatsapp        =    $mysqli->real_escape_string($_POST['Whatsapp']);
    $linked_in       =    $mysqli->real_escape_string($_POST['Linkedin']);
    $Phone           =    $mysqli->real_escape_string($_POST['BPhone']);
    $latitude        =    $mysqli->real_escape_string($_POST['latitude']);
    $longitude       =    $mysqli->real_escape_string($_POST['longitude']);
    $Offer           =    $mysqli->real_escape_string($_POST['Desc']);
    $real_id         =  $_SESSION['user_info_id'];
    
    $_SESSION['Username']   =   'Username';
    $_SESSION['shop_name']  =   '$Shop_Name';
    $_SESSION['shop_line']  =   '$Shop_Line';
    $_SESSION['Email']      =   'Email';

    
    if($CLH == "Closing hour" || $OPH == "Opening hour"){
        $CLH = "24 hrs";
        $OPH = "24 hrs";
        // $ckHour = "24 hours";

    }else{

    }

    if(isset($_COOKIE['_categories'])){
      $category =  $_COOKIE['_categories'];
        
    if($Shop_Name != "" && $country != "" && $state != "" && $City != "" && $Junction != ""  && $Bustop != "" && $VCT != "" && $facebook != "" && $whatsapp != "" && $Phone != "" && $Offer != ""  && $state != "Select State" && $category != "" && $latitude != ''){
        // $fetchLocall = strval($fetchLocal);
        $sql="INSERT INTO marketers (shop_name,shop_nick,shop_website,opening_hour,closing_hour,country,state,city,junction,bustop,very_close_to,facebook,
        whatsapp,phone,linked_in,our_offer,id,longitude,latitude) VALUES ('$Shop_Name','$shop_nick','$website','$OPH','$CLH','$country','$state','$City','$Junction','$Bustop','$VCT','$facebook','$whatsapp','$Phone','$linked_in','$Offer','$real_id','$longitude','$latitude')";
        $sqlCategory = "INSERT INTO category (id,category) VALUES ('$user_id','$category')";
        $runCategory = mysqli_query($mysqli,$sqlCategory);
        $run=mysqli_query($mysqli,$sql);
        if($run && $runCategory){
            $alert = "<p class='color:green'></p>Submitted";
            setcookie("_categories","",time()-3600);
        }else{
            $alert =  "Not Submitted</div>";
        }
    }else{
      $alert = "Fill the required field";
    }

        $user_id=$_SESSION['user_info_id'];
        $sql="SELECT id,username,password,email FROM users Where id='$user_id'";
        $rub_sql=$mysqli->query($sql);
    $result=mysqli_fetch_array($rub_sql,MYSQLI_ASSOC);
    if($result){
        $id=$result['id'];
        $username=$result['username'];
        // $shop=$result['shop_name'];
        $email=$result['email'];
        // $city=$result['City'];
    }   
  }else{
    $alert = "Reselect your category";
  }
}
?>























<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kemon-Market</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="img/km.png" rel="icon">
  <!-- <link href="img/myKemon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <script src="https://js.paystack.co/v1/inline.js"></script>
  
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">
  <?php
  if(isset($reg)){
    echo '<link href="css/animate.css" rel="stylesheet">';
  }
  if(isset($near)){
    echo '<script src="https://unpkg.com/axios/dist/axios.min.js"></script>';
    echo '<link href="css/product.css" rel="stylesheet">';
  }
  if(isset($Agent)){
    echo '<link href="css/agent.css" rel="stylesheet">';
  }
  ?>
  
</head>

<body class="kemBody">
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="https://twitter.com/oluwasusi_ola?s=09" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://mobile.facebook.com/Stephanyemmitty" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://api.whatsapp.com/send?phone=08147702684&text=Hi,%20from%20Kemon-Market.%20My%20name%20is%20" class="linkedin"><i class="fa fa-whatsapp"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="Mycontainer" style="width:100%">
      <div class="logo float-left" style="margin-left:5%">
        <!-- <h1 class="text-light"><a href="index.php" class="scrollto"><span>Ke<span style="color:skyblue">M</span>on</span></a></h1> -->
        <a href="#header" class="scrollto"><img src="img/myKemon.png" alt="" class="imgfluid"></a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block margin-rt">
        <ul>
          <?php
              if(isset($beg)){
            echo '<li><a href="index.php" style="color:rgb(109, 192, 240)">Home</a></li>';
              }else{
                echo '<li><a href="index.php">Home</a></li>';
              }
          ?>
          <?php
              if(isset($reg)){
            echo '<li class="active"><a href="Register.php">Register</a></li>';
              }else{
                echo '<li><a href="Register.php">Register</a></li>';
              }
          ?>
          <li><a href="Register.php#team">Team</a></li>
          <?php
          if(isset($Agent)){
            echo '<li class="active scrollto"><a href="Agent.php" style="color:rgb(109, 192, 240)">Agent</a></li>';
          }else{
            echo '<li class="scrollto"><a href="Agent.php">Agent</a></li>';
          }
          ?>
          <li class="drop-down"><a href="">Xtra Plans</a>
            <ul>
              <li><a href=" Xtra_Memory.php">Purchase Xtra Memory</a></li>
              <li><a href="Xtra_Brand.php">Purchase Xtra Brands</a></li>
              <li><a href="Xtra_Product.php">Purchase Xtra Product</a></li>
              <li class="scrollto"><a href="#pricing">More</a></li>
            </ul>
          </li>
          <li><a href="#footer">Contact Us</a></li>
          
      <?php 
      
          $sql="SELECT veri_payment,my_pic FROM users Where id='$user_id'";
          
                $emailNames = $_SESSION['emailNameReal'];
                $run=mysqli_query($mysqli,$sql);
                $row = mysqli_fetch_assoc($run);

                $_SESSION['veri_payment'] = $row['veri_payment'];
                if($row['veri_payment'] == "True"){
                    echo "<li><a href='1/".$username.($user_id+30)."loader.php'>Dashboard</a></li>";
                }else{
                    echo "<li title='Register before creating your profile'class='scrollto'><a href='Register.php#payNow'>Dashboard</a></li>";
                } 
                if($row['veri_payment'] == "True"){
                  echo "<li class='top drop-down float-rt'><a href='#'><img src='up/".$shop_nickss."/profile.png' height='60' width='60' style=\"border-radius:50%;margin-top:-20px\" class='arrTop'></a>
                  <ul class='subscription  logout-left'>
                      <li class='top'><a href='exp.php'>Logout</a></li>
                  </ul>
                  </li>";
            }else{
                echo "<li class='top drop-down float-rt'><a href='#'><img src='img/profile.png' height='60' width='60' style=\"background-color:#000;border-radius:50%;margin-top:-20px\" class='arrTop'></a>
                <ul class='subscription  logout-left'>
                    <li class='top'><a href='exp.php'>Logout</a></li>
                </ul>
                </li>";
              };
                      
            "
            
               
        </ul>
      </nav>
      
      ";
include('whatsapp.php')
 ?>
</header>


