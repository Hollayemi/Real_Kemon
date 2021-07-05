<?php
  $reg = 'yes';
  include('kem_header.php');
  include('removeRefer.php');
  $user_id=$_SESSION['user_info_id'];
  $sql="SELECT id FROM marketers Where id='$user_id'";
  $rub_sql=$mysqli->query($sql);
  $result=mysqli_num_rows($rub_sql);
  $result;

?>


<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
  <h4 class="regAlert"><?php if(isset($alert)){ echo $alert; }?></h4>
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2><span>Kemon-Market</span></h2>
          <h2>Provides the Best Solutions<br>for Your <span>Business!</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="about-img">
            <div class="andImage firImgSet">
              <img src="./img/agent-call-ioe-phone.png" class="ambImg amb1" alt=""><br>
              <img src="./img/bgr-eve-lyn.png" class="ambImg amb2" alt="">
            </div>
            <div class="andImage">
              <img src="./img/amb1.png" class="ambImg amb1" alt=""><br>
              <img src="./img/amb2.png" class="ambImg amb2" alt="">
            </div>
              <img src="img/about-img.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Payment</h2>
              <!-- <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3> -->
              <p>Make your payment here to continue your registration. <br> You can register your business without making any payment but you won't be able to edit your profile, until you make a payment.</p>
              <p>Moreover, if you've registered your business, no picture of yours will be loaded when your Business is being searched. Only your Business name,
                 nearest junction and other features will be shown.</p>
              <p>Also, if no payment is made, you won't be able get your personal webpage.</p><br>
              
              <ul>
                <li id="payNow"><i class="ion-android-checkmark-circle"></i> A free webpage.</li>
                <li><i class="ion-android-checkmark-circle"></i> Edit Profile.</li>
                <li><i class="ion-android-checkmark-circle"></i> Customise your page</li>
              </ul>
              <!-- onclick="MytoggleNav() -->
              <!-- <button onclick="MytoggleNav()" class="">toogle</button> -->
              <?php 
                
                if($result == 0 ){
                    echo '<a href="#Registration_all"><button class="btn-outline-info btn">Pay Now</button></a>';
                }else{
                    echo '<button onclick="regPayPageWithPaystack()"  class="btn-outline-info btn">Pay Now</button>';
                }
                ?>
            </div>
          </div>
        </div>
      </div>
      <section>
          <div class="agent-Username wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
              <div class="agentInputClass" > 
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam accusantium consequatur sequi in unde obcaecati reiciendis nihil? Voluptatibus perspiciatis accusantium repellat natus. Rem, impedit natus exercitationem quos blanditiis expedita quam.
                  <?php 
                    if(isset($_COOKIE['Code-Agent'])){
                        echo '<br><button class="btn btn-outline-info deactivateCode">Deactivate Agent</button>';
                    }elseif(isset($_COOKIE['Agent'])){
                        echo '<br><button class="btn btn-outline-info Remove2_showAgnpop">Deactivate Agent</button>';
                    }else{
                        echo '<br><button class="btn btn-outline-info Set_showAgnpop">Click to Activate</button>';
                    }

                    ?>
              </div>
              <div  class="trending-pic">
                <div class="agnStroke stroke1"></div>
                <div class="agnStroke stroke2"></div>
                <div class="agnStroke stroke3"></div>
                <div class="agnStroke stroke4"></div>
                <img src="img/agn.png" alt="">
                  <!-- <img src="pic/ad/agenta.png"  alt=""> -->
              </div>
          </div>
      </section>
      <section class="agentAnimate">
        
        <div class="bigBox wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <img src="img/bgr-eve-lyn.png" style="width:100%;height:100%" alt="">
            <div class="smallBox smallBox1">
              <img src="img/agent-call-ioe-phone.PNG" alt="">
            </div>
            <div class="smallBox smallBox2">
              <img src="img/evelyn.png" alt="">
            </div>
            <div class="smallBox smallBox3">
              <img src="img/gbengene.jpg" alt="">
            </div>
            <div class="smallBox smallBox4">
              <img src="img/simple.png" alt="">
            </div>
        </div>

      </section>
  </section>
  <section id="Registration_all">
		<div class="Registration ">	
			<div class="regForm">
        <br><br>
          <div class="myForm">
              <div class="processForm wow bounceInUp" data-wow-delay="0.5s" data-wow-duration="1.4s">
                <div class="regStatus wow bounceInUp" data-wow-delay="0.7s" data-wow-duration="1.4s">Status</div>
                <div class="dash1" style="background-color:green"></div><div class="numbb1">1</div>
                <div class="dash2"></div><div class="numbb2">2</div>
                <div class="dash3"></div><div class="numbb3">3</div>
                <div class="dash4"></div><div class="numbb4">4</div>
                <div class="dash5"></div><div class="numbb5">5</div>
                <div class="dash6"></div>
              </div>
              <div class="formDiv wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                  
                      <form action="Register.php?detailssubmitted" name=form1 method="POST">
                          <div class="inputs">
                          <!-- <h2 class="shopHeader">Business details</h2><br> -->
                              <div class="busz_details">
                                  <h2>Business Details</h2>
                                  <input type="text" name="Shop_Name"  placeholder="Shop's Name"><br>
                                  <input type="text" name="aka"  placeholder="Link Name (can't be changed after submission)" ><br>
                                  <input type="url"  name="website"  placeholder="website"><br>
                                  <!-- <input type="url"  name="youTube"  placeholder="Youtube link (optional)"><br> -->
                                  <input type="checkbox" id="not24" style="display:none" name="ckHour" class="checkHour">
                                  <label for="not24" class="not24">not 24 hours</label><br>
                                  <div class="Openhours" >
                                      <input type="number" min = "1" max="12" name="Opening" value=7>
                                      <input type="number" min = "1" max="12" name="Closing" value=7>
                                  </div>
                                  
                                  <div class="slideReg">
                                    <h3 class="toNext1">Next</h3>
                                  </div>
                              </div>
                              <div class="busz_loc_Add">
                                <div class="scrollable">
                                    <h2>Business Location Address</h2>
                                    <input type="text" name="Country"  value="Nigeria" readonly> <br>
                                    <?php include('nigerial-states.php') ?><br>
                                    <input type="text" id="guessCity"  name="City"     placeholder="City"><br>
                                    <input type="text" id="guessRoad"       name="Junction"  placeholder="Junction"> <br>
                                    <input type="text" id="guessBustop"  name="Bustop"  placeholder="Bustop"><br>
                                    <input type="text" id="guessSuburb"  name="VCT"  placeholder="Very Close To"><br>

                                    <input type="text" id="latitude"  disabled="true"  name="latitude"  placeholder="latitude"><br>
                                    <input type="text" id="longitude" disabled="true"  name="longitude" placeholder="longitude"><br>
                                    <div class="slideReg">
                                      <h3 class="toBack2">Previous</h3>
                                      <h3 class="toNext2 otha">Next</h3>
                                    </div>
                                  </div>
                              </div>

                              
                              <div class="busz_Category">
                                  <div class="scrollable">
                                      <h2>Business Category</h2>                       
                                      <div class="businessCategories">            
                                          <div class="cl0"><input type=checkbox name=ckb value='Electronics' id="Electronics" readonly onclick='chkcontrol(0)';><label  for="Electronics" class="">Electronics</label></div>
                                          <div class="cl1"><input type=checkbox name=ckb value='Hotel and Suites' id="Hotel"onclick='chkcontrol(1)';><label for="Hotel" class="">Hotel and Suites</label></div>
                                          <div class="cl2"><input type=checkbox name=ckb value='Wears' id="Wears"onclick='chkcontrol(2)';><label for="Wears" class="">Wears</label></div>
                                          <div class="cl3"><input type=checkbox name=ckb value='Catering and decoration' id="Catering"onclick='chkcontrol(3)';><label for="Catering" class="">Catering and decoration</label></div>
                                          <div class="cl4"><input type=checkbox name=ckb value='Restaurant' id="Restaurant"onclick='chkcontrol(4)';><label for="Restaurant" class="">Restaurant</label></div>
                                          <div class="cl5"><input type=checkbox name=ckb value='Bar' id="Bar"onclick='chkcontrol(5)';><label for="Bar" class="">Bar</label></div>
                                          <div class="cl6"><input type=checkbox name=ckb value='Gym' id="Gym"onclick='chkcontrol(6)';><label for="Gym" class="">Gym</label></div>
                                          <div class="cl7"><input type=checkbox name=ckb value='Beauty supply' id="Beauty_supply"onclick='chkcontrol(7)';><label for="Beauty_supply" class="">Beauty supply</label></div>
                                          <div class="cl8"><input type=checkbox name=ckb value='Dry cleaning' id="Dry_cleaning"onclick='chkcontrol(8)';><label for="Dry_cleaning" class="">Dry cleaning</label></div>
                                          <div class="cl9"><input type=checkbox name=ckb value='Car dealer' id="Car_dealer"onclick='chkcontrol(9)';><label for="Car_dealer" class="">Car dealer</label></div>
                                          <div class="cl10"><input type=checkbox name=ckb value='Convenience store' id="Convenience_store"  onclick='chkcontrol(10)';><label for="Convenience_store" class="">Convenience store</label></div>
                                          <div class="cl11"><input type=checkbox name=ckb value='Library' id="Library"  onclick='chkcontrol(11)';><label for="Library" class="">Library</label></div>
                                          <div class="cl12"><input type=checkbox name=ckb value='Fuel & Gas' id="Fuel_Gas"  onclick='chkcontrol(12)';><label for="Fuel_Gas" class="">Fuel & Gas</label></div>
                                          <div class="cl13"><input type=checkbox name=ckb value='Hospital & Pharmacy' id="Hospital_Pharmacy"  onclick='chkcontrol(13)';><label for="Hospital_Pharmacy" class="">Hospital & Pharmacy</label></div>
                                          <div class="cl14"><input type=checkbox name=ckb value='Beauty salon' id="Beauty_salon"  onclick='chkcontrol(14)';><label for="Beauty_salon" class="">Beauty salon</label></div>
                                          <div class="cl15"><input type=checkbox name=ckb value='Shopping center' id="Shopping_center"onclick='chkcontrol(15)';><label for="Shopping_center" class="">Shopping center</label></div>
                                          <div class="cl16"><input type=checkbox name=ckb value='Car wash' id="Car_wash"  onclick='chkcontrol(16)';><label for="Car_wash" class="">Car wash</label></div>
                                          <div class="cl17"><input type=checkbox name=ckb value='Movie' id="Movie"onclick='chkcontrol(17)';><label for="Movie" class="">Movie</label></div>
                                          <div class="cl18"><input type=checkbox name=ckb value='Furniture' id="Furniture"onclick='chkcontrol(18)';><label for="Furniture" class="">Furniture</label></div>
                                          <div class="cl19"><input type=checkbox name=ckb value='Fruits' id="Fruits"onclick='chkcontrol(19)';><label for="Fruits" class="">Fruits</label></div>
                                          <div class="cl20"><input type=checkbox name=ckb value='Mechanic' id="Mechanic"onclick='chkcontrol(20)';><label for="Mechanic" class="">Mechanic</label></div>
                                          <div class="cl21"><input type=checkbox name=ckb value='Sporting materials' id="Sporting_materials"onclick='chkcontrol(21)';><label for="Sporting_materials" class="">Sporting materials</label></div>
                                          <div class="cl22"><input type=checkbox name=ckb value='Laundry' id="laundry" onclick='chkcontrol(22)';><label for="laundry" class="">Laundry</label></div>
                                          <div class="cl23"><input type=checkbox name=ckb value='Clothing Materials & Styling' id="Clothing_Materials" onclick='chkcontrol(23)';><label for="Clothing_Materials" class="">Clothing Materials & Styling</label></div>
                                          <div class="cl24"><input type=checkbox name=ckb value='Plasterer & Constructing Materials' id="constructing_Materials" onclick='chkcontrol(24)';><label for="constructing_Materials" class="">Plasterer & Constructing Materials</label></div>
                                          <div class="cl25"><input type=checkbox name=ckb value='Agricultural Products' id="agriculturalProducts" onclick='chkcontrol(25)';><label for="agriculturalProducts" class="">Agricultural Products</label></div>
                                          <div class="cl26"><input type=checkbox name=ckb value='Cyber Cafe' id="Cybercafe" onclick='chkcontrol(26)';><label for="Cybercafe" class="">Cyber Cafe</label></div>
                                          <div class="cl27"><input type=checkbox name=ckb value='Automobile' id="Automobile" onclick='chkcontrol(27)';><label for="Automobile" class="">Automobile</label></div>
                                      </div>
                                  
                                      <br>
                                      <div class="slideReg">
                                        <h3 class="newtoBack2">Previous</h3>
                                        <h3 class="newtoNext2 otha">Next</h3>
                                      </div>
                                    </div>
                              </div>

                              
                              <div class="soc_med">
                                  <h2>Social Media</h2>
                                  <input type="url" name="Facebook"  placeholder="Facebook Link"><br>
                                  <input type="text" name="Whatsapp"  placeholder="WhatsApp number"><br>
                                  <input type="url" name="Linkedin"  placeholder="linkedin Link"> <br>
                                  <input type="text" name="BPhone"  placeholder=" Business Line"><br><br><br>
                                  <div class="slideReg">
                                    <h3  class="toBack3">Previous</h3>
                                    <h3 class="toNext3 otha">Next</h3>
                                  </div>
                              </div>
                              <div class="ourFf">
                                <div class="scrollable">
                                  <h2>What You Offer</h2>
                                  <p>Keywords and simple language help search engines work out whether your site is of interest to when
                                    customers are looking for information online. <br> <br>
                                    We won’t direct people to your site if you don't have the content that matches their interest. <br>
                                    <i>list of everything you offer:</i>
                                      
                                  </p>
                                  <textarea class="textarea" name="Desc" id="Desc" placeholder="What offer do you render" required></textarea>
                                  <div class="slideReg lastMemberOffer">
                                    <h3  class="toBack4">Previous</h3>
                                    <button type="submit" name="submit" class="otha">Register</button>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </form>
                  <!-- </div> -->
          </div>
        </div>
        
      </div>
    </div>
