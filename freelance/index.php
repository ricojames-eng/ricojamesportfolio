<?php require_once('config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto; width: auto;">
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
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 100%;
      padding: 20px;
      text-align: center;

      animation-name: example;
      animation-duration: 4s;
    }

        #bg-text2 {
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0, 0.9); /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;
      position: absolute;
      top: 80%;
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
  </style>
   <!-- Header ================================================== -->
   <header id="home">
      <nav id="nav-wrap">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About Me</a></li>
            <li><a class="smoothscroll" href="#services">Services</a></li>
            <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio"> Projects Examples</a></li>
      </nav> <!-- end #nav-wrap -->
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
            <h2 style="color: Black; font-size: 4vw;" class="neonText">Hi I'm,</h2>
            <br></br>
            <h2 style="color: Black; font-size: 4vw;" class="neonText"><?php echo isset($user) ? ucwords($user['firstname'].' '.$user['lastname']) : ""; ?></h2>
            <br></br>
            <ul class="social">
               <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><i class="fa fa-google-plus"></i></a></li>
           </ul>
         </div>
      </div>

      <div class="banner-text" id="bg-text2">
          <a style="font-size: 2vw;"><span>A Software Developer that helps Businesses, small to large agencies and individual</span></a>
          <a style="font-size: 2vw;"><span>to bring their Software ideas to life. I`ll offer you a life-time investment software application.</span></a>
          <br></br>
          <p class="scrolldown">
          <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
          </p>
      </div>
   </header> <!-- Header End -->
   <!-- About Section
   ================================================== -->
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
             </p>
               </div>
               <!--
                 <div class="columns ">
                 </br></br>
                  <h2>Types of services:</h2>
                  <p class="address">
                  <span><h2><a>- Software Application Development.</a></span><br>
                  <span><h2><a>- Mobile Application Development.</a></span><br>
                  <span><h2><a>- Website Development.</a></span><br>
                  <span><h2><a>- Internet Of Things Development.</a></span><br>
                  <span><h2><a>- Hardware and Software Development.</a></span><br>
                  <span><h2><a>- All types of System Applications.</a></span><br>
                  <span><h2><a>- All types of Software Automation Projects.</a></span><br>
                  <span><h2><a>- All types of Software and Hardware Thesis Projects.</a></span><br>
             </p>
               </div> -->
               <div class="columns download">
                  <p>
                     <!-- <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a> -->
                  </p>
               </div>
            </div> <!-- end row -->
         </div> <!-- end .main-col -->
      </div>
   </section> <!-- About Section End-->

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
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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
         <div class="nine columns main-col">
            <center><h2>OFFER SERVICES</h2></center>
           
           <div class="row1">
            <div class="column1">
              <div class="card1">
                <h3>Software Application Development.</h3>
                <p>Free maintenance.</p>
                <p>Free 2 Days Training</p>
                <p>Free 24/7 Live Chat Support</p>
              </div>
            </div>

              <div class="column1">
              <div class="card1">
                <h3>Mobile Application Development.</h3>
                <p>Android and IOS.</p>
                <p>Free 2 Days Training</p>
                <p>Free 24/7 Live Chat Support</p>
              </div>
            </div>
            </div>

            <br></br>

             <div class="row1">
            <div class="column1">
              <div class="card1">
                <h3>Website Page Development.</h3>
                <p>With Admin page.</p>
                <p>Free 2 Days Training</p>
                <p>Free 24/7 Live Chat Support</p>
              </div>
            </div>

              <div class="column1">
              <div class="card1">
                <h3>Internet Of Things Development.</h3>
                <p>Free repair charge.</p>
                <p>Free 2 Days Training</p>
                <p>Free 24/7 Live Chat Support</p>
              </div>
            </div>
            </div>

             <br></br>

             <div class="row1">
            <div class="column1">
              <div class="card1">
                <h3>Hardware and Software Development.</h3>
                <p>Free repair charge and maintenance.</p>
                <p>Free 2 Days Training</p>
                <p>Free 24/7 Live Chat Support</p>
              </div>
            </div>

              <div class="column1">
              <div class="card1">
                <h3>All types of System Applications.</h3>
                <p>Free maintenance.</p>
                <p>Free 2 Days Training</p>
                <p>Free 24/7 Live Chat Support</p>
              </div>
            </div>
            </div>

               <br></br>

             <div class="row1">
            <div class="column1">
              <div class="card1">
                <h3>All types of Automation Projects.</h3>
                <p>Free repair charge and maintenance.</p>
                <p>Free 2 Days Training</p>
                <p>Free 24/7 Live Chat Support</p>
              </div>
            </div>

              <div class="column1">
              <div class="card1">
                <h3>All types of IT Related Thesis Projects.</h3>
                <p>Free project document.</p>
                <p>Free 2 Days Training</p>
                <p>Free 24/7 Live Chat Support</p>
              </div>
            </div>
            </div>

         </div> <!-- end .main-col -->
      </div>
   </section> <!-- About Section End-->
   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">
      <!-- Education -->
      <div class="row education">
         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>
         <div class="nine columns main-col">
          <?php 
          $e_qry = $conn->query("SELECT * FROM education order by year desc, month desc");
          while($row = $e_qry->fetch_assoc()):
          ?>
            <div class="row item">
               <div class="twelve columns">
                  <h3><?php echo $row['school'] ?></h3>
                  <p class="info"><?php echo $row['degree'] ?> <span>&bull;</span> <em class="date"><?php echo $row['month'].' '.$row['year'] ?></em></p>
                  <p>
                  <?php echo stripslashes(html_entity_decode($row['description'])) ?>
                  </p>
               </div>
            </div> <!-- item end -->
          <?php endwhile; ?>        
         </div> <!-- main-col end -->
      </div> <!-- End Education -->


      <!-- Work -->
      <div class="row work">
         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">
          <?php 
          $w_qry = $conn->query("SELECT * FROM work ");
          while($row = $w_qry->fetch_assoc()):
          ?>
            <div class="row item">
               <div class="twelve columns">
                  <h3><?php echo $row['company'] ?></h3>
                  <p class="info"><?php echo $row['position'] ?> <span>&bull;</span> <em class="date"><?php echo str_replace("_"," ",$row['started']) ?> - <?php echo str_replace("_"," ",$row['ended']) ?></em></p>               
                  <p><?php echo stripslashes(html_entity_decode($row['description'])) ?></p>
               </div>
            </div> <!-- item end -->
          <?php endwhile; ?>
         </div> <!-- main-col end -->
      </div> <!-- End Work -->


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


      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
