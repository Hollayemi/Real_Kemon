<?php
     

          $shopName       =  $mysqli->real_escape_string($_POST['shopName']);
          $shopOp         =  $mysqli->real_escape_string($_POST['shopOp']);
          $shopCl         =  $mysqli->real_escape_string($_POST['shopCl']);
          $shopCountry    =  $mysqli->real_escape_string($_POST['shopCountry']);
          $shopState      =  $mysqli->real_escape_string($_POST['shopState']);
          $shopJunction   =  $mysqli->real_escape_string($_POST['shopJunction']);
          $shopBustop     =  $mysqli->real_escape_string($_POST['shopBustop']);
          $shopCity       =  $mysqli->real_escape_string($_POST['shopCity']);
          $shopVCT        =  $mysqli->real_escape_string($_POST['shopVCT']);
          $shopFb         =  $mysqli->real_escape_string($_POST['shopFb']);
          $shopWhat       =  $mysqli->real_escape_string($_POST['shopWhat']);
          $shopPhn        =  $mysqli->real_escape_string($_POST['shopPhn']);
          $shopLi         =  $mysqli->real_escape_string($_POST['shopLi']);
          $ourOffer         =  $mysqli->real_escape_string($_POST['our_offer']);


          $real_id       =  $_SESSION['user_info_id'];
          $_SESSION['Username']='Username';
          $_SESSION['shop_name']='$Shop_Name';
          $_SESSION['shop_line']='$Shop_Line';
          $_SESSION['Email']='Email';


             if ($shopName !="" || $shopCountry != "" || $shopState != "" || $shopJunction !="" || $shopBustop != ""){

                if ($ourOffer == ''){
                    $sql="UPDATE marketers SET shop_name='$shopName',opening_hour='$shopOp',closing_hour='$shopCl',state='$shopState',
                    country='$shopCountry',very_close_to='$shopVCT',bustop='$shopBustop',junction='$shopJunction',phone='$shopPhn',city='$shopCity',
                    facebook='$shopFb',whatsapp='$shopWhat',phone='$shopPhn',linked_in='$shopLi'
                    WHERE id='$real_id'";

                    if(isset($_COOKIE['_categoriesEdit'])){ 
                        $category =  $_COOKIE['_categoriesEdit'];
                        $sqlCategory = "UPDATE category SET id='$user_id',category='$category' WHERE id = '$user_id'";
                        $runCategory = mysqli_query($mysqli,$sqlCategory);
                        if($runCategory){
                            // setcookie("_categoriesEdit",$category,time()-3600);
                            // $knwO = "popo";
                            // echo "<div class='loginStatus'>
                            //     <h4>Notice,</h4><br>
                            //     <h5>We noticed a change in your change in your category section.</h5>
                            //     <p>( Probably a mistake )</p>
                            // </div>";
                        }                        
                    }
                }else{

                    $sql="UPDATE marketers SET shop_name='$shopName',shop_nick='$shopPka', opening_hour='$shopOp',closing_hour='$shopCl',state='$shopState',
                    country='$shopCountry',very_close_to='$shopVCT',bustop='$shopBustop',junction='$shopJunction',phone='$shopPhn',city='$shopCity',
                    facebook='$shopFb',whatsapp='$shopWhat',phone='$shopPhn',linked_in='$shopLi',our_offer='$ourOffer' WHERE id='$real_id'";

                                
                    if(isset($_COOKIE['_categories'])){ 
                        $category =  $_COOKIE['_categories'];
                        $sqlCategory = "UPDATE category SET id='$user_id',category='$category' WHERE id = '$user_id'";
                        $runCategory = mysqli_query($mysqli,$sqlCategory);
                        if($runCategory){
                            // setcookie("_categories","",time()-3600);
                            // $knwO = "popo";
                            // echo "<div class='loginStatus'>
                            //     <h4>Notice,</h4><br>
                            //     <h5>We noticed a change in your change in your category section.</h5>
                            //     <p>( Probably a mistake )</p>
                            // </div>";
                        }                        
                    }

                }
                  $run=mysqli_query($mysqli,$sql);
                  if($run){
                  $profileEdited = "<div class='profileEdited'>Account Updated</div>";
                }else{
                    echo "<div class='profileEdited' style='color:red'>Not Submitted</div>";
                    }        
                  $user_id=$_SESSION['user_info_id'];

                  $sql="SELECT id,shop_name,city FROM marketers Where id='$user_id'";
                  $rub_sql=$mysqli->query($sql);
                  $result=mysqli_fetch_array($rub_sql);
                  if($result){
                    $shop=$result['shop_name'];
                    $city=$result['city'];
                  }
          }else{
              echo "nothing is inserted";
            }      
  ?>



