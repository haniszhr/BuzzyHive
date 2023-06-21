<?php 
session_start();

$conn=new mysqli("localhost","root","","employees");



if (isset($_POST['submit'])){
  $title = $_POST['title'];
  $description = $_POST['description'];
  $req = $_POST['datereq'];
  $dateline = $_POST['deadline'];
 
  

 $query=" insert into `task`(`Title`,`staffname`,`namestaff`,`Detail`, `Dateline`, `Datereq`) VALUES('$title','{$_SESSION['name']}','{$_SESSION['ids']}','$description','$dateline','$req')";
 $query_run = mysqli_query($conn, $query);
 if ($query_run){

  echo"<script type='text/javascript'>alert('Successfully record your application')</script>";
  echo"<meta http-equiv=\"refresh\"content=\"0;URL=viewstatusleaves.php\">";
}

    
  
  else { echo"<script type='text/javascript'>alert('Failed to record data')</script>";
  echo"<meta http-equiv=\"refresh\"content=\"0;URL=viewstatusleaves.php\">";

   echo "error" . mysqli_Error($conn);
  }}
 


?>


