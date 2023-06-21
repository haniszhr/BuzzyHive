

<?php
session_start();

$con=new mysqli("localhost","root","","employees");
if($con->connect_error){
    echo'Connect Failed '.$con->connect_error;
}else{


 if(isset($_POST["submit"])) {

     $link=$_POST['link'];
 $dateline=$_POST['deadline'];
 $datereq=$_POST['datereq'];
 $title=$_POST['title'];
 $detail=$_POST['description'];

$sql="Update task set Link='".$link."' where Taskid='".$_SESSION['taskid']."'";

    
$result=$con->query($sql);
if($con->query($sql)===TRUE)
{
    echo"<script>alert('Successfully update. You will be direct to Your Task Menu')</script>";
                
    echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrtask.php\">";
}}}
?>

