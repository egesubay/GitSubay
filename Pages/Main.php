<?php 
include 'Head.php'; 
session_start();
if(!isset($_SESSION['username'])&& !isset($_SESSION['password'])){
  header("location:Login.php");
}

?>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../İmage/Apple.png" alt="Logo" width="40" height="24" class="d-inline-block align-text-top">
      Apple</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">DataTable</a>
        <a class="nav-link" href="#">Models</a>
       
        
      </div>

      
    </div>
    <li class="nav-item dropdown d-flex me-4">
          <a class=" nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../İmage/Profile.png" alt="Logo" width="24" height="30" class="d-inline-block ">
           Account
          </a>
          <ul class=" dropdown-menu border-0">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="../Connections/Mysqllogout.php">Log Out</a></li>

             </ul>
        </li>
  </div>
</nav> 
</body>
</html>