$(document).ready(function(){

var items = $('.item').length;

if(items <= 3){
	$('#content').animate({height:'600px'});
	$('#side').animate({height:'600px'});
}else if(items > 3 && items <= 6){
	$('#content').animate({height:'1000px'});
	$('#side').animate({height:'1000px'});
	
}else if(items > 6){
	$('#content').animate({height:'1420px'});
	$('#side').animate({height:'1420px'});
}

});