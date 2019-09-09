
<?php
	ini_set("SMTP","localhost");
	ini_set("sendmail_from","user11@localhost");

	session_start();


	include_once('./control/connect.php');
    $sql = "SELECT * FROM teacher_table WHERE T_Email = '".trim($_POST['txtEmail'])."' ";
    // $sql = "SELECT * FROM `teacher_table` WHERE `T_Code` = '".$username."' AND `T_Pass` = '".$password."'";
    // $sql = "SELECT * FROM `teacher_table`";
    $result = $conn->query($sql);
    $objResult = $result->fetch_array();
	if(!$objResult)
	{
			echo "Not Found Username or Email!";
	}
	else
	{
			echo "Your password send successful.<br>Send to mail : ".$objResult["T_Email"];		

			$strTo = $_POST["txtEmail"];
			$strSubject = "Your Account information username and password.";
			$strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
			$strHeader .= "From: user11@localhost\nReply-To: user11@localhost";
			$strMessage = "";
			$strMessage .= "Welcome : ".$objResult["T_Fname"].$objResult["T_Lname"]."<br>";
			$strMessage .= "Password : ".$objResult["T_Pass"]."<br>";
			$strMessage .= "=================================<br>";
			$strMessage .= "ประยุทธิ์<br>";
			$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader); 

	}
	// mysql_close();
?>
