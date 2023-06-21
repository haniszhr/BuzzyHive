
<?php
session_start();
include('connect.php');



if (isset($_POST['submit'])){
    $type = $_POST['type'];
    $reason = $_POST['reason'];
    $start = $_POST['datestart'];
    $end = $_POST['dateto'];
    $fileName=$_FILES['file']['name'];
      $fileTmpName=$_FILES['file']['tmp_name'];
      $path="upload/".$fileName;
if(!empty($fileName)){
$sql7="UPDATE cuti set FileName='".$fileName."',  Type='".$type."', Reason='".$reason."' , DateStart='".$start."',  DateEnd='".$end."' where CutiId='".$_SESSION['cutiid']."' ";
$result=$conn->query($sql7);
if($conn->query($sql7)===TRUE)
{
    $query3=" UPDATE cuti SET Days=1+DATEDIFF(DateEnd,DateStart)";
    $query_run = mysqli_query($conn, $query3);
    if ($query_run){
    
    }
    move_uploaded_file($fileTmpName,$path);
    $sql="SELECT * FROM cuti where CutiId='".$_SESSION['cutiid']."'";
    $result=$conn->query($sql);
if($result->num_rows>0) {
      while($row=$result->fetch_assoc()){
        echo "<script>alert('Successfully update')</script>";

            echo"<meta http-equiv=\"refresh\"content=\"0;URL=internleave.php\">";
          
      }
    
   
}


    }}
    else{
      
            $sql7="UPDATE cuti set  Type='".$type."', Reason='".$reason."' , DateStart='".$start."',  DateEnd='".$end."' where CutiId='".$_SESSION['cutiid']."' ";
            $result=$conn->query($sql7);
            if($conn->query($sql7)===TRUE)
            {
                $query3=" UPDATE cuti SET Days=1+DATEDIFF(DateEnd,DateStart)";
                $query_run = mysqli_query($conn, $query3);
                if ($query_run){
                
                }
                move_uploaded_file($fileTmpName,$path);
                $sql="SELECT * FROM cuti where CutiId='".$_SESSION['cutiid']."'";
                $result=$conn->query($sql);
            if($result->num_rows>0) {
                  while($row=$result->fetch_assoc()){
                    echo "<script>alert('Successfully update')</script>";
            
                        echo"<meta http-equiv=\"refresh\"content=\"0;URL=internleave.php\">";
                      
                  }
                
               
            }
            
            
                }
    }
}

else{

   
}
$conn->close();

?>

