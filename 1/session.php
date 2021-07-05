<?php

include('../config.php');

if(isset($_SESSION['user_info_id']) || isset($_SESSION['user_info_id2'])){

    if(isset($_SESSION['user_info_id2'])){
        $user_id = $_SESSION['user_info_id2'];
        $_SESSION['user_info_id'] = $_SESSION['user_info_id2'];
    }

        $_SESSION['myProfLink']= $_SESSION['username'].($user_id+30).".php";
        /*
        echo $_SESSION['username'];
        echo $_SESSION['shop_name'];
        echo $_SESSION['email'] ;
        echo $_SESSION['phone'];
        echo $_SESSION['bustop']  ;
        echo $_SESSION['junction'] ;
        echo $_SESSION['desc']; 
        echo $_SESSION['city']; 
        */

        $sql="SELECT shop_nick FROM marketers WHERE id='$user_id'";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_fetch_assoc($run);
        $_SESSION['shop_nick'] = $queryRun['shop_nick'];

        $_SESSION['year1'] = 25000;
        $_SESSION['month6'] = 12000;
        $_SESSION['month3'] = 6000;
        $_SESSION['ProfilePayment'] = 3000;

        $uniq=uniqid('',true);
        $_SESSION['payment_uniqid'] = $uniq;
        $email = $_SESSION['email'];
        $splitedEmail= explode('.',$email);
        $forEachPic= $splitedEmail[0];
        $_SESSION['emailName']=($forEachPic);

        $splitedEmail= explode('@',$email);
        $emailnamereal= $splitedEmail[0];
        $ad=$user_id+30;
        $_SESSION['emailNameReal']=($emailnamereal.$ad."page");


        $emailName = $_SESSION['emailNameReal'];
        fopen($emailName.'.php', "w");
        $sql_MyPage = "UPDATE users SET My_page='$emailName'";
        $run_MyPage = mysqli_query($mysqli,$sql);
        $_SESSION['run_MyPage']=$run_MyPage;


        $sql="SELECT my_pic FROM users Where id='$user_id'";
        $rub_sql=$mysqli->query($sql);
        $result=mysqli_fetch_array($rub_sql,MYSQLI_ASSOC);
        if($result){
            $_SESSION['profilePic_Location']=  $result['my_pic'];
            $_SESSION['profilePic_Location'];
        }

        $profilePic = $_SESSION['emailName'].'png';
        $splitedEmail= explode('.',$email);
        $forEachPic= $splitedEmail[0];
        $_SESSION['splitedEmail']=$forEachPic;




       




        $sql="SELECT * FROM users";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);
        $queryRunAll = mysqli_fetch_array($run);
        $_SESSION['tot_shop_reg'] = $queryRun;

        $sql2="SELECT * FROM users WHERE id='$user_id'";
        $run2=mysqli_query($mysqli,$sql2);
        $queryRunAll = mysqli_fetch_array($run2);


        $_SESSION['myPic'] = $queryRunAll['my_pic'];
        

      


        $sql="SELECT * FROM agent";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);
        $_SESSION['tot_agn_reg'] = $queryRun;

        $sql="SELECT * FROM agent WHERE counting>5";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);
        $_SESSION['counting5'] = $queryRun;

        $sql="SELECT * FROM agent WHERE counting>20";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);
        $_SESSION['bestReferrals'] = $queryRun;

        $sql="SELECT type_of_sub FROM subscribers WHERE type_of_sub='1 year'";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);
        $_SESSION['type_of_sub_for_year'] = $queryRun;

        $sql="SELECT type_of_sub FROM subscribers WHERE type_of_sub='3 months'";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);
        $_SESSION['type_of_sub_for_3months'] = $queryRun;

        $sql="SELECT type_of_sub FROM subscribers WHERE type_of_sub='6 months'";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);
        $_SESSION['type_of_sub_for_6months'] = $queryRun;


        $sql="SELECT senderShop FROM newsletters WHERE senderEmail='$email'";
        $run=mysqli_query($mysqli,$sql);
        $queryRun = mysqli_num_rows($run);
        $_SESSION['noOFCustomers'] = $queryRun;


        $genSubSql="SELECT type_of_sub FROM subscribers WHERE id='$user_id'";
        $genSubRun=mysqli_query($mysqli,$genSubSql);
        $genSubQueryRun = mysqli_fetch_array($genSubRun);
        // $_SESSION['generalTypeofSub'] = $genSubQueryRun['type_of_sub'];



        //$exp = $_SESSION['uploadEmailName'];
        //$exp_unq=explode("-",$exp);

        $payment_uniq=rand();
        $_SESSION['paymentNum'] = $payment_uniq;
        /*--------------------------------------echo page name---------------------------*/
        $curPageName = substr($_SERVER["SCRIPT_NAME"],strpos($_SERVER["SCRIPT_NAME"],"/")+1);
        $_SESSION['curPageName']=$curPageName;


        /*-----------------------------------Subscription-----------------------------------*/

        $rem_sql0 = "SELECT Subscribed FROM users WHERE id = '$user_id'";
        $rem_run0 = mysqli_query($mysqli,$rem_sql0);
        $rems = mysqli_fetch_array($rem_run0);

        $_SESSION['rems'] = $rems['Subscribed'];
//        echo $_SESSION['rems'];
       

    //      //========================This the loop==============================================
        
    if($rems['Subscribed']==1){
        //$NewDate = date("20".'y/m/d');
        $rem_sql = "SELECT Date_expired,Date_subscribed,Days_left FROM subscribers WHERE id = '$user_id'";
        $rem_run = mysqli_query($mysqli,$rem_sql);
        $rem_row = mysqli_fetch_array($rem_run);

        $exp=strtotime($rem_row['Date_expired']);
        $sub=strtotime($rem_row['Date_subscribed']);
        
        $NewD  = date("20".'y/m/d');
        $NewDate = strtotime($NewD);
        $dif = $exp - $NewDate;

        $newExpiry = abs(floor($dif/(60 * 60 * 24))); 

        $rem_sql21 = "UPDATE subscribers SET Days_left = '$newExpiry' WHERE id = '$user_id'";
        mysqli_query($mysqli,$rem_sql21);
        $_SESSION['daysLeft'] = $newExpiry;

        if($newExpiry == 0){
            $expiredSql = "UPDATE users SET Subscribed = 0 WHERE id = '$user_id'";
            mysqli_query($mysqli,$expiredSql);
            $deleteSql = "DELETE FROM subscribers WHERE id = '$user_id'";
            mysqli_query($mysqli,$deleteSql);
        }

    }

    $numOfFiles = [];
        $numOfFile = glob('pages/'.$emailName.'/pictures/*.*');

        for ($i=0; $i<count($numOfFile); $i++){
            $numOfFiles[]=$numOfFile[$i];
        }
        
    $_SESSION['numOfFiles'] = (sizeof($numOfFiles));
  
}else
{
         header('Location:../exp.php');
}
?>