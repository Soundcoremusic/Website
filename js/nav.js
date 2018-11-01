


document.write("																		\
<nav><ul><li><a href='../'>Home</a></li>												\
<li><a href='../Services'>Services</a>													\
<div class='dropdown'>																	\
<a href='../Services/Audio-Video-Transfers.php'>Audio & Video Transfers</a>				\
<a href='../Services/Repairs.php'>Repairs & Set-Ups</a>									\
<a href='../Services/Audio-Video-Installations.php'>Audio & Video Installs</a>			\
<a href='../Services/DJ_Services.php'>DJ Services</a>									\
</div></li><li id='active' class='active'>												\
<a href='../Rentals'>Rentals</a>														\
<div class='dropdown'>																	\
<a href='./PA-System-Rentals.php'>PA & Live Sound</a>									\
<a href='./Video-Projector-Rentals.php'>Video Projectors</a>							\
<a href='./Light-Rentals.php'>Lights</a>												\
<a href='./Stage-Truss-Rentals.php'>Staging & Trussing</a>								\
</div></li><li><a href='../Productions'>Productions</a>									\
<div class='dropdown'>																	\
<a href='../Productions/Film-Video-Production.php'>Video & Film</a>						\
<a href='../Productions/Studio-Production.php'>Audio</a>								\
</div></li><li><a href='../Store'>Store</a></li>										\
</ul></nav>																				\
");



$(document).ready(function(){
	var x = document.getElementsByClassName("active");
	console.log(x);
	$("nav").hover(function(){
		$("li").removeClass('active');
	},
	function(){
		$("#active").addClass('active');
	});
	
});