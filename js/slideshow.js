$(document).ready(function(){

var left = $('#leftButton');
var right = $('#rightButton');
var index = 0;

function goUp(index){	
	index += 1;
	return index;
}
function goDown(index){
	index -= 1;
	return index;
}
function newContent(index){
	$("#media").children().css("display","none");
	var content = document.getElementsByClassName("content");
	var subtitle = document.getElementsByClassName("subtitle");
	console.log(subtitle);
	console.log(content);
	var length = content.length - 1;
	if(index < 0){
		
		if(subtitle.length === 0){
			index = length;
			length = String(index);
			content[length].style.display = 'block';
			return index;
		}else{
			index = length;
			length = String(index);
			content[length].style.display = "block";
			subtitle[length].style.display = 'block';
			subtitle[length].className = 'subtitle animated flipInX';
			return index;	
		}
		

	}else if(index > length){
		
		if(subtitle.length === 0){
			content["0"].style.display = "block";
			return index = 0;
		}else{
			content["0"].style.display = "block";
			subtitle["0"].style.display = 'block';
			subtitle["0"].className = "subtitle animated flipInX";
			console.log(subtitle);
			return index = 0;		
		}
	}else{
		if(subtitle.length === 0){
			objIndex = String(index);
			content[objIndex].style.display = "block";
			return index;
		}else{
			objIndex = String(index);
			subtitle[objIndex].style.display = 'block';
			subtitle[objIndex].className = 'subtitle animated flipInX';
			content[objIndex].style.display = "block";
			return index;
		}
	}

}
newContent(index);

left.click(function(){
	index = goDown(index);
	index = newContent(index);
});
right.click(function(){
	index = goUp(index);
	index = newContent(index);
});
});
