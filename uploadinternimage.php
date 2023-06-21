
<?php
    session_start();
include('connect.php');


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    $target_dir = "profile/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
    $fileName=$_FILES['fileToUpload']['name'];
    $fileTmpName=$_FILES['fileToUpload']['tmp_name'];
    $path="profile/".$fileName;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

         if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType  == "jpeg"  || $imageFileType == "gif" ) {

            $sql2="UPDATE staff set image='".$fileName."' where StaffId='".$_SESSION['staffid']."' ";
            $result=$conn->query($sql2);
            if($conn->query($sql2)===TRUE)
            {
              
                      move_uploaded_file($fileTmpName,$path);
                    
                
                      echo"<meta http-equiv=\"refresh\"content=\"0;URL=staffprofile.php\">";
         
            }}
            else{
                $sql2="UPDATE staff set image='' where StaffId='".$_SESSION['staffid']."' ";
                $result=$conn->query($sql2);
                if($conn->query($sql2)===TRUE)
                {
                  
                    echo"<script>alert('Your file must be in jpg,jpeg,png or gif')</script>";
                
                    echo"<meta http-equiv=\"refresh\"content=\"0;URL=internprofile.php\">";
             
                }
               
            }
          }
     




?>