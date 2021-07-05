<?php
session_start();
$filesFolder = $_SESSION['shop_nick'];
echo $filesFolder;
require('functions.php');
if(isset($_POST['changeTemp'])){
    if($filesFolder){
        $templateType = $_POST['sugu'];
        removeFolder('../up/'.$filesFolder.'/st');
        mkdir('../up/'.$filesFolder.'/st');
        copyFolder("../up/".$templateType."/st","../up/".$filesFolder."/st");
        $sql_add = "UPDATE marketers Set webType='$templateType' WHERE shop_nick ='$filesFolder'";
        mysqli_query($mysqli,$sql_add);
        header('Location:'.$_SESSION['myProfLink'].'?'.'theme=changed');
    }else{
    }
}

?>
