<?php

include('config.php');

if(isset($_SESSION['email'])){
    
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
        // fopen($emailName.'.php', "w");
        // $sql_MyPage = "UPDATE users SET My_page='$emailName'";
        // $run_MyPage = mysqli_query($mysqli,$sql);
        // $_SESSION['run_MyPage']=$run_MyPage;


        
// ++++++++++++++++++++++++++++=======================update agent=============+++++++++++++++++++++++
    

}else
{
         header('Location:exp.php');
}
?>