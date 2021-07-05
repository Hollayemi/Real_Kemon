
<?php 
  session_start();
  include('configuration/config.php');
  include('initialization/initialize.php');
  include('in-session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kemon-Market</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="../st/img/km.png" rel="icon">
  <link href="../st/img/km.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/venobox/venobox.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <?php
  include('css/style.css.php')
  ?>
  <link href="../st/css/mycss.css" rel="stylesheet">
</head>
<body class="body">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="WHM8mb9K"></script>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="#main">Ke<span>m</span>on</a></h1>
      </div>
          <?php                          

          $chkExistence = array();
          $verifyP = glob("../pic/*.*");
          
          for ($a=0; $a<count($verifyP); $a++){
            $veri = explode('/',$verifyP[$a]);
            $verri = explode('-',$veri[2]);
            $anVery = $verri[0];
            if(!in_array($anVery,$chkExistence)){
              $chkExistence[] =  ucwords(strtolower($anVery));
            }
          }
          $allTabs = array();
                    
            $protabs = glob("../pg/*.php");
            
            for ($i=0; $i<count($protabs); $i++){
                $tab = $protabs[$i];
                $Tabs = explode('/',$tab);
                $TabChecked = explode('.',$Tabs[2]);
                if($TabChecked[1] ==  'php'){
                  $extTab=$TabChecked[0];
                  if(in_array(ucwords(strtolower($extTab)),$chkExistence)){
                    $allTabs[]=$extTab;
                  }
                }
            }

            include("../st/dropdown.php");
            ?>
             <nav id="nav-menu-container">
              <ul class="nav-menu">
              <li><a href="../<?php echo $genId ?>.php">Home</a></li>
            <?php
                        
              foreach($allTabs as $tabb){
                if(ucwords($name)==$tabb){     

                  echo '<li class="menu-active"><a href="../pg/<?php echo $tabb?>.php"><?php echo $tabb?></a></li>';
                }else{
                  echo '<li><a href="../pg/'.$tabb.'.php">'.$tabb.'</a>';

                      echo "<ul>";
                      for($b=0;$b<count($allMyReadyTabArr); $b++){
                        $eacT = explode('-', $allMyReadyTabArr[$b]);
                        if(strtolower($eacT[0]) == strtolower($tabb)){
                            echo '<li><a href="../tb/'.strtolower($allMyReadyTabArr[$b]).'.php"> '.$eacT[1].'</a></li>';
                        }
                      }
                      ?>
                      </ul>
                    </li><?php
                  }
              }
            ?>
            <li style="margin-left:0px; margin-right:0px"><a href="../../../login_form.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <div class="shiftMain">
    <div class="sub-menuDiv" style="margin-left:;opacity:1;visibility:hidden">
      <div class="sub_links">
    <?php
        require_once("../st/dropdown.php");
        for($b=0;$b<count($allMyReadyTabArr); $b++){
          $eacT = explode('-', $allMyReadyTabArr[$b]);
          if(strtolower($eacT[0]) == strtolower($namePage)){
              echo '<li><a href="../tb/'.strtolower($allMyReadyTabArr[$b]).'.php"> '.$eacT[1].'</a></li>';
          }
        }
                              
?>
       </div>                         
    </div>
    <div class="sec-mainDiv">

      <main id='headerMain' style="background-image:url('<?php echo $Mypic[$myRand-1]?>')">
            <div class="headerDiv"><br><br><br><br><br>

                        <div class="showSideLinks" style="top:80px;"><i class="menu-fa menu-fa1 fa fa-bars"></i> <i class="menu-fa menu-fa2 fa fa-remove" style="transform:scale(0)"></i></div>
                      <?php

                      $loo = explode('-',$loop[5]);
                      $lo = ucwords($loo[0]);
                      $exPag = explode('.',$loo[1]);
                      $extPage = $exPag[0];
                      
                      echo"<h1 class='shopHeader'>".ucwords($_SESSION['in-shop_name'])."<br>(".ucwords($extPage).")</h1><br>";
                      echo "<div style='text-align:center;color:#fff; width:70%;margin-left:15%'>".substr($_SESSION['in-desc'],0,120)."</div>"."<br>";
                      echo "<div class='About_me' style='text-align:left;'>";
                        echo '<span><a href="https://'.$_SESSION['in-facebook'].'"><i class="fa fa-facebook fa-2x soc_link_fb"></i></a></span>';
                        echo '<span><a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp fa-2x soc_link" ></i></a></span><br><br><br>';

                      echo "</div>";
                  ?>
                  <div class="fb-share-button"
                   data-href="https://www.google.com/search?q=share+button+facebook&amp;source=lnms&amp;tbm=vid&amp;sa=X&amp;ved=2ahUKEwi9892tuL_wAhVaAWMBHfIJC88Q_AUoAnoECAEQBA" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dshare%2Bbutton%2Bfacebook%26source%3Dlnms%26tbm%3Dvid%26sa%3DX%26ved%3D2ahUKEwi9892tuL_wAhVaAWMBHfIJC88Q_AUoAnoECAEQBA&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
            </div>
      </main>
    