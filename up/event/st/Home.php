<!DOCTYPE html>
<html lang="en">
<?php 
  if(isset($_SESSION['user_info_id'])){
    $Pagehommie = "true"; 
  }
  ?>
<head>
  <meta charset="utf-8">
  <title>Kemon-Market</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="stylesheet" href="../v2.3.2/jquery.rateyo.min.css"/>
  <script>document.cookie = "_quex224My= "+screen.width</script>
  <link href="st/img/km.png" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="st/css/mycss.css">
  <?php
    include('st/in-session.php');
    include('st/css/style.css.php');
    include('st/dropdown.php');
  ?>
</head>
<body>

<div class="mapBodyBlack" style="visibility:hidden;display:none;">
   <div class="mainMap">
      <div class="removeMap">
          
      </div>
      <i class="fa fa-remove removeMapIcon"></i>
      <!-- <iframe width="100%" height="100%" 
      src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyBltSf8GhZIwPFark4NkUJhY53P-CY3a0M&origin=<?php// echo $_SESSION['latitude'].','. $_SESSION['longitude']?>&destination=6.5528867999999995,3.3538272&avoid=tolls|highways" frameborder="0"></iframe> -->
      <iframe width="100%" height="100%" src="https://maps.google.com/maps/place?q<?php echo $_SESSION['latitude'].','. $_SESSION['longitude']?>&output=embed" frameborder="0"></iframe>
   </div>
</div>



<!-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="WHM8mb9K"></script> -->
 <?php
  if(require_once('../../functions.php')){
    rating($_SESSION['in-shop_name']);
  }
