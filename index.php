<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>Tee-shirt</title>
	<meta name="keywords" content="tee, shirt, t-shirt" >
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="font-hei">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tee-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Tee-Shirt</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="tee-navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Discover</a></li>
				<li><a href="#">Start</a></li>
			</ul>

			<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<span class="glyphicon glyphicon-search"></span>
				<input type="text" class="form-control" placeholder="Search Projects">
			</div>
			</form>

			<ul class="nav navbar-nav navbar-right" id="blue">
				<li><a href="#" id="bule">Sign up</a></li>
				<li><a href="#" id="bule">Log in</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div class="banner">
		<img id="currentBanner" src="img/bg1.jpg">
		<img id="nextBanner" src="">
		<div id="bannerController">
			<div class="anchor anchorActive" target="1"></div>
			<div class="anchor" target="2"></div>
			<div class="anchor" target="3"></div>
		</div>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>