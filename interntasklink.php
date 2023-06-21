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

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<?php
session_start();

 ?>
<style>
   #news-section-1 .blog_info {
    background:#fffdf1;
    color:black;
  
} 
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 15px;
    background: #299be4;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn:hover, .table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}	
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: black !important;
  
}
table.table td a.settings {
  width:20px;
    color:rgb(248, 157, 10);
}
table.table td a.delete {
    color: rgb(248, 157, 10);
}
table.table td i {
    font-size: 19px;
}
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-complete {

    color: #1b7636;
}
.text-pending {
    color: #ffa31a;
}
.text-approve {

    color: #3953ff;
}
.text-amend {
    color: #ff5b5b;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
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
    padding:12px 10px !important;
 
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
.table > tbody > tr > td {
 color:black !important;
}
.main-title h1{
  color:rgb(248, 157, 10)!important;
}
.property-details .text-it-p {
    padding: 15px 10px 15px 25px;
    background: #f5f8fa;
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
        <div class="col-md-2 hidden-xs hidden-sm"><a href="internmenu.php"><img src="images/HIVE.png" alt="logo" style="width:200px"/></a></div>
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
                <a href="internmenu.php" class="dropdown-toggle header-login" >Home</a>
               
                <ul class="dropdown-menu"  >
                  <li> <a href="internmenu.php" >Home</a></li>
                  <li>
                  <a href="internprofile.php" >My Profile</a>
               </li>  </ul>   </li>

              <li class="nav-tabs active" >
           
                  <a href="interntask.php" >My Task</a>
               </li>

            
              <li class="nav-tabs">
                <a href="internleave.php" >Apply Leave</a>   </li>   </div>

        </div>
      </div>
    </div>
  </nav>
<!----------------------------------------->

           <div class="page-title page-main-section parallaxie">
           <div class="container padding-bottom-top-120 text-uppercase text-center">
             <div class="main-title">
             <h1>Update Task</h1>
               <h3>Detail</h3>
         
          </div>
           </div>
         </div>



<section id="news-section-1" class="news-section-details property-details padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="news-1-box margin_bottom  clearfix">
    

            <div class="col-md-12 col-sm-12 col-xs-12">
         
<hr>
   



<?php


       $con=new mysqli("localhost","root","","employees");
       if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{

        $id=$_REQUEST['id'];

$sql="SELECT * from task where Taskid='".$id."'";
$res=$con->query($sql);
           
if($res->num_rows > 0){     
while($row=$res->fetch_assoc()){ 
    $_SESSION['taskid']=$row['Taskid'];


$status=$row['Status'];
    $link=$row['Link'];
$dateline=$row['Dateline'];
$datereq=$row['Datereq'];
$title=$row['Title'];
$detail=$row['Detail'];

 ?>
           <div class="our-agent-box padding-b-30">
              <h2 class="text-uppercase" style="margin-left:15px;margin-bottom:10px">Update <span style="color:rgb(248, 157, 10)"> Task</span></h2>
         <hr><p> Update the link for this task if necessary</p>
          </div>
        
 
              <div class="news-details">
 
 </div>
 

              <div class="col-md-4 col-sm-6 col-xs-12"> <form action="interntasklink2.php" method="post">

                  <div class="single-query form-group" >
                <label>Title</label>
                    <input class="keyword-input" name="title" required="" type="text" readonly  value="<?php echo $title ?>"/>
                  </div>
                </div>
      
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-query form-group" >     <label>Date Request</label>
                  <input required type="text" class="keyword-input" name="datereq"  onfocus="(this.type='date')"  readonly  value=<?php echo $datereq ?>>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="single-query form-group" >
                  <label>Deadline</label>
                  <input required type="text" class="keyword-input" name="deadline" value=<?php echo $dateline ?> readonly   onfocus="(this.type='date')"/>
                  </div>
                </div>
                <!--Link -------------------------------------------->
             <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="single-query form-group" >
                  <label>Link to submit</label>
                  <input type="url"  class="keyword-input" name="link" value=<?php echo $link ?>>
                  </div>
                </div> 
                        <!--Link -------------------------------------------->
                <div class="col-md-12 top20">     <label>Details of Task</label>
          
                  <textarea name="description" id="description" rows="7"  readonly class="form-control description"> <?php echo $detail ?>
             </textarea>
                </div>
                <div class="col-md-12 top20">
                    <button type="submit" class="btn_fill"name="submit" id="btn_submit">Update</button>
                  </div> </form>
            </div>
          </div>
   
        </div> <?php }}} ?>
 

        <!--<div class="row">
          <div class="col-md-12" >
            <div class="text-it-p" >
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming Lorem ipsum dolor sit amet. 
                consectetuer elit sed diam power nonummy
              </p>
            </div>
          </div>
        </div>-->
 
     <!--   <div class="row">
          <div class="col-md-12 margin-t60 margin-b60">
            <h2 class="text-uppercase">RECENT <span class="color_red">PROPERTY</span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="sim-lar-p">
              <img src="images/news-d-3.jpg" alt="image">
              <div class="sim-lar-text">
                <h3>Historic Town House</h3>
                <p><span>By:</span> Admin <span>|</span> <span>Date:</span> Feb 22, 2017</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                  sed diam power nonummy nibh tempor cum soluta nobis eleifend...
                </p>
                <a href="#." class="link_arrow top20">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="sim-lar-p">
              <img src="images/news-d-4.jpg" alt="image">
              <div class="sim-lar-text">
                <h3>Historic Town House</h3>
                <p><span>By:</span> Admin <span>|</span> <span>Date:</span> Feb 22, 2017</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                  sed diam power nonummy nibh tempor cum soluta nobis eleifend...
                </p>
                <a href="#." class="link_arrow top20">Read More</a>
              </div>
            </div>
          </div>
        </div> -->

       <!-- <div class="row">
          <div class="col-md-12 margin-t60 margin-b60">
            <h2 class="text-uppercase">Your <span class="color_red">Comments</span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
          </div>
        </div> -->
        
      <!--  <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-12">
            <img src="images/news-comnts-1.jpg" alt="image"/>
          </div>
          <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="news-comnts-text">
              <h4>Alison Johnson <span>Feb 22, 2017</span></h4>
              <a href="#." class="link_arrow top20">Reply</a>
              <p>Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
            </div>
          </div>
        </div> 
        <hr>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12 text-right">
            <img src="images/news-comnts-1.jpg" alt="image"/>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="news-comnts-text">
              <h4>Alison Johnson <span>Feb 22, 2017</span></h4>
              <a href="#." class="link_arrow top20">Reply</a>
              <p class="p-font-15">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales</p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-12">
            <img src="images/news-comnts-1.jpg" alt="image"/>
          </div>
          <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="news-comnts-text">
              <h4>Alison Johnson <span>Feb 22, 2017</span></h4>
              <a href="#." class="link_arrow top20">Reply</a>
              <p class="p-font-15">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12 margin-t60 margin-b60">
            <h2 class="text-uppercase">Leave a <span class="color_red">Comment</span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="agent-p-form padding_bottom">
              <form class="findus" onSubmit="return false">
                <div class="row">
                  <div class="col-md-6">
                    <div class="single-query">
                      <input type="text" class="keyword-input" placeholder="Your Name" id="name">
                    </div>
                    <div class="single-query">
                      <input type="text" class="keyword-input" placeholder="Email Adress" id="email">
                    </div>
                    <div class="single-query">
                      <input type="text" class="keyword-input" placeholder="Website" id="phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-query">
                      <textarea placeholder="Massege" id="massege"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn_fill" id="btn_submit">Post Comment</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>-->
        </div>
      <div class="col-md-8 col-lg-4">
     <!--   <div class="search_box blog-thumbnail">
          <div class="input-group">
            <input class="form-control custom_input" placeholder="Search" type="text">
            <span class="input-group-btn">
            <button class="btn btn-default custom_input" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </div>-->
      <!--  <div class="blog_info blog-thumbnail">-->
 <div class="blog_info blog-thumbnail">
          <div class="blogimagedescription">
            <h3>Latest Announcement</h3>
          </div>
          <ul class="archieves clearfix">
            <li>
            <?php
       $con=new mysqli("localhost","root","","employees");
       if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{


        $sql="select staff.Name,announce.Title,announce.Description,announce.Date,announce.dedicate from announce join staff on staff.StaffId=announce.StaffId where id=(SELECT (MAX(id)) from announce);";
           $res=$con->query($sql);
           
           if($res->num_rows > 0){     
        while($row=$res->fetch_assoc()){  
$date=$row['Date'];
$title=$row['Title'];
$desc=$row['Description']; $name=$row['Name'];
$ded=$row['dedicate']; ?>

              <div class="col-md-4 col-sm-2 padding_none">
                <div class="blogimage_thumbnail">
                  <img src="images/an1.png" alt="blog1 image">
                </div>
              </div>  
              <div class="col-md-8 col-sm-10">
                <div class="blogimagedescription">
                  <h3><a href="hrmenu.php#an1"><?php echo $title ?></a></h3>
                  <p class="detail">
                    <span><a href="#."><i class="icon-icons230"></i> <?php echo $name ?></a></span><br>
                    <span><a href="#."><i class="icon-icons228"></i><?php echo $date ?></a></span>
                  </p>
                </div>
              </div> 
            </li> <?php     }}}?>
            <?php
       $con=new mysqli("localhost","root","","employees");
       if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{


        $sql="select staff.Name,announce.Title,announce.Description,announce.Date,announce.dedicate from announce join staff on staff.StaffId=announce.StaffId where id=(SELECT (MAX(id)-1) from announce);";
           $res=$con->query($sql);
           
           if($res->num_rows > 0){     
        while($row=$res->fetch_assoc()){  
$date=$row['Date'];
$title=$row['Title'];
$desc=$row['Description']; $name=$row['Name'];
$ded=$row['dedicate']; ?>
            <li>
              <div class="col-md-4 col-sm-2 padding_none">
                <div class="blogimage_thumbnail">
                  <img src="images/an2.png" alt="blog1 image">
                </div>
              </div>
              <div class="col-md-8 col-sm-10">
                <div class="blogimagedescription">
                  <h3><a href="hrmenu.php#an2"><?php echo $title ?></a></h3>
                  <p class="detail">
                    <span><a href="#."><i class="icon-icons230"></i> <?php echo $name ?></a></span><br>
                    <span><a href="#."><i class="icon-icons228"></i><?php echo $date ?></a></span>
                  </p>
                </div>
              </div>
            </li><?php     }}}?>
            <li>  <?php
       $con=new mysqli("localhost","root","","employees");
       if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{


        $sql="SELECT staff.Name,announce.Title,announce.Description,announce.Date,announce.dedicate
        FROM announce  join staff on staff.StaffId=announce.StaffId WHERE id=(SELECT max(id)-2 FROM announce)";
           $res=$con->query($sql);
           
           if($res->num_rows > 0){     
        while($row=$res->fetch_assoc()){  
$date=$row['Date'];
$title=$row['Title'];
$desc=$row['Description']; $name=$row['Name'];
$ded=$row['dedicate']; ?>
              <div class="col-md-4 col-sm-2 padding_none">
                <div class="blogimage_thumbnail">
                  <img src="images/an3.png" alt="blog1 image">
                </div>
              </div>
              <div class="col-md-8 col-sm-10">
                <div class="blogimagedescription">
                  <h3><a href="hrmenu.php#an3"><?php echo $title ?></a></h3>
                  <p class="detail">
                    <span><a href="#."><i class="icon-icons230"></i> <?php echo $name ?></a></span><br>
                    <span><a href="#."><i class="icon-icons228"></i><?php echo $date ?></a></span>
                  </p>
                </div>
              </div>
            </li><?php     }}}?>
          </ul>
        </div> 
       <!-- <div class="blog_info blog-thumbnail">
          <div class="blogimagedescription">
            <h3>Archieves</h3>
          </div>
          <ul class="archieves">
            <li><a href="#.">MAY 2015</a></li>
            <li><a href="#.">APRIL 2015</a></li>
            <li><a href="#.">FEBRUARY 2015</a></li>
            <li><a href="#.">JANUARY 2015</a></li>
            <li><a href="#.">NAOVEMBER 2014</a></li>
          </ul>
        </div>-->
        <div class="clearfix"></div>
       <!-- <h3 class="text-uppercase  bottom40">Tags</h3>
        <div class="news-tag">
          <a href="#.">Planning</a>
          <a href="#.">Apartments</a>
          <a href="#.">Reality Home</a>
        </div>
        <div class="news-tag">
          <a href="#.">Luxury</a>
          <a href="#.">Finance</a>
          <a href="#.">Agents</a>
          <a href="#.">Ideas</a>
        </div>
        <div class="news-tag">
          <a href="#.">Themeforest</a>
          <a href="#.">Family Homes</a>
        </div> -->
      <!--  <div class="row">
          <div class="col-md-12 bottom20">
            <h3 class="text-uppercase top40 bottom40">Latest <span class="color_red">Properties</span></h3>
          </div>
          <div class="col-md-12">
            <div id="agent-3-slider" class="owl-carousel">
              <div class="item">
                <div class="property_item">
                  <div class="image">
                    <a href="#."><img src="images/property-listing-6.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item">
                  <div class="image">
                    <a href="#."><img src="images/property-listing-6.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item">
                  <div class="image">
                    <a href="#."><img src="images/property-listing-6.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                  </div>
                </div>
              </div>
            </div> -->
          </div></div>
        </div>
      </div> 
    </div>
  </div>
</section>













<?php
       $con=new mysqli("localhost","root","","employees");
       if($con->connect_error){
           echo'Connect Failed '.$con->connect_error;
       }else{
?>

<section class="padding agency-listing">
<div class="container">
<div class="row property-d-table">
<div class="col-md-12">
                  
<hr>
              <div class="our-agent-box padding-b-30">
              <h2 class="text-uppercase" style="margin-left:15px;margin-bottom:10px">TASK <span style="color:rgb(248, 157, 10)">For Me</span></h2>
         <hr>
          </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-striped table-responsive">
                    <thead>


<tr>                      <th>Request By</th>
                        <th>Title</th>						
               <th>Detail</th>
                        <th>Date Request</th>
                    <th>Dateline</th> 
               
                        <th>Status</th>
                        <th>action</th>
                     
                    </tr>
</thead><tbody>
      <?php

        $sql="SELECT * FROM `task` where namestaff='".$_SESSION['staffid']."' ";
           $res=$con->query($sql);
           
           if($res->num_rows > 0){     
        while($row=$res->fetch_assoc()){ 
       
      $d=$row['Title'];
      $status=$row['Status'];
 $detail=$row['Detail'];
      $sname=$row['staffname'];

      $datereq=$row['Datereq'];
      $dateline=$row['Dateline'];
          ?>               
          <tr><?php
       echo"<td> $sname</td>";  
       echo"<td> $d </td>"; 
       echo"<td> $detail </td>"; 
       echo"<td> $datereq </td>"; 
       echo"<td> $dateline </td>"; 

      /**  echo"<td>$link </td>"; */
          if(($status=='Not complete')){
        echo"<td> <span class='status text-pending'>&bull;</span>$status </td>"; 
       } else if(($status=='Approve')){
        echo"<td> <span class='status text-approve'>&bull;</span>$status </td>"; 
       }
       else if(($status=='Complete')){
        echo"<td> <span class='status text-complete'>&bull;</span>$status </td>"; 
       }
       if(($status=='Reject')){
        echo"<td> <span class='status text-amend'>&bull;</span>$status </td>"; 
       }
       ?>
  <td>
  <?php if(($status=="Not complete")){ ?>
      <a href="interntask2.php?id=<?php echo $row["staffname"]; ?>" value="Complete" class="settings" title="Change Status to Complete" data-toggle="tooltip"><i class="material-icons">done</i></a> <?php } 
      else if(($status=='Reject')){ ?>
        <a href="interntask2.php?id=<?php echo $row["staffname"]; ?>" value="Complete" class="settings" title="Change Status to Complete" data-toggle="tooltip"><i class="material-icons">done</i></a> 
     <?php }
      
   
      ?>
    <a href="interntasklink.php?id=<?php echo $row["Taskid"]; ?>" class="settings" title="See Detail" data-toggle="tooltip"><i class="material-icons">upgrade</i></a>
        </td>
   </tr>
       
      </form>


       
       
       
       
 
        
<?php }}
else{
           
 echo" <tr>
<td></td>
 <td style='width:250px'> No result found</td>
 </tr>";  

}
} ?>


  

</tbody>  
</table>
</div></div>
</div>
</section>






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
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
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










