<?php 
    require("connect.php");
    $id=$_GET['id'];
    $sql = "SELECT*FROM student WHERE id =$id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
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
    <a class="navbar-brand" style="color:white ;" href="index.php" >CRUD</a>
  </div>
</nav>
  </head><br>
  <body>
  <body>
  <div class="container">
  <div class="row">
  <center><div class="col-md-4">
  <form action="editdata.php" method="POST">
    <h4>แก้ไขข้อมูลนักศึกษา</h4> <br>
    <input type="text" class="form-control" placeholder="ชื่อ" aria-label="First name" name="name"  value="<?php echo $row['name'];?>"><br>
    <input type="text" class="form-control" placeholder="นามสกุล" aria-label="Last name" name="lastname"  value="<?php echo $row['lastname'];?>"><br>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <button type="submit" class="btn btn-primary" href="index.php">บันทึกข้อมูล</button>
  </div></center>
  </form>
  </div>
  </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>