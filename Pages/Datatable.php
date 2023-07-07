<?php 
include 'Head.php'; 
include '../Connections/MysqlDatatable.php';
session_start();
if(!isset($_SESSION['username'])&& !isset($_SESSION['password'])){
  header("location:Login.php");
}
?>

<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.5/b-2.4.0/b-colvis-2.4.0/b-html5-2.4.0/b-print-2.4.0/datatables.min.js"></script>

<table class="table table-bordered">
<thead>
<tr>
   
    <th>Username</th>
    <th>Password</th>
    <th>Name</th>
    <th>Birth</th>
</tr>
</thead>
<tbody>
    <?php while ($user = mysqli_fetch_assoc($datatable)){ ?>
        <tr>
            <td> <?php echo  $user['username']?></td>
            <td> <?php echo $user['password']?></td>
            <td> <?php echo $user['isimler']?></td>
            <td> <?php echo $user['dogumTarihi']?></td>
        </tr>

      
   <?php } ?>
</tbody>
</table>
</body>
</html>