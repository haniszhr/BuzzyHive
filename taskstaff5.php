<?php 
session_start();

$conn=new mysqli("localhost","root","","employees");
$id=$_REQUEST['id'];

$sql=" UPDATE task SET Status = 'Approve' WHERE Taskid='".$id."'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{
  echo"<script>alert('Successfully update. You will be direct to Your Task Menu')</script>";
    echo"<meta http-equiv=\"refresh\"content=\"0;URL=taskstaff.php\">";}
    else { 
      echo"<script>alert('Failed to update. You will be direct to Your Task Menu')</script>";
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=taskstaff.php\">";
      
         echo "error" . mysqli_Error($conn);
      
       }
       ?>
      