$(document).ready(function() {
	$("#authentification").on("click", function(){
		var a = $("#inputEmail").val();
		var b = $("#inputPassword").val();
		
		if(a=="admin" && b=="admin"){
			document.location.href="../index.html"
		}
	}); 
});

