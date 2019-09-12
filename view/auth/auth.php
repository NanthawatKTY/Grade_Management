<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>authPage</title>
</head>
<body>

<?php  
if (isset($_POST['submit'])){

    include_once('../../control/connect.php');
    $check = $_POST['idcard'];

    $sql = "SELECT * FROM `teacher_table` WHERE T_ID = '".$_SESSION['id']."' ";
    $query = $conn->query($sql);
    $result = $query->fetch_array();
    // echo 'dasdad';
    $checkstr = substr($result['ID_Card'],9);
    // echo $checkstr;
    // print_r ($query);
    // echo "_____________";
    // echo $check;
    echo $_SESSION['id'];


    //  return false;

    // if($check == $checkstr){
    //     echo "1";
    // }else{
    //     echo "GO $checkstr";
    //     echo $_SESSION['id'];
    // }

    if($check == $checkstr ){
       
        header('location:../../main.php');
    
        
    }
    else {
        echo "<script>";
        echo "alert('ข้อมูลผิดพลาด');";
        echo "</script>";
        session_destroy();
        
        header('location:../../index.php');
     
   
    }
}   

?>


<div class="container mt-5">
<div class="row">
    <div class="col-xl-5 mx-auto">
    <div class="card">
    <form action="" method='POST' >
    <div class="card-header text-center">Authentication</div>
    <div class="card-body">
    <div class="form-group row ">
    <label for="idcard" class=' col-form-label col-sm-7'>กรอกรหัสบัตรประชาชน 4 ตัวท้าย</label>
    <div class="col-sm-5">
    <input type="text" class='form-control  ' id='idcard' name='idcard' >
    </div>
    </div>
    
</div>


</div>
<input type="submit" name='submit' class='btn btn-success col-3 m-auto' value='เข้าสู่ระบบ'>
</form>
</div>
</div>    
</div>
</div>
    

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>