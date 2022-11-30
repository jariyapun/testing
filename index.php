<?php 
    require("connect.php");
    $sql = "SELECT*FROM student";
    $result = mysqli_query($conn,$sql);
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <nav class="navbar " style="background-color:green ;">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:white ;" >CRUD</a>
  </div>
</nav>
  </head><br>
  <body>
   <center><table class="table">
    <h3>รายการข้อมูลนักศึกษา</h3>
    
    <a class="btn btn-success" href="add.php" role="button">เพิ่มข้อมูล</a>
    <form action="delete.php" method="POST">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">แก้ไข</th>
      <th scope="col">ลบ</th>
    </tr>
  </thead>
  <tbody>
  
  <tr>
  <?php foreach($result as $row):?>
    <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['lastname'];?></td>
      <td><a href="edit.php?id=<?= $row['id'];?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
    <td><a href="delete.php?id=<?= $row['id'];?>" class="btn btn-danger btn-sm" >ลบ</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table></center> </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>