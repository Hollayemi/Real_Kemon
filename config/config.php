<?php
    include("controller.php");
    
    if(isset($_SESSION['user']))
    {
        $user_email = $_SESSION['user'];

        function usersInfo($conn,$user_email)
        {
            $sql="SELECT * FROM users WHERE email=:email";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['email'=>$user_email]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        if(usersInfo($conn,$user_email) != null){
            $myIdFetch  = usersInfo($conn,$user_email);
            $myId       =   $myIdFetch['id'];
        }

        //  fetch marketers in assoc
        function marketersInfo($conn,$myId)
        {
            $sql    ="SELECT * FROM marketers WHERE id=:id";
            $stmt   = $conn->prepare($sql);
            $stmt->execute(['id'=>$myId]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        //  fetch marketers in assoc
        function ratingStar($conn,$myId)
        {
            $sql    = "SELECT id, star FROM rating WHERE F_id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$myId]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


        function getActivities($conn,$myId)
        {
            $sql = "SELECT * FROM activity WHERE Fid=? ORDER BY date DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$myId]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


        function allAgentByName($conn,$myId,$agnName)
        {
            $sql = "SELECT * FROM agent where agnUsername=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$agnName]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }


        function allAgentById($conn,$myId)
        {
            $sql = "SELECT * FROM agent where regID=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$myId]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }


        function allAgentByPic($conn,$agnPic)
        {
            $sql = "SELECT * FROM agent where agnPic=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$agnPic]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        



        //  set default storage----------------------------------

        
        function setDefaultPicture($conn,$myId)
        {
            $user_email = $_SESSION['user'];
            $myIdFetch  = usersInfo($conn,$myId);
            // if($myIdFetch['my_pic'] == ""){
                $sql    = "UPDATE users SET my_pic='img/profile.png' WHERE id=:id";
                $stmt   = $conn->prepare($sql);
                $stmt->execute(['id'=>$myId]);
            // }
            return true;
        }

        function setDefaultTemplate($conn,$myId,$type)
        {
            $sql    = "UPDATE marketers SET webType=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$type,$myId]);
            return true;
            
        }


        function setDefaultStorage($conn,$myId)
        {
            $userS  =   41943040;
            $numP   =   2;
            $numT   =   2;
            $sql    = "UPDATE users SET userStorage=?,num_Page=?,num_Tab=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$userS,$numP,$numT,$myId]);
            return true;
        }

        function setPageExistence($conn,$myId)
        {
            $sql    = "UPDATE users SET page_exist='1' WHERE id=:id";
            $stmt   = $conn->prepare($sql);
            $stmt->execute(['id'=>$myId]);
            return true;
        }

        // ------------------updation----------------------------------------




        function update_Profile($conn,$myId,$shopName,$shopOp,$shopCl,$shopState,$shopCountry,
                                $shopVCT,$shopBustop,$shopJunction,$shopCity,$shopFb,$shopWhat,$shopPhn,$shopLi)
        {
            $sql="UPDATE marketers SET shop_name=?,opening_hour=?,closing_hour=?,state=?,country=?,very_close_to=?,bustop=?,
                junction=?,city=?,facebook=?,whatsapp=?,phone=?,linked_in=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([
                $shopName, $shopOp, $shopCl,  $shopState,  $shopCountry,  $shopVCT,  $shopBustop, $shopJunction, $shopCity, $shopFb, $shopWhat,
                $shopPhn, $shopLi, $myId
           ]);
            return true;
        }


        
        function update_ProfileOffer($conn,$myId,$shopName,$shopOp,$shopCl,$shopState,$shopCountry,
                                $shopVCT,$shopBustop,$shopJunction,$shopCity,$shopFb,$shopWhat,$shopPhn,$shopLi,$our_offer)
        {
            $sql="UPDATE marketers SET shop_name=?,opening_hour=?,closing_hour=?,state=?,country=?,very_close_to=?,bustop=?,
                junction=?,city=?,facebook=?,whatsapp=?,phone=?,linked_in=?,our_offer=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([
                $shopName, $shopOp, $shopCl,  $shopState,  $shopCountry,  $shopVCT,  $shopBustop, $shopJunction, $shopCity, $shopFb, $shopWhat,
                $shopPhn, $shopLi,$our_offer,$myId
           ]);
            return true;
        }





        function update_VerifyPayment($conn,$myId)
        {
            $sql    = "UPDATE users SET veri_payment='True' WHERE id=:id";
            $stmt   = $conn->prepare($sql);
            $stmt->execute(['id'=>$myId]);
            return true;
        }

        function update_accountReady($conn,$myId,$param)
        {
            $sql    = "UPDATE users SET acc_ready=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$param,$myId]);
            return true;
        }

        function update_bgPicStyle($conn,$myId,$chooseBgType)
        {
            $sql    = "UPDATE marketers SET bgPic=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$chooseBgType,$myId]);
            return true;
        }

        function update_websiteColor($conn,$myId,$MainColor,$TextColor,$SubColor,$LinkColor)
        {
            $sql    = "UPDATE marketers SET MainColor=?, TextColor=?, SubColor=?, LinkColor=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$MainColor,$TextColor,$SubColor,$LinkColor,$myId]);
            return true;
        }



        function update_numPage($conn,$myId,$to)
        {
            $sql    = "UPDATE users SET num_Page=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$to,$myId]);
            return true;
        }

        function update_numTab($conn,$myId,$to)
        {
            $sql    = "UPDATE users SET num_Tab=? WHERE id=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$to,$myId]);
            return true;
        }


        function updateAgentName($conn,$myId,$updateAgnAccName,$updateAccNum,$updatePhone,$updateAgnBank,$updateAgnMail)
        {
            $sql    = "UPDATE agent SET agnAccName=?,agnAccNumber=?,accPhoneNumber=?,Bank=?,mail=? WHERE regID=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$updateAgnAccName,$updateAccNum,$updatePhone,$updateAgnBank,$updateAgnMail,$myId]);
            return true;
        }


        function updateAgentPic($conn,$myId,$fileDestination)
        {
            $sql    = "UPDATE agent SET agnPic=? WHERE regID=?";
            $stmt   = $conn->prepare($sql);
            $stmt->execute([$fileDestination,$myId]);
            return true;
        }


        // -------------------------uploads------------------

        function catchUploads($conn,$myId,$caption,$picture,$Skey,$amount,$page)
        {
            $sql = "INSERT INTO Trackk (Skey,caption,picture,amount,real_ID,page)VALUES(?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                $Skey,
                $caption,
                $picture,
                $amount,
                $myId,
                $page
            ]);
            return true;
        }






        // ----------------------------------------------------------

        function updateActivite($conn,$eventType,$myAction,$myId,$activity)
        {
            $sql = "INSERT INTO activity (Fid,eventType,myAction,activity)VALUES(?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$myId,$eventType,$myAction,$activity]);
            return true;
        }


        function insertIntoAgent($conn,$AgnUsername,$AgnAccName,$AccNum,$AgnBank,$AgnPhone,$AgnMail,$myId,$fileDestination,$referralLink)
        {
            $sql = "INSERT INTO agent (agnUsername,agnAccName,agnAccNumber,Bank,accPhoneNumber,mail,regID,agnPic,referralLink)
            VALUES(?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$AgnUsername,$AgnAccName,$AccNum,$AgnBank,$AgnPhone,$AgnMail,$myId,$fileDestination,$referralLink]);
            return true;
        }


        function registerCategory($conn,$myId,$category)
        {
            $sql = "INSERT INTO category (id,category)VALUES(:myId,:category)";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['myId'=>$myId,'category'=>$category]);
            return true;
        }


        function setRegisteration($conn,$Shop_Name,$shop_nick,$website,$OPH,$CLH,$country,$state,$City,$Junction,$Bustop,$VCT,$facebook,
                                  $whatsapp,$Phone,$linked_in,$Offer,$myId,$longitude,$latitude)
        {
            
            $sql="INSERT INTO marketers (shop_name,shop_nick,shop_website,opening_hour,closing_hour,country,state,city,junction,
            bustop,very_close_to,facebook,whatsapp,phone,linked_in,our_offer,id,longitude,latitude) VALUES (:Shop_Name,:shop_nick,:website,:OPH,:CLH,:country,:states,:City,:Junction,:Bustop,:VCT,
            :facebook,:whatsapp,:Phone,:linked_in,:Offer,:real_id,:longitude,:latitude)";

            $stmt = $conn->prepare($sql);

            $stmt->execute
            ([
                'Shop_Name' =>$Shop_Name,
                'shop_nick' =>$shop_nick,
                'website'   =>$website,
                'OPH'       =>$OPH,
                'CLH'       =>$CLH,
                'country'   =>$country,
                'states'    =>$state,
                'City'      =>$City,
                'Junction'  =>$Junction,
                'Bustop'    =>$Bustop,
                'VCT'       =>$VCT,
                'facebook'  =>$facebook,
                'whatsapp'  =>$whatsapp,
                'Phone'     =>$Phone,
                'linked_in' =>$linked_in,
                'Offer'     =>$Offer,
                'real_id'   =>$myId,
                'longitude' =>$longitude,
                'latitude'  =>$latitude
                ]);
            return true;
        }
    









    // /////////////////////////////////////////// /////////////////////////////////// //////////////////////////// //////////////////////



    // ///////////My page Update (DERIVED FORM EMAIL)///////////////

        function updatePage_func($conn,$myId,$emailName)
            {
                $sql    = "UPDATE users SET My_page=? WHERE id=?";
                $stmt   = $conn->prepare($sql);
                $stmt->execute([$emailName,$myId]);
                return true;
            }

    // ///////////FetchAll to know amount (FetchAll)///////////////
            
            // function fetchAll_Sql($conn,$sql)
            // {
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute();
            //     $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
            //     return $result;
            // }
            


    // ///////////Fetch all subscribers (ASSOCICALLY)///////////////
            
    function updateFunc_Subscribers($conn,$myId)
    {
        $sql = "SELECT * FROM subscribers WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$myId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if(!empty($result))
        {

            $exp=strtotime($result['Date_expired']);
            $sub=strtotime($result['Date_subscribed']);
            
            $NewD  = date("20".'y/m/d');
            $NewDate = strtotime($NewD);
            $dif = $exp - $NewDate;

            $newExpiry = abs(floor($dif/(60 * 60 * 24))); 




            $daysLeft_Sql = "UPDATE subscribers SET Days_left = ? WHERE id = ?";
            $stmt = $conn->prepare($daysLeft_Sql);
            $stmt->execute([$newExpiry,$myId]);
            $_SESSION['daysLeft'] = $newExpiry;



            
            if($rems['Subscribed']==1){
            
                if($newExpiry == 0){
                    $zero = 0;
                    $expiredSql = "UPDATE users SET Subscribed = ? WHERE id = ?";
                    $stmt = $conn->prepare($expiredSql);
                    $stmt->execute([$zero,$myId]);


                    $deleteSql = "DELETE FROM subscribers WHERE id = ?";
                    $stmt      = $conn->prepare($deleteSql);
                    $stmt->execute([$myId]);
                }

            }
        }

    }






    // ///////////My page Update (DERIVED FORM EMAIL)///////////////

    function fetchEmail_func($conn,$email)
    {
        $sql    =   "SELECT receiverEmail,receiverName,senderShop From newsletters Where senderEmail=?";
        $stmt   = $conn->prepare($sql);
        $stmt->execute([$email]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }








    function foldersize($path) {
        $total_size = 0;
        $files = scandir($path);
        foreach($files as $t) {
          if (is_dir(rtrim($path, '/') . '/' . $t)) {
            if ($t<>"." && $t<>"..") {
                $size = foldersize(rtrim($path, '/') . '/' . $t);
                $total_size += $size;
            }
          } else {
            $size = filesize(rtrim($path, '/') . '/' . $t);
            $total_size += $size;
          }
        }
        return $total_size;
      }
      
      function format_size($size) {
    
        $mainSiz   =   $size*9.5367*(10**-7);
        $mainSize  =   explode('.',$mainSiz);
        if($mainSize[0] >1023){
            $mainSiz   =   $size*9.5367*(10**-7);
            return round($mainSiz,2);
        }
    
        // $mod = 1024;
        // $units = explode(' ','B KB MB GB TB PB');
        // for ($i = 0; $size > $mod; $i++) {
        //   $size /= $mod;
        // }
      
        return round($mainSiz, 2) . " MB";
      }
      


}else{
    header('Location:exp.php');
}



?>