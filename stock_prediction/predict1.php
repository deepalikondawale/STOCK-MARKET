<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}

?>

<?php 
require_once("../db_connection/db_connection.php");
require_once("../stock_prediction/functions.php");
//require_once "../visiting_pages/visitor.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opening Price Prediction</title>
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

</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart);
      // Callback that draws the pie chart
      function draw_my_chart() {
        // Create the data table .
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'x');
        data.addColumn('number', 'y');
		for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseFloat(my_2d[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'Stock Prediction Piechart for <?php echo  $_GET["stock"]?>',
                       width:600,
                       height:400};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
</script>

</script>
	<title>Opening price predictiom</title>

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
	</style>
</head>
<body background="../img/a4.jpg">


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
	<a href="../stock_prediction/prediction.php">BackToHome</a>
    <a href="../logout_page/logout.php">Logout</a>
    <a href="../about-us/team.php">About</a>
    <a href="../contact-us/contact-us.php">Contact Us</a>
  </div>
</div>

<div class="wrapper">
<div class="sidebar">
        
        <ul>
			<br><br><br><br><br><br><br><br>
             <li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="icon icon-th">Opening Price Prediction</span></a></li>
                <li><a href="../stock_prediction/prediction_closing.php?stock=<?php echo $_GET["stock"]?>" id="portfolio-link" class="skel-panels-ignoreHref"><span class="icon icon-th">Closing Price Prediction</span></a></li>

        </ul> 
        
    </div>
</div>
	<!--- End Navigation -->
	<br><br>
<div class="text-block"><br>
 <div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">

        <div class="container mt-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h1><b>STOCK MARKET PREDICTION</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
<?php  $stock=$_GET["stock"] ?>
<h4>Feeded Stock data of <?php echo $_GET["stock"] ?> is upto <?php
  $c=mysqli_query($connection,"SELECT * FROM $stock WHERE id=2");
while($data=mysqli_fetch_array($c))
{
 echo $data['date'];
}
?></h4>
  
                   <h3> Next Day Opening Price Prediction For <?php echo $_GET["stock"];?> : -</h3>
                </div>
            </div>
						<div class="container text-center">
						
						<?php
	
							if (isset($_GET["stock"])) {
								$stock = $_GET["stock"];
								predict_for_opening_price($stock);
							}

						?>

						</div>
           <?php


if($stmt = $connection->query("SELECT x,y FROM piechart1")){


while ($row = $stmt->fetch_row()) {

   $php_data_array[] = $row; // Adding to array
   }

}else{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
 

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";
?>


<div id="chart_div" align="center"></div>
<br><br>
<?php 
 function deleteAll(){
   global $connection;
$sql='TRUNCATE TABLE piechart1';
mysqli_query($connection,$sql);
}
deleteAll();
?>
					</section>
					
		</div>
  

</div>

	
	
  

   
	
	
	



</body>




<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->
</html>