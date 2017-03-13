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
	
	setTimeout(function(){
		$(".map").hover(function(){
			$(this).children(".opts").children(".bg").css("background-color","rgba(0,0,0,0)");
			$(this).children(".maptitle").css("background-color","white");
			$(this).children(".maptitle").css("color","black");
			$(this).children(".maptitle").children(".mapname").css("background-color","white");
		});
		
		$(".map").mouseout(function(){
			$(this).children(".opts").children(".bg").css("background-color","rgba(0,0,0,0.5)");
			$(this).children(".maptitle").css("background-color","rgb(20, 20, 20)");
			$(this).children(".maptitle").css("color","grey");
			$(this).children(".maptitle").children(".mapname").css("background-color","rgb(20, 20, 20)");
		});
	},6500);
	
});	