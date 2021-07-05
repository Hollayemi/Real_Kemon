<?php
  include('prof_header.php');
?>
    <main role="man">
    <?php
      $shop_nick    =     $_SESSION['shop_nick'];
      $checker = array();
      $checkLink = glob("../up/".$shop_nick."/tb/*.*");
      $checkPic = glob("../up/".$shop_nick."/pic/*.*");
      for($a=0; $a<count($checkPic);$a++){
        $chkP = explode('/',$checkPic[$a]);
        $chkPi = explode('~',$chkP[4]);
      
        for($i=0; $i<count($checkLink);$i++){
          $chkl = explode('/',$checkLink[$i]);
          $chkli = explode('.',$chkl[4]);
        
          if($chkPi[0]==$chkli[0]){
              if(!in_array($chkPi[0],$checker)){
              $checker[]=$chkPi[0];
              // echo $chkPi[0];
              }else{
                // echo $chkPi[0];
              }

          }
        }
    }

    $discoverErrLinkArray=  array();
    $discoverErrLink = glob("../up/".$shop_nick."/tb/*.*");
    for($i=0; $i<count($discoverErrLink);$i++){
      $disE = explode('/',$discoverErrLink[$i]);
      $disEr = explode('.',$disE[4]);
      if(!in_array($disEr[0],$checker)){
        $discoverErrLinkArray[]= $disEr[0];
      }

    }
    ?>
      <article>
       <header class="background-dark profDash">
       
          <div class="line">        
            <p class="cla"><br><br><br><br><h3 class="tab-head">Dashboard</h3></p>
            <!-- <p class="cla-cont">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p> -->
          </div>  
        </header>
      </article>
    </main>
        </header>



