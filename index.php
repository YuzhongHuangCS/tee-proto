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
		<img id="currentBanner" src="http://teeshirt-img.stor.sinaapp.com/banner/banner1.jpg">
		<img id="nextBanner" src="">
		<div id="bannerController">
			<div class="anchor anchorActive" target="1"></div>
			<div class="anchor" target="2"></div>
			<div class="anchor" target="3"></div>
		</div>
	</div>

	<div class="popular">
			<div id="hot">
				<p>热门项目</p>
			</div>
		<div class="line"></div>
		<div class="gallery">
			<div class="item">
				<img src="http://teeshirt-img.stor.sinaapp.com/item/item1.png">
				<div class="desc">
					<p class="titile">YouandMe</p>
					<p class="author">南国</p>
					<p class="price">49元</p>
				</div>
				<hr>
				<div class="status">
					<div class="percent"><p class="up">75%</p><p>已达到</p></div>
					<div class="reach"><p class="up">¥7520</p><p>已获支持</p></div>
					<div class="time"><p class="up">25天</p><p>剩余时间</p></div>
					<div class="support"><p>支持</p></div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
				</div>
			</div>
			<div class="item">
				<img src="http://teeshirt-img.stor.sinaapp.com/item/item2.png">
				<div class="desc">
					<p class="titile">YouandMe</p>
					<p class="author">南国</p>
					<p class="price">49元</p>
				</div>
				<hr>
				<div class="status">
					<div class="percent"><p class="up">75%</p><p>已达到</p></div>
					<div class="reach"><p class="up">¥7520</p><p>已获支持</p></div>
					<div class="time"><p class="up">25天</p><p>剩余时间</p></div>
					<div class="support"><p>支持</p></div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
				</div>
			</div>
			<div class="item">
				<img src="http://teeshirt-img.stor.sinaapp.com/item/item4.png">
				<div class="desc">
					<p class="titile">YouandMe</p>
					<p class="author">南国</p>
					<p class="price">49元</p>
				</div>
				<hr>
				<div class="status">
					<div class="percent"><p class="up">75%</p><p>已达到</p></div>
					<div class="reach"><p class="up">¥7520</p><p>已获支持</p></div>
					<div class="time"><p class="up">25天</p><p>剩余时间</p></div>
					<div class="support"><p>支持</p></div>
				</div>
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
				</div>
			</div>
		</div>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>