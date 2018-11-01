$(document).ready(function(){
	
				
	$('#images').hover(function(){
		$('#left').show();
		$('#right').show();
	},function(){
		$('#left').hide();
		$('#right').hide();
	});		
	
	$('#repairs').hover(function(){
		$('#left').show();
		$('#right').show();
	},function(){
		$('#left').hide();
		$('#right').hide();
	});
	


	function image(ref,subtitle){
		this.ref = ref;
		this.subtitle = subtitle;	
	}		
	
	var vinyl = new image('url("../transfers/vinyl.png")',"Vintage Audio Transfers");
	var film = new image('url("../transfers/film.jpg")',"Vintage Video Transfers");
	var index = 0;
	var backgrounds = [vinyl, film];

	
	function backgroundChange(id,index){
			$(id).css 
			
			
		
		
	};

	
	$('#left').click(function(){
			
			if(index == 0){
				index = 1;
				$("#images").css('background-image',backgrounds[index].ref);
				$("#subtitle").html(backgrounds[index].subtitle);
			}else{
				index = 0;
				$("#images").css('background-image',backgrounds[index].ref);
				$("#subtitle").html(backgrounds[index].subtitle);
			}
	});		
		
	$('#right').click(function(){
					
			if(index == 0){
				index = 1;
				$("#images").css('background-image',backgrounds[index].ref);
				$("#subtitle").html(backgrounds[index].subtitle);
			}else{
				index = 0;
				$("#images").css('background-image',backgrounds[index].ref);
				$("#subtitle").html(backgrounds[index].subtitle);
			}
	});
	
	



	
	
});