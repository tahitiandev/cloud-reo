$(function(){

	$("#formulaire").submit(function(event){

		event.preventDefault();

		var login    = $("#login").val();
		var password = $("#password").val();

		$.post('php/login.php',{login:login,password:password},function(data){

				if(data == "success"){
					document.location.href = 'accueil.php';
				}else{
					$(".response").html(data).slideDown(1200);
					$("#login").val("");
					$("#password").val("");
				}

		});
		return false;
	});

});