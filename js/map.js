var thread_id = [];
//index 0 - gif animation
//index 1 - blinking animation

function gifanim(m_id,typ){	
	$(".gifanim").attr("src","");
	var source = "";
	switch(id){
		case 1:
			source = "img/GIFS/DustII/";
			break;
		case 2:
			source = "img/GIFS/Inferno/";
			break;
		case 3:
			source = "img/GIFS/";
			break;
	}
	var img = "";
	if(typ == "flashes"){
		img = source+"flashes/"+m_id+".gif";
	}else if(typ == "smokes"){
		img = source+"smokes/"+m_id+".gif";
	}
	$(".gifanim").attr("src",img);
	
	thread_id[0] = setInterval(function(){
		img = img.replace(/\?.*$/,"")+"?x="+Math.random();;
		$(".gifanim").attr("src",img);
	},smokes[m_id-1].duration);
}

function loadpoints(type){
	var use = (type == "smokes")?smokes:flashes;
	for(var i=0; i<use.length; i++){
		if(id == use[i].map_id){
			$(".mapprop").append("<div class='point "+type+"' id='p"+(i+1)+"'></div>");
			$(".mapprop").append("<div class='target "+type+"' id='t"+(i+1)+"'><span class='glyphicon glyphicon-remove'></span></div>");
			$("#p"+(i+1)).css("top",use[i].y).css("left",use[i].x);
			$("#t"+(i+1)).css("top",use[i].t_y).css("left",use[i].t_x);
		}
		$(".target").hide();
	}
}

function blink(selector){
	thread_id[1] = setInterval(function(){
		$(selector).fadeIn(200, function(){
			$(selector).fadeOut(200);
		});
	},100);
}

function initanim(){
	$(".mapnav").fadeOut(2000);
	$(".point").fadeOut(200);
	$(".point").delay(200).fadeIn(200);
	$(".point").delay(200).fadeOut(200);
	$(".point").delay(200).fadeIn(200);
	$(".point").delay(200).fadeOut(200);
	$(".point").delay(200).fadeIn(200);
}

$(document).ready(function(){
	loadpoints("smokes");
	loadpoints("flashes");
	initanim();
	
	$("#showvid").on("click", function(){
		if($(this).prop('checked') == false){
			$(".vid").hide();
		}else{
			$(".vid").show();
		}
	});

	$(".gifanim").hide();
	
	var type = "smokes";
	$(".type").on("click", function(){
		if($(this).text() == "Flashes"){
			type = "flashes";
			$(".smokes").hide();
		}else if($(this).text() == "Smokes"){
			type = "smokes";
			$(".flashes").hide();
			if($(".point").hasClass("smokes")){
				$(".point").show();
			}
		}
	});
	
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
	
	$(".arrow").mouseenter(function(){
		$(this).children().fadeIn(100);
	});
	
	$(".arrow").mouseleave(function(){
		$(this).children().fadeOut(100);
	});
	
	var pid;
	$(".point").mouseenter(function(){
		$(this).css("border-color","white");
		$(".cap").hide();
		$(".vid").css("border","0.1em solid white");
		$(".gifanim").show();
		
		pid = $(this).attr("id");
		pid = pid.substring(1);
		
		if($('#showtarget').prop('checked')){
			blink($("#t"+pid));
		}
		
		gifanim(pid,type);

	});
	
	$(".point").mouseleave(function(){
		clearInterval(thread_id[1]);
		$(this).css("border-color","lime");

		$(".vid").css("border","0.1em dashed white");
		$(".cap").show();
		clearInterval(thread_id[0]);
		$(".gifanim").hide();
		$(".gifanim").attr("src","");
	});
});