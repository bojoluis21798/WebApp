function initanim(){
	$(".title").hide();
	$(".desc").hide();
	$(".header").hide();
	$(".maptitle").hide();
	
	$(".header").fadeIn(500);
	
	$(".title").delay(500).show(1000);
	$(".desc").delay(500).show(2000);
	
	var maps = $(".opts").toArray();
	var titles = $(".maptitle").toArray();
	
	for(var i=0; i<titles.length; i++){
		$(titles[i]).delay(2000+(i*500)).fadeIn(500);
	}
	
	for(var i=0; i<maps.length; i++){
		$(maps[i]).delay(3500+(i*500)).animate({"height":"85%"},2000);
	}
}

$(document).ready(function(){
	initanim();
});	