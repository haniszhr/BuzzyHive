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

.single-query .keyword-input {
    border: 1px solid  rgb(239, 239, 239)!important;
    height: 40px;
    border-radius: 0;
    padding-left: 10px;
    width: 100%;
    background: #fff;
}
  a.btn_fill{
    padding-left:30px !important;   padding-right:30px !important;
  }
  .t1{
    margin-left:20px !important;
  }
.btn_fill{
    border:none !important;
    padding:12px 10px !important;
 
}
.btn_fill:hover,.btn_fill:focus,
{width:30px;
 
    border:none !important;
}
input[value="Approved"].btn_fill {
  border: 1px solid black;
  background:rgb(25, 124, 84) !important;
} 
input[value="Pending"].btn_fill{
  border: 1px solid black;
  background:#89949d!important;
} 
input[value="Rejected"].btn_fill {
  border: 1px solid black;
  background:#ed2a28!important;
} 
input[type="submit"].btn_fill {
padding-left:25px !important;
padding-right:25px !important;
} 
.file-input {
  display: inline-block;
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

</style>
<body>


<?php
  session_start();

 ?>


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

              <li class="dropdown" >
                <a href="taskstaff.php" class="dropdown-toggle header-login" >Task</a>
               
                <ul class="dropdown-menu"  >
                  <li> <a href="taskstaff.php" >Assign Task</a></li>
                  <li>
                  <a href="stafftask.php" >My Task</a>
               </li>  </ul>    </li>

            
              <li class="nav-tabs active">
                <a href="applyleave2.php" >Apply Leave</a>   </li>  </ul>  </div>

        </div>
      </div>
    </div>
  </nav>

      
  <!--===== #/NAV-BAR =====--> 



</header>
<!-- PROPERTY DETAILS -->
<section class="property-details padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h2 class="text-uppercase">Leaves  <span style="color:rgb(248, 157, 10)">Application</span></h2>
       
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">

        <div class="row">
          <div class="col-md-12">
            <div class="property-tab">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" ><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                <li role="presentation" class="active"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Status Application</a></li>
       
       
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane " id="description">
                  <h3 class="text-uppercase  bottom20 top10">Application <span style="color:rgb(248, 157, 10)">Status</span></h3>
                  <p class="p-font-15">This section will display your detail information about your leaves application</p>
                  <p class="p-font-15 top30 bottom30">Download button will only appear if you have upload any attachment </p>
              
                 
                </div>


       
         
                    <?php
       $con=new mysqli("localhost","root","","employees");
       if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{
        
        $id=$_REQUEST['id'];
        $sql=" select Type,Reason,DateStart,DateEnd,DateApply,Days,Status,StaffId,FileName from cuti WHERE CutiId='".$id."'";
           $res=$con->query($sql);
           
           if($res->num_rows > 0){     
        while($row=$res->fetch_assoc()){       
  
                $type=$row['Type'];
  
                $datecur=$row['DateApply'];
                $start=$row['DateStart'];
                $file=$row['FileName'];
                $end=$row['DateEnd'];
                $reason=$row['Reason'];
                $status=$row['Status'];
            ?>
                   <div role="tabpanel" class="tab-pane active" id="summary">

                      <h3 style="margin-left:20px" class="text-uppercase bottom20 top10"><?php echo $type?> <span style="color:rgb(248, 157, 10)"></span></h3>
                  
<span style="margin-left:20px;background:rgb(248, 157, 10);color:white;padding:3px;">Apply on : <?php echo $datecur?> </span>


<div class="container"><br> <div class="favroute clearfix">

<p class="pull-left"><i class="icon-calendar2"></i> From: <?php echo $start?>  </p>
<p class="pull-left" style="padding-left:6px;margin-left:5px">   <i class="icon-calendar2"></i> To: <?php echo $end?></p>   <p class="pull-left" style="margin-left:6px;margin-bottom:6px"><i class="icon-info"></i> Total days:<?php echo $row['Days']?>     
</div> 
<div class="favroute clearfix" style="margin-bottom:6px">

<p class="pull-left" style="margin-top:6px;margin-bottom:10px"><i class="icon-clipboard"></i> Reason: <?php echo $row['Reason']?></div> 
                         <input type="text" class="btn_fill" value='<?php echo $status?>' readonly>  
                         <?php if(!empty($row['FileName'])){ ?>
                           <a style="margin-top:5px"href="upload/<?php echo $row['FileName'];?>"download class="btn_fill">Download</a> <?php } ?> </div>
                  </div>
                <?php }}
               else{ ?>
           <div role="tabpanel" class="tab-pane" id="summary">

<h4 style="margin-left:20px" class="text-uppercase bottom20 top10">No leaves application found!</h4>


<div class="container"><br>
     
</div></div>
            <?php  } 
              
              } ?>
        

       
              </div>
            </div>
          </div>
        </div>
   
      
      </div>

      <?php 
      
include('connect.php');

$id=$_REQUEST['id'];


      $sql="SELECT * FROM cuti where CutiId='".$id."'";

$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
      $_SESSION['cutiid']=$row['CutiId'];
     ?>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="property-query-area">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase  bottom40">Update <span style="color:rgb(248, 157, 10)">Leaves</span></h3>
            </div>
          </div>
          <div class="row">
          <form action="update2.php" method="post" enctype="multipart/form-data">
            
              <div class="col-md-12">
                <div class="single-query">
                    <select class="selectpicker" required data-live-search="true" name="type">
                     <?php echo" <option selected=''> ".$row['Type']."</option>" ?>
                      <option value="WFH">Work from home</option>
                      <option value="Emergency Leaves">Emergency Leaves</option>
          <option value="Unpaid Leaves">Unpaid Leaves</option>
          <option value="Paid Leaves">Paid Leaves</option>
          <option value="Maternity Leaves">Maternity/Paternity Leaves</option>
          <option value="Sick Leaves">Sick Leaves</option>
          <option value="Half-day Leaves">Half-day Leaves</option>
          <option value="Other">Others</option>
                    </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                <?php echo" <textarea name='reason' style='margin-bottom:2px' >".$row['Reason']."</textarea>";?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
           <!--   <input class="keyword-input" required placeholder="Total days" required="" type="text" name="days">-->
                </div>
              </div>
        
          </div>
          <div class="row search-2">
                 
          <div class="col-md-12">
                <div class="row">
          
              <div class='file-input'>
         <input type='file' name='file'>
  <span class='button'>Choose</span>
  <?php if (empty($row['FileName'])){ echo "<span class='label' data-js-label>Attached necessary document</label>"; }else{ ?>
  <span class='label' data-js-label><?php echo $row['FileName'] ?></label> <?php } ?>
</div>
         
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                
            
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="single-query">
                    <?php echo" <input required type='text' class='keyword-input' name='datestart' placeholder='From' onfocus='(this.type='date')' value='".$row['DateStart']."'  >";?>
        
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="single-query">      <?php echo"  <input required='' type='text' name='dateto' class='keyword-input' placeholder='To' onfocus='(this.type='date')' value=' ".$row['DateEnd']."'>";?>
        
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="col-md-12 col-sm-12 col-xs-12 text-right">
           
                <div class="query-submit-button">
                <input type="submit" class="btn_fill" value="Update" name="submit">
            
                </div>
              </div>
             <?php }}?>
            </form>
          </div>
   
        </div>
    
      </div>
    </div>
  </div>
</section>


<!-- PROPERTY DETAILS -->




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
<script>
var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
  customInput(inputs[i])
}

function customInput (el) {
  const fileInput = el.querySelector('[type="file"]')
  const label = el.querySelector('[data-js-label]')
  
  fileInput.onchange =
  fileInput.onmouseout = function () {
    if (!fileInput.value) return
    
    var value = fileInput.value.replace(/^.*[\\\/]/, '')
    el.className += ' -chosen'
    label.innerText = value
  }
}</script>
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

<!--Maps & Markers-->
<script src="js/form.js"></script> 
<script src="js/custom-map.js"></script> 
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="js/gmaps.js"></script>
<script src="js/contact.js"></script> 
<!--===== #/REQUIRED JS =====-->

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

</body>
</html>