?>
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#main">Ke<span>m</span>on</a></h1>
      </div>
          <?php                          
              $chkExistence = array();
              $verifyP = glob("pic/*.*");
              for ($a=0; $a<count($verifyP); $a++){
                $veri = explode('/',$verifyP[$a]);
                $verri = explode('-',$veri[1]);
                $anVery = $verri[0];
                if(!in_array($anVery,$chkExistence)){
                  $chkExistence[] =  ucwords(strtolower($anVery));
                }
              }

              $allTabs = array();
                $protabs = glob("pg/*.php");
                for ($i=0; $i<count($protabs); $i++){
                    $tab = $protabs[$i];
                    $Tabs = explode('/',$tab);
                    $TabChecked = explode('.',$Tabs[1]);
                    if($TabChecked[1] ==  'php'){
                        $extTab=$TabChecked[0];
                        if(in_array(ucwords(strtolower($extTab)),$chkExistence)){
                            $allTabs[]=$extTab;
                        }
                    }
                }
            ?>
             <nav id="nav-menu-container">
              <ul class="nav-menu">
              <li class="menu-active"><a href="#intro">Home</a></li>
            <?php
              foreach($allTabs as $tabb){
                echo '<li class="mainDropper"><a href="pg/'.$tabb.'.php">'. $tabb.'</a>';
                echo "<ul>";
                for($b=0;$b<count($allMyReadyTabArr); $b++){
                  $eacT = explode('-', $allMyReadyTabArr[$b]);
                  if(strtolower($eacT[0]) == strtolower($tabb)){
                      echo '<li><a href="tb/'.strtolower($allMyReadyTabArr[$b]).'.php"> '.ucwords($eacT[1]).'</a></li>';
                  }
                }
                
                ?>
                </ul>
                
              </li><?php
                

              }
            ?>
            <li style="position:absolute;right:0px">

              <?php
              if(isset($_SESSION['user_info_id'])){
                  echo '<form method="POST" action="'.$_SERVER["PHP_SELF"].'">
                        <button type="submit" name="Newsletter"style="margin-left:90px"class="subscribeClass" value="submit">Subscribe</button>
                      
                  </form>';
                  echo '<li class="subscribeClass" style="margin-top:-5px"><a href="../../login_form.php">Logout</a></li>';
                  
              }else{
                echo '<li class="subscribeClass" style="margin-top:-5px"><a href="../../create_acc.php">Sign up</a></li>';
              }
                 ?>
            </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- <a href="../../../exp.php" class="popLogin "><h4>Login</h4></a> -->
  <?php
  $explod=explode(' ',$_SESSION['in-shop_name']);
  if(isset($explod[2])){
    // echo $explod[2];
  }
  $mainBg   =   $_SESSION['myHomeBg'];
  echo ($_SESSION['in-bgPic']=="fix")?'<section id="intro" style="background-image:url(\'homeBg.png\')">':'<section id="intro" style="background-image:url(\''.$mainBg.'\')">'
  ?>
  
  
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span><?php echo $explod[0] ?></span><?php isset($explod[0]) ? $explod[0] :  " r"?></h1>
      <p class="mb-4 pb-0" style='width:60%'><?php echo substr($_SESSION['in-desc'],0,150)."..." ?></p> 
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#" class="about-btn scrollto mapAdd">Show direction</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" style="background-image:url('st/img/about-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Our Info</h2>
            <p><?php echo substr($_SESSION['in-desc'],0,50) ?></p>
          </div>
          <div class="col-lg-3">
            <h3>Address</h3>
            <p><?php echo ($_SESSION['in-junction']) ?></p>
            <p><?php echo ($_SESSION['in-bustop']) ?></p>
            <p><?php echo ($_SESSION['in-city']) ?></p>
          </div>
          <div class="col-lg-3">
            <h3>Connect Us </h3>
            <p><?php echo ($_SESSION['in-phone']) ?></p>
            <p><?php echo ($_SESSION['in-email']) ?></p>
          </div>
        </div>
      </div>
    </section>
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Uploads</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <?php echo '<img src="'.$allPic[$_SESSION['allrandRange0']-1].'"  alt="pic1" height="350px" width="350px" class="picBox">'?>
              <div class="details">
                <?php echo '<h3><a href="'.$allLink[$_SESSION['allrandRange0']-1].'">'.ucwords($allName[$_SESSION['allrandRange0']-1]).'</a></h3>';?>
                <div class="social">
                  <a href="<?php echo $_SESSION['in-facebook'] ?>"><i class="fa fa-facebook"></i></a>
                  <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
                  <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
                  <a class="twitter-share-button"href="https://twitter.com/intent/tweet?text=Hello%20world"data-size="large">Tweet</a>
                  <div class="fb-share-button" data-href="<?php echo $_SERVER['PHP_SELF'].'/'.$allPic[$_SESSION['allrandRange0']-1] ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dshare%2Bbutton%2Bfacebook%26source%3Dlnms%26tbm%3Dvid%26sa%3DX%26ved%3D2ahUKEwi9892tuL_wAhVaAWMBHfIJC88Q_AUoAnoECAEQBA&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
            <?php echo '<img src="'.$allPic[$_SESSION['allrandRange1']-1].'" alt="Speaker 1" height="350px !important" width="350px" class="picBox">'?>
              <div class="details">
              <?php echo '<h3><a href="'.$allLink[$_SESSION['allrandRange1']-1].'">'.ucwords($allName[$_SESSION['allrandRange1']-1]).'</a></h3>';?>
              <div class="social">
             <a href="<?php echo $_SESSION['in-facebook'] ?>"><i class="fa fa-facebook"></i></a>
             <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
             <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
           </div>
              </div>
            </div>
          </div>
     <div class="col-lg-4 col-md-6">
       <div class="speaker">
       <?php echo '<img src="'.$allPic[$_SESSION['allrandRange2']-1].'" alt="Speaker 1" height="350px !important" width="350px" class="picBox">'?>
         <div class="details">
         <?php echo '<h3><a href="'.$allLink[$_SESSION['allrandRange2']-1].'">'.ucwords($allName[$_SESSION['allrandRange2']-1]).'</a></h3>';?>
         <div class="social">
             <a href="<?php echo $_SESSION['in-facebook'] ?>"><i class="fa fa-facebook"></i></a>
             <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
             <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
           </div>
         </div>
       </div>
     </div>
    
     <div class="col-lg-4 col-md-6">
       <div class="speaker">
       <?php echo '<img src="'.$allPic[$_SESSION['allrandRange3']-1].'" alt="Speaker 1" height="350px !important" width="350px" class="picBox">'?>
         <div class="details">
         <?php echo '<h3><a href="'.$allLink[$_SESSION['allrandRange3']-1].'">'.ucwords($allName[$_SESSION['allrandRange3']-1]).'</a></h3>';?>

           <div class="social">
             <a href="<?php echo $_SESSION['in-facebook'] ?>"><i class="fa fa-facebook"></i></a>
             <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
             <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
           </div>

         </div>
       </div>
     </div>

     <div class="col-lg-4 col-md-6">
       <div class="speaker">
       <?php echo '<img src="'.$allPic[$_SESSION['allrandRange4']-1].'" alt="Speaker 1" height="350px !important" width="350px" class="picBox">'?>
         <div class="details">
         <?php echo '<h3><a href="'.$allLink[$_SESSION['allrandRange4']-1].'">'.ucwords($allName[$_SESSION['allrandRange4']-1]).'</a></h3>';?>

           <div class="social">
             <a href="<?php echo $_SESSION['in-facebook'] ?>"><i class="fa fa-facebook"></i></a>
             <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
             <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
           </div>

         </div>
       </div>
     </div>

     <div class="col-lg-4 col-md-6">
       <div class="speaker">
       <?php echo '<img src="'.$allPic[$_SESSION['allrandRange5']-1].'" alt="Speaker 1" height="350px" width="350px" class="picBox">'?>
         <div class="details">
         <?php echo '<h3><a href="'.$allLink[$_SESSION['allrandRange5']-1].'">'.ucwords($allName[$_SESSION['allrandRange5']-1]).'</a></h3>';?>

         <div class="social">
             <a href="<?php echo $_SESSION['in-facebook'] ?>"><i class="fa fa-facebook"></i></a>
             <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
             <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
           </div>
           </div>
         </div>
       </div>
     </div>
    </section>
    
    <!--==========================
      Hotels Section
    ============================-->
    
    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">

      <?php
      $Owl_AllPics = glob('pic/*.*');
        for($i=0; $i< count($Owl_AllPics); $i++){

      ?>
        <a href=" <?php echo $Owl_AllPics[$i]?> " class="venobox" data-gall="gallery-carousel"><img src="<?php echo $Owl_AllPics[$i]?>" width="250" height="270" alt=""></a>
      
      <?php
          }
      ?>
      
      </div>


    </section>    
    <section id="hotels" style="margin-top:-50px" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <br><h2>Team</h2>
        </div>
          <?php $ShowTeam = glob("usersTeam/*.png") ?>
        <div class="row">
