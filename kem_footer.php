<?php

if(isset($_POST['send_to_email'])){
  require_once('functions.php');
    echo "yuyu";
    $name=$mysqli->real_escape_string($_POST['name']);
    $email=$mysqli->real_escape_string($_POST['email']);
    $subject=$mysqli->real_escape_string($_POST['subject']);
    $message=$mysqli->real_escape_string($_POST['message']);

    $newSubject  = "From Kemon Market -> customer message.".$subject."</h4>";
    $newMessage  = "
                      <section style='background-color:#000;border:2px solid #570e9b; padding:10px 25px; '>
                              
                      <div style='border:1px solid #eee;padding:30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>
                      <h2 style='text-align:center;'></h2><br>
                      <h4 style='text-align:left; font-size:18px; color:#fff;'Name:".$name."! <br><br>Email:".$email."</h4>
                        <h5 style='font-size:15px;font-weight: normal;'>
                        ".
                        $message
                        ."
                        </h5>
                      </div>
                    </section>
                      
                  ";
    if(MyMailer($newSubject,'stephanyemmitty@gmail.com',$newMessage)){
          $Sent = "Your message has been sent. Thank you!";
    }else{
      $Sent = "Your message not sent. check your connection and try again!";
    }
}

?>
      <footer id="footer" class="section-bg">
          <div class="footer-top">
            <div class="container">

              <div class="row">

                <div class="col-lg-6">

                  <div class="row">

                      <div class="col-sm-6">

                        <div class="footer-info">
                          <h3>Kemon</h3>
                          <p>Kemon-Market provides the easiest, fastest and most effective way to get any product you desire anywhere you are, even though you have no idea of the location to get it from. <br><br>If you open a webpage with us, we believe we can and will also provide you a better service</p>
                        </div>
                        <!-- 
                        <div class="footer-newsletter">
                          <h4>Our Newsletter</h4>
                          <p></p>
                          <form action="" method="post">
                            <input type="email" name="email"><input type="submit"  value="Subscribe">
                          </form>
                        </div> -->

                      </div>

                      <div class="col-sm-6">
                        <div class="footer-links">
                          <h4>Useful Links</h4>
                          <ul>
                            <li class="scrollto"><a href="index.php">Home</a></li>
                            <li class="scrollto"><a href="Register.php">Register</a></li>
                            <li class="scrollto"><a href="Register.php#team">Team</a></li>
                            <?php 
                              $sqlsss="SELECT veri_payment FROM users Where id='$user_id'";
                              $emailNames = $_SESSION['emailNameReal'];
                              $run=mysqli_query($mysqli,$sqlsss);
                              $row = mysqli_fetch_assoc($run);
                              $_SESSION['veri_payment'] = $row['veri_payment'];
                              if($row['veri_payment'] == "True"){
                                  echo "<li><a href='1/".$username.($user_id+30)."loader.php'>Dashboard</a></li>";
                              }else{
                                  echo "<li title='Register before setting your profile'class='scrollto'><a href='#about'>Dashboard</a></li>";
                              }
                            ?>
                            <li><a href="Agent.php">Agent</a></li>
                            <li><a href="Register.php#pricing">Subscriptions</a></li>
                          </ul>
                        </div>

                        <div class="footer-links">
                          <h4>Contact Us</h4>
                          <p>
                            76,Olorunsogo Street,<br>
                            Okeigbo, Ondo State,<br>
                            Nigeria.<br>
                            <strong>Phone:</strong> +2348147702684<br>
                            <strong>Email: </strong> kemononlinemarket@gmail.com<br>
                          </p>
                        </div>

                        <div class="social-links">
                          <a href="https://twitter.com/oluwasusi_ola?s=09" class="twitter"><i class="fa fa-twitter"></i></a>
                          <a href="https://mobile.facebook.com/Stephanyemmitty" class="facebook"><i class="fa fa-facebook"></i></a>
                          <a href="https://api.whatsapp.com/send?phone=08147702684&text=Hi,%20from%20Kemon-Market.%20My%20name%20is%20" class="instagram"><i class="fa fa-whatsapp"></i></a>
                          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-6">

                  <div class="form">
                    <?php if(isset($Sent)){echo $Sent; }?>
                    <h4>Send us a message</h4>
                    <p>You can send some text and we promise to take a proper step after seeing the message</p>
                    <form action="" method="post" role="form" class="contactForm">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                      </div>

                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>

                      <div class="text-center"><button type="submit" name="send_to_email" title="Send Message">Send Message</button></div>
                    </form>
                  </div>

                </div>

                

              </div>

            </div>
          </div>

          <div class="container">
            <div class="copyright">
              Designed with love by <strong>stephanyemmitty</strong>.
            </div>
                <div class="credits">
            </div>
          </div>
        </footer>
  
    <?php 
    

          
      if(isset($_GET['err'])){
        $myErrNote = "popo";
        include_once('functions.php');
        $err = "Transaction not successful, poor connection <i class='ion-sad'></i>  ";
        myMessage("err","Error in Transaction",$err,"ion-android-cancel");
      }


      if(isset($_GET['warning'])){
        $myErrNote = "popo";
        include_once('functions.php');
        $err = "Take the proper step of payment. Click the button to make any tansaction";
        myMessage("warning","Warning",$err,"ion-android-warning");
      }

      if(isset($_GET['notice'])){
        $myErrNote = "popo";
        include_once('functions.php');
        $err = "We noticed that you are on ".$genSubQueryRun['type_of_sub']." months plan with ".$_SESSION['daysLeft']." left";
        myMessage("notice","Already Subscribed",$err,'ion-information-circled');
      }
    ?>

    <script>
