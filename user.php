<?php
include 'connect.php';

include 'loggedin.php';

if(isset($_POST['submit'])){
   $Name=$_POST['name'];
   $Mobile=$_POST['mobile'];
   $Address=$_POST['address'];
   $age=$_POST['age'];
   $checkup=$_POST['checkuptype'];
  
   $sql ="insert into crud (name,mobile,address,age,checkuptype)values('$Name','$Mobile','$Address','$age','$checkup')";
   $result=mysqli_query($con, $sql);
   if($result){
    //echo"data inserted successfully";
    header('location:display.php');

   }else{
    die(mysqli_error($con)); 
   }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <form method="Post">
            <div class="form-group">
                <label> Name</label>
                <input type="text" class="form-control" placeholder="Enter name " name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label> Mobile </label>
                <input type="number" class="form-control" id="mobile" placeholder="Enter your mobile no" name="mobile" autocomplete="off" max="10" min="0">
            </div> 
            <div class="form-group">
                <label> Address</label>
                <input type="text" class="form-control" placeholder="Enter your address " name="address" autocomplete="off">
            </div>
            <div class="form-group">
                <label> Age </label>
                <input type="number" class="form-control" placeholder="Enter your age " name="age" autocomplete="off">
            </div>
            <div class="form-group">
                <label> checkup</label>
                <input type="text" class="form-control" placeholder="Enter your checkup type " name="checkuptype" autocomplete="off">
            </div>
           
           
            <button type="submit" class="btn btn-primary"name="submit">Submit</button>
        </form>

    </div>
    <!-- <script>
    $(document).ready(function () {
        $("#mobile").change(function () {
            alert($("#mobile").val());
        });
  });
  </script> -->

</body>

</html>