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
<body class="font-hei more">
	<nav class="navbar navbar-default" role="navigation">
		<!-- mobile view -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tee-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">Tee-Shirt</a>
		</div>

		<!-- PC view -->
		<div class="collapse navbar-collapse" id="tee-navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="more.php">发现</a></li>
				<li><a onclick="login()">现在开始</a></li>
			</ul>

			<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<span class="glyphicon glyphicon-search"></span>
				<input type="text" class="form-control" placeholder="搜索项目">
			</div>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="loginButton" onclick="login()">注册 / 登录</a></li>
			</ul>
		</div>
	</nav>

	<div class="popular">
			<div class="intro">
				<div id="hot">
					<p>所有项目</p>
				</div>
			</div>
		<div class="line"></div>
		<div class="gallery">
			<?php
				require('php/init.php');
				$sql = 'SELECT id, title, author, price, img, expect, support, remain FROM item ORDER BY rank';
				$result=$conn->query($sql);
				$content = '';
				while($row=$result->fetch_object()){
					$content .= '<div class="item">';
					$content .= 	'<img src="' . $row->img . '">';
					$content .= 	'<div class="description">';
					$content .= 		'<p class="title">'	. $row->title . '</p>';
					$content .=			'<p class="author">' . $row->author . '</p>';
					$content .= 		'<p class="price">'	. $row->price . '</p>';
					$content .=		'</div>';
					$content .=		'<hr />';
					$content .= 	'<div class="status">';
					$content .= 		'<div class="percent"><p>已达到</p><p class="bold">' . round( ($row->support)/($row->expect)*100 ) .  '%</p></div>';
					$content .=			'<div class="reach"><p>已获支持</p><p class="bold">¥' . $row->support . '</p></div>';
					$content .=			'<div class="time"><p>剩余时间</p><p class="bold">' . $row->remain . '</p></div>';
					$content .=			'<div class="support"><p>支持</p></div>';
					$content .= 	'</div>';
					$content .= 	'<div class="progress">';
					$content .= 		'<div class="progress-bar progress-bar-success" role="progressbar" style="width: ' . round( ($row->support)/($row->expect)*100 ) . '%"></div>';
					$content .=		'</div>';
					$content .= '</div>';
				}
				echo $content;
				$result->close();
				$conn->close();
				?>
		</div>
	</div>
	<div class="footerBar">
		<p class="big font-song">@Tee-Shirt</p>
		<div class="words">
			<p>Copyright©2014 Tee-Shirt</p>
			<p>关注我们: 新浪微博/QQ空间/QQ群</p>
		</div>
	</div>
	<div id="loginView">
		<div class="flag">
			<p>使用合作网站账号登录</p>
		</div>
		<div class="row">
			<img src="img/qq.png">
			<img src="img/weibo.png">
			<img src="img/renren.png">
			<img src="img/douban.png">
		</div>
		<div class="success">
			<p>登录成功</p>
		</div>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>