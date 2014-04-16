<?php
	$currentBanner = rand(1, 3);
	$content = '';

	$content .= '<div class="banner">';
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
	$content .= '</div>';
	echo($content);
?>