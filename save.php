<?php session_start();?>
<html>
<body>
<?php
    require_once('./control/connect.php');
	// ini_set('display_errors', 1);
    error_reporting(0);
    
    $password = $_POST['txtPass'];
    $confirmpassword = $_POST['confirmPassword'];
    $strT_ID = $_SESSION['id'];

    if($password == "" & $confirmpassword == ""){
        echo "please insert both of them";
    }else if($password != $confirmpassword){
        echo "Password doesn't match";
        echo "<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=edit_profile.php'>";
    }else {
        echo "Password matched";
        session_start();
        include_once('./control/connect.php');
        $ID = $_SESSION['id'];
	    $sql = "UPDATE teacher_table SET 
			T_Pass = '".$_POST["txtPass"]."'
	 		WHERE T_ID = '".$strT_ID."' ";
    }
	$query = mysqli_query($conn,$sql);

	if($query == TRUE) {
        session_destroy();
        echo "Uppdate successfully";
        echo "<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=./view/login/login.php'>";
        
	}else{
        echo "Uppdate Error";
        echo "<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=edit_profile.php'>";
    }

	mysqli_close($conn);
?>
</body>
</html>