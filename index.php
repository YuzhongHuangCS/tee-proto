<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>Tee-shirt</title>
	<meta name="keywords" content="tee, shirt, t-shirt" >
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugin.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="font-hei index">
	<?php
		require ('php/nav.php');
		require ('php/banner.php');
	?>

	<div class="popular">
			<div class="intro">
				<div id="hot">
					<p>热门项目</p>
				</div>
				<div id="more" onclick="location.href='more.php'">
					<p>所有项目 <span class="glyphicon glyphicon-circle-arrow-right"></span></p>
				</div>
			</div>
		<div class="line"></div>
		<div class="gallery">
			<?php
				require('php/init.php');
				$sql = 'SELECT item.id, item.title, item.author, item.price, item.img, item.expect, item.support, item.remain FROM item_hot JOIN item ON item_hot.item_id = item.id ORDER BY item_hot.rank';
				$result=$conn->query($sql);
				$content = '';
				while($row=$result->fetch_object()){
					$content .= '<div class="item">';
					$content .= 	'<img onclick=location.href="detail.php?itemID=' .$row->id . '" src="' . $row->img . '">';
					$content .= 	'<div class="description">';
					$content .= 		'<p class="title">'	. $row->title . '</p>';
					$content .=			'<p class="author">' . $row->author . '</p>';
					$content .= 		'<p class="price">¥' . $row->price . '</p>';
					$content .=		'</div>';
					$content .=		'<hr />';
					$content .= 	'<div class="status">';
					$content .= 		'<div class="percent"><p>已达到</p><p class="bold">' . round( ($row->support)/($row->expect)*100 ) .  '%</p></div>';
					$content .=			'<div class="reach"><p>已获支持</p><p class="bold">¥' . $row->support . '</p></div>';
					$content .=			'<div class="time"><p>剩余时间</p><p class="bold">' . $row->remain . '</p></div>';
					$content .=			'<div class="support" onclick=location.href="detail.php?itemID=' .$row->id . '"><p>支持</p></div>';
					$content .= 	'</div>';
					$content .= 	'<div class="progress">';
					$content .= 		'<div class="progress-bar progress-bar-success" role="progressbar" style="width: ' . round( ($row->support)/($row->expect)*100 ) . '%"></div>';
					$content .=		'</div>';
					$content .= '</div>';
				}
				echo $content;
				$result->close();
			?>
		</div>
		<div class="continue" onclick="location.href='more.php'">
			<p>More <span class="glyphicon glyphicon-chevron-right"></span></p>
		</div>
	</div>

	<?php
		require('php/footer.php');
		require('php/loginView.php');
	?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/script.js"></script>
</body>
</html>