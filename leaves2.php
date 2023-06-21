<?php

include('connect.php');
$id=$_REQUEST['id'];


    $sql="UPDATE cuti set Status='Rejected' where CutiId='".$id."'";
    $result=$conn->query($sql);
    if($conn->query($sql)===TRUE)
    {
        echo "<script>alert('Status successfully update to rejected')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=leavetry.php\">";

    }

else{
    echo "<script>alert('Status unable to update')</script>";
            echo"<meta http-equiv=\"refresh\"content=\"0;URL=leavetry.php\">";
}