<?php

    $user_id = $_SESSION['user_info_id'];
    $username = $_SESSION['username'];
    $profile = "True";
    $paif = false;
    $nwe = 0;
    $real_id                   =  $_SESSION['user_info_id'];
    $sql_does_my_page_exist    =   "SELECT email,page_exist,acc_ready,My_page,num_Page,num_Tab,my_pic From users Where id='$real_id'";
    $run_does_my_page_exist    =   mysqli_query($mysqli,$sql_does_my_page_exist);
    $row_page_exist            =   mysqli_fetch_array($run_does_my_page_exist);

   
    $sql_does_my_page_exist2   =   "SELECT shop_name,shop_nick,opening_hour,closing_hour,24_hours,country,state,city,junction,bustop,very_close_to,facebook,whatsapp,phone,linked_in,our_offer,subRef,payRef,bgPic From marketers Where id='$real_id'";
    $run_does_my_page_exist2   =   mysqli_query($mysqli,$sql_does_my_page_exist2);
    $row_page_exist2           =   mysqli_fetch_assoc($run_does_my_page_exist2);

    if(!isset($row_page_exist2['shop_name'])){
      $myShopName       = "Not Registered";
      $myShopNick       = "Not Registered";
      $myShopOpen       = "Not Registered";
      $myShopClose      = "Not Registered";
      $myShopCountry    = "Not Registered";
      $myShopState      = "Not Registered";
      $myShopCity       = "Not Registered";
      $myShopJunction   = "Not Registered";
      $myShopBustop     = "Not Registered";
      $myShopVCT        = "Not Registered";
      $myShopFacebook   = "Not Registered";
      $myShopWhatsapp   = "Not Registered";
      $myShopPhone      = "Not Registered";
      $myShopLinkedin   = "Not Registered";
      $myShopOffer      = "Not Registered";
    }else{
      $myShopName     = $row_page_exist2['shop_name'];
      $myShopNick     = $row_page_exist2['shop_nick'];
      $myShopOpen     = $row_page_exist2['opening_hour'];
      $myShopClose    = $row_page_exist2['closing_hour'];
      $myShopCountry  = $row_page_exist2['country'];
      $myShopState    = $row_page_exist2['state'];
      $myShopCity     = $row_page_exist2['city'];
      $myShopJunction = $row_page_exist2['junction'];
      $myShopBustop   = $row_page_exist2['bustop'];
      $myShopVCT      = $row_page_exist2['very_close_to'];
      $myShopFacebook = $row_page_exist2['facebook'];
      $myShopWhatsapp = $row_page_exist2['whatsapp'];
      $myShopPhone    = $row_page_exist2['phone'];
      $myShopLinkedin = $row_page_exist2['linked_in'];
      $myShopOffer    = $row_page_exist2['our_offer'];
    }


    $sql_letter    =   "SELECT receiverEmail,receiverName,senderShop From newsletters Where senderEmail='$email'";
    $run_letter    =   mysqli_query($mysqli,$sql_letter);
    $newsNames = array();
    $newsEmails = array();
    $newsShops = array();
    while($row_letter    =   mysqli_fetch_array($run_letter,MYSQLI_NUM)){
        $newsEmails[] = $row_letter[0];
        $newsNames[]  = $row_letter[1];
        $newsShops[]  = $row_letter[2];
    };
    $emailName = $_SESSION['emailNameReal'];
    $allPages = array();
    $proPages = glob("../up/".$shop_nick."/pg/*.php");
    for ($i=0; $i<count($proPages); $i++){
        $page = $proPages[$i];
        $pageCheck = explode('.',$page);
        if($pageCheck[3] ==  'php'){
            $ext=explode('/',$pageCheck[2]);
            if($ext[4]!=$emailName){
                if($ext[4] !="pageFrame")
                $allPages[]=$ext[4];
            }
        }
    }
    if(!function_exists(require_once('functions.php')))
    if(isset($_POST['sendNews'])){
      
        if(isset($_POST['cnt']) && isset($_POST['sub'])){
          for ($u=0; $u<count($newsEmails); $u++){
              $conte          = $_POST['cnt'];
              $Topic          = $_POST['sub'];
              $Reciever         =  $newsEmails[$u];
              $usernameOnEmail  =  $newsNames[$u];
              $shopNameEmail    =  $newsShops[$u];
              
              $content  = "
              <div style='border:1px solid #eee;padding:30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>
              <h2 style='text-align:center;'>From ".ucwords($shopNameEmail)."<p style='font-size:18px;color:#5499e2;'>(kemon market)</p></h2><br>
                <h4 style='text-align:left; font-size:18px; color:#fff;'>Hi ".$usernameOnEmail.",</h4><br>
                  ".$conte."<br><br>
                    <a href='https://api.whatsapp.com/send?phone=+".$row_page_exist2['whatsapp']."&text=Hi,%20from%20Kemon-Market, %20I%20just%20joined%20Kemon%20today.%20my%20name%20is%20__'>whatsapp </a>or you give me a
                    <a href='tel:".$row_page_exist2['phone']."'>Call</a>.<br><br> i will be very happy to help you
                  </h5>
              </div>
            ";
            if(MyMailer($Topic,$Reciever,$content)){
              $alertEmail = "Email sent";
            }else{
              
            }
          }
        }
    }
    $averageStars = 0;
    $sqltt = "SELECT id, star FROM rating WHERE shopname='$myShopName'";
    $runSql = mysqli_query($mysqli,$sqltt);
    $starArr = array();
    $row_num  =   mysqli_num_rows($runSql);

    while($row_star =  mysqli_fetch_assoc($runSql)){
      $starArr[]  = $row_star['star'];
    }
    if(array_sum($starArr) > 0){
      $averageStars = array_sum($starArr)/(count($starArr));
    }

    









    $allTabs = array();
    $protabs = glob("../up/".$shop_nick."/tb/*.php");
    for ($i=0; $i<count($protabs); $i++){
        $tab = $protabs[$i];
        $TabChecked = explode('.',$tab);
        if($TabChecked[3] ==  'php'){
          // echo $TabChecked[2];
          $extTab=explode('/',$TabChecked[2]);
          // echo $extTab[4]."------------";
          if($extTab[4]!=$emailName){
              if($extTab[4] !="pageFrame")
              $allTabs[]=$extTab[4];
          }
          
        }
    }
    $numPages = sizeof($allPages);

    // =============================--------------Pages--------------=======================




    // $myPagetxt          =   fopen("$emailName".'.txt', "w");
    // $_SESSION['myPagetxt']   =  $myPagetxt;
    // //fwrite($myPagetxt,$myPage_codetxt);
    // $myPage         =       fopen("./up/$emailName/$emailName".'.php','w');
    // $getMyCode      =       '<?php
    // include("../../notPaid.php");
    //       
    // ';
    // fwrite($myPage,$getMyCode);

    if(isset($_POST['lowStorage'])){
      $knwO = "popo";
				    echo "<div class='loginStatus'>
            <h4>Sorry,</h4><br>
            <h5>Unable to upload, subscribe or purchase a xtra space</h5>
            <p>( insufficent memory )</p>
            </div>";

    }
    if(isset($_POST['CreatePage'])){
        $countPagess = glob("../up/".$shop_nick."/pg/*.php");
        $numOfPages = count($countPagess);
        $get_page = explode('/',$row_page_exist['My_page']);

        $CreatePageName     =  $mysqli->real_escape_string($_POST['CreatePageName']);
        if($CreatePageName != ""){
            $Newpagename =  ucwords(strtolower($CreatePageName));
            $NewPageFile  =  '../up/'.$shop_nick.'/pg/'.$Newpagename . ".php";
            $contents ="<?php  
            $"."name"." = '$Newpagename';
            include('../st/sc.php'); 
            // include('../st/pages_footer.php'); 
            ?>
              ";
            if(!in_array($NewPageFile,$countPagess)){
              if($row_page_exist['num_Page'] > 0 && $numOfPages <= 11){
                  if(file_put_contents($NewPageFile,$contents)){
                    $newNumPage = ($row_page_exist['num_Page'] -1);
                    $sql="UPDATE users SET num_Page='$newNumPage' WHERE id='$real_id'";
                    $run=mysqli_query($mysqli,$sql);
                  }else{
                  }
              }else{
               $knwO = "popo";
                echo "<div class='loginStatus'>
                <h4>Sorry,</h4><br>
                <h5>Maximum number of page reached, you can do a better subscription to create more links </h5>
                <p>( Unable to add Brand name )</p>
                </div>"; 
              }
          }else{
            $knwO = "popo";
				    echo "<div class='loginStatus'>
            <h4>Sorry,</h4><br>
            <h5>Brand name is existing, you can try using another Brand name </h5>
            <p>( Unable to add Brand name )</p>
            </div>";
          }
        }
    }

    $Fetch_tabs = array();
    $Main_tabs = array();
    $FetchAllTans = glob("../up/".$shop_nick."/tb/*.php");
    for ($i=0; $i<count($FetchAllTans); $i++){
        $Tabpage = $FetchAllTans[$i];
        $TabpageCheck = explode('.',$Tabpage);
        if($TabpageCheck[3] ==  'php'){
          $Tabsext=explode('/',$TabpageCheck[2]);
            $Fetch_tabs[]=$Tabsext[4];
            $mainT = explode('-',$Tabsext[4]);
            $Main_tabs[] = $mainT[1];
            
        }
    }
    $countAllTabs=sizeof($Fetch_tabs);



    $real_id       =  $_SESSION['user_info_id'];
    $sql="UPDATE users SET veri_payment='True' WHERE id='$real_id'";
    $run=mysqli_query($mysqli,$sql);
    if(isset($_POST['submitProf'])){
       include('../EditProfile.php');
    }
    if(isset($_POST['submitProfPic'])){
        $myPath         = $_FILES['myfile'];
        $fileName       = $_FILES['myfile']['name'];
        $fileSize       = $_FILES['myfile']['size'];
        $fileTempName   = $_FILES['myfile']['tmp_name'];
        $fileType       = $_FILES['myfile']['type'];
        $fileError      = $_FILES['myfile']['error'];

        $fileExt        =   explode('.',$fileName);
        $fileActualExt  =   strtolower(end($fileExt));
        $allowed    =   array('jpg','jpeg','png');
        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if($fileSize > 10){
                    $real_id       =  $_SESSION['user_info_id'];
                    $fileDestination = '../up/'.$shop_nick.'/profile.png';
                    $sql="UPDATE users SET my_pic='$fileDestination' WHERE id='$real_id'";
                    $run=mysqli_query($mysqli,$sql);
                    if($run){
                      // echo $fileDestination;
                      move_uploaded_file($fileTempName,$fileDestination);
                      $_SESSION['normProfilePic']=$fileDestination;
                      $profileEdited = 'uploaded';
                    }else{
                        echo "pic not uploaded";
                      }
                }else{
                  $profileEdited = "<div class='profileEdited' style='color:red'>This file is too big, try with a lesser file size</div>";
                }
            }else{
              $profileEdited = "<div class='profileEdited' style='color:red'>An error has occured, try again with another file</div>";
            }
        }else{
          $profileEdited = "<div class='profileEdited' style='color:red'>Note: File was not changed</div>";
        }
    }
    $Num_file = array();
    $files = glob("../up/".$shop_nick."/pic/*.php");
    for ($i=1; $i<count($files); $i++){
      $num = $files[$i];
      $filepi= explode('-',$num);
      $filepic=explode('/',$filepi[0]);
      if($_SESSION['emailName']==  $filepic[1]){
        $Num_file[] = $num;
      }
    }
    $Total_files_uploaded = sizeof($Num_file);
