$(document).ready(function(){

$("#login").submit(function(){

var mail_exp = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
//var string_exp =/^[A-Za-z0-9 .'-]+$/;

var email = $('#login [name="email"]').val();
var password = $('#login [name="password"]').val();

var str = $(this).serialize();

$.ajax({
type: "POST",
url: "checklogin.php",
data: str,
success: function(msg){
	if(msg == 'login'){
		alert("ok");
		window.location = "main.php"
	}
	else {
		$('#returnmsg').html(msg);
	}
	
$(this).html(result);

}
});

document.getElementById("email").onfocus=function(){
	document.getElementById("returnmsg").innerHTML='<br>';
	document.getElementById("email").innerHTML=''
	document.getElementById("password").innerHTML=''
};

document.getElementById("password").onfocus=function(){
	document.getElementById("returnmsg").innerHTML='<br>';
	document.getElementById("email").innerHTML=''
	document.getElementById("password").innerHTML=''
};

return false;

});
});
	   