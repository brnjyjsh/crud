<?php

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbmslecture";

   $con = new mysqli($servername, $username, $password, $dbname);
    
  if(!$con){
    die(mysqli_error($con));
  }

 $registrationID=$_GET['id'];

  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbmslecture";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error) 
    {
      die("Connection failed: " . $con->connect_error);
    }

    
  $FName = mysqli_real_escape_string($con, $_REQUEST['firstName']); 
  $LName = mysqli_real_escape_string($con, $_REQUEST['lastName']); 
  $Bday = mysqli_real_escape_string($con, $_REQUEST['birthday']); 
  $PNum = mysqli_real_escape_string($con, $_REQUEST['phonenum']); 

  $sql = "UPDATE registration SET firstName='$FName', lastName='$LName', birthday='$Bday', phonenum='$PNum' WHERE registrationID=$registrationID"; 
  if(mysqli_query($con, $sql)){

  echo '<script language="javascript">';
  echo 'alert("Updated User Record")
  window.location.replace("Index.php");';
  echo '</script>';


  } else{
    echo "ERROR! Try Again. $sql. " . mysqli_error($con);
  }

?>