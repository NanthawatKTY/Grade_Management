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
    <title>จัดการผลการเรียน</title>
</head>
<body>
<div class="container text-center mt-5">

<h3>จัดการผลการเรียน</h3>
     <h6>วิชา................</h6>
     <div class="row">
       <table class="table table-sm col-9 mx-auto">
       <table class="table table-bordered mt-3">
                    <thead>
                      <tr>
                        <th scope="col"><div  align="center">รหัส</th></div>
                        <th scope="col"><div  align="center">ชื่อ - นามสกุล</th></div>
                        <th scope="col"><div  align="center">คะแนน</th></div>
                        <th scope="col"><div  align="center">เกรด</th></div>
                        <th scope="col"><div  align="center">แก้ไข</th></div>
                        <th scope="col"><div  align="center">เพิ่มเกรด</th></div>
                      </tr>
                    </thead>
                    
<!-- 
                      <tr>
                            <td scope="row">60122660103</td>
                            <td>นาย เกิดมาทำไม ไม่รู้เหมือนกัน</td>
                            <td>80</td>
                            <td>A</td>
                            <td><button>แก้ไข</button></td>
                          </tr> -->
    <?php
        
        $ID = $_GET['ID'];
        $_SESSION['ID'] = $ID;
        $sql = "SELECT register_tb.Sub_code, register_tb.Std_code, grade_tb.GPA, student_tb.Std_Fname, student_tb.Std_Lname, subject_tb.Sub_Name
        FROM (((register_tb
        INNER JOIN subject_tb ON register_tb.Sub_code = subject_tb.Sub_code)
        INNER JOIN student_tb ON register_tb.Std_code = student_tb.Std_code) 
        INNER JOIN grade_tb ON register_tb.Std_code = grade_tb.Std_code)          
        WHERE subject_tb.Sub_code='".$_SESSION['ID']."'" ;

    
        $query = mysqli_query($conn, $sql);
        echo $_SESSION['Sub_code'];echo"&nbsp&nbsp";echo"-";echo"&nbsp&nbsp";echo $_SESSION['Sub_Name'];

        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) 
        {
            $_SESSION['Sub_code'] = $result['Sub_code'];
            $_SESSION['Sub_Name'] = $result['Sub_Name'];
            error_reporting(0);
            ?>
            <tr>
           
           
            <td><div align="center">
            <?php echo $result['Std_code'];?></div></td>
            <td><div align="center">
            <?php echo $result['Std_Fname'];echo"&nbsp&nbsp";echo $result['Std_Lname'];?></div></td>
            <td><div align="center">
            <?php echo $result['GPA'];?></div></td>
            <td><div align="center">
            <?php echo $result['grad_font']; ?></div></td>
            <td><div align="center">
            <a class="btn btn-info" href ="./AddScore.php">จัดการ</a></td>
            <td><div align="center">
            <a class="btn btn-info" href ="./AddScore.php">+ เพิ่มเกรด</a></td>
            </tr>
            <?php

        
      }
    ?>
                   
                  </table>

     </div>


</div>
</body>
<script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>

</html>


