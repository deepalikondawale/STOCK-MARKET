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
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style2.css" rel="stylesheet">
     <link href="../css/home.css" rel="stylesheet">
	<title>Live Stock Graph</title>
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
  padding-left: 3px;
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
			url:'../live_stock_graph/fetch_stockdata (1).php',
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
    <a href="../logout_page/logout.php">Logout</a>
    <a href="../about-us/team.php">About</a>
    <a href="../contact-us/contact-us.php">Contact Us</a>
  </div>
</div><br>



							<div class="text-block"><br>
							<h2><center><b>Live Stock Graph</b></center></h2><br>
								
							
										<center><a href="../live_stock_graph/candlestick.php?symbol=MSFT&stock=Microsoft"><img title="Microsoft" src="../img/msft.jpg" alt="" / style="width:300px;height:200px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																			
										<a href="../live_stock_graph/candlestick.php?symbol=FB&stock=Facebook"><img title="Facebook" src="../img/facebook.jpg" alt="" / style="width:300px;height:200px;"></a><br><br><br>															
								
										<a href="../live_stock_graph/candlestick.php?symbol=APPL&stock=Apple"><img title="Apple" src="../img/appl.jpg" alt="" / style="width:300px;height:200px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
									<a href="../live_stock_graph/candlestick.php?symbol=GOOG&stock=Google"><img title="Google" src="../img/google.jpg" alt="" / style="width:300px;height:200px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												
									<a href="../live_stock_graph/candlestick.php?symbol=IBM&stock=IBM"><img title="IBM" src="../img/ibm.jpg" alt="" / style="width:300px;height:200px;"></a></center><br>
								
										</div>
						
</body>

</html>