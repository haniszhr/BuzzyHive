
<?php

$login = FALSE;

//initialize the session
session_start();



if (!isset($_SESSION['email']))
{
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
}


include ('connect.php');

$sql = "SELECT * FROM staff WHERE Email ='".$_SESSION['email']."' and Password='".$_SESSION['password']."'";


$result=$conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

     


  
        $_SESSION['staffid']=$row['StaffId'];
        
        $_SESSION['name']=$row['Name'];
        
   
        $_SESSION['email']=$row['Email'];
        switch($row['Role']){
            case 'HR':   header('location:hrmenu.php');exit();
            case 'staff':   header('location:staff.php');exit();
            case 'Intern':   header('location:internmenu.php');exit();
 
            default:echo"Wrong Password or email";
    
  echo "<script>alert('Wrong Password')</script>";
    session_unset();
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=index.html\">";


        }
    }}
   
else{
    echo "<script>alert('Email not found')</script>";
    session_unset();
        echo"<meta http-equiv=\"refresh\"content=\"0;URL=index.html\">";
}


//closes specified connection...
$conn->close();
?>