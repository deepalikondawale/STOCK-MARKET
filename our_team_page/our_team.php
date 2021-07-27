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
    <title>Our Team</title>
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
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <style>
        body{ font: 14px sans-serif; text-align: center; }
		
		#example img{
			float: left;
			margin-left: 180px;
			height:100%;
			width:100%;
		}


.team-section{
  background: #f1f1f1;
  text-align: center;
}
.inner-width{
  max-width: 1200px;
  margin: auto;
  padding-left: 100px;
  color: #333;
  overflow: hidden;
}
.team-section h1{
  font-size: 20px;
  text-transform: uppercase;
  display: inline-block;
  border-bottom: 4px solid;
  padding-bottom: 50px;
  padding-left:20px;
  margin-left:40px;
}
.pe{
  float: left;
  width: calc(100% / 2);
  overflow: hidden;
  padding: 174px 0;
  transition: 0.4s;
}
.pe:hover{
  background: #ddd;
}
.pe img{
  width: 250px;
  height: 250px;
}
.p-name{
  margin: 16px 0;
  text-transform: uppercase;
}
.p-des{
  font-style: italic;
  color: #3498db;
}
.p-sm{
  margin-top: 12px;
}
.p-sm a{
  margin: 0 4px;
  display: inline-block;
  width: 30px;
  height: 30px;
  transition: 0.4s;
}
.p-sm a:hover{
  transform: scale(1.3);
}
.p-sm a i{
  color: #333;
  line-height: 30px;
}
@media screen and (max-width:600px) {
  .pe{
    width: 100%;
  }
}



    </style>
</head>
<body style="background-color:#807d8a;">


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
  
  <div class="nav-links">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="nav-link active" >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</a>
	<a href="../welcome_page/welcome.php">BackToHome</a>
    <a href="../homepage/logout.php">Logout</a>
    <a href="../about-us/team.php">About</a>
    <a href="../contact-us/contact-us.php">Contact Us</a>
  </div>
</div>


<div class="team-section">
    <div class="inner-width">
   
      <div class="pers">


        <div class="pe">
          <img src="../img/sakshi.png" alt="">
          <div class="p-name">Sakshi Shetty</div>
          <div class="p-des"></div>
          <div class="p-sm">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="pe">
          <img src="../img/deepali.png" alt="">
          <div class="p-name">Deepali Kondawale</div>
          <div class="p-des"></div>
          <div class="p-sm">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

      </div>

    </div>
  </div>
	
</body>




<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->
</html>