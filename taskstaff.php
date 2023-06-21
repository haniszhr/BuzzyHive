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
<?php
session_start();

 ?>
<style>
table.table td a {
 width:20px;
}
#nav_slider .owl-prev:hover,
#nav_slider .owl-next:hover,
#listing_slider .owl-next:hover,
#listing_slider .owl-prev:hover,
#property-listing-slider .owl-prev:hover,
#property-listing-slider .owl-next:hover,
#property-2-slider .owl-prev:hover,
#property-2-slider .owl-next:hover,
#property-d-1 .owl-prev:hover,
#property-d-1 .owl-next:hover,
#property-1-slider .owl-prev:hover,
#property-1-slider .owl-next:hover,
#agent-2-slider .owl-prev:hover,
#agent-2-slider .owl-next:hover,
#agent-3-slider .owl-next:hover,
#agent-3-slider .owl-next:focus,
#agent-3-slider .owl-prev:hover,
#agent-3-slider .owl-prev:focus {
    background: rgb(248, 157, 10)!important;
}
#listing_slider .owl-next:hover,
#listing_slider .owl-prev:hover,
#property-listing-slider .owl-prev:hover,
#property-listing-slider .owl-next:hover,
#property-2-slider .owl-prev:hover,
#property-2-slider .owl-next:hover,
#property-d-1 .owl-prev:hover,
#property-d-1 .owl-next:hover,
#property-1-slider .owl-prev:hover,
#property-1-slider .owl-next:hover,
#agent-2-slider .owl-prev:hover,
#agent-2-slider .owl-next:hover {
    border-color: rgb(248, 157, 10)!important;
}

.link_arrow:hover::after,
.link_arrow:focus::after {
    color:  rgb(248, 157, 10)!important;
}
   .image-round span {
    background: rgb(248, 157, 10) !important;
  } 
.property_meta {
    background: rgb(248, 157, 10) !important;
}
.property_meta {
    width: 100%;
    padding: 3px;
    text-align: left !important;
    position: relative;
}
.property_meta span {
    color: #fff;
    display: inline-block;
    font-size: 30px !important;
    padding: 3px 10px;
}

.property_meta > h2 {
   color:white !important;
   padding:5px 10px !important;
}
.btn_fill{
    border:none !important;
    padding:12px 5px !important;
 
}
.btn_fill:hover,.btn_fill:focus,
{width:10px;
 
    border:none !important;
}
input[value="Approved"].btn_fill:hover {
  border: 1px solid black;
  background:#28edcc !important;
} 
input[value="Pending"].btn_fill:hover {
  border: 1px solid black;
  background:#89949d!important;
} 
input[value="Rejected"].btn_fill:hover {
  border: 1px solid black;
  background:#ed2a28!important;
} 
a.btn_fill{
 padding-left:35px !important; padding-right:35px !important;
}
input[type="text"]{
  padding-left:5px !important;  padding-right:5px !important;
}
.main-title h1{
  color:rgb(248, 157, 10)!important;
}
.parallaxie{
  background:url("images/op2.png");
}

    </style>
</head>

<body>




<!--===== HEADER =====-->
<header id="main_header">

  <!--===== HEADER TOP =====-->
  <div id="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <p class="p-font-15 p-white">Let's be more proactive today!</p>
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

  <!--===== NAV-BAR =====-->
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
              
         <li class="dropdown" >
                <a href="staff.php" class="dropdown-toggle header-login" >Home</a>
               
                <ul class="dropdown-menu"  >
                  <li> <a href="staff.php" >Home</a></li>
                  <li>
                  <a href="staffprofile.php" >My Profile</a>
               </li>  </ul>   </li>

              <li class="dropdown active" >
                <a href="taskstaff.php" class="dropdown-toggle header-login" >Task</a>
               
                <ul class="dropdown-menu"  >
                  <li class="active"> <a href="taskstaff.php" >Assign Task</a></li>
                  <li>
                  <a href="stafftask.php" >My Task</a>
               </li>  </ul>    </li>

            
              <li class="nav-tabs">
                <a href="applyleave2.php" >Apply Leave</a>   </li>  </ul>  </div>

        </div>
      </div>
    </div>
  </nav>
        
  <!--===== #/NAV-BAR =====--> 





<div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Department of</h1>
      <h5>Hive Marketing</h5>
 </div>
  </div>
</div>




<!-- DEPARTMENT LIST -->
<section id="agent-p-2" class="property-details bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">List of <span style="color: rgb(248, 157, 10)">DEPARTMENT</span></h2>

        <p class="margin-t-20">Below is a list of department in Hive. Click on the department to see list of staff under the department and add task
        </p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div id="property-2-slider" class="owl-carousel">
        <?php
      $con=new mysqli("localhost","root","","employees"); 
      if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{
           $sql="SELECT distinct department FROM `staff`";
           $res=$con->query($sql);
           if($res->num_rows > 0){
               while($row=$res->fetch_assoc()){ 
              $department=$row['department'];
        
                ?>
          <div class="item">
            <div class="property_item bottom40">

              <div class="image">
              <?php if($department=='Other'){ 
  echo" <img src='images/other.png' alt='listin' class='img-responsive'>";
   }
   else if($department=='Client Servicing'){
    echo" <img src='images/cs.png' alt='listin' class='img-responsive'>";
   } 
   else if($department=='Content Integrator'){
    echo" <img src='images/ci.png' alt='listin' class='img-responsive'>";
   } 
   else if($department=='Brand Writer'){
    echo" <img src='images/writer.png' alt='listin' class='img-responsive'>";
   } 
   else if($department=='Creative'){
    echo" <img src='images/ve.png' alt='listin' class='img-responsive'>";
   } 

   ?>
             
               
            
                <div class="overlay">
                  <div class="centered"><a class="link_arrow white_border" href="taskstaff2.php?id=<?php echo $row["department"]; ?>" >View Detail</a></div>
                </div>
              </div>
      <div class="proerty_content">
                <div class="proerty_text">
                  <h3><a href="#" >          <?php if($department=='Other'){ 
  echo "Other Department";
   }
   else if($department=='Client Servicing'){
    echo "Client Servicing Department";
   } 
   else if($department=='Content Integrator'){
    echo "Content Integrator Department";
     } 
   else if($department=='Brand Writer'){
    echo "Brand Writer Department";
   } 
   else if($department=='Creative'){
    echo "Creative Department";
   } ?> </a></h3>
                <!--  <span class="bottom10">Merrick Way, Miami, USA</span>
                  <p><strong>$8,600 Per Month</strong></p>-->
                </div>
              <!--  <div class="favroute clearfix">
                  <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                  <ul class="pull-right">
                    <li><a href="#."><i class="icon-video"></i></a></li>
                    <li><a href="#."><i class="icon-like"></i></a></li>
                  </ul>
                </div>-->
              </div>
            </div>
          </div> <?php }}} ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- DEPARTMENT LIST -->














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