?>
<div class="leftSideMain">
    <section id="Profile" style="display:non">
        <div class="My_Prof_cont">        
            <div id="prof" class="ant ant_close">
              <!-- <i class="fa-ellipsis-v" style="background-color:#fff"></i> -->
              <div class="prof-pic">
                  <button id="" class="lArr">x</button>
                  <img src="../up/<?php echo $shop_nick?>/profile.png" alt="no picture"  class="ProfPicture">
                    <br><br>
                  <?php 
                  if($row_page_exist['acc_ready'] <1 ){
                    echo '<h4 class="visitWeb"><a href="#">visit website <p class="arrDownDetails2" title="account not active"> &#x2197;</p></a></h4>';
                  }else{
                    echo '<h4 class="visitWeb"><a target="_blank" href="../up/'.$shop_nick.'/'.$shop_nick.'.php">visit website <p class="arrDownDetails2"> &#x2197;</p></a></h4>';
                  }
                  ?>
                  <form action=""><input class="chkbox-btn" type="checkbox" style="display:none" name="edit" id="edit"><h4><label for="edit" class="chkbox" z-index:1>Edit Profile<i class="fa fa-edit fa-2x arrDownDetails" style="margin-top:0px"></i></label></form></h4><br>
              </div>        
              <div class="input_side">
                <h5>Account Details</h5>

                <h4 class="knownAs"><i class="fa fa-user"></i> My Profile <p class="arrDownDetails firstArr"> &#x2304;</p></h4><br>
                <form action="" method="POST" enctype="multipart/form-data">
                      <div id="entries" class='genEditInput' style="height:1px;"><br>
                          <input type="text" id="snInput" disabled="true" name="Shop_Name" value='<?php echo $myShopName ?>'class='editInput'><br>
                          <input type="text" id="slInput" disabled="true" name="Shop_Line" value='<?php echo $myShopPhone ?>' class='editInput'><br>
                          <input type="text" id="emailInput" disabled="true" name="Shop_City"  value='<?php echo $myShopCity ?>' class='editInput'><br>
                          <input type="text" id="phInput" disabled="true" name="Edit shop name" value='<?php echo $myShopNick ?>' class='editInput' ><br>
                          <input type="text" id="njInput" disabled="true" name="Junction" value='<?php echo $myShopJunction ?>' class='editInput' ><br>
                          <input type="text" id="nbInput" disabled="true" name="Bustop" value='<?php echo $myShopBustop ?>' class='editInput' ><br>
                      </div>
                    <h4 class="knownAs"><i class="fa fa-location-arrow"></i> Location <p class="arrDownDetails"> &#x2304;</p></h4>
                    <h4 class="knownAs"><i class="fa fa-location-arrow"></i> category <p class="arrDownDetails"> &#x2304;</p></h4>
                    <br>
                    <h5 style="margin-bottom:-20px;color:#fff">Website Info</h5>
                    <h4 class="knownAs profContact"><i class="fa fa-globe"></i> Inactive pages<p class="arrDownDetails firstArr2">&#x2304;</p></h4>
                    <div class="inactiveLinks sCro" style="height:0px; display:none;">
                        <?php
                          foreach($discoverErrLinkArray as $errLinks){
                            echo "<h5>".$errLinks."</h5>";
                          }
                    ?>
                    </div>
                    
                    <h4 class="knownAs Brands"><i class="fa fa-file"></i> Brands Created<p class="arrDownDetails firstArr4">&#x2304;</p></h4>
                    <div class="brandsCreated sCro" style="height:0px; display:none;">
                    <?php
                          echo "<h5>".count($allPages)." Brands</h5>";
                          foreach($allPages as $allPage){
                            echo "<h5>".$allPage."</h5>";
                          }
                    ?>
                    </div>

                    <h4 class="knownAs Products"><i class="fa fa-file"></i> Products Created<p class="arrDownDetails firstArr5">&#x2304;</p></h4>
                    <div class="productsCreated sCro" style="height:0px; display:none;">
                        <?php
                          foreach($Main_tabs as $Main_tab){
                            echo "<h5>".$Main_tab."</h5>";
                          }
                    ?>
                    </div>

                    <h4 class="knownAs Rating"><i class="fa fa-star"></i> Rating Star<p class="arrDownDetails firstArr6">&#x2304;</p></h4>
                    <div class="ratingStar sCro" style="height:0px; display:none;">
                        <h5>Rated by <?php echo count($starArr) ?> people</h5>
                        <h5><div class="rateyo-readonly-widg"></div></h5>
                    </div>

                    <h4 class="knownAs Customers"><i class="fa fa-globe"></i> Customers<p class="arrDownDetails firstArr3">&#x2304;</p></h4>
                    <div class="myCustomers sCro" style="height:0px; display:none;">
                        <h5><?php echo $_SESSION['noOFCustomers']?> Subscribers</h5>
                    </div>
                    <!-- <h5 style="margin-bottom:-20px;color:#fff">Upload Info</h5>
                    <h4 class="knownAs profContact2"><i class="fa fa-upload"></i> files uploaded <i class="id">></i></h4> -->

                </form><br><br>
            </div>
          </div>
       </div>
          <div class="referralIDClass">
                <h4>Reference 1 Key:<br> <?php echo $row_page_exist2['payRef'] ?></h4>
                <h4>Reference 2 Key:<br> <?php echo $row_page_exist2['subRef'] ?></h4>
          </div>
      </section>
        <section style="width:100%">
            <div class="progBar">
                <?php

                    if($countAllTabs>2){
                      $countAllTabs = 2;
                    }else{
                      $countAllTabs = $countAllTabs;
                    }

                    $tot_num_pic=[];
                    $numpi = glob("../up/".$shop_nick."/pic/*.*");
                    for ($i=0; $i<count($numpi); $i++){
                        $Tabpage = $numpi[$i];
                        $tot_num_pic[] = $Tabpage;
                    }
                    $countAllPic = sizeof($tot_num_pic);

                    if($countAllPic >10){
                        $countAllPic = 10;
                    }
                    
                    $val = $countAllPic*7 + $countAllTabs*15;
                    // echo $val;
                      if($countAllPic<10 || $countAllTabs <2){
                ?>

                  <progress
                    value=<?php echo $val ?> max="100">
                  </progress><h5 class="not-active"> account is not active, required(<?php if($countAllPic<10){echo (10 - $countAllPic)." picture(s) ";} if($countAllPic<10 && $countAllTabs <2){echo 'and ';}if($countAllTabs<2){echo (2 - $countAllTabs)." product(s)";} echo "  ) to activate your account";  ?></h5>
                  <br><br>
                <?php
                $sql_Up = "UPDATE users SET acc_ready = '0' WHERE id='$real_id'";
                mysqli_query($mysqli,$sql_Up);
                  }else{
                    // $fake=0;
                    for($i=100; $i<=10; $i++){
                      ?>
                      <progress
                      value=<?php echo $val ?> max="100">
                    </progress>
                    
                  <?php
                    sleep(.2);
                    // $fake+=10;
                    }
                    echo '<h5 class="is-active";>Your account is active</h5>';
                  

                  $sql_Up = "UPDATE users SET acc_ready = '1' WHERE id='$real_id'";
                  mysqli_query($mysqli,$sql_Up);
                  }

                
                ?>
            </div>
          </section>
            
            <div class="sec_side">
                    <?php
                      include('../new_upload.php') ;
                      if(isset($piUpload)){
                        echo $piUpload."pop";
                      }
                      // echo $piUpload."pop";
                    ?>
                    
                    <div class="pages_info wow bounceInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
                          <h4 class="Delete-h4 Delete-h4-small">Delete section</h4>
                          <br>
                            <form action="../action.php" method="POST">
                                  <select class="select-css" name="deleteSelectedPage">
                                  <option  selected="selected" class="select" style='line-height:5px;color:blue;width:15px'>select brand name</option>
                                  <?php
                                  foreach($allPages as $allpag){
                                  ?>
                                  <option value="<?php echo strtolower($allpag);?>"><?php echo $allpag?></option> ;
                                <?php
                                  }
                                  ?>
                                  </select>
                          <a href="#"><button name="deleteSelectedPageBtn" type="submit" class="DeletePagesBtn ">Delete Brand</button></a>
                        </form>                            

                        <form action="../action.php" method="POST" enctype="multipart/form-data">
                          <select class="select-css" style="height:35px" name="deleteSelectedTab">
                          <option  selected="selected" class="select" style='line-height:20px;color:blue'>select product name</option>
                          <?php
                            foreach($Fetch_tabs as $Fetch_tab){
                          ?>
                          <option value="<?php echo strtolower($Fetch_tab);?>"><?php echo $Fetch_tab?></option> ;
                        <?php
                          }
                          ?>
                          </select>
                            
                              <button type='post' name='deleteSelectedTabBtn' class="DeletePagesBtn">Delete a Product</button>
                      </form>
                      
                  </div>
                  <div></div>
                  <div class="updatePages wow bounceInUp" data-wow-delay="0.5s" data-wow-duration="1.4s">
                        <h4 class="Delete-h4 cr_brand">Create a Brand</h4>
                        <form action="" method="POST">
                              <input type="text"  class="editInput2 " name="CreatePageName"><br>
                              <a href="#"><button name="CreatePage" type="submit" class="updatePagesBtn">Create</button></a>
                        </form>
                  </div>
          </div>
    
    </section>
    <section id="scroll_up">
    <br><br><br>
          <?php        
            $countTabss = glob("../up/".$shop_nick."/tb/*.php");
            if(isset($_POST['CreatTab'])){
                $get_page = explode('/',$row_page_exist['My_page']);
                $CreateTabName     =  $mysqli->real_escape_string($_POST['CreateTabName']);
                $selectedTab     =  $mysqli->real_escape_string($_POST['selectedTab']);
                    if($CreateTabName != "" && $selectedTab != "" && $selectedTab != "select page"){
                      $NewTabname =  $CreateTabName;
                      $NewTabnameSmall = strtolower($CreateTabName);
                      $NewTabFile  =  '../up/'.$shop_nick.'/tb/'.strtolower($selectedTab).'-'.strtolower($NewTabname). ".php";
                      $contents ="<?php  
                      $"."sc = 'uiii';
                      $"."name = '$NewTabnameSmall';
                      $"."namePage = '$selectedTab';
                      $"."tab = 'true';
                    include('../st/pagebody.php');  
                ?>";
                if(!in_array($NewTabFile,$countTabss)){
                    if($row_page_exist['num_Tab'] > 0 ){
                          if(file_put_contents($NewTabFile,$contents)){
                            $newNumTab = ($row_page_exist['num_Tab'] -1);
                            $sql="UPDATE users SET num_Tab='$newNumTab' WHERE id='$real_id'";
                            $run=mysqli_query($mysqli,$sql);
                              // echo "File created(' " . basename($NewTabFile) .")";
                          }else{
                              echo "nothing happened";
                          }
                    }
                }else{
                  $knwO = "popo";
                  echo "<div class='loginStatus'>
                  <h4>Sorry,</h4><br>
                  <h5>Product name is existing, you can try using another product name </h5>
                  <p>( Unable to add product name )</p>
                  </div>";
                }
            }
            }
          
          ?>
          
            <?php

                $tot_num_file=[];
                $numf = glob("../up/".$shop_nick."/pic/*.*");
                $tot_num1 = count($numf)-2;
                for ($i=0; $i<count($numf); $i++){
                    $Tabpage = $numf[$i];
                    $tot_num_file[] = $Tabpage;

                }
                $hoho = array_reverse($tot_num_file);
                // echo "<img src='$hoho[0]'>";
                if($_SESSION['veri_payment']== 'True'){
                  echo "<div class='notify wow bounceInUp' data-wow-delay='1s' data-wow-duration='1.4s'>";
                  echo '<button onclick="moveNotify()" class="sho_x">X</button>';
                  if(isset($_SESSION['daysLeft']) && $_SESSION['daysLeft'] != 0){
                      echo "<h5><i class='fa fa-bell bg-c'></i>". $_SESSION['daysLeft']." days left</h5>";
                  }else{
                    echo "<h5><i class='fa fa-bell-slash-o bg-c'></i></h5>";
                  }
                  if(count($numf)>2){
                    echo  "<h5 class='lowPic'><span class='tot_num1'><h5 class='real-num'>+".$tot_num1."</h5></span><img src='$hoho[2]' class='tot_num1 fi'><img src='$hoho[1]' class='tot_num'><img src='$hoho[0]' class='tot_num las'>";
                  }elseif(count($numf)==0){
                    echo "<h5 style='margin-top:20px'>0 picture</h5>";
                  }elseif(count($numf)==1){
                    echo "<h5 style='margin-top:20px'>1 picture</h5>";
                  }else{
                    echo "<h5 style='margin-top:20px'>2 pictures </h5>";
                  }
                  echo "<h5 style='margin-top:20px'>".$_SESSION['spaceLeft']." free</h5>";
                  echo "<h5><i class='fa fa-file'></i></span><span class'file-created-num'>".$numPages ."</span></h5>";
                  //echo "<span id='blab' style='display:none'><img id='blah' src='#' display='none' class='tot_num tum' style='margin-top:7px;display:block'> <span class='my_cir'></span></span>";
                  echo "</div>";
              }else{
                  echo "<div class='notify'>";
                    echo "<h5><i class='fa fa-bell-slash-o bg-c'></i></h5>";
                  if(count($numf)>2){
                    echo  "<h5 class='lowPic'><span class='tot_num1'><h5 class='real-num'>+".$tot_num1."</h5></span><img src='$hoho[2]' class='tot_num1 fi'><img src='$hoho[1]' class='tot_num'><img src='$hoho[0]' class='tot_num las'>";
                  }elseif(count($numf)==0){
                    echo "<h5 style='margin-top:20px'>0 picture</h5>";
                  }elseif(count($numf)==1){
                    echo "<h5 style='margin-top:20px'>1 picture</h5>";
                  }else{
                    echo "<h5 style='margin-top:20px'>2 pictures </h5>";
                  }
                  echo "<h5 style='margin-top:20px'>".$_SESSION['spaceLeft']." free</h5>";
                  echo "<h5><i class='fa fa-file'></i></span><span class'file-created-num'>".$numPages ."</span></h5>";
                  //echo "<span id='blab' style='display:none'><img id='blah' src='#' display='none' class='tot_num tum' style='margin-top:7px;display:block'> <span class='my_cir'></span></span>";
                  echo "</div>";
                }
            ?>
      <br><br><br>
          <div class="second-flex">
            <div class="flexin-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <h4 class="cr-h4">Create a Product</h4>
              <form action="" method="POST">
                    <select class="select-css" name="selectedTab">
                            <option  selected="selected" disabled class="select" style='line-height:20px;color:blue'>Select Brand</option>
                            <?php
                            foreach($allPages as $allpag){
                            ?>
                            <option value="<?php echo strtolower($allpag);?>"><?php echo $allpag?></option> ;
                          <?php
                            }
                            ?>
                            </select><br>
                    <input type="text"  class="editInput3" name="CreateTabName"><br>
                    <a href="#"><button name="CreatTab" type="submit" class="updatePagesBtn">Create</button></a>
              </form>
            </div>
            <?php
              echo "<span id='blab-sec' style='display:none'><img id='blah2' src='#' display='none' class='tot_num2 tum'> <span ></span></span>";
            ?>
            <div class="flexin-2 wow bounceInUp" data-wow-delay="0.6s" data-wow-duration="1.4s">
              <h5 class="cr-h5">Compose Email</h5>
                <form action="" method="POST" id="uploader"><br>
                    <input type="text" name="sub" class="editInput3 text-marg" id="amount" placeholder="Subject"><br><br>
                    <textarea name="cnt" id="myPageCaption"  class=" textarea" placeholder="Description" style="border:none;width:80%; height:150px;resize:none;outline:none;margin-left:10%"></textarea><br>
                    <h5 class="subNote">Note: this email will be sent to all your subscribers</h5>
                     <button type='submit' name='sendNews'  class="updatePagesBtn">Send Email</button>
                </form>
            </div>
          </div>
          <br><br>
        </div>
      </div>
      </div>
      
    </section>



    <section class="uploadSec">
      <div >
          
                <h2>Upload Section</h2>
          
                <form action="" method="POST" enctype="multipart/form-data" id="uploader">
                    <div class="Basic_info">
                          <h5>Product <i style="color:red">*</i></h5>
                          <select class="select-css" name="selected">
                          <option  selected="selected" class="select"  style='line-height:20px;color:blue;min-width:200px'>Product to Upload</option>
                          <?php
                          foreach($Fetch_tabs as $Fetch_tab){
                          ?>
                          <option value="<?php echo strtolower($Fetch_tab);?>"><?php echo $Fetch_tab?></option> ;
                        <?php
                          }
                          ?>
                          </select><br>

                          <!-- <input type="file" name="myPageFile" class="pg-file" onchange="readURL(this)" id="myPageFile"><br><br> -->
                          <h5>Price <i style="color:red">*</i></h5>
                          <input type="text" name="amount" class="editInput3 text-marg" id="amount" placeholder="&#x20A6 default price"><br><br>
                          <h5>Description <i style="color:red">*</i></h5>
                          <textarea name="myPageCaption" id="myPageCaption"  class=" textarea" placeholder="Description" style="border:none;width:80%; height:100px;resize:none;outline:none;margin-left:10%"></textarea><br>

                          <div class="inp">
                              <label class="new-button Up_New-btn" for="myPageFile" style=""><i class="fa fa-upload"></i> Add Picture</label>
                              <input type="file" name="myPageFile" id="myPageFile" onchange="readURL(this)" class="new-button" style="padding:10px;"> 
                          </div>
                          <div class="tumaDiv" id="secblab" >
                              <i class="fa fa-camera fa-2x myCme"></i>
                              <img id='myblab' src='#' class='tuma' style="display:none">
                          </div>
                    </div>

                    <div class="Other_info">
                        <h5> Product Identifier (optional):</h5><br>
                        <h5>Universal Product Code (UPC) </h5>
                        <input type="text" name="UPC" class="editInput3 text-marg" id="amount" placeholder="UPC"><br><br>
                        <h5>Electronic Product code </h5>
                        <input type="text" name="EPC" class="editInput3 text-marg" id="amount" placeholder="EPC "><br><br>
                        <h5>Product key</h5>
                        <input type="text" name="PKEY" class="editInput3 text-marg" id="amount" placeholder="Product key"><br><br>
                        <h5>Marketing Part Number </h5>
                        <input type="text" name="MPN" class="editInput3 text-marg" id="amount" placeholder="MPN "><br><br>
                        <h5>Part Number</h5>
                        <input type="text" name="PN" class="editInput3 text-marg" id="amount" placeholder="PN"><br><br>
                        <button type='post' name='post' class="updatePagesBtn addToPage">Upload</button>
                     </div>
                </form>
            </div>
            <br><br><br>
      </div>
    </section>
</div>
<section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Available Templates</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">3 months subscribers</li>
              <li data-filter=".filter-card">6 months subscribers</li>
              <li data-filter=".filter-web">1 year subscribers</li>
            </ul>
          </div>
        </div>

        <?php

              

        ?>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>Phone</p>
                <div>
                  <a href="../img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <form action="changeTemp.php" method="POST">
                        <input type="text" value="sugu" name="sugu" style="display:none;">
                        <button type="submit" name="changeTemp" style="border:none;background-color:transparent"><a href="#" class="link-details" title="Apply"><i class="ion ion-android-open"></i></a></button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="../img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>desktop</p>
                <div>
                  <a href="../img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <form action="changeTemp.php" method="POST">
                        <input type="text" value="sugu" name="sugu" style="display:none;">
                        <button type="submit" name="changeTemp" style="border:none;background-color:transparent"><a href="#" class="link-details" title="Apply"><i class="ion ion-android-open"></i></a></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card filter-web">
            <div class="portfolio-wrap">
              <img src="../img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Gaint Black-Red</a></h4>
                <p>Laptop</p>
                <div>
                  <a href="../img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <form action="changeTemp.php" method="POST">
                        <input type="text" value="event" name="sugu" style="display:none;">
                        <button type="submit" name="changeTemp" style="border:none;background-color:transparent"><a href="#" class="link-details" title="Apply"><i class="ion ion-android-open"></i></a></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card filter-web">
            <div class="portfolio-wrap">
              <img src="../img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Gaint Black-Red</a></h4>
                <p>phone</p>
                <div>
                  <a href="../img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <form action="changeTemp.php" method="POST">
                        <input type="text" value="event" name="sugu" style="display:none;">
                        <button type="submit" name="changeTemp" style="border:none;background-color:transparent"><a href="#" class="link-details" title="Apply"><i class="ion ion-android-open"></i></a></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="../img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>tablet</p>
                <div>
                  <a href="../img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <form action="changeTemp.php" method="POST">
                        <input type="text" value="sugu" name="sugu" style="display:none;">
                        <button type="submit" name="changeTemp" style="border:none;background-color:transparent"><a href="#" class="link-details" title="Apply"><i class="ion ion-android-open"></i></a></button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card filter-web">
            <div class="portfolio-wrap">
              <img src="../img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Gaint Black-Red</a></h4>
                <p>Tablet</p>
                <div>
                  <a href="../img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <form action="changeTemp.php" method="POST">
                        <input type="text" value="event" name="sugu" style="display:none;">
                        <button type="submit" name="changeTemp" style="border:none;background-color:transparent"><a href="#" class="link-details" title="Apply"><i class="ion ion-android-open"></i></a></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include('profileSetting.php'); ?>
 <?php
  include('prof_footer.php')
?>

<?php 

if(isset($_GET['transaction'])){
  $tran = "iui";
  include_once('functions.php');
  if(!isset($_GET['type'])){
  $n = $_GET['ref'];
  $id = $_SESSION['user_info_id'];
  $sql_add = "UPDATE marketers Set subRef='$n' WHERE id ='$id'";
  mysqli_query($mysqli,$sql_add);
  }
  if(isset($_GET['type'])){
    $n = $_GET['ref'];
    $id = $_SESSION['user_info_id'];
    $sql_add = "UPDATE marketers Set payRef='$n' WHERE id ='$id'";
    mysqli_query($mysqli,$sql_add);
    }
  $success = "Your payment has been received with reference ID: ".$n;
  myMessage("success","Transaction was Successful",$success,"ion-android-checkmark-circle");
}
?>
<script>
<?php
  if(isset($tran)){
?>
      window.addEventListener('mouseup', function(event){
      if(event.target != document.querySelector('.myAlertbox') && event.target.parentNode != document.querySelector('.myAlertbox')){
      document.querySelector('.mainBox').style.display='none'
      document.querySelector('.profBody').style.overflow='auto'
    }
})
<?php
  }

  if(isset($_SESSION['lowStorage'])){
    ?>
    // document.querySelector('.addToPage').name="lowStorage"



  
  </script>
  <?php
  }


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

?>