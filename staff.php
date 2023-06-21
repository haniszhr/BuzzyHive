<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Hive Marketing </title>
<link rel="stylesheet" type="text/css" href="css/master.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="shortcut icon" href="images/short_icon.png">
<link rel="stylesheet" href="custom.css">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<style>

.timeline-item:nth-child(1) .timeline-img-header {
  background:  linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/1s.png") center center no-repeat !important;
  background-size: cover;
}
.timeline-item:nth-child(2) .timeline-img-header {
  background:  linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)),url("images/two.png") center center no-repeat !important;
  background-size: cover;
}
.timeline-item:nth-child(3) .timeline-img-header {
  background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)),url("images/three.png") center center no-repeat !important;
  background-size: cover;
}
.timeline-img-header h2 {
  color:white;

}
.main-title {

    padding: 60px 200px !important;

}


.timeline{

background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url("images/offis.png") no-repeat scroll 100% 100% / cover;;
}
  
  .timeline-img {
  width: 30px;
  height: 30px;
  background: rgb(248, 157, 10) !important;}

  .date {
  background:rgb(248, 157, 10) !important;}


#main-banner {
    background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("images/about2.png") no-repeat scroll 100% 100% / cover;
    max-height: 100%;
}
#main-slider .prev:hover,
#main-slider .next:hover {
    background-color: rgb(248, 157, 10)!important;
    border: 1px solid rgb(248, 157, 10)!important;
}  
.slider-text {
    border-left: 5px solid rgb(248, 157, 10)!important;
}
.button-normal.yellow {
    background-color: rgb(248, 157, 10)!important;
}
.property-list-list {
    border-top: 3px solid rgb(248, 157, 10)!important;
}
.property-list-list-info a > h3:hover {
    color: rgb(248, 157, 10)!important;
}
.property-list-list .property-list-list-label::before {
    border-right: 17px solid #ed2a28;
}
.multiple-recent-properties label {
    background-color: rgb(248, 157, 10)!important;
}
.property-list-list ul li.right span {
    background-color: rgb(248, 157, 10)!important;
}
.property-list-list .property-list-list-label::before {
    border-right: 17px solid rgb(248, 157, 10)!important;
}
.property-list-list label {
    background-color:rgb(248, 157, 10)!important;
}

</style>
<body>



<?php session_start();?>
<!--===== HEADER =====-->
<header id="main_header">

  <!--===== HEADER TOP =====-->
  <div id="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <p class="p-font-15 p-white">Buzzy Hive Website</p>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 text-right">
          <div class="header-top-links">
            <ul>
              <li><a href="logoutstaff.php" class="header-login2" style="background:rgb(248, 157, 10);  padding: 13px 20px 11px;
    margin-left: 12px;color:black"><i class="icon-icons179"></i>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== #/HEADER TOP =====--> 

  <!--===== HEADER BOTTOM =====-->
  <div id="header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-2 hidden-xs hidden-sm"><a href="staffmenu.php"><img src="images/HIVE.png" alt="logo" style="width:200px"/></a></div>
        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="get-tuch text-left top20">
            <i class="icon-telephone114"></i>
            <ul>
              <li>
                <h4>Phone Number</h4>
              </li>
              <li>
                <p>+603-7625 9565</p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="images/get-tuch-line.png" alt="line"/></div>
          <div class="get-tuch text-left top20">
            <i class="icon-icons74"></i>
            <ul>
              <li>
                <h4>Infinity Tower,</h4>
              </li>
              <li>
                <p> 47301 Petaling Jaya, Selangor, Malaysia</p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="images/get-tuch-line.png" alt="line"/></div>
          <div class="get-tuch text-left top20">
            <i class=" icon-icons142"></i>
            <ul>
              <li>
                <h4>Email Address</h4>
              </li>
              <li>
                <p><a href="#">enquiry@hive-asia.com</a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== #/HEADER BOTTOM =====--> 
<!-----------------------------NAV BAR ------------------------------------------------->

<nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i></button>
            <a class="navbar-brand" href="index-4.php"><img src="images/logo-white.png" class="logo_eig" alt=""></a>
          </div> <!-- End Header Navigation --> 

          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right"data-in="fadeInDown" data-out="fadeOutUp">
             <!-- <li class="nav-tabs active" >
                <a href="hrmenu.php" >Home</a>
-->   </li>
              
         <li class="dropdown active" >
                <a href="staff.php" class="dropdown-toggle header-login" >Home</a>
               
                <ul class="dropdown-menu"  >
                  <li class="active"> <a href="staff.php" >Home</a></li>
                  <li>
                  <a href="staffprofile.php" >My Profile</a>
               </li>  </ul>   </li>

              <li class="dropdown" >
                <a href="taskstaff.php" class="dropdown-toggle header-login" >Task</a>
               
                <ul class="dropdown-menu"  >
                  <li> <a href="taskstaff.php" >Assign Task</a></li>
                  <li>
                  <a href="stafftask.php" >My Task</a>
               </li>  </ul>    </li>

            
              <li class="nav-tabs">
                <a href="applyleave2.php" >Apply Leave</a>   </li>  </ul>  </div>

        </div>
      </div>
    </div>
  </nav>






  <!--===== NAV-BAR =====-->

  <!--===== #/NAV-BAR =====--> 



</header>
<!--===== #/HEADER =====-->  

<!--welcome-->



<section id="main-banner" class="parallaxie">
  <div class="main-banner-img"> </div>
  <div class="slider-text-wrap vertical-center">
    <div class="container">
      <div class="row">
        <div class="col-md-8  col-sm-8">
          <div class="slider-text wow fadeIn animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
            <h2 class="wow fadeInLeft animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInLeft;">Welcome to Buzzy Hive </h2>
            <p class="wow fadeIn animated" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">Let's start our day!</p>
            <h3 class="wow fadeIn animated" data-wow-delay="2s" style="visibility: visible; animation-delay: 2s; animation-name: fadeIn;">Good day <?php echo $_SESSION['name'];?></h3>
            <a href="#ourtime" class="button-normal yellow wow fadeIn animated" data-wow-delay="2.5s" style="visibility: visible; animation-delay: 2.5s; animation-name: fadeIn;">Let's check announcement board</a> </div>
        </div>
      
      </div>
    </div>
  </div>
</section>



<!-- ABOUT US -->
<section id="about_us" class="about-us padding">
  <div class="container">
    <div class="row">
      <div class="history-section">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2 class="text-uppercase">Company <span style="color:rgb(248, 157, 10)">overview</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
          <p class="top20 bottom40">WE ARE a O2O marketing partner that started in 1994. We have grown organically along with the new rapidly expanding digital marketing ecosystem. Today, we find ourselves in a unique position to offer a combination of traditional brick and mortar sales and marketing services, together with a full suite of digital marketing services.</p>
          <p class="top20 bottom40">WE LEAD in harvesting and unraveling data from both online and offline platforms, in order to deliver deeper understanding, make better connections and optimize business conversion</p>
         
          <a class="link_arrow dark_border top40" href="https://www.hive-asia.com/" style=" background:  rgb(248, 157, 10);border:0px;color:white">Read More</a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="about_single" class="owl-carousel">
            
            <div class="item">
              <div class="content-right-md">
                <figure class="effect-layla">
                  <img src="images/about.png" alt="img"/>
                  <figcaption> </figcaption>
                </figure>
              </div>
            </div>
            <div class="item">
              <div class="content-right-md">
                <figure class="effect-layla">
                  <img src="images/about2.png" alt="img"/>
                  <figcaption> </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- #/ABOUT US -->

<!-- Counter Section -->


<!--ANNOUNCEMENT 2ND CHOICE-->
<!--<div class="col-md-6 col-sm-6 col-xs-12" ><center>
          <h2 id="display" class="text-uppercase">Latest <span style="color:rgb(248, 157, 10)">announcement</span></h2></div></center>-->
<!--===== Timeline =====-->

<!--===== PAGE TITLE =====-->

<!--===== #/PAGE TITLE =====-->

