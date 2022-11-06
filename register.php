<?php
    include 'connect.php';
    session_start();
    
    $con=new mysqli('localhost','root','','crud operation');
   
    

    $username = $_POST['username'];
    $password = $_POST['password'];


    // database insert SQL code
    $sql = "INSERT INTO `register` (`username`, `password`) VALUES ('$username', '$password')";

    // insert in database 
    $rs = mysqli_query($con, $sql);
    

    if($rs)
    {
        $_SESSION['message'] = "Signup successful";
        header("Location: loginformhtml.php"); 
        die();
    }else{
        $_SESSION['message'] = "Signup failed";
        header("Location: registerpagehtml.php"); 
        die();
    }

?>