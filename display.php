<?php
include 'connect.php';?>


!<!doctype html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="1pagecss.css">
    </head>
   

<body>
<h1 class="heading">Welcome to Laboratary Management System</h1>
    <div class="navigationbar">
        <a class="active" href="user.php">Add Patient Info</a>
        <a href="display.php">View Patient Info</a>
        <a href="reportpagehtml.html">Report</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container my-5">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">  Add User</a>
        
          
        </button>
        <div class="con">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
      <th scope="col">Type of checkup</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
</div>
  <tbody>

  <?php
$sql="Select *from crud ";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $address=$row['address'];
        $age=$row['age'];
        $checkup=$row['checkuptype'];
        
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$mobile.'</td>
        <td>'.$address.'</td>
        <td>'.$age.'</td>
        <td>'.$checkup.'</td>
        
        <td>
        <button class="btn btn-primary"><a href="Update.php? Updateid='.$id.' " class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="Delete.php? Deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
    
      </tr>';

    }

}


?>

  </tbody>
</table>
    </div>
</body>
</html>
