$(document).ready(function() {

	// button for menu
	$(".menu-btn").click(function() {
		$(".top-menu ul").slideToggle();
	});


	// ajax
	$("#myForm").submit(function(){
		$ajax({
			type: "GET",
			url: "mail.php",
			data: $("#myForm").serialize()

		}).done(function(){
			alert("Заявку отправленно!");
		});
		return false;
	});
});	