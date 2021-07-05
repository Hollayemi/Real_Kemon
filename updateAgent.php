<?php
$mysqli=mysqli_connect('sql105.epizy.com','epiz_28257429','BHiMYLgFzV3pjb','epiz_28257429_market');
$user_id = $_SESSION['user_info_id'];
if (isset($_POST['UpdateAgent'])){
    $updateAccNum        =      $mysqli->real_escape_string($_POST['acnum']);
    $updateAgnMail       =      $mysqli->real_escape_string($_POST['mail']);
    $updateAgnAccName    =      $mysqli->real_escape_string($_POST['acnam']);
    $updateAgnBank       =      $mysqli->real_escape_string($_POST['bnk']);
    $updatePhone         =      $mysqli->real_escape_string($_POST['Phnum']);

    $sql4="UPDATE agent SET agnAccName = '$updateAgnAccName', agnAccNumber='$updateAccNum', accPhoneNumber='$updatePhone', Bank='$updateAgnBank',
    mail='$updateAgnMail' WHERE regID='$user_id'";
    $run=mysqli_query($mysqli,$sql4);
        if($run){
            $Submitted = 'done';
        }else{
            $Submitted = 'err';
        }  

    }

        $selectSql = "SELECT agnUsername FROM agent WHERE regID ='$user_id'";
        $runSelect = mysqli_query($mysqli,$selectSql);
        $selectRow = mysqli_fetch_array($runSelect);
        
    if (isset($selectRow['agnUsername'])){

        $myAgnUsername=$selectRow['agnUsername'];


        if (isset($_POST['UpdateAgentPicture'])){
            $myPath         = $_FILES['myfile'];
            $fileName       = $_FILES['myfile']['name'];
            $fileSize       = $_FILES['myfile']['size'];
            $fileTempName   = $_FILES['myfile']['tmp_name'];
            $fileType       = $_FILES['myfile']['type'];
            $fileError      = $_FILES['myfile']['error'];
            $fileExt        =  explode('.',$fileName);
            $fileActualExt  =  strtolower(end($fileExt));        
                if (isset($fileExt)){
                    $allowed = array("jpg","png","jpeg");
                    $fileActualExt  =  strtolower(end($fileExt));
                    if(in_array($fileActualExt,$allowed)){
                        if($fileError === 0){
                            if($fileSize > 10000){
                                $mylink = $user_id+30;
                                    $fileDestination = 'AgentPic/'.$myAgnUsername.'.png';     
                                    move_uploaded_file($fileTempName,$fileDestination);
                                        }else{
                                            $Submitted = "This file is too big, try with a lesser file size";
                                        }
                                    }else{
                                        $Submitted = "An error has occured, try again with another file";
                                    }
                                }else{
                                    $Submitted = "This type of file cannot be uploaded";
                                }
                            }
            if(isset($fileDestination)){
                $sql4="UPDATE agent SET agnPic='$fileDestination' WHERE regID='$user_id'";

                $run=mysqli_query($mysqli,$sql4);
                if($run){
                    $Submitted = 'done';
                }else{
                    echo "<div style='background-color:#f0ff;width:150px;
                    text-align: center;
                    font-size:20px;
                    color: #fff;
                    width:100%;'>Not Submitted</div>";
                 }
            }else{
                $Submitted = "This type of file cannot be uploaded";
            }
            }  

        }
    
?>



