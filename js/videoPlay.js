$(document).ready(function(){
	$('.thumbnail').click(function(){
		var paused = $(this).paused;
		var x = $(this).attr("id");
	
		console.log(paused);
		
		switch(x){
			case 'vid1':
				$('.video').hide();
				$('#video1').show().css("display","block");
				break;
			case 'vid2':
				$('.video').hide();
				$('#video2').show().css("display","block");
				break;
			case 'vid3':
				$('.video').hide();
				$('#video3').show().css("display","block");
				break;		
		}
	
	});
});


