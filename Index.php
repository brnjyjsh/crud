<?php

  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbmslecture";

   $con = new mysqli($servername, $username, $password, $dbname);
    
  if(!$con){
    die(mysqli_error($con));
  }

?>

<html lang="EN">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD Registration - Bronosa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/lux/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

  </head>
  <body style="background-color: gray;">
    <br>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded">
       <br>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h1><center>CRUD Registration</center></h1>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
     <br>
                <table class="table table-dark table-hover table-striped table-bordered dt-responsive nowrap">
                        
    <thead>
      <tr>
          <th scope="col"><center>Registration ID</center></th>
          <th scope="col"><center>First Name</center></th>
          <th scope="col"><center>Last Name</center></th>
          <th scope="col"><center>Birthday</center></th>
          <th scope="col"><center>Phone Number</center></th>
          <th scope="col"><center>Options</center></th>
       </tr>

    </thead>
      <tbody>
        <?php

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "adbmslecture";

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) 
            {
              die("Connection failed: " . $conn->connect_error);
            }

            $sql="SELECT * from registration";

            $result=mysqli_query($con,$sql);
                              
          if($result){

            while($row=mysqli_fetch_assoc($result)){
              $registrationID=$row['registrationID'];
              $firstName=$row['firstName'];
              $lastName=$row['lastName'];
              $birthday=$row['birthday'];
              $phoneNo=$row['phonenum'];

              echo ' <tr> 
                <th scope="col">' . '<center>' .  $registrationID . '</center>' . '</th>
                <th scope="col">' . '<center>' . $firstName . '</center>' . '</th>
                <th scope="col">' . '<center>' . $lastName . '</center>' . '</th>
                <th scope="col">' . '<center>' . $birthday . '</center>' . '</th>
                <th scope="col">' . '<center>' . $phoneNo . '</center>' . '</th>

                <td>
                  <center><a href="Edit.php? editid='.$registrationID.'"><button class="btn btn-warning">EDIT</button></a>
                  <a href="Delete.php? deleteid='.$registrationID.'"><button class="btn btn-danger">DELETE</button></a></center>
                </td>
                </tr>';
                }
              }
        ?>
      </tbody>
    </table>

        <center><a href="User.php"><button class="btn btn-success my-4" > ADD User </button></a>  </center>

        </div> 

  </body>
</html>