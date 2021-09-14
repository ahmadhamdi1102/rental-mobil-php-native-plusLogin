$(document).ready(function(){
	$(window).scroll(function(){
		if($(window).scrollTop()>500){
			$('#keatas').fadeIn();
		}else{
			$('#keatas').fadeOut();
		}
	});

	$('#keatas').click(function(){
		$('html, body').animate({scrollTop : '0'},500);
	})
});
