<?php
  $id=$_GET['editid'];
?>

<html lang="EN">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/lux/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <title>Edit User - Bronosa</title>
  </head>
 <body style="background-color: gray;">
    <br>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded">
      <br>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <h1><center>Edit User</center></h1>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <br>
      <form method="POST" action="Edit1.php?id=<?php echo $id; ?>">

              <div class="form-group">
                    <label>First Name</label>
                          <input type="text" class="form-control" placeholder="Enter Your New First Name" name="firstName" autocomplete="off" required>
              </div>

              <div class="form-group">
                    <label>Last Name</label>
                          <input type="text" class="form-control" placeholder="Enter Your New Last Name" name="lastName" autocomplete="off" required>
              </div>

              <div class="form-group">
                    <label>Birthday</label>
                          <input type="date" class="form-control" placeholder="Enter Your New Birthday" name="birthday"
                          autocomplete="off" required>
              </div>

              <div class="form-group">
                    <label>Phone Number</label>
                          <input type="text" class="form-control" placeholder="Enter Your New Phone Number" name="phonenum" autocomplete="off" required>
              </div>
              <br>
  
              <center><button type="submit" class="btn btn-primary" name="update">UPDATE</button></center>
      </form>  

    </div>
  
  </body>
</html>