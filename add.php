<?php require("connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST") :
                  $name = mysqli_real_escape_string($conn,$_POST["name"]);
                  $lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
                  $sql = "INSERT INTO student (name ,lastname) VALUES ('$name','$lastname');";
                  $result = mysqli_query($conn,$sql);
endif;
mysqli_close($conn); 
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
  <form action="add.php" method="POST">
    <div class="mb-2">
    <center><h3>เพิ่มข้อมูลนักศึกษา</h3></center>
  <label for="formGroupExampleInput" class="form-label">ชื่อ</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ชื่อ" name="name">
</div>

<div class="mb-2">
  <label for="formGroupExampleInput2" class="form-label">นามสกุล</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="นามสกุล" name="lastname">
</div>
<button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>

<a class="btn btn-secondary" href="index.php" role="button">กลับหน้าหลัก</a>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>