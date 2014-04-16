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
<body class="font-hei">
	<?php
		require ('php/nav.php');
		require ('php/init.php');

		$itemID = filter_input(INPUT_GET, "itemID", FILTER_SANITIZE_NUMBER_INT);
		
		$sql = 'SELECT * FROM item WHERE id = ' . $itemID;
		$result=$conn->query($sql);
		$row = $result->fetch_assoc();
		$row['detailImg'] = explode(', ',$row['detailImg']);

		$content = '';
		$content .= '<div class="detail">';
		$content .= 	'<div class="detailHeader">';
		$content .= 		'<img src="' . $row['img'] . '">';
		$content .= 		'<div class="words">';
		$content .= 			'<p class="title">' . $row['title'] . '</p>';
		$content .= 			'<p class="author">' . $row['author'] . '</p>';
		$content .=				'<hr />';
		$content .= 			'<div class="status">';
		$content .=					'<div class="price">¥' . $row['price'] . '</div>';
		$content .= 				'<div class="percent"><p>已达到</p><p class="bold">' . round( ($row['support'])/($row['expect'])*100 ) .  '%</p></div>';
		$content .=					'<div class="reach"><p>已获支持</p><p class="bold">¥' . $row['support'] . '</p></div>';
		$content .=					'<div class="time"><p>剩余时间</p><p class="bold">' . $row['remain'] . '</p></div>';
		$content .= 			'</div>';
		$content .= 			'<div class="progress">';
		$content .= 				'<div class="progress-bar progress-bar-success" role="progressbar" style="width: ' . round( ($row['support'])/($row['expect'])*100 ) . '%"></div>';
		$content .=				'</div>';
		$content .= 			'<hr />';
		$content .= 			'<div class="support"><p>支持</p></div><div class="buy"><p>购买</p></div><div class="share"><p>分享</p></div>';
		$content .=			'</div>';
		$content .=		'</div>';
		$content .=		'<div class="greenLine"></div>';
		$content .=		'<div class="detailImg">';
		foreach ($row['detailImg'] as $key => $value) {
			$content .= 	'<img src="' . $value . '">';
		}
		$content .=		'</div>';
		$content .=	'</div>';
		echo($content);
	?>
	<div class="greenLine"></div>';
	<div class="comment">
		<textarea rows="4" placeholder="有什么想法？"></textarea>
		<div class="submit"><p>发送</p></div>
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