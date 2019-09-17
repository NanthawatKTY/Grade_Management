<?php
session_start(); 
require_once('./control/connect.php');
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
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>หน้าหลัก</title>
</head>
<body>
<div class="container">
<div class="mt-5"></div>
<img src="" alt="">
<!-- ชื่ออาจารย์  -->
<div class="text-center"><a type="button" class="btn btn-primary btn-sm pr-5 pl-5 mb-3 mt-3 text-center " href = "./edit_profile.php">เปลี่ยนรหัสผ่าน</a></div>
<div class="text-center"><button type="button" class="btn btn-primary btn-sm pr-5 pl-5 mb-3 mt-3 text-center">สวัสดีคุณ <?php echo $_SESSION['name']; ?></button> <a class="btn btn-outline-dark btn-sm" href="./logout.php">Logout</a>

<!-- ค้นหา -->
<form action="" method='GET' >
<div class="row">
      <div class="col-md-4"></div>
      <input type="text" class="col-md-3 mr-2 form-control" placeholder="รหัสวิชา/ชื่อวิชา">
 <button type="submit" name='submit' class="btn btn-outline-success btn-sm">ค้นหา</button> 
    </div>

    </div>
  </form>
<br>

<h4 class="text-center">รายวิชาที่สอน</h4>

<div class="row">
<table class="table table-bordered table-sm col-9 mx-auto text-center">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">รหัสวิชา</th>
                        <th scope="col">รายวิชา</th>
                        <th scope="col">จัดการ</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>dsad</td>
                    <td>dsad</td>
                    <td><button class="btn btn-outline-secondary btn-sm">จัดการ</button></td>
                    </tr>
                    
                    </tbody>
</div>
            

</div>
</body>
<script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>

</html>


