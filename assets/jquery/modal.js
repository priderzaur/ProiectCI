$(document).ready(function(){

	$(".modal-button").click(openModal);

	$(".close_nou, .dark-bg").click(closeModal);

	$(".modal").click(function(e){
		e.stopPropagation();
	});

	function closeModal() {
		$(".dark-bg").fadeOut(200);
		$(".modal").fadeOut(200);
	}

	function openModal() {
		$(".dark-bg").fadeIn(200);
		$($(this).data("modal")).fadeIn(200);
	}

});