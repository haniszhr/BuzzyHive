<?php 
session_start();

$conn=new mysqli("localhost","root","","employees");
if (isset($_POST['submit'])){
 $type = $_POST['type'];
 $reason = $_POST['reason'];
 $start = $_POST['datestart'];
 $end = $_POST['dateto'];
 $fileName=$_FILES['file']['name'];
   $fileTmpName=$_FILES['file']['tmp_name'];
   $path="upload/".$fileName;
 /*$days = $_POST['days'];*/

 $query=" insert into `cuti`(`Type`,`StaffId`, `Reason`, `DateStart`,`DateEnd`,`DateApply`,`FileName`) VALUES('$type','{$_SESSION['staffid']}','$reason','$start','$end',CURDATE(),'$fileName')";
 $query_run = mysqli_query($conn, $query);
 if ($query_run){
    move_uploaded_file($fileTmpName,$path);
$query2=" UPDATE cuti SET Status = 'Approved' WHERE Type = 'Sick Leaves'";
$query_run = mysqli_query($conn, $query2);
if ($query_run){
    $query3=" UPDATE cuti SET Days=1+DATEDIFF(DateEnd,DateStart)";
$query_run = mysqli_query($conn, $query3);
if ($query_run){
}
}
$query4=" UPDATE cuti SET Status = 'Approved' WHERE Type = 'WFH'";
$query_run = mysqli_query($conn, $query4);
if ($query_run){
    $query3=" UPDATE cuti SET Days=1+DATEDIFF(DateEnd,DateStart)";
$query_run = mysqli_query($conn, $query3);
if ($query_run){
}
}
echo"<script type='text/javascript'>alert('Successfully record your application')</script>";
echo"<meta http-equiv=\"refresh\"content=\"0;URL=applyleave2.php\">";   
  } }
  else { echo"<script type='text/javascript'>alert('Failed to record data')</script>";
  echo"<meta http-equiv=\"refresh\"content=\"0;URL=applyleave2.php\">";
   echo "error" . mysqli_Error($conn);
}
?>

