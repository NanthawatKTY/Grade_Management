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
    <title>ตั้งเกรณ์การให้คะแนน</title>
</head>
<body>
<div class="container text-center mt-5">

<h5>ตั้งเกรณ์การให้คะแนน</h5>
     <h6>วิชา................</h6>
     <div class="row">
       <table class="table table-sm col-9 mx-auto">
  <thead class="thead-light">
    <tr>
      <th scope="col">เกรด</th>
      <th scope="col">คะแนน</th>
      <th scope="col">ตั้งค่า</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">A</th>
      <td>80 - 100</td>
      <td><button class="btn btn-outline-secondary btn-sm">ตั้งเกรณ์</button ></td>
    </tr>
    <tr>
      <th scope="row">B+</th>
      <td>75 - 80</td>
      <td><button class="btn btn-outline-secondary btn-sm">ตั้งเกรณ์</button></td>
    </tr>
    <tr>
      <th scope="row">B</th>
      <td >70 - 75</td>
      <td><button class="btn btn-outline-secondary btn-sm">ตั้งเกรณ์</button></td>
    </tr>
  </tbody>
</table>
     </div>
     <button class="btn btn-sm btn-primary">กลับหน้าเดิม</button>


</div>
</body>
<script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>

</html>


