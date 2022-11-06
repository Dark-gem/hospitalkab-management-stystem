<?php 

session_start();

if(isset($_SESSION['logged_in']))
{

}
else{
    header("Location: loginformhtml.php"); 
        die();
}
?>