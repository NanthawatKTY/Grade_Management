<?php
session_start(); 
require_once('./control/connect.php');
// error_reporting(0);
$sql = "SELECT * FROM center";
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
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>หน้าหลัก</title>
</head>
<body>
<div class="container">
<div class="mt-5"></div>
<img src="" alt="">
<img src="image/<?php echo $_SESSION['img'];?>" style=";width:250px;border: 3px solid #fff;border-radius: 50%; display: block;
margin: auto;"   alt="">
<!-- ชื่ออาจารย์  -->
<div class="text-center"><a type="button" class="btn btn-primary btn-sm pr-5 pl-5 mb-3 mt-3 text-center" href = "./edit_profile.php">แก้ไขบัญชีผู้ใช้</a></div>
<div class="text-center"><button type="button" class="btn btn-primary btn-sm pr-5 pl-5 mb-3 mt-3 text-center">สวัสดีคุณ <?php echo $_SESSION['name']; ?></button> <a class="btn btn-outline-dark btn-sm" href="./logout.php">Logout</a>

<!-- ค้นหา -->
<form action="" method='GET' >
<div class="row">
      <div class="col-md-3"></div>
      <select class="col-md-3 mr-2" name="txtKeyword_name" id="txtKeyword" class="form-control">
        <option selected>เลือกปีการศึกษา...</option>
        <?php while($result_name = $query_name->FETCH_ASSOC()) { ?>
        <option><?php echo $result_name['name']?></option>
        <?php }?>
        </select> 
      <select class="col-md-2" name="txtKeyword" id="txtKeyword" class="form-control">
        <option selected>เลือกปีการศึกษา...</option>
        <option>2560/1</option>
        <option>2560/2</option>
        <option>2561/1</option>
        <option>2561/2</option>
      </select> 
     <?php echo "&nbsp;"?> <button type="submit" name='submit' class="btn btn-outline-success btn-sm">ค้นหา</button> 
    </div>

    </div>
  </form>
<br>

<table class="table table-bordered text-center f14">
  <thead>
    <tr>
      <th scope="col">รหัสรายวิชา/ชื่อรายวิชา</th>
      <th scope="col">เช็คชื่อนักศึกษา</th>
      <th>ลบ</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  
  $status = $_SESSION['$status'];
  // print_r($status);
  if($status != teacher) { ?>
  <a href="insert_sj.php"><button type="button" class="btn btn-outline-dark mb-2">+ เพิ่มรายวิชา</button></a>
  <tr> <?php 
            if($_GET['txtKeyword']!= "") {
              // $sql_txtKeyword_name = "SELECT * FROM member WHERE `name`= '".$_GET["txtKeyword_name"]."' ";
              // print_r($_GET["txtKeyword_name"]);die
              $sql_txtKeyword = "SELECT * FROM center WHERE `year`= '".$_GET["txtKeyword"]."' AND `name`= '".$_GET["txtKeyword_name"]."' ";
              $query_txtKeyword = $conn->query($sql_txtKeyword);
            while($result = $query_txtKeyword->fetch_assoc()){?>
          <td><?php echo $result['name_sj'];?></td>
          <td> <a href="table.php?id=<?php echo $result['id']?>" class="btn btn-sm btn-dark"> ✔ เช็คชื่อ</a> </td>
          <td><a class="btn btn-danger btn-sm" href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='del_center_save.php?id=<?php echo $result["id"];?>';}">ลบ</a></td>
          </tr>
     <?php }}?> 

  <?php  } else{ ?>
          <tr>
          <?php 
            if($_GET['txtKeyword']!= "") {
              $sql_txtKeyword = "SELECT * FROM center WHERE `year` = '".$_GET["txtKeyword"]."' AND `name`= '".$_GET["txtKeyword_name"]."' ";
              $query_txtKeyword = $conn->query($sql_txtKeyword);
            while($result = $query_txtKeyword->fetch_assoc()){?>
          <td><?php echo $result['name_sj'];?></td>
          <td> <a href="table.php?id=<?php echo $result['id']?>" class="btn btn-sm btn-dark"> ✔ เช็คชื่อ</a> </td>
          </tr>
     <?php 
           }} }
      ?> 

  </tbody>
</table>
</div>
</body>
<script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>

</html>