<?php
        
    for($c=0; $c<count($ShowTeam); $c++){
        $showT = explode('/',$ShowTeam[$c]);
        $showTe = explode('.',$showT[1]);
        $showTex = fopen('usersTeam/'.$showTe[0].".txt", "r");
        $showText = fgets($showTex);
        $showTexts=explode('---',$showText);
    ?>
          <div class="col-lg-<?php if(count($ShowTeam)<3){echo "5";}else{echo "4";} ?> col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="<?php echo $ShowTeam[$c] ?>" alt="Team" style="height:400px;width:100%;" class="img-fluid">
              </div>
              <h3 style="text-align:center"><a href="tel:<?php echo $showTexts[2]?>"><?php echo $showTexts[0] ?></a></h3>
              <p style="text-align:center"><?php echo $showTexts[1] ?></p>
              <div style="text-align:center; margin-top:-10px; padding-bottom:20px">
                <a href="tel:<?php echo $showTexts[2]?>"><i class="mafa fa fa-phone"></i></a>
                <a href="mailto:<?php echo $showTexts[3]?>"><i class="mafa fa fa-envelope"></i></a>
              </div>
              
            </div>
          </div>
<?php

    }

?>
          <!-- <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
              <img src="<?php echo $ShowTeam[1] ?>" alt="Team" class="img-fluid">
              </div>
              <h3><a href="https://mobile.facebook.com/holluwarsussystephenholluwasheunfunmie.thankgod">Oluwasusi Stephen Olayemi</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>Website Developer and data analyst</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
              <img src="<?php echo $ShowTeam[2] ?>" alt="Team" class="img-fluid">
              </div>
              <h3><a href="https://www.facebook.com/oludamiro.ayomidesamuel">Oludamiro Samuel Ayomide</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Graphics Designer</p>
            </div>
          </div> -->

        </div>
      </div>

    </section>

    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">
              <?php
                  $loadFaq = glob("cp/*.txt");
                  
                  for($c=0; $c<count($loadFaq); $c++){
                    $loadF = explode('/',$loadFaq[$c]);
                    $showTe = explode('-',$loadF[1]);
                    if($showTe[0]=="Faq"){
                      // echo $showTe[0].'-'.$showTe[1].".txt";
                        $showTex = fopen('cp/'.$showTe[0].'-'.$showTe[1], "r");
                        $showText = fgets($showTex);
                        $showTexts=explode('===',$showText);
                        ?>
                        <li>
                          <a data-toggle="collapse" class="collapsed" href="#faq<?php echo $c?>"><?php echo ucwords($showTexts[0]) ?><i class="mafa fa fa-minus-circle"></i></a>
                          <div id="faq<?php echo $c?>" class="collapse" data-parent="#faq-list">
                            <p>
                            <?php echo ucfirst($showTexts[1]) ?>
                            </p>
                          </div>
                        </li>
                      <?php    
                    }            
                  } 
      ?>
              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe" style="background-image:url('st/img/body-bg.png')">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2 ><a target="_blank" style="color:#fff;" href="https://awesome-wears.firebaseapp.com">Awesome wears</a></h2>
          <p>We get you a better outfits. We render Good services for our clients.</p>
        </div>
         <?php
              for($t= date("s"); $t <=52; $t++){
                  echo "<img src='../../pic/f".$t.".jpg' alt'Advert' class='wearsPic'";
            }     
            
        ?>
      </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
   
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Message to <?php echo $_SESSION['in-shop_name'] ?>.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address><?php echo $_SESSION['in-city'] ?></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:<?php echo $_SESSION['in-phone'] ?>"><?php echo $_SESSION['in-phone'] ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:<?php echo $_SESSION['in-email'] ?>"><?php echo $_SESSION['in-email'] ?></a></p>
            </div>
          </div>

        </div>

      <?php
        if(isset($_POST['send_message'])){
          echo "yuyu";
            $name=$mysqli->real_escape_string($_POST['name']);
            $email=$mysqli->real_escape_string($_POST['email']);
            $subject=$mysqli->real_escape_string($_POST['subject']);
            $message=$mysqli->real_escape_string($_POST['message']);

            $newSubject  = "<h4>From Kemon Market -> customer message.<br><br>".$subject."</h4>";
            $newMessage  = "<h5>Name:".$name."<br>Email:".$email."<br><br>Hi".$_SESSION['in-shop_name']."<br>".$message."</h4>";
            if(MyMailer($newSubject,'stephanyemmitty@gmail.com',$newMessage)){
                  $Sent = "Your message has been sent. Thank you!";
            }else{
              $sent = "Your message not sent. check your connection and try again!";
            }


        }else{
          
        }

        ?>
        <div class="frm">
          <div id="sendmessage"></div>
          <div id="errormessage"></div>
          <form action="" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button name='send_message' class="btn btn-primary" type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section>
    </main>
 























 
