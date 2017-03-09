$(document).ready(function(){
	$("#reg").on("click", function(){
		if($("#pass").val() != $("#conpass").val()){
			$(".pass").text("Both passwords do not match!");
		}else{
			insert();
		}
		
	});
});

function insert(){
	$.ajax({
		url: "insert.php",
		method: "POST",
		dataType: "json",
		data:{
			username: $("#user").val(),
			password: $("#pass").val(),
		},
		success:function(){
			alert("Registered Successfully. Returned to the index page");
			window.location = "index.php";
		},
		error:function(){
			alert("Registered unsuccessfully. Returned to the register page");
			window.location = "register.php";
		}
	});
}

function check(){
	insert(function(flag){
		
	});
}