<?php
require_once "../visiting_pages/visitor.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!--<link rel="stylesheet" href="styles1.css">-->
	<!--<link href="style.css" rel="stylesheet">-->
	<link href="../css/style2.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/home.css">
   <title>About</title>
</head>

<style>

body, html {
  height: 100%;
  margin: 0;
  font-family: 'Josefin sans', sans-serif;
}

.bg {
  height: 100%; 
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.6); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  padding-left: 20px;
  padding-right: 20px;
  margin-right: 50px;
  margin-bottom: 80px;
  margin-left: 800px;
  line-height: 20pt;
  border: 3px solid #fff;
}


</style>


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
  
  <div class="nav-links">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="../homepage/home.html">BackToHome</a>
  </div>
</div>

<div class="text-block">
    <br><h2><center>STOCK MARKET</center></h2><br>
    <br><p>Stock market analysis and prediction is one of the area in which past data could be used to anticipate 
and predict data about future. Using the process called Markov Chains we will implement tto predict the future
stock prices for a few given companies. News Feed will also be implemented in this project which will display dynamic local and
international news articles, weather forecast news and a selection of current stock prices with the help of API’s. 
Stock market experts often use blogs or social networking platforms to express their views about the current trends in the market.
The people looking to invest in any particular stock have to search the web for prediction by experts on a particular stock so it is 
impossible for the user to go through all the opinions expressed across site.</p><br>
  </div>


</body>
</html>