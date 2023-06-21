<?php 
session_start();

$conn=new mysqli("localhost","root","","employees");
$id=$_REQUEST['id'];

$sql=" UPDATE task SET Status = 'Complete' WHERE Taskid='".$id."'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{

    echo"<meta http-equiv=\"refresh\"content=\"0;URL=stafftask.php\">";}
    else { 
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=stafftask.php\">";
      
         echo "error" . mysqli_Error($conn);
      
       }
       ?>
      