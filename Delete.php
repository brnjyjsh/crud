<?php

  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbmslecture";

   $con = new mysqli($servername, $username, $password, $dbname);
    
  if(!$con){
    die(mysqli_error($con));
  }

    if(isset($_GET['deleteid'])){
      $registrationID=$_GET['deleteid'];

      $sql="DELETE from registration WHERE registrationID=$registrationID";

      $result=mysqli_query($con,$sql);

        if($result){
          
          header('location:Index.php');
        }else{
          die(mysqli_error($con));
        }
    }

?>