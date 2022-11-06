<?php
include 'connect.php';
$id=$_GET['Updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Name=$row['name'];
$Mobile=$row['mobile'];
$Address=$row['address'];
$age=$row['age'];
$checkup=$row['checkuptype'];

if(isset($_POST['submit'])){
   $Name=$_POST['name'];
   $Mobile=$_POST['mobile'];
   $Address=$_POST['address'];
   $age=$_POST['age'];
   $checkup=$_POST['checkuptype'];
   
   $sql="Update crud set id=$id,name='$Name',mobile='$Mobile',address='$Address',age='$age',checkuptype='$checkup'  where id=$id";
   $result=mysqli_query($con, $sql);
   if($result){
   // echo"data Updated successfully";
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

    <link rel="stylesheet" href="1pagecss.css">
</head>

<body>
<h1 class="heading">Welcome to Laboratary Management System</h1>
    <div class="navigationbar">
        <a class="active" href="user.php">Add Patient Info</a>
        <a class="active" href="display.php">View Patient Info</a>
        <a class="active" href="reportpagehtml.html">Report</a>
    </div>
    <div class="container my-5">
        <form method="Post">
            <div class="form-group">
                <label> Name</label>
                <input type="text" class="form-control" placeholder="Enter name " name="name" autocomplete="off" value=<?php echo $Name;?>>
            </div>
            <div class="form-group">
                <label> Mobile </label>
                <input type="text" class="form-control" placeholder="Enter your mobile no " name="mobile" autocomplete="off"value=<?php echo $Mobile;?>>
            </div>
            <div class="form-group">
                <label> Address</label>
                <input type="text" class="form-control" placeholder="Enter your address " name="address" autocomplete="off"value=<?php echo $Address;?>>
            </div>
            <div class="form-group">
                <label> Age</label>
                <input type="text" class="form-control" placeholder="Enter your age " name="age" autocomplete="off"value=<?php echo $age;?>>
            </div>
            <div class="form-group">
                <label> Checkup type </label>
                <input type="text" class="form-control" placeholder="Enter checkup type " name="checkuptype" autocomplete="off"value=<?php echo $checkup;?>>
            </div>
           
           
           
            <button type="submit" class="btn btn-primary"name="submit">Update</button>
        </form>

    </div>

</body>

</html>
