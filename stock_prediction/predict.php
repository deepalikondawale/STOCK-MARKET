<?php include("header.php");?>
<?php require_once("../db_connection/db_connection.php");?>
<?php require_once("../stock_prediction/functions.php");?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require_once "../visiting_pages/visitor.php";
?>
<html>
<head>

     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/&#xf075.js"></script>
        <link rel="stylesheet" href="styles1.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style2.css" rel="stylesheet">
	<!--<link href="style3.css" rel="stylesheet">-->
    <style>
        body{ font: 14px sans-serif; text-align: center; }
		
		#example img{
			float: left;
			margin-left: 180px;
			height:100%;
			width:100%;
		}
    </style>
</head>
	
	<style>
	body{ font-family: 'Josefin sans', sans-serif;}
	.bg {
  height: 100%; 
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.text-block {
  position: center;
  bottom: 5px;
  right: 5px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.9); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  padding-left: 5px;
  padding-right: 5px;
  margin-right: 120px;
  margin-bottom: 10px;
  margin-left: 120px;
  line-height: 20pt;
  border: 3px solid #fff;
}
	</style>
</head>

<body background="../img/a4.jpg">

<script type="text/javascript">
$(document).ready(function(){
	$("#btnFetch").click(function()
	{
		var symbol=$("#symbol").val();
		$.ajax({
			type: 'POST',
			data: {symbol:symbol},
			url:',,/stock_prediction/fetch_stockdata (1).php',
			success:function(data){
				$("#stock").html(data);
			}
		});
	});
});
</script>

<header>
<section>
<a href="welcome.php" id="logo">STOCK MARKET</a>
<nav>
<ul>

<li><a href="#"><i class="icon-home"></i>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>. Welcome to our site.</a></li>
<li><a href="welcome.php"><i class="icon-user"></i>BackToHome</a></li>
<li><a href="logout.php"><i class="icon-thumbs-up-alt"></i>Logout</a></li>
<li><a href="team.php"><i class="icon-gear"></i>About</a></li>
<li><a href="contact-us.php"><i class="icon-picture"></i>Contact Us</a></li>
</ul>
</nav>
</header><br>
<div class="wrapper">
<div class="sidebar">
        
        <ul>
            <li><a href="welcome.php"><i class="fas fa-home"></i>Home</a></li>
             <li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="icon icon-th">Opening Price Prediction</span></a></li>
             <li><a href="#closing" id="portfolio-link" class="skel-panels-ignoreHref"><span class="icon icon-th">Closing Price Prediction</span></a> </li>
            <li><a href="prediction.php"><i class="fas fa-address-card"></i>Prediction</a></li>
            <li><a href="get_stocknews.php"><i class="fas fa-project-diagram"></i>News Feed</a></li>
            <li><a href="twitter.php"><i class="fas fa-blog"></i>Twitter Sentimental Analysis</a></li>
            <li><a href="contact.php"><i class="fas fa-address-book"></i>Help</a></li>
            <li><a href="our_team.php"><i class="fas fa-map-pin"></i>Our Team</a></li>
        </ul> 
        
    </div>
</div>
	<!--- End Navigation -->

   
<!-- Header -->

      <div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container">
						<header><h3>Opening Price Prediction For <?php echo $_GET["stock"];?> : -</h3></header>
						<?php
	
							if (isset($_GET["stock"])) {
								$stock = $_GET["stock"];
								predict_for_opening_price($stock);
							}

						?>

						</div>
					</section>
					<section id="closing" class="two">
						<div class="container">
						<header><h3>Closing Price Prediction For <?php echo $_GET["stock"];?> : -</h3></header>
						<?php
	
							if (isset($_GET["stock"])) {
								$stock = $_GET["stock"];
								predict_for_closing_price($stock);
							}

						?>

						</div>
					</section>
		</div>

	</body>
</html>
