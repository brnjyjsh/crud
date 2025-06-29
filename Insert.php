<?php
  $id=$_GET['id'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "adbmslecture";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }
  
  if($id == '')
    {
      $id=1;
    }
  else 
    {
      $id=$id+1;
    }

  $FName = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
  $LName = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
  $Bday = mysqli_real_escape_string($conn, $_REQUEST['birthday']);
  $PNum = mysqli_real_escape_string($conn, $_REQUEST['phonenum']);

  $sql = "INSERT INTO registration VALUES ($id,'$FName', '$LName', '$Bday', '$PNum')";  
  if(mysqli_query($conn, $sql))
    {
      echo '<script language="javascript">';
      echo 'alert("Information Added Successfully")
      window.location.replace("Index.php");';
      echo '</script>';
    } 
  else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
?>