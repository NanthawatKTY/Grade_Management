<?php
session_start();

require_once("./control/connect.php");

$sql = "SELECT * FROM teacher_table WHERE T_Code ='".$_POST['txtUser']."' AND T_Email ='".$_POST['txtEmail']."'";
$query = $conn->query($sql);
$result = $query->fetch_assoc();

// $password = crypt($_POST['T_Pass']);

// echo $password;

return false;

if(!$result)
{
    echo "Username OR Email ไม่ถูกต้อง";
    echo "<META HTTP-EQUIV='Refresh' CONTENT ='3;URL=./index.php'>";
}
else
{ 
	echo "<script>";
	echo "alert('รหัสผ่านของคุณคือ : ')";
	echo "</script>";
	
  
}






mysqli_close($link);
?>
