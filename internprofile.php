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
<body>
<style>
input[type="button"]{
  border:none;
}
.parallaxie{
  background:url("images/offis2.png");
}
.main-title{
  background:rgba(0,0,0,0.0);
  border:none;
  padding:100px;
  outline:none;
}
.margin_bottom {
    margin-bottom: 5px;
}
.y1 {
  color: rgb(248, 157, 10)!important;
}



.agent-p-img img {
    margin-bottom: 25px;
    margin-left:55px !important;
}


.file-input {
  display: inline;
  text-align: left;
  background: #fff;
  padding-top:0px;
  padding-bottom:10px;
  padding-left: 16px;
  width: 450px;
  position: relative;
  border-radius: 3px;
  margin-right:10px;
}

.file-input > [type='file'] {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 10;
  cursor: pointer;
}
.file-input > [type='submit'] {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 10;
  cursor: pointer;
}

.file-input > .button {
  display: inline-block;
  cursor: pointer;
  background: #eee;
  padding: 8px 16px;
  border-radius: 2px;
  margin-right: 8px;
}

.file-input:hover > .button {
  background:  rgb(248, 157, 10)!important;
  color: white;
}

.file-input > .label {
  color: #333;
  white-space: nowrap;
  opacity: .3;
}

.file-input.-chosen > .label {
  opacity: 1;
}

input[type="button"]{
  border:none;
}
  </style>


<?php
session_start();?>
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
              
         <li class="dropdown active" >
                <a href="internmenu.php" class="dropdown-toggle header-login" >Home</a>
               
                <ul class="dropdown-menu"  >
                  <li> <a href="internmenu.php" >Home</a></li>
                  <li class="active">
                  <a href="internprofile.php" >My Profile</a>
               </li>  </ul>   </li>

              <li class="nav-tabs" >
           
                  <a href="interntask.php" >My Task</a>
               </li>

            
              <li class="nav-tabs">
                <a href="internleave.php" >Apply Leave</a>   </li>   </div>

        </div>
      </div>
    </div>
  </nav>
  <!--===== #/NAV-BAR =====--> 

  </header>
  <div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
<div class="main-title"></div>
  </div>
</div>



<section id="contact-us" class="padding_top parallaxie" style="background-image:url(images/map-bg.png); ">

    <div class="container">

        <div class="row">
<div class="col-xs-12">

                <div class="contact-bg">
                
                  <div class="row">

                    <div class="col-md-6 col-sm-7 col-xs-12">

                      <div class="bottom40">
                        <h2 class="text-uppercase">Update <span class="y1">Your Profile </span></h2>
                    
                      </div>

                      <?php
             $db=new mysqli("localhost","root","","employees");
             if($db->connect_error){
                 echo'Connect Failed '.$db->connect_error;
             }else{
                 $query="select image from Staff where StaffId='".$_SESSION['staffid']."'";
                 $result = mysqli_query($db, $query);
                 while ($data = mysqli_fetch_assoc($result)) {  ?>
                      
                       
                            <div class="agent-p-img">
                    <?php 
               
               if(!empty($data['image'])){ ?> <img src="./profile/<?php echo $data['image']; ?>" class="img-responsive" alt="image" style="height:215px;width:215px"> <?php } 
               else{ ?>
               <img src="images/profile2.png" class="img-responsive" alt="image"/>
              <?php }}}
               ?>
                   <form action="uploadinternimage.php"  id="imagesave" method="post" enctype="multipart/form-data"> 
                  <div class='file-input'>
        <input type='file' name="fileToUpload" id="fileToUpload" >
        <span class='button'>Choose image</span>
        <span class='label' data-js-label> Must 215px x 215px</label> 
       
      </div> <!-- <input type="submit"class="btn_fill"name="submit" style="margin-left:90px;margin-bottom:15px;padding:15px;margin-top:5px" value="Upload image ">   -->


      <button type="submit" name="submit" class="btn_fill" style="padding:7px;margin-bottom:15px">
        <i class="fa fa-arrow-up"></i>
               </form>
                </div>                       
      <form action="internprofile2.php" method="post">   <div class="row"> <div class="col-md-9">
    <div class="single-query"><input type="text" placeholder="Your Name" name="Name" class="keyword-input">  </div>
</div></div>

                            
<div class="row">
<div class="col-md-9">
<div class="single-query">
 <input type="text" placeholder="Phone Number" name="Phone" class="keyword-input">
</div>
 </div>
 </div>



  <div class="row">
  <div class="col-md-9">
  <div class="single-query">
  <select class="selectpicker" required data-live-search="true" name="department">
                      <option selected="" value="any">Department</option>
                      <option value="Creative">Creative</option>
      
          <option value="Client Servicing">Client Servicing</option>
          <option value="Content Integrator">Content Integrator</option>
          <option value="Brand Writer">Brand Writer</option>

          <option value="Other">Other</option>
                    </select>
  </div>  </div> </div>

                        
  <div class="row">
                          <div class="col-md-9">
                              <div class="single-query">
                  <textarea placeholder="Address" name="Address"></textarea>
                </div>  <input type="submit" class="btn_fill" name="submit"value="Update ">
             
                              </div>
                          </div> 

                      </form>
                    </div>

                    <div class="col-md-4 col-sm-5 col-xs-12">

                      <div class="address_box">
                          <div class="bottom10">
                            
<?php
       $con=new mysqli("localhost","root","","employees");
       if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{
           $sql="select * from Staff where StaffId='".$_SESSION['staffid']."'";
           $res=$con->query($sql);
           if($res->num_rows > 0){
               while($row=$res->fetch_assoc()){ 
                $name=$row['Name'];
                $phone=$row['Phone'];
                $email=$row['Email'];
                $address=$row['Address'];
                $role=$row['Role'];
                $d=$row['department'];
             ?>    <h2 class="text-uppercase">My <span class="y1"> Profile </span></h2>
                    
                             
                                
                              </div>
                              
                          <div class="agent-p-contact p-t-30">
                            <div class="agetn-contact-2">
                            <p><i class="icon-profile"></i>Name: <?php echo $name ?></p>
                           
                              <p><i class="icon-telephone114"></i>Phone: <?php echo $phone ?></p>
                           
                                <p><i class=" icon-email"></i>Email : <?php echo $email ?></p> <?php }}} ?>
                    
                            
                                <p><i class="icon-browser2"></i>Role       : <?php echo $role ?></p>
                                <p><i class="icon-office"></i>Department: <?php echo $d ?></p>
                              <p><i class="icon-icons74"></i>Address: <?php echo $address ?></p>
                            </div>
                  
                          </div>

                      </div>
                    </div>
                  </div>

                 
                </div>
                
            </div>

        </div>

    </div>

</section>




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

