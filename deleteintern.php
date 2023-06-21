<?php session_start();

include('connect.php');

$id=$_REQUEST['id'];

$sql="DELETE from cuti where CutiId='".$id."'";
$result=$conn->query($sql);
if($conn->query($sql)===TRUE){
    echo"<script>alert('Leaves application successfully been deleted')</script>";
   
    echo"<meta http-equiv=\"refresh\"content=\"0;URL=internleave.php\">";

}else{
    echo"<p>";
    echo"<p style='text-align:center'>Error:".$sql."<br>".$conn->error;
    echo"<p>";
    echo"<meta http-equiv=\"refresh\"content=\"0;URL=internleave.php\">";

}
$conn->close();