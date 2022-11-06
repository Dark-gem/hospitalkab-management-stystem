<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SignUp Page</title>
    <link rel="stylesheet" href="registerpagecss.css">
   
    <script>
 
 <?php
        session_start();
    
   ?>



function onsubmitfun() {  
  event.preventDefault();
  if(myform.username.value == "") {
      alert("Error: Username cannot be blank!");
      myform.username.focus();
      // window.location = 'registerpagehtml.html';
      return false;
    }
    re = /^\w+$/;
    if(!re.test(myform.username.value)|| myform.username.value.length>20 || myform.username.value.length>20) {
      alert("Invalid Username!!!!!!!");
      myform.username.focus();
      return false;
   
    }
    console.log(myform);
    if(myform.password.value==="" ||  myform.password.value.length<5 || (myform.password.value.length>20))
    {
      alert("Invalid Password !!!!!");
      myform.password.focus();
      return false;
    }

    if(myform.password.value!=myform.password2.value)
    {
      alert("Check Password");
      myform.password.focus();
      myform.password2.focus();
      return false;
    }

    document.getElementById('myform').submit();
   
  } 

  </script>
    

</head>
<body>
  <div class="centre">
    <h1>Signup Form</h1>
    <form name="myform" id="myform" action=" register.php" method="post" onsubmit="onsubmitfun();">  
        <div class="Username_field" id="username">
          <label>Username</label>
        <input type="text" name="username" >
       
        </div>
        <div class="password_field" id="password">
          <label>Password</label>
            <input type="password" name="password" >
            
        </div>
        <div class="repet_password_field" id="confirm_password">
          <label>Confirm Password</label>
          <input type="password" name="password2" onkeyup='check()'; >
          <span id='message'></span>
          
      </div>
        <div>
            <input  type="submit" value="Signup" name="signup"/>
        </div>
        <?php 
                if(isset($_SESSION['message']))
                {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
            ?>
        
        
    </form>
    <div class="link">
      <a href="loginformhtml.php">
        Click Here for login page
   </a>
    </div>
</div>
   
</body>
</html>