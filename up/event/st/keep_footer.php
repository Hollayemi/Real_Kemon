<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3 style="color:red; underline:"><?php echo $_SESSION['in-shop_name'] ?></h3>
            <p><?php echo $_SESSION['in-desc'] ?></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <?php
      $explod=explode(' ',$_SESSION['in-shop_name']);
  ?>
        <!-- Powered by kemon-Market &copy; Copyright <strong><?php echo $_SESSION['in-shop_name'] ?></strong>.  -->
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
         <h5> Powered by kemon-Market &copy; Copyright <strong><?php echo $_SESSION['in-shop_name'] ?></strong>. </h5>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../st/lib/jquery/jquery.min.js"></script>
  <script src="../st/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../st/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../st/lib/easing/easing.min.js"></script>
  <script src="../st/lib/superfish/hoverIntent.js"></script>
  <script src="../st/lib/superfish/superfish.min.js"></script>
  <script src="../st/lib/wow/wow.min.js"></script>
  <script src="../st/lib/venobox/venobox.min.js"></script>
  <script src="../st/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../st/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../st/js/main.js"></script>
</body>

</html>