<!--===== Timeline =====-->
<!--===== #/Timeline =====-->

<!--announce-->




<!--===== #/Timeline =====-->
<section class="timeline padding"> 
  <div class="container">
<div class="col-md-12 bottom20"  id="ourtime">
       <h2 class="text-uppercase" style="color:white">Latest <span  style="color:rgb(248, 157, 10)">Announcement</span></h2>
  
   
     </div></div>
<div class="container">

   <?php

      $con=new mysqli("localhost","root","","employees");
      if($con->connect_error){
          echo'Connect Failed '.$con->connect_error;
      }else{
       $sql2="SELECT announce.Date,announce.Title,announce.Description,staff.Name,announce.dedicate FROM announce JOIN staff on staff.StaffId=announce.StaffId WHERE announce.id=(SELECT max(id) FROM announce) ";
          $res2=$con->query($sql2);
          if($res2->num_rows > 0){    while($row=$res2->fetch_assoc()){       
           $date=$row['Date'];
           $title=$row['Title'];
           $desc=$row['Description']; $d=$row['dedicate'];
           $name=$row['Name'];?>

   <div class="timeline-item"  id="an1">

     <div class="timeline-img"></div>
  
     <div class="timeline-content timeline-card js--fadeInLeft">
       <div class="timeline-img-header">
       <h2><?php echo $title?></h2>
       </div>

       <div class="date"><?php echo $date?></div> 
      
    
           <ul style="margin-left:20px">
             <li class="left"><i class="icon-profile-male" aria-hidden="true"></i> By : <?php echo $name?></li>
        <li class="left" style="margin-left:25px"> To : <?php echo $d ?></li>
           </ul>
      
       <p class="left"><?php echo $desc?></p><?php }}}?>
   
     </div>
   </div>   
         

   

   <?php
      $con=new mysqli("localhost","root","","employees");
      if($con->connect_error){
          echo'Connect Failed '.$con->connect_error;
      }else{
       $sql2="SELECT * 
          FROM announce WHERE id=(SELECT max(id)-1 FROM announce)";
          $res2=$con->query($sql2);
          if($res2->num_rows > 0){    while($row=$res2->fetch_assoc()){       
           $date=$row['Date'];
           $title=$row['Title'];
           $desc=$row['Description'];?>
   <div class="timeline-item" id="an2">

     <div class="timeline-img"></div>

     <div class="timeline-content timeline-card js--fadeInRight">
       <div class="timeline-img-header">
         <h2><?php echo $title?></h2>
       </div>
       <div class="date"><?php echo $date?></div>
       
       <ul style="margin-left:20px">
             <li class="left"><i class="icon-profile-male" aria-hidden="true"></i> By : <?php echo $name?></li><li class="left" style="margin-left:25px"> To : <?php echo $d ?></li>
     
           </ul>
          
       <p><?php echo $desc?></p><?php }}}?>     
     </div>
   </div>  
          


   <?php
      $con=new mysqli("localhost","root","","employees");
      if($con->connect_error){
          echo'Connect Failed '.$con->connect_error;
      }else{
       $sql2="SELECT * 
          FROM announce WHERE id=(SELECT max(id)-2 FROM announce)";
          $res2=$con->query($sql2);
          if($res2->num_rows > 0){    while($row=$res2->fetch_assoc()){       
           $date=$row['Date'];
           $title=$row['Title'];
           $desc=$row['Description'];?>
   <div class="timeline-item" id="an3">

     <div class="timeline-img"></div>

     <div class="timeline-content timeline-card js--fadeInRight">
       <div class="timeline-img-header">
         <h2><?php echo $title?></h2>
       </div>
       <div class="date"><?php echo $date?></div>
       <ul style="margin-left:20px">
             <li class="left"><i class="icon-profile-male" aria-hidden="true"></i> By : <?php echo $name?></li><li class="left" style="margin-left:25px"> To : <?php echo $d ?></li>
     
           </ul>
       <p><?php echo $desc?></p><?php }}}?> 
     </div>
   </div>  




 </div>
</section>

<!--ANNOUNCEMENT 2ND CHOICE-->


