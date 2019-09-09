<?php session_start();?>
<html>
<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
<body>
<?php
    require_once('./control/connect.php');
   ini_set('display_errors', 1);
   error_reporting(~0);

   include './control/connect.php';

   $strT_ID = $_SESSION['id'];

   $sql = "SELECT * FROM teacher_table WHERE T_ID = '".$strT_ID."' ";

   $query = mysqli_query($conn,$sql);

   $result = mysqli_fetch_assoc($query);

?>
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

<div class="container mt-5">
<div class="row">
    <div class="col-xl-5 mx-auto">
    <div class="card">
        <form method="post" action="save.php">

        <div class="form-group row ">
            <label for="txtUser" class=' col-form-label col-sm-3'>Username :</label> 
        <div class="col-sm-9">
            <input type="text" id="txtUser" name="txtUser" title="Username" value="<?php echo $result["T_Code"];?>"  disabled >
        </div>
        </div>
        <div class="form-group row">
            <label for="newPassword" class='col-form-label col-sm-3'>New Password:</label> 
        <div class="col-sm-9">
            <input type="password" id="txtPass" name="txtPass" title="New password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
            <input type="checkbox" onclick="PassVisibity1()">Show Password
            <label for="verified" class=' col-form-label col-md-15' style="color:Tomato;">* Must contain at least one number, one uppercase, lowercase letter and at least 8 or more characters</label>
            
        </div>
        </div>

        <div class="form-group row">
            <label for="confirmPassword" class='col-form-label col-sm-3'>Confirm Password:</label> 
        <div class="col-sm-9">    
            <input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  >
            <input type="checkbox" onclick="PassVisibity2()">Show Password
            <label for="verified" class=' col-form-label col-md-15' style="color:Tomato;">* Must contain at least one number, one uppercase, lowercase letter and at least 8 or more characters</label>
        </div>
        </div>

    </div>
    </div>
</div>
</div>
<div class="card-footer text-center">

<input type="submit" class='btn btn-success' value="Change Password" title="Change password" />


</form>



<?php
mysqli_close($conn);
?>
</body>
</html>



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
function PassVisibity1() {
  var x = document.getElementById("txtPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<!-- Password Visibilty 2-->
<script>
function PassVisibity2() {
  var x = document.getElementById("confirmPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

