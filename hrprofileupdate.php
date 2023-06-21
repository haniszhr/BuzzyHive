<?php session_start();


if(!empty($_POST)){
    $name=$_POST['Name'];

    $phone=$_POST['Phone'];
    $email=$_POST['department'];
    $address=$_POST['Address'];

$conn=new mysqli("localhost","root","","employees");

if($conn->connect_error){
    echo'Connect Failed '.$con->connect_error;
}
else{
  if(!empty($name) && !empty($phone) && !empty($email) && !empty( $address)  ){
    
    $sql="UPDATE staff set Name='".$name."',Phone='".$phone."',department='".$email."', Address='".$address."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    { move_uploaded_file($fileTmpName,$path);
        echo "<script>alert('Successfully update.')</script>";
     
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }



  }

  else if(!empty($name) && !empty($phone) && !empty($email) && empty( $address)  ){
    
    $sql="UPDATE staff set Name='".$name."',Phone='".$phone."',department='".$email."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{
    echo "<script>alert('Successfully update.')</script>";
     
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";

    }
  

else{
    echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
}
  }
  else if(!empty($name) && !empty($phone) && empty($email) && empty( $address)  ){
    
    $sql="UPDATE staff set Name='".$name."',Phone='".$phone."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{
   
    echo "<script>alert('Successfully update')</script>";
     
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";

    }
  

else{
    echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
}
  }
  else if(!empty($name) && empty($phone) && empty($email) && empty( $address)  ){
    
    $sql="UPDATE staff set Name='".$name."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
       
        echo "<script>alert('Successfully update.')</script>";
     
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }
 
 else if(empty($name) && !empty($phone) && !empty($email) && !empty( $address)  ){
    
    $sql="UPDATE staff set Phone='".$phone."',department='".$email."', Address='".$address."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
       
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }
  else if(empty($name) && empty($phone) && !empty($email) && !empty( $address)  ){
    
    $sql="UPDATE staff set department='".$email."', Address='".$address."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
       
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }
  else if(empty($name) && empty($phone) && empty($email) && !empty( $address)  ){
    
    $sql="UPDATE staff set Address='".$address."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }

  else if(!empty($name) && empty($phone) && empty($email) && !empty( $address)  ){
    
    $sql="UPDATE staff set Name='".$name."', Address='".$address."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
       
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }

  else if(!empty($name) && !empty($phone) && empty($email) && !empty( $address)  ){
    
    $sql="UPDATE staff set Name='".$name."',Phone='".$phone."', Address='".$address."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }
  else if(!empty($name) && empty($phone) && !empty($email) && !empty( $address)  ){
    
    $sql="UPDATE staff set Name='".$name."',department='".$email."', Address='".$address."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
       
        echo "<script>alert('Successfully update.)</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }
  else if(empty($name) && !empty($phone) && empty($email) && !empty( $address)  ){
    
    $sql="UPDATE staff set Phone='".$phone."', Address='".$address."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
       
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }

  else if(!empty($name) && empty($phone) && !empty($email) && empty( $address)  ){
    
    $sql="UPDATE staff set Name='".$name."',department='".$email."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
       
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }


  else if(empty($name) && !empty($phone) && empty($email) && empty( $address)  ){
    
    $sql="UPDATE staff set Phone='".$phone."'where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
       
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }


  else if(empty($name) && empty($phone) && !empty($email) && empty( $address)  ){
    
    $sql="UPDATE staff set department='".$email."' where StaffId='".$_SESSION['staffid']."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Successfully update.')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=hrprofile.php\">";
    
        }
      
    
    else{
        echo"<p style='text-align:center'>Error:" .$sql."<br>".$conn->error;
    }
  }


}

}
 

$conn->close();
 ?>