<?php
  if(isset($myErrNote)){
?>
      window.addEventListener('mouseup', function(event){
      if(event.target != document.querySelector('.myAlertbox') && event.target.parentNode != document.querySelector('.myAlertbox')){
      document.querySelector('.mainBox').style.display='none'
      document.querySelector('.kemBody').style.overflow='auto'
    }
})
<?php
  }
?>
var letsChat = document.querySelector(".letsChat")
            var chatPhone = document.querySelector(".chatPhone")
            var iPhoneButton = document.querySelector(".iPhoneButton")
            
            letsChat.addEventListener("click",function(){
              if(letsChat.style.display=="block"){
                letsChat.style.display="none" 
                chatPhone.style.display="block"
                
                }else{
                  
                }
            });


            iPhoneButton.addEventListener('click',function(){
                letsChat.style.display="block" 
                chatPhone.style.display="none"
            })
    </script>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="js/custom-file-input.js"></script>
    <!-- Contact Form JavaScript File -->
    <!-- <script src="./contactform/contactform.js"></script> -->
    <script src="js/main.js"></script>

    <script src="js/register.js"></script>
    <script> 
      var allPop = document.getElementsByClassName("popSetAgent")
      document.querySelector('.Set_showAgnpop').addEventListener('click', function(){
        
        allPop[0].style.display="block"
        document.querySelector('.bodyAgentPop').style.display="flex"
        document.querySelector('.bodyAgentPop').style.backgroundColor="rgba(0, 0, 0, 0.693)"
      })

      document.querySelector('.deactivateCode').addEventListener('click', function(){
        console.log('ioioui')
        // allPop[1].style.display="block"
        // document.querySelector('.bodyAgentPop').style.display="flex"
        // document.querySelector('.bodyAgentPop').style.backgroundColor="rgba(0, 0, 0, 0.693)"
      })

      document.querySelector('.Remove2_showAgnpop').addEventListener('click', function(){
        document.querySelector('.bodyAgentPop').style.display="flex"
        document.querySelector('.bodyAgentPop').style.backgroundColor="rgba(0, 0, 0, 0.693)"
      })

      document.querySelector('.cancelAgnpop').addEventListener('click', function(){
        document.querySelector('.bodyAgentPop').style.display="none"
        document.querySelector('.bodyAgentPop').style.backgroundColor="rgba(0, 0, 0, 0)"
      })
  </script>
    <!-- <script src="node_modules/mysql/index.js"></script> -->
    <script data-main="./js/config" src="./js/require.js"></script>
    <?php include('./js/jsToSql.php')?>
  </body>

</html>

