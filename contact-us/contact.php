<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}
require_once "../visiting_pages/visitor.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Help</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/&#xf075.js"></script>
        <link rel="stylesheet" href="../css/styles1.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style2.css" rel="stylesheet">
	<link href="../css/home.css" rel="stylesheet">
	<!--<link href="style3.css" rel="stylesheet">-->
	
    <style>
        body{ font: 14px sans-serif; text-align: center; }
		
		#example img{
			float: left;
			margin-left: 180px;
			height:100%;
			width:100%;
		}
		

}
label,
input,
textarea {
    display: block;
    width: 100%;
}
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

li {
    padding: 0.3em;
}
span {
    font-weight: 700;
    color: #fff;
    line-height: 35px;
    line-height: 2.5rem;
    font-size: 12px;
    font-size: 0.8rem;
    text-transform: uppercase;
}
input[type="submit"] {
    background: #fc4366;
    color: white;
    font-weight: 700;
    font-size: 1.2rem;
    border-radius: 5px;
    margin-top: 1.3em;
}

.container {
    width: 600px;
    margin: 5em auto;
	margin-left: 30%;
}
form {
    background-color: #102336;
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    overflow: hidden;
}

.required-star {
    color: #fc4366;
}

input,
textarea {
    width: 100%;
    padding: 9px 20px;
    border: 1px solid #e1e2eb;
    background-color: #fff;
    color: #102a43;
    caret-color: #829ab1;
    box-sizing: border-box;
    font-size: 14px;
    font-size: 1rem;
    line-height: 29px;
    line-height: 2rem;
    box-shadow: inset 0 2px 4px 0 rgba(206, 209, 224, 0.2);
    border-radius: 3px;
    line-height: 29px;
    line-height: 2rem;
}

    </style>
</head>
<body background="../img/blur1.jpg" style="background-repeat:repeat;background-size: cover;height: 100vh;width: 100%;">


<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      STOCK MARKET
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="nav-link active" >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</a>
	<a href="../welcome_page/welcome.php">BackToHome</a>
    <a href="../homepage/logout.php">Logout</a>
    <a href="../about-us/team.php">About</a>
    <a href="../contact-us/contact-us.php">Contact Us</a>
  </div>
</div>

<!--<div class="wrapper">
<div class="sidebar">
        
        <ul>
            <li><a href="welcome.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="get_stock (1).php"><i class="fas fa-user"></i>Get Stock Data</a></li>
            <li><a href="prediction.php"><i class="fas fa-address-card"></i>Prediction</a></li>
            <li><a href="get_stocknews.php"><i class="fas fa-project-diagram"></i>News Feed</a></li>
            <li><a href="twitter.php"><i class="fas fa-blog"></i>Twitter Sentimental Analysis</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Help</a></li>
			<li><a href="our_team.php"><i class="fas fa-map-pin"></i>Our Team</a></li>
        </ul> 
        
    </div>
</div>-->

	<div class="container">
	<form method="post" action="contact_form.php">
        <ul>
            <li>
                <label for="name"><span>Name <span class="required-star">*</span></span></label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="mail"><span>Email <span class="required-star">*</span></span></label>
                <input type="email" id="email" name="email">
            </li>
            <li>
                <label for="msg"><span>Message</span></label>
                <textarea rows="4" cols="50" id="message" name="message"></textarea>
            </li>
            <li>
                <input type="submit">
            </li>
        </ul>
    </form>
	
</div>
   


</body>




<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->
</html>