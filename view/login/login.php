<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<style>
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>






<?php  
if (isset($_POST['submit'])){
    include_once('../../control/connect.php');
    $username = $_POST['username'];
    $password = $_POST['psw'];
    $sql = "SELECT * FROM `teacher_table` WHERE `T_Code` = '".$username."' AND `T_Pass` = '".$password."'";
    $result = $conn->query($sql);
    if($result -> num_rows > 0){
        $row = $result->fetch_array();
        // echo $row['name'];
        $_SESSION['id'] = $row['T_ID'];
        $_SESSION['username'] = $row['T_Code'];
        // $_SESSION['user']= $row['username'];
        $_SESSION['name'] = $row['T_Fname'];
        // $_SESSION['img'] = $row['image'];
        // $_SESSION['$status'] = $row['status'];
        header('location:../auth/auth.php');
        // header('location:index.php');
    }
    else {
        echo "<script>";
        echo "alert('ข้อมูลผิดพลาด');";
        echo "</script>";
    }
}
?>
<div class="container mt-5">
<div class="row">
    <div class="col-xl-5 mx-auto">
    <div class="card">
    <form action="" method='POST' >
    <div class="card-header text-center">เข้าสู่ระบบ</div>
    <div class="card-body">
    <div class="form-group row ">
    <label for="username" class=' col-form-label col-sm-3'>Username</label>
    <div class="col-sm-9">
    <input type="text" class='form-control  ' id='username' name='username' required>
    </div>
    </div>
    <div class="form-group row">
    <label for="psw" class='col-form-label col-sm-3' >Password</label>
   
    <div class="col-sm-9">
    <form action="../../edit_profile.php" method="post">
      <input type="password" class='form-control' id="psw" name="psw" >
    </form>
    <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required -->
    <!-- <label for="verified" class=' col-form-label col-md-15' style="color:Tomato;">* Must contain at least one number, one uppercase, lowercase letter and at least 8 or more characters</label> -->
    </div>
    </div>
    <!-- <input type="password" value="FakePSW" id="myInput"><br><br> -->
    <input type="checkbox" onclick="myFunction()">Show Password
</div>
<div class="card-footer text-center">
    <input type="submit" name='submit' class='btn btn-success' value='เข้าสู่ระบบ'> <a class="ml-3" href="../../reset-password.php">forget password?</a>


</div>
</form>
</div>
</div>    
</div>
</div>








<!-- SCRIPTS -->

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 10) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


<!-- Password Visibilty-->
<script>
function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>