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
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Twitter Sentiment Analysis</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='style/sentiment-analysis.css'>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
	<link href="../css/sentiment-analysis.css" rel="stylesheet">
	<link href="../css/style2.css" rel="stylesheet">
	<link href="../css/home.css" rel="stylesheet">

	
	<style>
	body{ font-family: 'Josefin sans', sans-serif;
	background-image: url(../img/blackcube.jpg);
	width: 100%;
	height: 100%
	background-position: center;
	}
	
	.col-12  { color: #fff; }
	</style>
	
</head>

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


<body background="../img/pattern1.jpg">
 <div class="bg">

    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h1><b>Twitter Sentiment Analysis</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 info-text">
                    Type any hashtag or keyword and press enter to visualize Tweet Sentiment..
                </div>
            </div>
            <div class="row">
                <div class="col-12 input-field">
                    <i class="material-icons prefix">#</i>
                    <input data-intro="Enter any twitter hashtag or keyword here" data-position="right" type="search" name="q" id="tag-input" placeholder="Enter in a Keyword here" autocomplete="om" >
                    <button class="btn btn-dark btn-search">
                        Search
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="spinner-border text-primary d-none" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
				
				<div class="col-12 col-md-6">
                    <div id="chartContainer"></div>
                </div>
				
                
                <div class="col-12 col-md-6 text-center">
                    <div id="tweet-list" class="text-left d-none">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="positive-tab" data-toggle="tab" href="#positive" role="tab" aria-controls="positive" aria-selected="true">
                                Positive <span id="positive-counter"></span>
                              </a>
                            </li>
                              <a class="nav-link" id="neutral-tab" data-toggle="tab" href="#neutral" role="tab" aria-controls="neutral" aria-selected="false">
                                Neutral <span id="neutral-counter"></span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="negative-tab" data-toggle="tab" href="#negative" role="tab" aria-controls="negative" aria-selected="false">
                                Negative <span id="negative-counter"></span>
                              </a>
                            </li>
                        </ul>
                          <div class="tab-content">
                            <div class="tab-pane fade show active" id="positive" role="tabpanel" aria-labelledby="positive-tab"></div>
                            <div class="tab-pane fade" id="neutral" role="tabpanel" aria-labelledby="neutral-tab"></div>
                            <div class="tab-pane fade" id="negative" role="tabpanel" aria-labelledby="negative-tab"></div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/canvasjs.min.js"></script>
    <script src='../js/sentiment-analysis.js'></script>
	</div>
</body>
</html>