<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}
 
require_once "../visiting_pages/visitor.php";
// Include config file
require_once "../db_connection/config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: ../login/login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style2.css" rel="stylesheet">
<style>
body {
  background: url('../img/bg/blur.jpg');
  position: relative;
   background-size: cover;
  height: 100vh;
  width: 100%;
  font-family: sans-serif;
  font-size: 10px
}
form {
  background: #fff;
  padding: 4em 4em 2em;
  max-width: 400px;
  margin: 100px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 5px;
}
p {
  margin: 0 0 3em 0;
  position: relative;
}
label {
  display: block;
  font-size: 1.6em;
  margin: 0 0 .5em;
  color: #333;
}
input {
  display: block;
  box-sizing: border-box;
  width: 100%;
  outline: none
}
input[type="text"],
input[type="password"] {
  background: #f5f5f5;
  border: 1px solid #e5e5e5;
  font-size: 1.6em;
  padding: .8em .5em;
  border-radius: 5px;
}
input[type="text"]:focus,
input[type="password"]:focus {
  background: #fff
}
span {
  border-radius: 5px;
  display: block;
  font-size: 1.3em;
  text-align: center;
  position: absolute;
  background: #2F558E;
  left: 105%;
  top: 25px;
  width: 160px;
  padding: 7px 10px;
  color: #fff;
}
span:after {
  right: 100%;
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(136, 183, 213, 0);
  border-right-color: #2F558E;
  border-width: 8px;
  margin-top: -8px;
}
input[type="submit"] {
  background: #2F558E;
  box-shadow: 0 3px 0 0 #1D3C6A;
  border-radius: 5px;
  border: none;
  color: #fff;
  cursor: pointer;
  display: block;
  font-size: 2em;
  line-height: 1.6em;
  margin: 2em 0 0;
  outline: none;
  padding: .8em 0;
  text-shadow: 0 1px #68B25B;

}

</style>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div><br>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"><br><br>
                <a class="btn btn-link ml-2" href="../welcome_page/welcome.php">Cancel</a>
            </div>
</form>
</body>
</html>