</section>
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>Kemon resources briefly explained. <br>please, do us a favour by noting every step. You can as well contact us on our social media handles</p>
        </header>        <div class="row">

        
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-home" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="products.php">Nearest Shop</a></h4>
              <p class="description">We make it easy for you to purchase any product from any location in Nigeria, you desire to buy from.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-android-people" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="Agent.php">Hire Agents</a></h4>
              <p class="description">We hire agents and pay them duly. They register people's businesses and they get paid every sunday for the services, they've rendered.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-network" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Online Store</a></h4>
              <p class="description">You get your personnal webpage after making your payment. Your customers can get any product you offer on your webpage.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-upload" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">My Uploads</a></h4>
              <p class="description">You can also choose a file to upload to your page and with a caption that tells us more about the picture uploaded.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-android-phone-landscape" style="color: #2282ff;"></i></div>
              <h4 class="title"><a class='scrollto' href="#portfolio">Templates</a></h4>
              <p class="description">In other to update your webpage, you are opportuned to change your template every two months</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-social-euro" style="color: #8660fe;"></i></div>
              <h4 class="title"><a class='scrollto' href="#features">Payment</a></h4>
              <p class="description">We confirmed your referral, note it, sum it up with the number of referral you have in that week and determine amoumt to recieve.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <header class="section-header">
          <h3>Why Kemon-Market?</h3>
          <p>Kemon-market requires minimal explanation on how to use and it's also reliable.</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="img/why-us.jpg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>Kemon market was actually created for everyone in business, to provided the easiest way to showcase your product online for any of your customers to see.</p>
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-user" style="color: #f058dc;"></i>
                <h4>User Friendly</h4>
                <p>Kemon-market provides quick access to common features and commands. <br> It is well organised, making it easy to locate different tools and options</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Easy Access</h4>
                <p>Kemon-market is a simple website that allows users to easily navigate the site and find informations that really matters.<br> Kemon market have an effective user experience<br></p>
              </div>
              
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Effectiveness</h4>
                <p>Kemon-market is designed to focus around the prospective users to make sure their goals, mental <br> models and requirement are met.</p>
              </div>
              
            </div>

          </div>

        </div>

      </div>
      <!-- <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
          </div>
  
        </div>-->

      </div> 
    </section>

    <!--==========================
      Call To Action Section
    
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> #call-to-action -
    ============================-->
    <!--==========================
      Features Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Agents</h4>
            <p>
             You can earn up to &#x20A6 9500 in Kemon-Market for the businesses you reffered in a week to register. it's our way of appreciation for spreading the good words and increasing the businesses registered on Kemon.
            </p>
            <p>Once we confirm your referral, we are going to sum it up with the number of referral you have for that week then We will pay you at the end of every week if we find any referral for that week. You check your balance at the top right corner of your phone</p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/features-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Become An Agent</h4>
            <p>
             Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Available Templates</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">3 months subscribers</li>
              <li data-filter=".filter-card">6 months subscribers</li>
              <li data-filter=".filter-web">1 year subscribers</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>Phone</p>
                <div>
                  <!-- <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>Desktop</p>
                <div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4><a href="#">Gaint Black-Red</a></h4>
                  <p>Phone</p>
                <div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>Tablet</p>
                <div>
                  <!-- <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4><a href="#">Gaint Black-Red</a></h4>
                  <p>Tablet</p>
                <div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4><a href="#">Gaint Black-Red</a></h4>
                  <p>Laptop</p>
                <div>
                  <!-- <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/Founder.png" class="testimonial-img" alt="">
                <h3>Oluwasusi Stephen Olayemi</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                There is only one boss. The customer. And he can fire everybody in the company from the chairman on down, simply by spending his money somewhere else. <b>We Value You Dear Customer</b>
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/Founder.png" class="testimonial-img" alt="">
                <h3>Amuroko Oluwakemi Joy</h3>
                <h4>Website Developer</h4>
                <p>
                Execellent customer service is the number job in any company! It is the personality of the company and the reason customers come back. Without customers there is no company! <b>We Love You</b>
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/gbengene.jpg" class="testimonial-img" alt="">
                <h3>Tolulope Gbenga Olaoluwa</h3>
                <h4>Freelancer</h4>
                <p>
                People will forget what you said. They will forget what you did. But they will never forget how you made them feel. Never your customers regret patronising you. <b>You Will Be Fine With Us</b>
                </p>
              </div>
              <div class="testimonial-item">
                <img src="img/evelyn.png" class="testimonial-img" alt="">
                <h3>Abimbola Evelyn Boluwatife</h3>
                <h4>UI/UX</h4>
                <p>
                The sole reason we are in business is to make life less difficult for our client (to make it easier). speak simply, explain thoroughly, listen fully respond promptly and break the standard workflow when needed<b><br> Trust me, we got this</b>
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/simple.png" class="testimonial-img" alt="">
                <h3>Oludamiro Ayomide Samuel</h3>
                <h4>Graphic Designer</h4>
                <p>
                Unless you love everybody you cant sell for anybody. We are are ready to give our best to our customers and we will be ecstastic if you ready to take it from us <br><b>we would love to build a long lasting relationship with you</b>
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section>
    <section id="team" class="section-bg">
      
        <div class="section-header">
          <h3>Team</h3>
          <p></p>
        </div>
        <div class="container">
        <div class="section-header">
        </div>
      <div class="row" style="">
        <div class="col-lg-3  wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/Founder.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Oluwasusi Stephen Olayemi</h4>
                  <span>Founder / Web developer</span>
                  <div class="social">
                    <a href="https://twitter.com/oluwasusi_ola?s=09"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/stephanyemmitty"><i class="fa fa-facebook"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=08147702684&text=Hi,%20from%20Kemon-Market.%20my%20name%20is%20"><i class="fa fa-whatsapp"></i></a>
                    <a href="mailto:stephanyemmitty@gmail.com"><i class="fa fa-envelope"></i></a>
                    <a href="tel:08147702684"><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3  wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/gbengene.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                <h4>Tolulope Gbenga Olaoluwa</h4>
                <span>Assistant / Web developer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/olaoluwagbengatophepzz"><i class="fa fa-facebook"></i></a>
                  <a href="https://api.whatsapp.com/send?phone=07068881292&text=Hi,%20from%20Kemon-Market.%20I%20viewed%20your%20page"><i class="fa fa-whatsapp"></i></a>
                  <a href="mailto:tophepzz14@gmail.com"><i class="fa fa-envelope"></i></a>
                  <a href="tel:07068881292"><i class="fa fa-phone"></i></a>
                </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-62 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amuroko Oluwakemi Joy</h4>
                  <span>Assistant / Web developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=08142200548&text=Hi,%20from%20Kemon-Market.%20I%20viewed%20your%20page"><i class="fa fa-whatsapp"></i></a>
                    <a href="mailto:oluwakemijoy12@gmail.com"><i class="fa fa-envelope"></i></a>
                    <a href="tel:08142200548"><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3  wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/evelyn.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Abimbola Boluwatife Evelyn</h4>
                  <span>Assistant / Graphic designer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=08135001120&text=Hi,%20from%20Kemon-Market.%20I%20viewed%20your%20page"><i class="fa fa-whatsapp"></i></a>
                    <a href="mailto:oluwafikemievelyn@gmail.com"><i class="fa fa-envelope"></i></a>
                    <a href="tel:08135001120"><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>#clients -->


    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Plans</h3>
          <br>
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency" style="font-size:25px">&#x20A6</span><span  style="font-size:25px"><?php echo $_SESSION['month3']?></span><span class="period">/3-month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Basic Plan
                </h4>
                <h5 style="font-style:bold;">Access to</h5>
                <ul class="list-group">
                  <li class="list-group-item">2 Brands</li>
                  <li class="list-group-item">6 Products</li>
                  <li class="list-group-item">1 Gib of Storage</li>
                  <li class="list-group-item"></li>
                  <li class="list-group-item"> </li>
                </ul>
                <?php
                if($_SESSION['veri_payment'] == "True"){
                    echo '<a onclick="payPageWithPaystackfor3mth()" class="btn">Choose Plan</a>';
                }else{
                    echo '<a onclick="regPayPageWithPaystack()" class="btn">Choose Plan</a>';
                }
                ?>
              </div>
            </div>
          </div>


                 <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency" style="font-size:25px">&#x20A6</span><span  style="font-size:23px"><?php echo $_SESSION['year1']?></span><span class="period">/1-Year</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Premium Plan
                </h4>
                <h5 style="font-style:bold;">Access to</h5>
                <ul class="list-group">
                  <li class="list-group-item">10 Brands</li>
                  <li class="list-group-item">Unlimited product per brand</li>
                  <li class="list-group-item">Unlimited Storage</li>
                  <li class="list-group-item">Adverisment allowed</li>
                  <li class="list-group-item">Free business registration</li>
                </ul>
                <?php
                if($_SESSION['veri_payment'] == "True"){
                    echo '<a onclick="payPageWithPaystackfor1year()" class="btn">Choose Plan</a>';
                }else{
                    echo '<a onclick="payPageWithPaystackfor1year()" class="btn">Choose Plan</a>';
                }
                ?>
              </div>
            </div>
          </div>


      
          <!-- Regular Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency" style="font-size:25px !important">&#x20A6</span><span  style="font-size:25px"><?php echo $_SESSION['month6']?></span><span class="period">/6-month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Regular Plan
                </h4>
                <h5 style="font-style:bold;">Access to</h5>
                <ul class="list-group">
                  <li class="list-group-item">4 Brands</li>
                  <li class="list-group-item">15 Products</li>
                  <li class="list-group-item">2 Gib of Storage</li>
                  <li class="list-group-item">Adverisment allowed</li>
                  <li class="list-group-item"> </li>
                </ul>
                <?php
                if($_SESSION['veri_payment'] == "True"){
                    echo '<a onclick="payPageWithPaystackfor6mth()" class="btn">Choose Plan</a>';
                }else{
                    echo '<a onclick="regPayPageWithPaystack()" class="btn">Choose Plan</a>';
                }
                ?>
              </div>
            </div>
          </div>
      
         
      
        </div>
      </div>

    </section><!-- #pricing -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          <p>These are frequently asked questions, you can drop your question in the footer section</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">How do I change my login credentials ? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                  Your credentials can be changed in your profile if it has been activated. In otherwords, if you haven't make your payment you can't change any of your login details. After making your payment, consider your account activated then you can find the link in your Profile 
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">What to do before I register my client ? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                  I would advise you to set your <b>Agent Username</b> before any further registration or subsription because that is the only way to recognise you as the referrer. Consequently, we will be able to account for the number of customers you have referred, which will determine the amount you get at the end of the week
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Why do I need a website ?.<i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
              The main reason for having a website is to attract new customers. Therefore, it’s imperative that it displays information on who you are and what you do so as to help potential customers make an informed purchase decision.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">What can I do if I dont have an exact opening hour ?<i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
              Think about it. If you were looking at a website for a business you want to visit, what would you expect to see? Probably some general information, like an address, opening hours and so forth. On top of that you would want to be able to easily find out what that business offers so you can decide if they can help you.
              Not having this information displayed front and centre on your website is the digital equivalent of ignoring a customer when they come in store. Imagine if one of your staff walked away when a customer asked them a direct question. That would probably mean a lost sale and maybe even a lost customer, forever.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">I have low viewers on my website. How can I improve this <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
              Keywords and simple language help search engines work out whether your site is of interest to when customers are looking for information online. The algorithms behind Google and other search engines are pretty smart and they can infer a bit of context from what you’ve got on your website. That being said, they won’t direct people to your site if you haven’t got any content that matches their search topics.
              </p>
            </div>
          </li>
          <!-- <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li> -->

        </ul>

      </div>
    </section><!-- #faq -->

  </main>
  <!--==========================
    Footer
  ============================-->
<?php
    include('js/payment.php');
    include('kem_footer.php')
?>
