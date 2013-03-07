$(document).ready(function(){
	$("#signup").submit(function(){
	var email = $('#signup [name="email"]').val();
	
	var str = $(this).serialize();
	$.ajax({
		type: "POST",
		url: "php/signup.php",
		data: str,
		success: function(result){
			if (result=='ok'){
				document.getElementById("email").innerHTML='';
				alert("Success! Will email you when ITN is ready.");
			}
			else{
				alert(result);
			}
		}
	});
	
	document.getElementById("email").onfocus=function(){
		document.getElementById("email").innerHTML=''
	};
	return false;	
	});
});
