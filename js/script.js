$(document).ready(function(){
	$('.anchor').click(function(){
		$('.anchor').removeClass('anchorActive')
		changeBanner($(this).attr("target"));
		$(this).addClass('anchorActive');
	});
});
function changeBanner(bannerID){
	var newSrc;
	newSrc = 'img/bg' + bannerID + '.jpg';
	$('#nextBanner').attr("src", newSrc);
	$('#currentBanner').fadeOut('slow');
	$('#nextBanner').fadeIn('slow', function() {
		$('#currentBanner').attr("src", newSrc);
		$('#currentBanner').show();
		$('#nextBanner').hide();
	});
}