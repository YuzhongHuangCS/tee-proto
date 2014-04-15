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
		<!-- mobile view -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tee-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Tee-Shirt</a>
		</div>

		<!-- PC view -->
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
		</div>
	</nav>

	<div class="banner">
		<?php
		$currentBanner = rand(1, 3);
		$content = '';

		$content .= '<img id="currentBanner" src="http://teeshirt-img.stor.sinaapp.com/banner/banner' . $currentBanner . '.jpg">';
		$content .= '<img id="nextBanner" src="">';
		$content .= '<div id="bannerController">';
		for($i=1; $i<=3; $i++){
			if($i === $currentBanner){
				$content .= '<div class="anchor anchorActive" target="' . $i . '"></div>';
			} else{
				$content .= '<div class="anchor" target="' . $i . '"></div>';
			}
		}
		$content .= '</div>';
		echo($content);
		?>
	</div>

	<div class="popular">
			<div id="hot">
				<p>热门项目</p>
			</div>
		<div class="line"></div>
		<div class="gallery">
			<?php
				require('php/init.php');
				$sql = 'SELECT `title`, `author`, `price`, `img`, `expect`, `support`, `remainday` FROM `item` ORDER BY `rank` LIMIT 6';
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
					$content .=			'<div class="time"><p>剩余时间</p><p class="bold">' . $row->remainday . '</p></div>';
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
	<div class="footer">
		<br/>
		<p>@Tee-Shirt</p>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>