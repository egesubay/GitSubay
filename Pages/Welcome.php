<?php
include 'Head.php';
?>

<link rel="stylesheet" href="../Css/Welcome.css">
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<body>
    
<div class="container">
<h1>Hello! I'm  <span class="autotype"></span></h1>

<a href="Login.php"class="buton"> JOIN</a>
</div>

<script>
    var typed = new Typed(".autotype",{
        strings:["Student","Engineer","Devoloper"],
        typeSpeed: 100,
        backSpeed:100,
    });
</script>




</body>
</html>