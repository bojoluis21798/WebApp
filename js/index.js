function login(callback){
	var flag = 0; // -1 - no username
				  // -2 no password
				  // 1 successful login
				  // 0 on user found
		$.ajax({
			url: "login.php",
			method: "POST",
			datatype: "text",
			data: {
				username: $("#user").val(),
				password: $("#pass").val(),
			},
			success: function(count){
				flag = count;
				
				if(typeof callback === 'function') callback(flag);
				
			},error: function(){
				alert("Something went wrong");
			}
		});
}

function errorin(selector){
	$(selector).css("border","2px solid red");
	$(selector).css("box-shadow","0 0 10px red");
}

function check(){
	login(function(flag){
		console.log(flag);
		$("#user").siblings("span").text("");
		$("#pass").siblings("span").text("");
		switch(flag){
			case '-1':
				$("#user").siblings("span").text("Please Enter Username");
				errorin("#user");
			break;
			case '-2':
				$("#pass").siblings("span").text("Please Enter Password");
				errorin("#pass");
			break;
			case '1':
				$(".loginform").slideUp(980);
				$(".menubg").slideUp(980);
				setTimeout(function(){ window.location.href = 'main.php'}, 1000);
			break;
			case '0':
				$("#user").siblings("span").text("Username does not match with password");
				errorin("#user");
				errorin("#pass");
			break;
		}
	});
}

$(document).ready(function(){
	$("#login").on("click", function(){
		console.log($("#user").val());
		console.log($("#pass").val());
		check();
	});
	
	$(document).keypress(function(e) {
	  if(e.which == 13) {
		console.log($("#user").val());
		console.log($("#pass").val());
		check();
	  }
	});
});