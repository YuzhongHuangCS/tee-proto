$(document).ready(function(){
	$('.anchor').click(function(){
		$('.anchor').removeClass('anchorActive')
		changeBanner($(this).attr("target"));
		$(this).addClass('anchorActive');
	});
	$('#loginView .row img').click(function(){
		$('#loginView .row').slideUp(400, function() {
			$('#loginView .success').fadeIn(600, function() {
				setTimeout(function(){
					$('#loginView').css({"left":"100%", "opacity": "0"});
					$('#loginButton').text("黄羽众PillowSky")
				}, 600);
			});
		});
	});
	var navElement = document.querySelector("nav");
	var headroom = new Headroom(navElement, {
  		"tolerance": 5,
  		"offset": 205,
 		"classes": {
  		 	"initial": "animated",
    		"pinned": "slideInDown",
    		"unpinned": "slideOutUp"
  		}
	});
headroom.init();
	// 初始化
	headroom.init(); 
});
function changeBanner(bannerID){
	var newSrc;
	newSrc = 'http://teeshirt-img.stor.sinaapp.com/banner/banner' + bannerID + '.jpg';
	$('#nextBanner').attr("src", newSrc);
	$('#currentBanner').fadeOut('slow');
	$('#nextBanner').fadeIn('slow', function() {
		$('#currentBanner').attr("src", newSrc);
		$('#currentBanner').show();
		$('#nextBanner').hide();
	});
}
function login(){
	$('#loginView .success').hide();
	$('#loginView .row').show();
	$('#loginView').css({"left":"0", "opacity": "0.9"});	
}