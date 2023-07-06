<?php 
include 'Head.php'; 

?>
<link rel="stylesheet" href="../Css/Register.css">
<body>
    
<div class="registerbox">
<h2>Sign Up</h2>
    <form action="../Connections/Mysqlinsert.php" method="post" class="registerform">
    
    <label for="username">Username</label>
        <input type="text" id="username" name="username" class="textinput">
        <label for="password">Password</label>
        <input type="text" id="password" name="password"class="textinput">
        <label for="name">Name</label>
        <input type="text" id="name" name="name"class="textinput">
        <label for="Surname">Surname</label>
        <input type="text" id="surname" name="surname"class="textinput">
        <label for="birth">Date of Birth</label>
        <input type="date" id="birth" name="birth"class="textinput">
        <input type="submit" value="Submit" class="buton">

    </form>

</div>


</body>
</html>