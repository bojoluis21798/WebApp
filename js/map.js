$(document).ready(function(){
	$(".mapnav").hide();
	$(".prev > .mapnav").on("click", function(){
		id -= 1;
		if(id == 0){
			id = 3;
		}
		window.location.href = "map.php?id="+id;
	});
	
	$(".next > .mapnav").on("click", function(){
		id += 1;
		if(id == 4){
			id = 1;
		}
		window.location.href = "map.php?id="+id;
	});
	
	$(document).keydown(function(e){
		if(e.which == 37){
			id -= 1;
			if(id == 0){
				id = 3;
			}
			window.location.href = "map.php?id="+id;
		}
	});
	
	$(document).keydown(function(e){
		if(e.which == 39){
			id += 1;
			if(id == 4){
				id = 1;
			}
			window.location.href = "map.php?id="+id;
		}
	});
	
	$(".arrow").mouseenter(function(){
		$(this).children().fadeIn(100);
	});
	
	$(".arrow").mouseleave(function(){
		$(this).children().fadeOut(100);
	});
});