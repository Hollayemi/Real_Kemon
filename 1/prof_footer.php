
<footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  
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
                      <li class="scrollto"><a href="../index.php">Home</a></li>
                      <li class="scrollto"><a href="../Register.php#Registration_all">Team</a></li>
                      <li><a href="../products.php">Nearest shop</a></li>
                      <li class="scrollto"><a href="../Register.php#team">Team</a></li>
                      <li><a href="../Agent.php">Agent</a></li>
                      <?php 
                         $sql="SELECT veri_payment FROM users Where id='$user_id'";
          
                         $emailNames = $_SESSION['emailNameReal'];
                         $run=mysqli_query($mysqli,$sql);
                         $row = mysqli_fetch_assoc($run);
                         $_SESSION['veri_payment'] = $row['veri_payment'];
                         if($row['veri_payment'] == "True"){
                             echo "<li><a href='".$username.($user_id+30)."loader.php'>Profile</a></li>";
                         }else{
                             echo "<li title='Register before setting your profile'class='scrollto'><a href='#about'>Profile</a></li>";
                         }
                      ?>
                      <li><a href="../Register.php#pricing">Subscriptions</a></li>
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
                    <a href="https://api.whatsapp.com/send?phone=08147702684&text=Hi,%20from%20Kemon-Market.%20my%20name%20is%20" class="instagram"><i class="fa fa-whatsapp"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Send us a message</h4>
              <p>You can send some text and we promise to take the proper step after seen the message</p>
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

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
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
    </div>
  </footer><!-- #footer -->
  


  <!-- <script>
      if(<?php //$leftMb[0] ?> <= 15){
        document.querySelector('.addToPage').disabled = "true"
        document.querySelector('.addToPage').value = "true"
      }else{
        document.querySelector('.addToPage').disabled = "false"
      }
  </script> -->
  <?php include('prof_js.php') ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/mobile-nav/mobile-nav.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../js/custom-file-input.js"></script>
  <!-- Contact Form JavaScript File -->
  <script type="text/javascript" src="../up/v2.3.2/jquery.rateyo.js"></script>
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>
  


</body>
</html>
