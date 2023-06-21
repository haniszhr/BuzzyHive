<?php

include('connect.php');
$id=$_REQUEST['id'];


    $sql="UPDATE cuti set Status='Approved' where CutiId='".$id."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Status successfully update to approved')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=leavetry.php\">";

    }

else{
    echo "<script>alert('Status unable to update')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=leavetry.php\">";
}