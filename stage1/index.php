<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		<title>HNG-Stage 1</title>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ribeye+Marrow|Roboto|Roboto+Slab">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<!-- top brand bar -->
		<div class="bar top">
			<span class="capitum">Capitum.</span>
		</div>

		<div class="nav-container">
			<div class="nav">
				<div class="nav-item first"><a href="#">About</a></div>
				<div class="nav-item middle"><a href="#">Store</a></div>
				<div class="nav-item last"><a href="#">Blog</a></div>
			</div>
		</div>
	
		<div class="body-text">
			<p class="enter">
				<a href="#">ENTER</a>
			</p>
			<p class="pre-time">
				The time is
			</p>
			<p class="time">
				<!-- 6:00pm -->
				<?php
					// date_default_timezone_set('UTC');
					echo date('h:i');
				?>
			</p>
		</div>

		<!-- footer -->
		<div class="bar footer">
			<div class="nav ">
				<div class="nav-item first"><a href="#">Social</a></div>
				<div class="nav-item middle"><a href="#">Contact</a></div>
				<div class="nav-item last"><a href="#">Chat</a></div>
			</div>
		</div>
	</body>
</html>