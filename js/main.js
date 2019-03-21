$(document).ready(function(){

	activar_scroll();

	$(".scroll_bar").on("click", function(){

		$(".scroll_bar").parent().removeClass("active");
		$(this).parent().addClass("active");
	});
});


function activar_scroll()
{
	$(".scroll_bar").each(function(){
		$(this).click(function() {
			var hash = $(this).attr('href'), posicionNueva = $(hash).offset().top;
			posicionNueva = posicionNueva - 50;
		$("html, body").animate(
		{
			scrollTop: posicionNueva 
		},
		{
			duration: 1000,
			easing: "swing"
		});
		return false;
	});

	});
}