<?php

function repeatFooter($numTimes,$footerLinkName,$footerLink){
  if(!is_float($numTimes+1)){
  for($i=0; $i<$numTimes+1; $i++){
?>
  <div class="col-lg-3 col-md-6 footer-links">
  <h4>Links</h4>
  <ul>
   
  <?php
    if(isset($footerLinkName[(5*$i)+4])){
      echo '<li><i class="fa fa-angle-right"></i> <a href="'.$footerLink[5*$i].'">'.$footerLinkName[5*$i].'</a></li>';
    }
    ?>
  
    <?php
    if(isset($footerLinkName[(5*$i)+1])){
      echo '<li><i class="fa fa-angle-right"></i> <a href="'.$footerLink[(5*$i)+1].'">'.$footerLinkName[(5*$i)+1].'</a></li>';
    }
    ?>
    <?php
    if(isset($footerLinkName[(5*$i)+2])){
      echo '<li><i class="fa fa-angle-right"></i> <a href="'.$footerLink[(5*$i)+2].'">'.$footerLinkName[(5*$i)+2].'</a></li>';
    }
    ?>
    <?php
    if(isset($footerLinkName[(5*$i)+3])){
      echo '<li><i class="fa fa-angle-right"></i> <a href="'.$footerLink[(5*$i)+3].'">'.$footerLinkName[(5*$i)+3].'</a></li>';
    }
    ?>

    
    <?php
    if(isset($footerLinkName[(5*$i)+4])){
      echo '<li><i class="fa fa-angle-right"></i> <a href="'.$footerLink[(5*$i)+4].'">'.$footerLinkName[(5*$i)+4].'</a></li>';
    }
    ?>
  </ul>
</div>

<?php
}
}
}


    ?>
