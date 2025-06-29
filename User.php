<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/lux/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <title>Add User - Bronosa</title>
  </head>
  <body style="background-color: gray;">
    <br>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded">
      <br>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <h1><center>Add User</center></h1>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <br>

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

        $sql = "SELECT MAX(registrationID) AS ID FROM registration";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            { 
            ?>

      <form method="POST" action="Insert.php?id=<?php echo $row['ID']; ?>">
              <div class="form-group">
                    <label>First Name</label>
                          <input type="text" class="form-control" placeholder="Enter Your First Name" name="firstName" autocomplete="off" required>
              </div>

              <div class="form-group">
                    <label>Last Name</label>
                          <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lastName" autocomplete="off" required>
              </div>

              <div class="form-group">
                    <label>Birthday</label>
                          <input type="date" class="form-control" placeholder="Enter Your Birthday" name="birthday"
                          autocomplete="off" required>
              </div>

              <div class="form-group">
                    <label>Phone Number</label>
                          <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phonenum" autocomplete="off" required>
              </div>
              <br>
  
              <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
      </form>  
      
      <?php
            }
        } else {
            echo "0 results";
        }

            $conn->close();

        ?>

    </div>

  

   

  
  </body>
</html>