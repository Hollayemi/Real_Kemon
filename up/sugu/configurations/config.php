<?php
    $mysqli             =           mysqli_connect('sql105.epizy.com','epiz_28257429','BHiMYLgFzV3pjb','epiz_28257429_market');
    $curPageName        =           substr($_SERVER["SCRIPT_NAME"],strpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $extr               =           explode('/',$curPageName);
    $genId              =           array_reverse($extr);
    // print_r($genId);
    $genId              =           $extr[1];
    $sql_id             =           "SELECT id FROM marketers WHERE shop_nick='$genId'";
    $run_id             =           mysqli_query($mysqli,$sql_id);
    $row_id             =           mysqli_fetch_assoc($run_id);

    $user_id            =           $row_id['id'] ;

    if(isset($_SESSION['user_info_id'])){
        $myVisitor      =  $_SESSION['user_info_id'];

        $sql_myLetter   ="SELECT email,username FROM users WHERE id='$myVisitor'";
        $run_myLetter   =mysqli_query($mysqli,$sql_myLetter);
        $row_myLetter    = mysqli_fetch_assoc($run_myLetter);

        // echo $row_myLetter['email'];
    }

?>