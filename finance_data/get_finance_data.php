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
	<link href="../css/home-getstockdata.css" rel="stylesheet">
	
	<style>
	body{ font-family: 'Josefin sans', sans-serif;}
	
	h1   {color: #000;}
    h2    {color: #000;}
	row.stock	{color: #fff;}
	
	.table thead th { border-bottom: 2px solid #000; }
	.table td, .table th { border-top : 1px solid #000; }
	
	</style>
	<title>Financials</title>
</head>
<body background="../img/Bg/bg2.jpg" style="background-repeat:repeat;background-size: cover;height: 100vh;width: 100%;">

<script type="text/javascript">
$(document).ready(function(){
	$("#btnFetch1").click(function()
	{
		var symbol=$("#symbol").val();
		$.ajax({
			type: 'POST',
			data: {symbol:symbol},
			url:'../finance_data/fetch_income_data.php',
			success:function(data){
				$("#stock").html(data);
			}
		});
	});
});


</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#btnFetch2").click(function()
	{
		var symbol=$("#symbol").val();
		$.ajax({
			type: 'POST',
			data: {symbol:symbol},
			url:'../finance_data/fetch_Balancesheet_data.php',
			success:function(data){
				$("#stock").html(data);
			}
		});
	});
});


</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#btnFetch3").click(function()
	{
		var symbol=$("#symbol").val();
		$.ajax({
			type: 'POST',
			data: {symbol:symbol},
			url:'../finance_data/fetch_Cashflow_data.php',
			success:function(data){
				$("#stock").html(data);
			}
		});
	});
});


</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#btnFetch4").click(function()
	{
		var symbol=$("#symbol").val();
		$.ajax({
			type: 'POST',
			data: {symbol:symbol},
			url:'../finance_data/fetch_Earnings_data.php',
			success:function(data){
				$("#stock").html(data);
			}
		});
	});
});


</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#btnFetch5").click(function()
	{
		var symbol=$("#symbol").val();
		$.ajax({
			type: 'POST',
			data: {symbol:symbol},
			url:'../finance_data/fetch_IPO_data.php',
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


<div class="container">
<div class="col-md-12" style="margin-top:20px;">
<div style="text-align:center;">
<h1> Financials</h1>

</div>
</div>

<div class="row"style="margin-left:100px;margin-top:50px;">

<div class="col-md-12 style="margin-top:20px;"">
<form class="form-inline">
<div class="form-group">
<pre>                           <input type="text" placeholder="Enter company symbol" class="form-control" id="symbol"></pre>
</div> <pre><button type="button" id="btnFetch1" class="btn btn-success" style="margin-left:20px;">Income Statement</button></pre> <pre><button type="button" id="btnFetch2" class="btn btn-success" style="margin-left:20px;">Balance Sheet</button></pre><pre><button type="button" id="btnFetch3" class="btn btn-success" style="margin-left:20px;">Cash Flow</button></pre> 

                                                                                                              <pre><button type="button" id="btnFetch4" class="btn btn-success" style="margin-left:20px;">Earnings Calender</button></pre>
<pre><button type="button" id="btnFetch5" class="btn btn-success" style="margin-left:20px;">IPO Calender</button></pre>

</form>
</div>
</div>

<center><h2 style="margin-top:30px;"></h2></center>
<div  class="row" id="stock" style="margin-top:30px;">

</div>
</div>
<footer>
		<div class="container">
			<div class="row text-center py-5">
				
				<div class="col-md-4">
					<h3 class="text-center">CONTACT INFO</h3><strong>Contact Info</strong>
					<p>Sakshi Shetty : 9867634106  <br>
					Email : sakshishetty203@gmail.com<br>
					Deepali Kondawale : 8879624066<br>  
					Email : kondawale.deepali97@gmail.com</p>
				</div>
				<div class="col-md-4 pb-5">
					<h3 class="text-center">CONNECT WITH US</h3><br>
					<a class="btn btn-outline-light btn-lg" href="#">SEND US AN EMAIL</a>
				</div>
			</div><!--- End of Row -->
		</div><!--- End of Container -->
	</footer>
	<!--- End of Footer -->
<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->
</body>
</html>



