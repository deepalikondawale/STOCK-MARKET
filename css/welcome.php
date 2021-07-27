<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!----<title> Website Layout | CodingLab</title>---->
    <link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
 
    <style>
     
	 .carousel-inner > .item{
  height: 100px;
  object-fit:contain;
}
.carousel-inner img {
  width: 100%;
  height: 100%;
  
}
.carousel-item{
  width:100%;
  height:10%;
}
	 
    </style>
</head>
<body>



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
  
  <div class="nav-links">
    <a class="nav-link active" >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</a>
	<a href="reset-password.php">Reset password</a>
    <a href="logout.php">Logout</a>
    <a href="team.php">About</a>
    <a href="contact-us-homepage.php">Contact Us</a>
  </div>
</div>


<div class="main_box">
    <input type="checkbox" id="check">
    <div class="btn_one">
      <label for="check">
        <i class="fas fa-bars"></i>
      </label>
    </div>
    <div class="sidebar_menu">
      <div class="logo">
        <a href="#">Features</a>
          </div>
        <div class="btn_two">
          <label for="check">
            <i class="fas fa-times"></i>
          </label>
        </div>
      <div class="menu">
        <ul>
          <li><i class="fas fa-home"></i>
            <a href="welcome.php.">Home</a>
          </li>
          <li>
            <i class="fas fa-link"></i>
            <a href="get_stock (1).php">Get Stock Data</a>
          </li>
          <li>
            <i class="fas fa-stream"></i>
            <a href="prediction.php">Prediction</a>
          </li>
          <li>
            <i class="fas fa-calendar-week"></i>
            <a href="get_stocknews.php">News Feed</a>
          </li>
          <li>
            <i class="fas fa-paper-plane"></i>
            <a href="twitter.php">Twitter Sentimental Analysis</a>
          </li>
		<li>
            <i class="fas fa-chart-area"></i>
            <a href="live_graph.php">Live Stock Graph</a>
          </li>
		<li>
            <i class="fas fa-coins"></i>
            <a href="get_curr_stock.php">Cryptocurrency</a>
          </li>
          <li>
            <i class="fas fa-address-book"></i>
            <a href="contact.php">Help</a>
          </li>
          <li>
            <i class="fas fa-phone-volume"></i>
            <a href="our_team.php">Our Team</a>
          </li>
        </ul>
      </div>
      <div class="social_media">
        <ul>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </ul>
      </div>
    </div>
  </div>



</body>




<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->
</html>