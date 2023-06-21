<?php 
session_start();

$conn=new mysqli("localhost","root","","employees");


if (isset($_POST['submit'])){
$link=$_POST['link'];
$staff=$_SESSION['staffid'];
$sql=" UPDATE task SET Link = '".$link."' WHERE namestaff like %$staff% and Taskid='".$_SESSION['taskid']."'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{

    echo"<meta http-equiv=\"refresh\"content=\"0;URL=interntask.php\">";}
    else { 
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=interntask.php\">";
      
         echo "error" . mysqli_Error($conn);
      
       }
    }?>