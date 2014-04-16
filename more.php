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
<body class="font-hei more">
	<?php
		require ('php/nav.php');
	?>

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
					$content .= 	'<img src="' . $row->img . '" onclick=location.href="detail.php?itemID=' .$row->id . '">';
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