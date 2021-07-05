<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="./img/myKemon.png" rel="apple-touch-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../loader.css">
    <link href="../img/km.png" rel="icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <title>. . .</title>
</head>
<body class="cover">
    <br><br><br>
    <?php  
        session_start();
        include('../config.php');
        $real_id       =  $_SESSION['user_info_id'];
        $sql_does_my_page_exist   =   "SELECT email,page_exist,My_page,my_pic From users Where id='$real_id'";
        $run_does_my_page_exist   =   mysqli_query($mysqli,$sql_does_my_page_exist);
        $row_page_exist           =   mysqli_fetch_array($run_does_my_page_exist);

    ?>
        <!-- <div class="rot">
            <div class="mySqr">
                <div class="sqr1"></div>
                <div class="sqr2"></div>
            </div>

            <div class="rec"></div>
        </div>
        <div>
            <div class="cir"></div>
        </div>
     -->
     
        <div id="loadingFrame"> 
            <h1 class="Kemon"><span class="k">K</span><span class="e">E</span><span class="m">M</span><span class="o">O</span><span class="n">N</span></h1>
            <?php 
                if($row_page_exist['page_exist'] < 1){
                    echo '<h5 class="loading">Creating your website...</h5>';
                }else{
                    echo "<h5 class='loading'>Checking autoralizati...</h5>";
                }
            ?>
        </div>
       
<?php
if(isset($_SESSION['user_info_id'])){
    if (TRUE){

    $user_id = $_SESSION['user_info_id'];
    $username = $_SESSION['username'];
    $profile = "True";
    $paif = false;
    $nwe = 0;
    
    $sql_does_my_page_exist2   =   "SELECT shop_name,shop_nick From marketers Where id='$real_id'";
    $run_does_my_page_exist2   =   mysqli_query($mysqli,$sql_does_my_page_exist2);
    $row_page_exist2           =   mysqli_fetch_assoc($run_does_my_page_exist2);
    
    


    $_SESSION['page-exist'] = $row_page_exist['page_exist'];
    $emailName = $_SESSION['emailNameReal'];
    if($row_page_exist['page_exist'] < 1){
        $shop_nick    =    strtolower($row_page_exist2['shop_nick']);
        $shop_nick    =    ucwords($shop_nick);
        $mylink = $real_id+30;
        $sql_MyPage = "UPDATE users SET usersStorage='41943040',num_Page='2',num_Tab='2' WHERE id='$real_id'";
        mysqli_query($mysqli,$sql_MyPage);

        if($row_page_exist['my_pic'] =="" ){
            $sql_add = "UPDATE users Set my_pic='img/profile.png' WHERE id ='$real_id'";
            mysqli_query($mysqli,$sql_add);
          }

        $sql_add = "UPDATE marketers Set webType='sugu' WHERE id ='$real_id'";
        mysqli_query($mysqli,$sql_add);

        
        $emailName = $_SESSION['emailNameReal'];
        mkdir('../up/'.$shop_nick);
        mkdir('../up/'.$shop_nick.'/pic');
        mkdir('../up/'.$shop_nick.'/cp');
        mkdir('../up/'.$shop_nick.'/pg');
        mkdir('../up/'.$shop_nick.'/tb');
        mkdir('../up/'.$shop_nick.'/st');
        mkdir('../up/'.$shop_nick.'/usersTeam');


        $NewPageFile  =  '../up/'.$shop_nick.'/'.$shop_nick.'.php';
        $contents ="<?php include('st/Home.php')?>";            
        if(file_put_contents($NewPageFile,$contents)){ }

        if(require_once('../functions.php')){
            copyFolder("../up/sugu/st2","../up/".$shop_nick."/st");
            copyFolder("../img/profile.png","../up/".$shop_nick);
        }
        $nwe = $row_page_exist['page_exist'] + 1;
        $sql_MyPage_2 = "UPDATE users SET page_exist='$nwe' WHERE id='$real_id'";
        mysqli_query($mysqli,$sql_MyPage_2);
        
        if(isset($_GET['subscription_was_successfulpaid'])){
            header('Refresh: 5;'.$username.($user_id+30).'.php?transaction=successful');
        }else{
            header('Refresh: 5;'.$username.($user_id+30).'.php?done');
        }
    }else{

        if(isset($_GET['subscription_was_successfulpaid'])){
            header('Refresh: 5;'.$username.($user_id+30).'.php?transaction=successful&ref='.$_GET['rreef']);
        }elseif(isset($_GET['successfullypaid'])){
            header('Refresh: 5;'.$username.($user_id+30).'.php?transaction=successful&ref='.$_GET['rreef'].'&type=register');
        }else{
            header('Refresh: 5;'.$username.($user_id+30).'.php?done');
        }
    }    
    }
}else{
    header('Location:../exp.php');
}
?>
</body>
</html>