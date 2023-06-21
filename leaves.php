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

<style>
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
    padding:12px 10px !important;
 
}
.btn_fill:hover,.btn_fill:focus,
{width:30px;
 
    border:none !important;
}
input[value="Click to approve"].btn_fill:hover {
  border: 1px solid black;
  background:#28edcc !important;
} 

input[value="Pending"].btn_fill:hover {
  border: 1px solid black;
  background:#89949d!important;
} 
input[value="Click to reject"].btn_fill:hover {
  border: 1px solid black;
  background:#ed2a28!important;
} 
input[type="submit"].btn_fill{
    margin:10px;
    padding-left:20px !important;
    padding-right:20px !important;
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
<?php
 include('staffnav.html');
 ?>
  <!--===== #/NAV-BAR =====--> 



</header>
<!--===== #/HEADER =====-->  







<!--Listing Status-->
<section class="padding agency-listing">
  <div class="container">

    <div class="row bottom40">
        <div class="col-sm-1 col-md-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 text-center">
          <h2 class="text-uppercase">Pending List of <span style="color:rgb(248, 157, 10)">Leaves Application</span></h2>
 
                </div>
        <div class="col-sm-1 col-md-2"></div>
    </div>
<!--<form action="leaves2.php" method="post">-->
    <?php
       $con=new mysqli("localhost","root","","employees");
       if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{
           $sql="select * from cuti where Status='Pending' order by DateApply DESC";
           $res=$con->query($sql);
           if($res->num_rows > 0){
               while($row=$res->fetch_assoc()){ 
                $datecur=$row['DateApply'];
                $type=$row['Type'];
                $end=$row['DateEnd'];
                $reason=$row['Reason'];
                $start=$row['DateStart'];
              
                $days=$row['Days']; 
                $status=$row['Status'];
             ?>
    <div class="row agency-listing-box">

      <div class="image-round">
        <div>
          <img src="images/leave.png" alt="image" />
          <span>
       <?php echo$datecur?>
          </span>
        </div>
      </div>

      <div class="details">
        <div class="agency-box">
 
          <div class="property_meta">
          <h2><?php echo $type?> Leaves</h2>
                        </div>
      

     
          <div class="favroute clearfix">
                            <p class="pull-left"><i class="icon-calendar2"></i> From: <?php echo $start?></p>
                         <p class="pull-left" style="padding-left:5px;"> <i class="icon-calendar2"></i> To: <?php echo $end?></p>        <p class="pull-right" style="margin-right:20px">Total days:<?php echo $days?>
             <br>
                         Reason: <?php echo $reason?></p>
                  
                        </div>
             
                        <a href="leaves2.php?id=<?php echo $row["CutiId"]; ?>" class="btn_fill" name="button"  value="Rejected">Click to reject</a> 
                         <a href="leaves3.php?id=<?php echo $row["CutiId"]; ?>" class="btn_fill" name="button" value="Approved">Click to approve</a>
           </div>
      </div>

    </div> <?php }}}?>
    
  </div>
</section>



  
            







<!--Listing Status-->







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
