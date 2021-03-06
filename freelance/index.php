<?php require_once('config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body>
  <Style>
   header {
   position: relative;
   height: 800px;
   min-height: 500px;
   width: 100%;
   background: #161415 url("profile_asset/images/WB71.jpg") no-repeat top center;
   background-size: cover !important;
  -webkit-background-size: cover !important;
   text-align: center;
   overflow: hidden;
    }

    /* vertically center banner section */
    header:before {
       content: '';
       display: inline-block;
       vertical-align: middle;
       height: 100%;
    }

    #bg-text {
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0, 0.2); /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 100%;
      padding: 20px;
      text-align: center;
      white-space: normal;
      animation-name: example;
      animation-duration: 4s;
    }

        #bg-text2 {
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0, 0.7); /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;
      position: absolute;
      top: 77%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 100%;
      padding: 20px;
      text-align: center;
      animation-name: example2;
      animation-duration: 8s;
    }
     

      .neonText {
       color: #fff;
       text-shadow:
       0 0 7px #fff,
       0 0 10px #fff,
       0 0 21px #fff,
       0 0 42px #5271ff,
       0 0 82px #5271ff,
       0 0 92px #5271ff,
       0 0 102px #5271ff,
       0 0 151px #5271ff;
       font-weight: 400;
       font-family: "Yellowtail", sans-serif;

  }

  .neonText2 {
       color: #fff;
       text-shadow:
       0 0 7px #fff,
       0 0 10px #fff,
       0 0 21px #fff,
       0 0 42px #5271ff,
       0 0 82px #5271ff,
       0 0 92px #5271ff,
       0 0 102px #5271ff,
       0 0 151px #5271ff;
       font-weight: 400;
       font-family: "Yellowtail", sans-serif;
  }

  @keyframes example {
  0%   {top:0%;}
  25%  {top:50%;}
}

  @keyframes example2 {
  0%   {top:0%;}
  25%  {top:25%;}
  }

}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 13px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
  </style>
   <!-- Header ================================================== -->
    <div class="topnav">
            <center><a class="current"><a class="smoothscroll" href="#home">Home</a>
            <a class="smoothscroll" href="#me">About Me</a>
            <a class="smoothscroll" href="#services">Services</a>
            <a class="smoothscroll" href="#resume">Projects</a></center>
          <!--  <a class="smoothscroll" href="#portfolio">Examples</a> -->
    </div>
  <header id="home">
