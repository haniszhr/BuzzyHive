<?php

    include ("connect.php");

    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
  
    $role = $_POST['position'];

  
    $sql = "INSERT INTO `staff`(`Name`, `Password`, `Email`,  `Role`) VALUES('$name','$password','$email','$role')" or die("Recheck your input");
    



    if ($conn->query($sql) === TRUE)
    {
        echo "<script>alert('Data $name Successfully registered. Please login.')</script>";
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
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