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

<?php
if(isset($_POST['submit'])):
$invesmet=$_POST['invesmet'];
$annualRate=$_POST['return_rate'];
$monthlyRate=$annualRate/12/100;
$years=$_POST['year'];
$months=$years*12;
$futureValue=0;
$futureValue=$invesmet*((pow(1+$monthlyRate,$months)-1)/$monthlyRate)*(1+$monthlyRate);
$invesmet_amonut=$invesmet*12*$years;
$est_rtn=$futureValue-$invesmet_amonut;
endif;

?>

<?
//php require_once("../db_connection/db_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIP Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/&#xf075.js"></script>
<script src="https:d3js.org/d3.v5.min.js">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style2.css" rel="stylesheet">
	<link href="../css/home.css" rel="stylesheet">
	<!--<link href="style3.css" rel="stylesheet">-->

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>

</script>


<script src="path-to/src/pluscharts.js"></script>
        <link rel="stylesheet" href="../css/styles1.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style2.css" rel="stylesheet">
	<!--<link href="style3.css" rel="stylesheet">-->
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
  right: 7px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  padding-left: 5px;
  padding-right: 5px;
  margin-right: 120px;
  margin-bottom: 10px;
  margin-left: 250px;
  line-height: 20pt;
  border: 3px solid #fff;
}

.bg-primary {
    background-color: #371182!important;
}

.btn-success {
    color: #fff;
    background-color: #190505;
    border-color: #f6d424;
}

.table-bordered td, .table-bordered th {
    border: 1px solid #000000;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #04111e;
    background-color: #f3e8e8;
    background-clip: padding-box;
    border: 1px solid #0a5fb5;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

	</style>
</head>
<body background="../img/bg11.jpg" style="background-repeat:repeat;background-size: cover;height: 100vh;width: 100%;">
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
  
  <div class="nav-links">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a class="nav-link active" >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</a>
	<a href="../welcome_page/welcome.php">BackToHome</a>
    <a href="../logout_page/logout.php">Logout</a>
    <a href="../about-us/team.php">About</a>
    <a href="../contact-us/contact-us.php">Contact Us</a>
  </div>
</div>

<div class="wrapper">
<div class="sidebar">

        <ul>
			<br><br><br><br><br><br><br><br>
             <li><a href="#" id="top-link" class="skel-panels-ignoreHref"><span class="icon icon-th">SIP Calculator</span></a></li>
                <li><a href="../calculator/lumpsum.php" id="top-link" class="skel-panels-ignoreHref"><span class="icon icon-th">LumpSum Calculator</span></a></li>

        </ul> 
        
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto py-5">
			<div class="card" style="background-color:black;">
 	<div class="card-header bg-primary text-white text-center font-weight-bold" style="background-color:black;">
 		SIP Calculator
 	</div>
 	<div class="card-body">
 		<form action="" method="post">
 			<div class="form-group">
 				<input type="number" name="invesmet" placeholder="Monthly Investment" required="" class="form-control" value="<?php if(!empty($invesmet)):echo $invesmet; endif;?>">
 			</div>
 			<div class="form-group">
 				<input type="number" min="1" max="30" step="0.1" name="return_rate" placeholder="Expected Return Rate" required="" class="form-control" value="<?php if(!empty($annualRate)):echo $annualRate; endif;?>">
 			</div>
 			<div class="form-group">
 				<input type="number" name="year" placeholder="Time Period" required="" class="form-control" value="<?php if(!empty($years)):echo $years; endif;?>">
 			</div>
 			<div class="form-group text-center">
 				<input type="submit" name="submit" class="btn btn-success" value="Calculate">
 			</div>
 		</form>
 	</div>
 	<div class="card-footer bg-white">
 		<table class="table table-bordered table-hover">
 			<tr>
 				<th>Invested Amount</th>
 				<th>&#8377; <?php echo number_format(@$invesmet_amonut);?></th>
 			</tr>
 			<tr>
 				<th>Est. Returns</th>
 				<th>&#8377; <?php echo number_format(@$est_rtn);?></th>
 			</tr>
 			<tr>
 				<th>Total Value</th>
 				<th>&#8377; <?php echo number_format(@$futureValue);?></th>
 			</tr>
 		</table>
 	</div>
<div id = "container" style = "width: 600px; height: 450px; margin: 0 auto;">
      </div>
      <script language = "JavaScript">
var invest= <?php echo $invesmet_amonut;?>;
var estreturn= <?php echo $est_rtn;?>;
//document.write(return);
         function drawChart() {

//document.write(invest);


            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Browser');
            data.addColumn('number', 'Percentage');
            data.addRows([
            ['Investment Amount',invest],
            ['Estimated-Return',estreturn]
         
            ]);
               
            // Set chart options
         var options = {
               'title':'Browser market shares at a specific website, 2014',
               'width':538,
               'height':400,
			   is3D:true,
			   backgroundColor:'black',
			   legend:{
				  // position: 'labeled',
				   textStyle: {
					   color: 'white'
				   }
			   }
            };

            // Instantiate and draw the chart.
            var chart = new google.visualization.PieChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>
<div class="form-group text-center">
 		<a href="https://groww.in/explore/mutual-funds?utm_source=calc_widget&amp;utm_medium=sip" target="_parent"><input type="submit" name="button" class="btn btn-success" value="INVEST NOW"></a>
 			</div>
 </div>
		</div>
	</div>
 
</div>

</body>
</html>