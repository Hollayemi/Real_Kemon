<?php $sc = "tru" ?>
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
  <link rel="stylesheet" href="../st/css/mycss.css">
  <?php
  include('in-session.php');
  include('css/style.css.php')
  ?>
</head>
<body class="sc-body">
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="#main">Ke<span>m</span>on</a></h1>
        <!-- <a href="#intro" class="scrollto"><img src="img/km-white.png" alt="" title=""></a> -->
      </div>
          <?php                          
          
          // $emailName = $_SESSION['emailNameReal'];


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
                    echo "</div>";
            $protabs = glob("../pg/*.php");
            
            echo "<div class='each_page'>";
            for ($i=0; $i<count($protabs); $i++){
                $tab = $protabs[$i];
                $Tabs = explode('/',$tab);
                 $TabChecked = explode('.',$Tabs[2]);
                    if($TabChecked[1] ==  'php'){
                      $extTab=$TabChecked[0];
                      if(in_array(ucwords(strtolower($extTab)),$chkExistence)){
                        $allTabs[]=$extTab;
                        
                      }
                echo "<span>";
            
            
              }
            }
            include("../st/dropdown.php");
            ?>
             <nav id="nav-menu-container">
              <ul class="nav-menu">
              <li><a href="../<?php echo $genId;?>.php">Home</a></li>
            <?php
                        
              foreach($allTabs as $tabb){
                if(ucwords($name)==$tabb){
              
              echo '<li class="menu-active"><a href="../pg/'.$tabb.'.php">'.$tabb.'</a>';
                      echo "<ul>";
                      for($b=0;$b<count($allMyReadyTabArr); $b++){
                        $eacT = explode('-', $allMyReadyTabArr[$b]);
                        if(strtolower($eacT[0]) == strtolower($tabb)){
                            echo '<li><a href="../tb/'.strtolower($allMyReadyTabArr[$b]).'.php"> '.$eacT[1].'</a></li>';
                        }
                      }
                    
                      ?>
                      </ul>
                      
                    </li>
            <?php
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
            <li style="margin-left:90px; margin-right:30px"><a href="../../../exp.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <?php
  $explod=explode(' ',$_SESSION['in-shop_name']);
  $ShowPicBg = glob("../pic/*.*");
  
  ?>
  <div class="shiftMain">
    <div class="sub-menuDiv" style="margin-left:;opacity:1;visibility:hidden">
      <div class="sub_links">
    <?php
        for($b=0;$b<count($allMyReadyTabArr); $b++){
          $eacT = explode('-', $allMyReadyTabArr[$b]);
          if(strtolower($eacT[0]) == strtolower($name)){
              echo '<li><a href="../tb/'.strtolower($allMyReadyTabArr[$b]).'.php"> '.$eacT[1].'</a></li>';
          }
        }
                              
?>
       </div>                         
    </div>
    <div class="sec-mainDiv">
      <section id="intro" style="background-image:url('<?php echo $matchPic[$_SESSION['randRange6']-1] ?> '); width:100%">
        
        <div class="intro-container wow fadeIn">
          <h1 class="mb-4 pb-0"><span><?php echo $explod[0] ?></span><?php isset($explod[0]) ? $explod[0] :  " r"?></h1>
          <p class="mb-4 pb-0" style="width:70%;"><?php echo substr($_SESSION['in-desc'],0,150) ?></p>
          <div class="showSideLinks"><i class="menu-fa menu-fa1 fa fa-bars"></i> <i class="menu-fa menu-fa2 fa fa-remove" style="transform:scale(0)"></i></div>
          <a href="../st/km-white.png" class="venobox play-btn mb-4" data-vbtype="video"
            data-autoplay="true"></a>
          <a href="#footer" class="about-btn scrollto">Contact Us</a>
        </div>
      </section>

      <main id="main">
        <section id="about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2>Our Info</h2>
                <p><?php echo substr($_SESSION['in-desc'],0,100) ?></p>
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
        <!--==========================
          Speakers Section
        ============================-->
        <section id="speakers" class="wow fadeInUp">
          <div class="container">
            <div class="section-header">
              <h2>Our <?php echo $name ?> Uploads</h2>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="speaker">
                  <?php echo '<img src="'.$matchPic[$_SESSION['randRange0']-1].'" alt="pic1" height="350px" width="100%" class="picBox">'?>
                  <div class="details">
                    <?php echo '<h3><a href="'.$matchLink[$_SESSION['randRange0']-1].'">'.$matchName[$_SESSION['randRange0']-1].'</a></h3>';?>
                    <div class="social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
                    <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6">
                <div class="speaker">
                <?php echo '<img src="'.$matchPic[$_SESSION['randRange1']-1].'" alt="Speaker 1" height="350px" width="100%" class="picBox">'?>
                  <div class="details">
                  <?php echo '<h3><a href="'.$matchLink[$_SESSION['randRange1']-1].'">'.$matchName[$_SESSION['randRange1']-1].'</a></h3>';?>
                  <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
                <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
              </div>
                  </div>
                </div>
              </div>
            

        <div class="col-lg-4 col-md-6">
          <div class="speaker">
          <?php echo '<img src="'.$matchPic[$_SESSION['randRange2']-1].'" alt="Speaker 1" height="350px" width="100%" class="picBox">'?>
            <div class="details">
            <?php echo '<h3><a href="'.$matchLink[$_SESSION['randRange2']-1].'">'.$matchName[$_SESSION['randRange2']-1].'</a></h3>';?>
            <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
                <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
          <?php echo '<img src="'.$matchPic[$_SESSION['randRange3']-1].'" alt="Speaker 1" height="350px" width="100%" class="picBox">'?>
            <div class="details">
            <?php echo '<h3><a href="'.$matchLink[$_SESSION['randRange3']-1].'">'.$matchName[$_SESSION['randRange3']-1].'</a></h3>';?>

              <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
                <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
          <?php echo '<img src="'.$matchPic[$_SESSION['randRange4']-1].'" alt="Speaker 1" height="350 !important" width="100%" class="picBox">'?>
            <div class="details">
            <?php echo '<h3><a href="'.$matchLink[$_SESSION['randRange4']-1].'">'.$matchName[$_SESSION['randRange4']-1].'</a></h3>';?>

              <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
                <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="speaker">
          <?php echo '<img src="'.$matchPic[$_SESSION['randRange5']-1].'" alt="Speaker 1" height="350px" width="100%" class="picBox">'?>
            <div class="details">
            <?php echo '<h3><a href="'.$matchLink[$_SESSION['randRange5']-1].'">'.$matchName[$_SESSION['randRange5']-1].'</a></h3>';?>

            <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <?php echo '<a href="tel:'.$_SESSION['in-phone'].'"><i class="fa fa-phone"></i></a>'?>
                <?php echo '<a href="'.$_SESSION['whatsapp'].'"><i class="fa fa-whatsapp"></i></a>'?>
              </div>
              </div>
            </div>
          </div>
        </div>
        <?php include('../st/pages_footer.php');   ?>
        </section>
        
  </div>
</div>
</div>
  

<script>
    document.querySelector('.showSideLinks').addEventListener('click', function(){
      if(document.querySelector('.sec-mainDiv').style.marginLeft!="70%"){
        document.querySelector('.sec-mainDiv').style.marginLeft="70%"
        document.querySelector('.sub-menuDiv').style.visibility="visible"
        document.querySelector('.sub-menuDiv').style.opacity="1"
        document.querySelector('.menu-fa2').style.transform="scale(1)"
        document.querySelector('.menu-fa1').style.transform="scale(0)"
      
      }else{
        document.querySelector('.sec-mainDiv').style.marginLeft="0%"
        document.querySelector('.sub-menuDiv').style.visibility="hidden"
        document.querySelector('.sub-menuDiv').style.opacity="0"
        document.querySelector('.menu-fa2').style.transform="scale(0)"
        document.querySelector('.menu-fa1').style.transform="scale(1)"
      }
    })

</script>