</ul>
</div>
<?php
?>

<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <h3><?php echo $_SESSION['in-shop_name'] ?></h3>
          <p><?php echo $_SESSION['in-desc'] ?></p>
        </div>

       <?php 
        // echo sizeof($footerLinkName)."-=-";
         $numTims = sizeof($footerLinkName)/5;
        //  echo $numTims;
         $numTime = explode('.',$numTims);           
         if(is_float($numTims)){
            $timti = $numTime[1] - $numTims;
            $timt = explode('.',$timti);
            $tim = $timt[1]/2;
         }else{
           $tim = 0;
         }
         
         repeatFooter($numTime[0],($footerLinkName),$footerLink);
         $rev_allNames = array_reverse($footerLinkName);
         
        //  repeatFooterLeftOver($tim,$rev_allNames,$numTime[0]+1)
       ?>
        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            <?php echo $_SESSION['in-junction'] ?>,<br>
            <?php echo $_SESSION['in-bustop'] ?>,<br>
            <?php echo $_SESSION['in-city'] ?>,<br>
            <strong>Phone:</strong> <a href="tel:<?php echo $_SESSION['in-phone'] ?>"><?php echo " ".$_SESSION['in-phone'] ?></a><br>
            <strong>Email:</strong><a href="mailto:<?php echo $_SESSION['in-email'] ?>"><?php echo " ".$_SESSION['in-email'] ?></a><br>
          </p>
          <div class="social-links">
            <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="mafa fa fa-phone"></i></a>'?>
            <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="mafa fa fa-whatsapp"></i></a>'?>
            <?php echo '<a href="'.$_SESSION['in-facebook'].'"><i class="mafa fa fa-facebook"></i></a>'?>
            <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
    </div>
    <div class="credits" >
       <h5 style="color:#fff; font-size:17px"></h5> Powered by kemon-Market &copy; <?php echo date('Y') ?> <strong><?php echo $_SESSION['in-shop_name'] ?></strong>. </h5>
    </div>
  </div>
</footer>


         
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery/jquery-migrate.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/superfish/hoverIntent.js"></script>
<script src="../lib/superfish/superfish.min.js"></script>
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/venobox/venobox.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="st/js/main.js"></script>
<script src="st/js/setup.js"></script>
<script type="text/javascript" src="../v2.3.2/jquery.rateyo.js"></script>
<script>
   <?php 
    if(isset($Pagehommie)){
    ?>  
        document.querySelector('.subscribeSignUp').addEventListener('click',function(){
        document.querySelector('.popLogin').style.display="block"
      })
    <?php 
          }
    ?>

document.querySelector('.mapAdd').addEventListener('click', function(){
      
      document.querySelector('.mapBodyBlack').style.display="flex"
      document.querySelector('.mapBodyBlack').style.visibility="visible"
    })
    document.querySelector('.removeMapIcon').addEventListener('click', function(){
      
      document.querySelector('.mapBodyBlack').style.display="none"
      document.querySelector('.mapBodyBlack').style.visibility="hidden"
    })

</script>

</body>

</html>


