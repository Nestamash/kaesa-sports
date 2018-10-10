$(document).ready(function () {});

$(".dropbtn").click(function() {
		
		
		$.get( "http://localhost/pro-finder/index.php/welcome/droppro?email="+$(this).attr("id"), function( data ) {
			window.location = "http://localhost/pro-finder/index.php/welcome/admintab";
		},"html");
});

