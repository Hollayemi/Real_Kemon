<?php
    $mysqli=mysqli_connect('sql105.epizy.com','epiz_28257429','BHiMYLgFzV3pjb','epiz_28257429_market');
    if(isset($_POST['agentCode'])){
        $AgnUsers = htmlentities($_POST['nameToSet']);
        $sql = "SELECT * from Agent WHERE agnUsername='$AgnUsers'";
        $run=mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_assoc($run);
        if(isset($row['agnPic'])){
            if(!isset($_COOKIE['Code-Agent'])){
                    
                $_SESSION['name']= $row['agnPic'];
                $_SESSION['reffered']= $row['counting'];
                $pp =  $_SESSION['name'];
                setcookie('Code-Agent',$pp, time()+3600);
            }else{
                header('Location:Register.php');
            }
        }else{
            header('Location:Register.php?_vagent=abs');
        }
    }elseif(isset($_SESSION['referralCookie']) && !isset($_COOKIE['Agent'])){
            $deriveCode = $_SESSION['referralCookie'];
            // echo $deriveCode;
            $sql2="SELECT * FROM agent WHERE referralLink='$deriveCode'";
            $run2=mysqli_query($mysqli,$sql2);
            $details = mysqli_fetch_assoc($run2);
            if(isset($details['agnPic'])){
                // echo $details['agnPic'];
                setcookie('Agent',$details['agnPic'], time()-3600);
                setcookie('Agent',$details['agnPic'], time()+3600);
            }else{
                header('Location:Register.php');
            }

    }elseif(isset($_SESSION['referralCookie']) && isset($_COOKIE['Agent'])){
             $deriveCode = $_SESSION['referralCookie'];
             $sql2="SELECT * FROM agent WHERE referralLink='$deriveCode'";
             $run2=mysqli_query($mysqli,$sql2);
             $details = mysqli_fetch_assoc($run2);
             if(isset($details['agnPic'])){
                
         }else{
            header('Location:Register.php?_vagent=abs');
        }
    }
        
?>
