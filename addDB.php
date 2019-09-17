<?php
require_once('./control/connect.php');
$Tcode  = $_POST['txtCode'];
$TPass = md5($_POST['txtPass']);
$TFname  = $_POST['txtFname'];
$TLname  = $_POST['txtLname'];
$IDCard = $_POST['txtIDC'];
$TEmail  = $_POST['txtEmail'];

$check = "SELECT * FROM `teacher_table` WHERE T_Code='$Tcode' OR ID_Card='$IDCard' ";
$resultC = $conn->query($check);
$row = $resultC->num_rows;
// || เครื่องหมายหรือ
if($row > 0 ){
    echo "<script>";
    echo "alert('ข้อมูลซ้ำ');";

    echo "window.location='./InsertAdForm.php';";
    echo "</script>";
}
else{

// print_r($codename);
// print "<br>";
// print_r($name);
// print "<br>";
// print_r($tel);
// print "<br>";
// print_r($email);
// print "<br>";
// print_r($files);
// print "<br>";
// print_r($newname);
// print "<br>";
// print_r($year);
// return false;

    
// print_r($_FILES['filUpload']['size'].'<br>');
// print_r($_FILES['filUpload']['tmp_name'].'<br>');

// return false;
    // if($files['type']=='image/jpeg'){
    //     if($files['size']!=0){
    //         $namepic = $files['name'];
    //         $endname = explode('.',$_FILES['filUpload']['name']);  //ดึงนามสกุลไฟล์มา
    //         $temp    = $files['tmp_name'];
    //         $newname = round(microtime(true)).'.'. end($endname);   //สุ่มชื่อตามนาฬิกา+นามสกุลไฟล์
    //         move_uploaded_file($temp,"image/".$newname);
          
            $sql = "INSERT INTO `teacher_table` (`T_ID`, `T_Code`, `T_Pass`, `T_Fname`, `T_Lname`, `ID_Card`, `T_Email`) VALUES (NULL, '$Tcode', '$TPass', '$TFname', '$TLname', '$IDCard', '$TEmail');";
            $query = $conn->query($sql);
            if($query){
                echo "<script>";
                echo "alert('ลงทะเบียนเรียบร้อย');";
                // return false;
                echo "window.location='./Register_admin.php';";
                echo "</script>";
            }
            else{
                echo "<script>";
                echo "alert('ERROR');";
                echo "window.location='./InsertAdForm.php';";
                echo "</script>";
            }
            
    //     }
    //     else{
    //         echo "<script>";
    //         echo "alert('ไม่มีข้อมูล');";
    //         echo "window.location='insert_sj.php';";
    //         echo "</script>";
    //     }
    // }
    // else{
    //     echo "<script>";
    //     echo "alert('โปรดอัพรูปนามสกุล jpg');";
    //     echo "window.location='insert_sj.php';";
    //     echo "</script>";
    // }
}

?>


