<?php
session_start();
    include ("connect.php");

    
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $to = $_POST['to'];
    $sql = "INSERT INTO `announce`(`Title`, `Description`,  `dedicate`,`Date`, `StaffId`) VALUES('$title','$desc','$to',CURDATE(),'{$_SESSION['staffid']}')" or die("Recheck your input");
    



    if ($conn->query($sql) === TRUE)
    {
        echo "<script>alert('Data Successfully entered')</script>";
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=hrmenu.php\">";
        echo "<p>";
    }
    else 
    {
        echo "<p>";
        echo "<p style='text-align:center'>Error: " . $sql . "<br>" . $conn->error;
        echo "<p>";
    }

    $conn->close();
?>