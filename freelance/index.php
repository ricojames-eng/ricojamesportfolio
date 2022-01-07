<?php require_once('config.php'); ?>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body>
  <Style>

   header {
   position: relative;
   height: 800px;
   min-height: 500px;
   width: 100%;
   background: #161415 url("profile_asset/images/BG8.gif") no-repeat top center;
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
  </style>
   <!-- Header ================================================== -->
   <header id="home">
      <nav id="nav-wrap">
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
         <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio"> Projects Examples</a></li>
         </ul> <!-- end #nav -->
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
         <div class="banner-text">
            <h1 class="responsive-headline">Welcome! I'm</h1>
            <h1 class="responsive-headline"><?php echo isset($user) ? ucwords($user['firstname'].' '.$user['lastname']) : ""; ?></h1>
            <h3><?php echo stripslashes($_settings->info('welcome_message')) ?></h3>
            <hr />
            <ul class="social">
               <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
              <!-- <li><a target="_blank" href="<?php echo $contact['twitter'] ?>"><i class="fa fa-twitter"></i></a></li> -->
               <li><a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><i class="fa fa-google-plus"></i></a></li>
              <!-- <li><a target="_blank" href="<?php echo $contact['linkin'] ?>"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>
         </div>
      </div>
      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>
   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">
      <div class="row">
         <div class="three columns">
            <img class="profile-pic"  src="<?php echo validate_image($_settings->info('logo')) ?>" alt="" />
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
               </div>
               <div class="columns download">
                  <p>
                     <!-- <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a> -->
                  </p>
               </div>
            </div> <!-- end row -->
         </div> <!-- end .main-col -->
      </div>
   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
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


      <!-- Work
      ----------------------------------------------- -->
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


      <!-- Skills
      ----------------------------------------------- -->
      <!-- <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt.
            </p>

        <div class="bars">

           <ul class="skills">
             <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                  <li><span class="bar-expand illustrator"></span><em>Illustrator</em></li>
            <li><span class="bar-expand wordpress"></span><em>Wordpress</em></li>
            <li><span class="bar-expand css"></span><em>CSS</em></li>
            <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                  <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
          </ul>

        </div>

      </div> 

      </div> 

   </section>
 -->

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




   <!-- Testimonials Section
   ================================================== 
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                           to do what you believe is great work. And the only way to do great work is to love what you do.
                           If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know.
                           </p>
                           <cite>Steve Jobs</cite>
                        </blockquote>
                     </li> <!-- slide ends -->
                     <!--
                     <li>
                        <blockquote>
                           <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                           Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                           nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                           </p>
                           <cite>Mr. Adobe</cite>
                        </blockquote>
                     </li> <!-- slide ends -->
                     <!--
                  </ul>

               </div> <!-- div.flexslider ends -->
               <!--
            </div> <!-- div.flex-container ends -->
            <!--
         </div> <!-- row ends -->
          <!--
       </div>  <!-- text-container ends -->
        <!--
   </section> <!-- Testimonials Section End--> 


  
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
