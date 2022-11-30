<?php 
require("connect.php");
//ประกาศตัวแปรรับค่าจากฟอร์ม
$id = $_POST["id"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
//อัปเดทข้อมูล
$sql ="UPDATE student SET name='$name',lastname ='$lastname' WHERE id=$id";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:index.php");
}else{
    echo "เกิดข้อผิดพลาด";
}
?>