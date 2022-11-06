
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="loginpagecss.css">
   <?php
        session_start();
   
   ?>
<script >
    function validateform(){  
        event.preventDefault();
        if (myform.username.value==""){  
       alert("Username  can't be blank");  
       myform.username.focus();
       return false;  
        }
       if (myform.password.value==""){  
       alert("password  can't be blank");  
       myform.password.focus();
       return false;
    } 
    document.getElementById('form1').submit();
        
    }
    
</script> 



</head>
<body>
    <div class="centre">
        <h1>Login Form</h1>
        <form method="post" name="myform"   action="connectdb.php" id="form1" onsubmit="validateform()">
            <div class="Username_field" id="username">
                <label>Username</label>
            <input type="text" name="username" >
         
            </div>
            <div class="password_field" id="password">
                <label>Password</label>
                <input type="password" name="password" >
             
            </div>
            <div class="submitbtn">
            <input type="submit" value="Submit">
            </div>
          </form>
        <div class="forsignup">
                <button class="signup_link">
                <a href="registerpagehtml.php" class="Signup">  
                    <!-- <button>Submit</button>   -->
                    Signup?
                  </a>
                </button>
            </div>
            <div>
                
            </div>
            <?php 
                 if(isset($_SESSION['message']))
                 {
                     echo $_SESSION['message'];
                     unset($_SESSION['message']);
                 }
            ?>
    </div>
  
</body>
</html>