<?php 
$u_qry = $conn->query("SELECT * FROM users where id = 1");
foreach($u_qry->fetch_array() as $k => $v){
  if(!is_numeric($k)){
    $user[$k] = $v;
  }
}
$c_qry = $conn->query("SELECT * FROM contacts");
while($row = $c_qry->fetch_assoc()){
    $contact[$row['meta_field']] = $row['meta_value'];
}
// var_dump($contact['facebook']);
?>

      <div class="row banner">
         <div class="banner-text" id="bg-text">
          <br></br>
            <h2 style="color: Black; font-size: 6vw; line-height : 7vw;" class="neonText">Hi I'm,</h2>
            <center><a class="neonText" style="font-size: 6vw;"><span style="color:Black;font-weight:Italic;font-size: 6vw; line-height : 7vw;">ENGR.RICO JAMES BRILLANTES QUIRANTE</span></a></center>
         </div>
      </div>

      <div class="banner-text" id="bg-text2" >
          <a style="font-size: 3vw;"><span>A Software Developer Engineer that helps businesses, small to large agencies, and individuals </span></a>
          <a style="font-size: 3vw;"><span>to bring their Software ideas to life. I`ll offer you an affordable <span class="neonText" style="color:White;font-weight:Italic;font-size:3vw;">lifetime investment</span> software application.</span></a>
          <br></br>
          <a class="smoothscroll" href="#about">READ MORE</a>
          <br></br>
          <p class="scrolldown">
          <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
          </p>
      </div>
   </header> <!-- Header End -->

<!-- Offer Section
   ================================================== -->
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column1 {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}


/* Float four columns side by side */
.column2 {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row2 {margin: 0 -5px;}

/* Clear floats after the columns */
.row2:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column2 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>

   <section id="services">
   <section id="about">
      <div class="row">
         <div class="three columns">
            <img class="profile-pic"  src="profile_asset/images/services.jpg" alt="" />
         </div>

         <div class="nine columns main-col" style="text-align: justify;">
            <center><a class="neonText" style="font-size: 34px;"><span style="color:White;font-weight:Italic;font-size: 34px;">WHY YOU MUST HAVE A SOFTWARE SYSTEM?</span></a></center>

            <a style="font-size: 18px;">
              <span style="color:White;font-weight:bold;font-size:24px;">Softwares</span> come with the capability of 
              <span style="color:White;font-weight:bold">automating several processes</span> 
              which are otherwise complex and time-consuming to be done manually.
              Choosing the right software can help businesses or individuals grow by 
            <span style="color:White;font-weight:bold">leaps</span> and
            <span style="color:White;font-weight:bold">bounds</span>.</a>

            <br></br>
            <a style="font-size: 18px;">This will
              <span style="color:White;font-weight:bold;font-size:22px;">improve</span> the
              <span style="color:White;font-weight:bold;font-size:22px;">efficiency</span>
               and
              <span style="color:White;font-weight:bold;font-size:22px;">effectiveness</span> 
              of the user's activities. The Software 
              <span style="color:White;font-weight:bold;font-size:22px;">reduces</span> the
              <span style="color:White;font-weight:bold;font-size:22px;">workload</span> and
              <span style="color:White;font-weight:bold;font-size:22px;">automation</span> of
              <span style="color:White;font-weight:bold;font-size:22px;">activities</span>
              .
              It also assists in the  
              <span style="color:White;font-weight:bold;font-size:22px;">elimination</span> of
              <span style="color:White;font-weight:bold;font-size:22px;">human error</span>
              , as a result, 
              <span style="color:White;font-weight:bold;font-size:22px;">improves effectiveness</span> and 
              <span style="color:White;font-weight:bold;font-size:22px;">consistency</span>.</a>

              <br></br>
              <center><a class="neonText" style="font-size:  34px;"><span style="color:White;font-weight:Italic;font-size: 34px;">WHAT CAN I OFFER?</span></a></center>
              <a style="font-size: 18px;">
                I can offer you an 
                <span class="neonText" style="color:White;font-weight:Italic;font-size:22px;">affordable</span>
                yet 
                <span class="neonText" style="color:White;font-weight:Italic;font-size:22px;">competitive fully customized</span>
                <span class="neonText" style="color:White;font-weight:Italic;font-size:22px;">software product</span> that is 
                based 
                on what you 
                <span class="neonText" style="color:White;font-weight:Italic;font-size:22px;">need</span> and 
                <span class="neonText" style="color:White;font-weight:Italic;font-size:22px;">desire</span>.
                Below are the available services that I offer.
              </a>

              <br></br>
           <center><a class="neonText" style="font-size:  34px;"><span style="color:Black;font-weight:Italic;font-size: 34px;">AVAILABLE SERVICES</span></a></center>
              <div class="row1">
            <div class="column1">
              <div class="card1">
                <img class="profile-pic"  src="profile_asset/images/icon/Software_dev.jpg" alt="" />
                <h3>Software Application Development.</h3>
                <p>Free Software Maintenance.</p>
                <p>Free 2 Days Training.</p>
                <p>Free 24/7 Live Chat Support.</p>
              </div>
            </div>

              <div class="column1">
              <div class="card1">
                <img class="profile-pic"  src="profile_asset/images/icon/mobile_dev.jpg" alt="" />
                <h3>Mobile Application Development.</h3>
                <p>Both Android and IOS.</p>
                <p>Free 2 Days Training.</p>
                <p>Free 24/7 Live Chat Support.</p>
              </div>
            </div>
            </div>

            <br></br>

             <div class="row1">
            <div class="column1">
              <div class="card1">
                <img class="profile-pic"  src="profile_asset/images/icon/web_dev.jpg" alt="" />
                <h3>Website Page Development.</h3>
                <p>Free Web page Maintenance.</p>
                <p>Free 2 Days Training.</p>
                <p>Free 24/7 Live Chat Support.</p>
              </div>
            </div>

              <div class="column1">
              <div class="card1">
                <img class="profile-pic"  src="profile_asset/images/icon/iot_dev.jpg" alt="" />
                <h3>Internet Of Things Development.</h3>
                <p>Free Repair Charge.</p>
                <p>Free 2 Days Training.</p>
                <p>Free 24/7 Live Chat Support.</p>
              </div>
            </div>
            </div>

             <br></br>

             <div class="row1">
            <div class="column1">
              <div class="card1">
                <img class="profile-pic"  src="profile_asset/images/icon/softhard_dev.jpg" alt="" />
                <h3>Hardware and Software Development.</h3>
                <p>Free Repair Charge and Maintenance.</p>
                <p>Free 2 Days Training.</p>
                <p>Free 24/7 Live Chat Support.</p>
              </div>
            </div>

              <div class="column1">
              <div class="card1">
                <img class="profile-pic"  src="profile_asset/images/icon/sys_dev.jpg" alt="" />
                <h3>All types of System Applications.</h3>
                <p>Free System Maintenance.</p>
                <p>Free 2 Days Training.</p>
                <p>Free 24/7 Live Chat Support.</p>
              </div>
            </div>
            </div>

               <br></br>

             <div class="row1">
            <div class="column1">
              <div class="card1">
                <img class="profile-pic"  src="profile_asset/images/icon/automation_dev.jpg" alt="" />
                <h3>All types of Automation Projects.</h3>
                <p>Free Repair Charge and Maintenance.</p>
                <p>Free 2 Days Training.</p>
                <p>Free 24/7 Live Chat Support.</p>
              </div>
            </div>

              <div class="column1">
              <div class="card1">
                <img class="profile-pic"  src="profile_asset/images/icon/thesis_dev.jpg" alt="" />
                <h3>All types of IT Related Thesis Projects.</h3>
                <p>Free Project Revision.</p>
                <p>Free 2 Days Training.</p>
                <p>Free 24/7 Live Chat Support.</p>
              </div>
            </div>
            </div>

         </div> <!-- end .main-col -->
      </div>
   </section> <!-- About Section End-->
   </section> <!-- About Section End-->

      <section id="resume">
      <div class="">
         <div class="twelve columns collapsed">
          <br></br>
            <center><h1 style="font-size:4vw;"> Done Projects </h1></center>
            <br></br>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="">
               <?php 
                  $w_qry = $conn->query("SELECT * FROM work ");
                  while($row2 = $w_qry->fetch_assoc()):
                  ?>
                  <div class="column2">
                    <div class="card2">
                    <div class="item-wrap">
                       <a href="#modal-<?php echo $row2['id'] ?>" title="">                  
                          <center><?php echo $row2['company'] ?></center>
                          <div class="overlay">
                             <div class="portfolio-item-meta">
                            <center><h5 class="truncate-1"><?php echo $row2['title'] ?></h5></center>
                                <!-- <p>Illustrration</p> -->
                            </div>   
                          <div class="link-icon"><center><a href="#modal-<?php echo $row2['id'] ?>" class="icon-plus">VIEW INFORMATION</a></center></div>
                       </a>
                        </div> <!-- CARD1 -->
                      </div>   <!-- COLUMN1 -->
                   </div>
                </div> <!-- item end -->
              <?php endwhile; ?>
            </div> <!-- portfolio-wrapper end -->
         </div> <!-- twelve columns end -->

                   <?php 
              $w_qry = $conn->query("SELECT * FROM work ");
              while($row2 = $w_qry->fetch_assoc()):
            ?>

         <!-- Modal Popup -->
         <div id="modal-<?php echo $row2['id'] ?>" class="popup-modal mfp-hide">
          <div class="description-box">
            <h1><?php echo $row2['title'] ?></h1>
            <p><?php echo stripslashes(html_entity_decode($row2['company'])) ?></p>
               <span class="categories"><i class="fa fa-tag"></i><?php echo stripslashes(html_entity_decode($row2['description'])) ?></span>
          </div>
            <div class="link-box">
               <!-- <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a> -->
             <a class="popup-modal-dismiss">Close</a>
            </div>
        </div><!-- modal-01 End -->
      <?php endwhile; ?>
      </div> <!-- row End -->
  </section>


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">
      <div class="row">
         <div class="twelve columns collapsed">
            <h1>SOME INSIGHT OF SOFTWARE SYSTEM AND WEBSITE THAT I OFFER.</h1>
            <h1>CLICK IMAGE TO VIEW DESCRIPTIONS.</h1>
            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="">
               <?php 
                  $p_qry = $conn->query("SELECT * FROM project ");
                  while($row = $p_qry->fetch_assoc()):
                  ?>
                 <div class="columns portfolio-item">
                    <div class="item-wrap">
                       <a href="#modal-<?php echo $row['id'] ?>" title="">
                          <img alt="" src="<?php echo validate_image($row['banner']) ?>">
                          <div class="overlay">
                             <div class="portfolio-item-meta">
                            <h5 class="truncate-1"><?php echo $row['name'] ?></h5>
                                <!-- <p>Illustrration</p> -->
                         </div>
                          </div>
                          <div class="link-icon"><i class="icon-plus"></i></div>
                       </a>
                    </div>
                </div> <!-- item end -->
              <?php endwhile; ?>
            </div> <!-- portfolio-wrapper end -->
         </div> <!-- twelve columns end -->


          <?php 
              $p_qry = $conn->query("SELECT * FROM project ");
              while($row = $p_qry->fetch_assoc()):
            ?>

         <!-- Modal Popup -->
         <div id="modal-<?php echo $row['id'] ?>" class="popup-modal mfp-hide">
          <img class="scale-with-grid" src="<?php echo validate_image($row['banner']) ?>" alt="" />
          <div class="description-box">
            <h4><?php echo $row['name'] ?></h4>
            <p><?php echo stripslashes(html_entity_decode($row['description'])) ?></p>
               <span class="categories"><i class="fa fa-tag"></i><?php echo $row['client'] ?></span>
          </div>
            <div class="link-box">
               <!-- <a href="http://srikrishnacommunication.com/Giridesigns.html" target="_blank">Details</a> -->
             <a class="popup-modal-dismiss">Close</a>
            </div>
        </div><!-- modal-01 End -->
      <?php endwhile; ?>
      </div> <!-- row End -->
   </section> <!-- Portfolio Section End-->

 <style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
     <!-- About Section
   ================================================== -->
   <section id="me">
   <section id="about">
      <div class="row">
         <div class="three columns">
            <img class="profile-pic"  src="profile_asset/images/mypic.png" alt="" />
         </div>
         <div class="nine columns main-col">
            <h2>About Me</h2>
            <style>
              #about_me *{
                color:#7A7A7A !important;
              }
            </style>
            <div id="about_me"><?php include "about.html"; ?></div>
            <div class="row">
               <div class="columns ">
                  <h2>Contact Details</h2>
                  <p class="address">
                  <span><a>Address: </a><a><?php echo $contact['address'] ?></a></span><br>
                  <span><a>Contact #: </a><a><?php echo $contact['mobile'] ?></a></span><br>
                  <span><a>Email Add: </a><a><?php echo $contact['email'] ?></a></span>
                    <ul class="social">
                  <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i class="fa fa-facebook"> MY FACEBOOK</i></a></li>
                  <li><a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><i class="fa fa-google-plus"> EMAIL ME</i></a></li>
                 </ul>
                  <br></br>
             </p>
               </div>
               <div class="columns download">
                  <p></p>
               </div>
            </div> <!-- end row -->
         </div> <!-- end .main-col -->

          <form action="message.php" method="POST">
              <center><h2>LEAVE A MESSAGE</h2></center>
              <label for="fname" style="color:White;">Full name</label>
              <input type="text" id="fname" name="firstname" placeholder="" required>

              <label for="add" style="color:White;">Address</label>
              <input type="text" id="add" name="address" placeholder="" required>

              <label for="cont" style="color:White;">Contact Information</label>
              <input type="text" id="cont" name="contact" placeholder="Cellphone # / Email Address" required>

              <label for="organiz" style="color:White;">Organization</label>
              <input type="text" id="organiz" name="organization" placeholder="Ex. Business Name" required>

              <label for="stype" style="color:White;">Software Type</label>
              <select id="stype" name="softwaretype" required>
                <option value="Business">Business</option>
                <option value="Personal">Personal</option>
                <option value="Educational">Educational</option>
              </select>

              <label for="ssize" style="color:White;">Software size</label>
              <select id="ssize" name="softwaresize" required>
                <option value="Small">Small</option>
                <option value="Large">Large</option>
              </select>

              <label for="subject" style="color:White;">Subject</label>
              <textarea id="subject" name="subject" placeholder="Inquire something..." style="height:200px" required></textarea>

            <center><input type="submit" value="Submit"></center>
          </form>

      </div>
   </section> <!-- About Section End-->
 </section>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
