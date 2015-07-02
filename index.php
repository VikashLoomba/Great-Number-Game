<?php 
session_start();
if (!isset($_SESSION['gen_number'])) {
		$_SESSION['gen_number'] = rand(0,100);
	}
?>

<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Great Number Game</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
<div class="row">
	<div class="small-9 small-centered column">
		<form method="post" action="process.php">
			<fieldset>
				<legend>Welcome to the Great Number Game</legend>
				<div class="row">
					<div class="small-9 small-centered column text-center">
						<h4>Your job is to guess what number I am thinking.</h4>
						<p>The number I am thinking is between 1 and 100. Take a guess!</p>
					</div>
				</div>
				<div class="row">
					<div class="small-9 small-centered column text-center">
						<label>Your Guess:
							<div class="small-6 small-centered text-centered column">
			                  	<input type="text" name="number" 
			                  	placeholder="Please enter a number (1 to 100)">
			                </div>
	                </label>
					</div>
				</div>
					<div class="row">
						<div class="small-3 small-centered text-centered column">
							<button type="submit" class="button round">Submit Guess</button>
							<p>You entered: <?php
									if(isset($_SESSION['number']))
										echo $_SESSION['number'];
								?></p>
						</div>
					</div>
					<div class="row">
						<div class="small-9 small-centered column text-centered">
							<?if(isset($_SESSION['low']))
										echo $_SESSION['low'];?>
						</div>
					</div>
			</fieldset>
		</form>	
	</div>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>
</body>
</html>