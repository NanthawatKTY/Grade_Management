<?php
session_start(); 
require_once('../../control/connect.php');
// error_reporting(0);
$sql = "SELECT * FROM teacher_table";
$query = $conn->query($sql);
// $sql_member = "SELECT * FROM `member` WHERE `status` LIKE 'teacher'";
// $query_teacher = $conn->query($sql_member);
// $result_teacher = $query_teacher->FETCH_ASSOC();
// $status_teacher = $result_teacher['status'];

// $sql_name = "SELECT `name` FROM `center` GROUP BY `name`";
// $query_name = $conn->query($sql_name);

// $sql_getid = "SELECT * FROM `center` WHERE `username` LIKE '".$_SESSION['user']."'";
// $query_getid = $conn->query($sql_getid);
// $result_getid = $query_getid->FETCH_ASSOC();

// print_r($status_teacher);die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>เพิ่มคะแนนให้นักศึกษา</title>
</head>
<body>
<div class="container text-center mt-5">

<h5>เพิ่มคะแนนให้นักศึกษา</h5>
     <h6>วิชา................</h6>
     
     <form action="" class="form-inline">
        <div class="form-group mb-2">
          <label for="staticEmail2">นายสมชาย ไม่ค่อยมี</label>
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <input type="g" class="form-control" id="g" placeholder="คะแนน" name="g">
        </div>
        <button type="submit" class="btn btn-success mb-2" href = "#">บันทึก</button>
      </form>
      <a type="back" class="btn btn-secondary mb-2" href="./GradeManager.php?ID=<?php echo $_SESSION['ID'];?>">กลับหน้าเดิม</a>


</div>
</body>
<script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>

</html>


