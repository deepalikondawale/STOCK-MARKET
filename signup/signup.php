
<?php
// Include config file
require_once "../db_connection/config.php";
require_once "../visiting_pages/visitor.php";
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                $_SESSION['status']="Registered successfully";
                $_SESSION['status_code']="success";
            } else{
                $_SESSION['status']= "Oops! Something went wrong. Please try again later.";
                $_SESSION['status_code']="error";
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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up </title>
    <link rel="stylesheet" href="../css/style11.css">
 
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>SignUp Form</header>
        <form id="reg-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"">
 <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="username" required placeholder="Username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>">
          </div>
<span style="color:red;"><?php echo $username_err; ?></span>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?> value="<?php echo $password; ?>" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
           <span style="color:red;"><?php echo $password_err; ?></span>
<div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password"name="confirm_password" class="pass-key" <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?> value="<?php echo $confirm_password; ?>" required placeholder=" Confirm Password">
            <span class="show">SHOW</span>
          </div>
<span style="color:red;"><?php echo $confirm_password_err; ?></span>
           </br>        
 
          <div class="field">
            <input type="submit" value="SIGNUP">
          </div>
        </form>
       <br>
        
        <div class="signup"> have account?
          <a href="../login/login.php">Login</a><br>
		</div><br>
		<div class="signup"> Go to Homepage
          <a href="../homepage/home.html">HOME</a>
        </div>
      </div>
    

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>

<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="js/sweetalert.min.js"></script>

    <?php 
    if(isset($_SESSION['status']) && $_SESSION['status']!='')
    {
        ?>
       
        <script>
    swal({
    title:"<?php echo $_SESSION['status']; ?>",
    text: "You will be redirected to login page",
    icon: "<?php echo  $_SESSION['status_code']; ?>",
    type: "<?php echo  $_SESSION['status_code']; ?>"
}).then(function(){
    window.location="login.php";
});
</script>
<?php
        unset($_SESSION['status']);?>
      

  <?php  }?>
    
  </body>
</html>
