<?php 
include 'Head.php'; 

?>
<link rel="stylesheet" href="../Css/Login.css">

<body>
  

<div class="box">
    <form action="../Connections/Mysqllogin.php" method="post">
   <h2>Sign In</h2>
    <div class="inputbox">
        <input type="text"id="username" name="username">
        <span>Username</span>
        <i></i>
        <input type="text"name="password"id="password">
        <span>Password</span>
        <i></i>
       

    </div>
    <input type="submit" value="Login" name="login">
    <div class="signbox">
    <h7>İf you dont have account</h7>
    <a href="Register.php" class="signup">Sign Up</a>
    </div>
    </form>
   
</div>

</body>
</html>