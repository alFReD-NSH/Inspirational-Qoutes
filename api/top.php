<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>assignment</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<!-- build:css(.tmp) css/main.css -->
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<!-- endbuild -->
	</head>
	<body>
		<header><nav><ul>
			<li>
				<a id="header-image" href="/">
					<img src="images/Logo.png" alt="Inspirational Qoutes">
				</a>
			</li>
			<li><a href="all.php"><i class="fa fa-list fa-lg"></i> All</a></li>
			<li><a href="quote.php?genre=Love"><i class="fa fa-heart fa-lg"></i> Love</a></li>
			<li><a href="quote.php?genre=Laughter"><i class="fa fa-smile-o fa-lg"></i> Laughter</a></li>
			<li><a href="quote.php?genre=Life"><i class="fa fa-leaf fa-lg"></i> Life</a></li>
			<li><a href="add.php"><i class="fa fa-plus fa-lg"></i> Add Qoutes</a></li>
			<li>
				<form id="search" action="search.php">
					<input name="query" placeholder="Type something">
					<button type="submit">Search</button>
				</form>
			</li>
		</ul></nav></header>