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
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

	<link href="../css/home-getstockdata.css" rel="stylesheet">
	<title>Get Stock Data</title>
	<style>
	h1   {color: #000;}
    h2    {color: #000;}
	row.stock	{color: #fff;}
	
	.table thead th { border-bottom: 2px solid #000; }
	.table td, .table th { border-top : 1px solid #000; }

	</style>
</head>

<body background="../img/Bg/bg2.jpg" style="background-repeat:repeat;background-size: cover;height: 100vh;width: 100%;">
<script type="text/javascript">
$(document).ready(function(){
	$("#btnFetch").click(function()
	{
		var symbol=$("#symbol").val();
		$.ajax({
			type: 'POST',
			data: {symbol:symbol},
			url:'../get_live_stock_data/fetch_stockdata (1).php',
			success:function(data){
				$("#stock").html(data);
			}
		});
	});
});


</script>
  
<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      STOCK MARKET
    </div>
  </div>

  <div class="nav-links">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="nav-link active" >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</a>
	<a href="../welcome_page/welcome.php">BackToHome</a>
    <a href="../logout_page/logout.php">Logout</a>
    <a href="../about-us/team.php">About</a>
    <a href="../contact-us/contact-us.php">Contact Us</a>
  </div>
</div>

 <div class="main_box">
    <input type="checkbox" id="check">
    <div class="btn_one">
      <label for="check">
        <i class="fas fa-bars"></i>
      </label>
    </div>
   

<div class="container">
<div class="col-md-12" style="margin-top:20px;">
<div style="text-align:center;">
<h1> Get Stock Data</h1>

</div>
</div>

<div class="row"style="margin-left:100px;margin-top:50px;">

<div class="col-md-12">
<form class="form-inline">
<div class="form-group">
<pre>                                 <input type="text" placeholder="Enter company symbol" class="form-control" id="symbol"></pre>
</div>
 <pre><button type="button" id="btnFetch" class="btn btn-success" style="margin-left:20px;">Fetch Data</button></pre>
</form>
</div>
</div>

<center><h2 style="margin-top:30px;">Live Stock Data</h2></center>
<div class="row" id="stock" style="margin-top:30px;","color:#fff";><br>

</div>
</div>

</div>
<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->
</body>
</html>