<!--Footer-->


<!-- FOOTER -->
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
  <div class="container pt-70 pb-40">
  
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <img class="mt-5 mb-20" alt="" src="images/logo.png">
          <p>Menara Infiniti, Jalan SS6/3, 47301 Petaling Jaya, Selangor, Malaysia</p>
          <ul class="list-inline mt-5">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">+603-7625 9565</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">enquiry@hive-asia.com</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">https://www.hive-asia.com/</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title">Quick Links</h4>
          <div class="small-title">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="clearfix"></div>
          </div>
          <ul class="list angle-double-right list-border">
            <li> <a href="#.">Home </a></li>
            <li> <a href="#.">View Design</a></li>
            <li> <a href="#.">Add Task</a></li>
            <li> <a href="#.">Apply Leaves</a></li>
            
          </ul>
        </div>
      </div>
   
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title">Opening Hours</h4>
          <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
          <div class="opening-hourse">
            <ul class="list-border">
              <li class="clearfix">
                <span> Mon - Friday : </span>
                <div class="value pull-right"> 10.00 am - 6.30 pm </div>
              </li>
         
              <li class="clearfix">
                <span> Sat-Sun : </span>
                <div class="value pull-right"> Closed </div>
              </li>
            </ul>
          </div>
       
        </div>
      </div>
    </div>
  

   
    </div>
  </div>
  <div class="footer-bottom bg-black-333">
    <div class="container">
      <div class="row">
      <div class="col-md-6 col-sm-5">
          <p class="font-11 text-black-777 m-0 copy-right">Copyright: 2022 <a href="#."><span style=" color:  rgb(248, 157, 10) ">Hive Marketing</span></a>. All Rights Reserved</p>
        </div>
      </div>
    </div>

</footer>
<!-- FOOTER --> 


<!--===== REQUIRED JS =====--> 
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootsnav.js"></script>

<!--To View on scroll-->
<script src="js/jquery.appear.js"></script>
 
<!--Owl Slider-->
<script src="js/owl.carousel.min.js"></script>

<!--Parallax-->
<script src="js/parallaxie.js"></script>

<!--Fancybox-->
<script src="js/jquery.fancybox.min.js"></script> 

<!--Cube Gallery-->
<script src="js/cubeportfolio.min.js"></script> 

<!--Bootstrap Dropdown-->
<script src="js/bootstrap-select.js"></script>

<!--Video Popup-->
<script src="js/videobox/video.js"></script>

<!--Datepicker-->
<script src="js/datepicker.js"></script> 

<!--Dropzone-->
<script src="js/dropzone.min.js"></script>

<!--Wow animation-->
<script src="js/wow.min.js"></script>

<!--Rang Slider-->
<script src="js/range-Slider.min.js"></script> 

<!--Checkbox-->
<script src="js/selectbox-0.2.min.js"></script> 

<!--Checkbox-->
<script src="js/scrollreveal.min.js"></script> 

<!--Checkbox-->
<script src="js/jquery-countTo.js"></script> 

<!--Checkbox-->
<script src="js/jquery.typewriter.js"></script> 

<!--Checkbox-->
<script src="js/death.min.js"></script>

<!--Revolution Slider-->
<script src="js/themepunch/jquery.themepunch.tools.min.js"></script>
<script src="js/themepunch/jquery.themepunch.revolution.min.js"></script>   
<script src="js/themepunch/revolution.extension.layeranimation.min.js"></script> 
<script src="js/themepunch/revolution.extension.navigation.min.js"></script> 
<script src="js/themepunch/revolution.extension.parallax.min.js"></script> 
<script src="js/themepunch/revolution.extension.slideanims.min.js"></script> 
<script src="js/themepunch/revolution.extension.video.min.js"></script>

<!--Custom Js -->
<script src="js/functions.js"></script>

<!--Maps & Markers-->
<script src="js/form.js"></script> 
<script src="js/custom-map.js"></script> 
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="js/gmaps.js"></script>
<script src="js/contact.js"></script> 
<!--===== #/REQUIRED JS =====-->

</body>
</html>

