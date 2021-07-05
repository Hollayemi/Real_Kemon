<?php
$mysqli=mysqli_connect('sql105.epizy.com','epiz_28257429','BHiMYLgFzV3pjb','epiz_28257429_market');
if(isset($_SESSION['user_info_id'])){
        $user_id = $_SESSION['user_info_id'];

        $sql="SELECT username,email,phone FROM users WHERE id='$user_id'";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);

        $sqlMaketers="SELECT shop_name,bustop,junction,phone,our_offer,city FROM marketers WHERE id='$user_id'";
        $runMaketers=mysqli_query($mysqli,$sqlMaketers);
        $queryRunMaketers = mysqli_num_rows($runMaketers);

        while($row = mysqli_fetch_assoc($run)) {
            $_SESSION['username']       =       $row["username"];
            $_SESSION['email']          =       $row["email"];
            $_SESSION['phone']          =       $row["phone"];
        }

        while($rowMaketers = mysqli_fetch_assoc($runMaketers)) {
            $_SESSION['shop_name']      =       $rowMaketers["shop_name"];
            $_SESSION['bustop']         =       $rowMaketers["bustop"];
            $_SESSION['junction']       =       $rowMaketers["junction"];
            $_SESSION['shop_lines']     =       $rowMaketers["phone"];
            $_SESSION['desc']           =       $rowMaketers["our_offer"];
            $_SESSION['city']           =       $rowMaketers["city"];
        }
        $_SESSION['myProfLink']= $_SESSION['username'].($user_id+30).".php";
}
    ?>