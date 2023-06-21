<?php 
session_start();

$conn=new mysqli("localhost","root","","employees");



if (isset($_POST['submit'])){
  $title = $_POST['title'];
  $description = $_POST['description'];
  $req = $_POST['datereq'];
  $dateline = $_POST['deadline'];

  $link = $_POST['link'];

 $query=" insert into `task`(`Title`,`staffname`,`namestaff`,`Detail`, `Dateline`, `Datereq`,`Link`) VALUES('$title','{$_SESSION['name']}','{$_SESSION['ids']}','$description','$dateline','$req', '$link')";
 $query_run = mysqli_query($conn, $query);
 if ($query_run){

  echo"<script type='text/javascript'>alert('Successfully record your application')</script>";
  echo"<meta http-equiv=\"refresh\"content=\"0;URL=taskstaff.php\">";
}

    
  
  else { echo"<script type='text/javascript'>alert('Failed to record data')</script>";
  echo"<meta http-equiv=\"refresh\"content=\"10;URL=taskstaff.php\">";

   echo "error" . mysqli_Error($conn);
  }}
 


?>


