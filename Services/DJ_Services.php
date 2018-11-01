<!DOCTYPE html>
<html>
<head>


<!--META DATA -->
<meta name="author" content="Joseph Castrejon">
<meta name="description" content="DJ services for the Southern Illinois area. Book one of our DJs or rent the equipment and be your own!">
<meta name="keywords" content="southern illinois DJ, carbondale DJ, DJ rental carbondale, local DJ carbondale, ">
<meta charset='UTF-8'>

<title>Sound Core Music & Video | Services - DJ Services</title>
<link rel='stylesheet' type='text/css' href='../css/ServicesTheme.css'>
<link rel='stylesheet' type='text/css' href='../css/DJ_serviceTheme.css'>
<link rel="shortcut icon" href="../images/favicon.png" />
<script src='../js/jquery.js'></script>




</head>
<body>

<div id="wrap">



						<!--HEADER-->
<header>
	<img id='scLogo' src='../images/scLogo.png'>
	<img id='Logo' src='../images/logo.png'>
	<div id='phone'>
		<table id='phoneNum'>
			<tr>
				<td colspan='2' text-align='center'>PHONE</td>
			</tr>
			<tr>
				<td>Retail</td>
				<td>(618) 457-0280</td>
			</tr>
			<tr>
				<td>Studio</td>
				<td>(618) 519-9326</td>
			</tr>
			<tr>
				<td>24 Hr</td>
				<td>(618) 457-5641</td>
			</tr>
		</table>
	</div>
	
		<div id='storeHours'>
	
		<table id='Hours' >
			<tr>
				<td colspan='2' height='30px' border-radius="15px">HOURS</td>
			</tr>
			<tr>
				<td>Mon - Fri </td>
				<td>10am - 7pm</td>	
			</tr>
			<tr>
				<td>Saturday</td>
				<td>10am - 6pm</td>
			</tr>
			<tr>
				<td>Sunday</td>	
				<td>10am - 6pm</td>
			</tr>
		</table>
	</div>
	</header>
							<!--Navigation Bar--> 
	
	<nav>
				<ul>	
		<li><a href='../Index.php'>Home</a></li>
		
		
		<li id="active" class="active">
			<a href='../Services/Services.php'>Services</a>
				<div class='dropdown'>
					<a href='../Services/Audio-Video-Transfers.php'>Audio & Video Transfers</a>
					<a href='../Services/Repairs.php'>Repairs & Set-Ups</a>	
					<a href='../Services/Audio-Video-Installations.php'>Audio & Video Installs</a>
					<a href='../Services/DJ_services.php'>DJ Services</a>
				</div>
		</li>
		
		
		
		<li>
		<a href='../Rentals/Rentals.php'>Rentals</a>
			<div class='dropdown'>
				<a href='../Rentals/PA-System-Rentals.php'>PA & Live Sound</a>
				<a href='../Rentals/Video-Projector-Rentals.php'>Video Projectors</a>	
				<a href='../Rentals/Light-Rentals.php'>Lights</a>
				<a href='../Rentals/Stage-Truss-Rentals.php'>Staging & Trussing</a>
			</div>
		</li>
		
		
		<li>
			<a href='../Productions/Productions.php'>Productions</a>
				<div class='dropdown'>
					<a href='../Productions/Film-Video-Production.php'>Video & Film</a>
					<a href='../Productions/Studio-Production.php'>Audio</a>	
				</div>
		</li>
		
		<li><a href='../Store/Store.php'>Store</a></li>
		
		</ul>
	</nav>



						<!--Side bar with selling items-->

	<div id='sideBar'>
			
	<h3 id='GOTW' >Featured Gear</h3>
<?php	
		$front_page = array(
		array('https://reverb.com/item/3958699-boss-ds-1-distortion','ds1','Boss DS-1 Distortion Pedal',49.99),
		array('https://reverb.com/item/5347662-casio-wk-6600-76-key-portable-keybard','wk6600','Casio WK-6600 Workstation Keyboard',299),
		array('https://reverb.com/item/4059406-ampeg-micro-cl-100w-2x10-mini-bass-stack-black','microcl','Ampeg Micro-CL Mini Bass Stack',349.99),
		array('https://reverb.com/item/4557078-focusrite-scarlett-2i2-usb-audio-interface','scarlett2i2','Focusrite Scarlett USB Audio Interface',149.99),
		array('https://reverb.com/item/3957011-boss-ph-3-phase-shifter','ph3','Boss PH-3 Phase Shifter',129),
		array('https://reverb.com/item/3283266-mackie-cr4-4-creative-multimedia-speakers','cr4','Mackie CR4 - 4" Creative Multimedia Speakers',149.99),
		array('https://reverb.com/item/4057571-austin-apb200rd-double-cutaway-red-bass-guitar','APB200RD','Austin Classic Style Red Bass Guitar',199.99),
		array('https://reverb.com/item/2514447-tanglewood-cove-creek-mandolin-sunburst','covecreek','Tanglewood Cove Creek Mandolin Sunburst',399),
		array("https://reverb.com/item/4352929-qsc-k12-12-powered-pa-speaker","k12speaker","QSC K12 Powered PA Speaker",799.99),
		array("https://reverb.com/item/4385592-schecter-c-6-deluxe-satin-metallic-blue","c6blue","Schecter C-6 Metallic Blue",249)
		);
		
		$itemOne = rand(0,9);
		$itemTwo = rand(0,9);
		$itemThree = rand(0,9);
		
		
		if($itemOne != $itemTwo && $itemOne != $itemThree && $itemTwo != $itemThree){
					printf("<a href='" . $front_page[$itemOne][0] . "'> <div class='sideItem' id='" . $front_page[$itemOne][1] . "'></div><h6 class='sideName'>" . $front_page[$itemOne][2] . "</h6></a>");
					printf("<a href='" . $front_page[$itemTwo][0] . "'> <div class='sideItem' id='" . $front_page[$itemTwo][1] . "'></div><h6 class='sideName'>" . $front_page[$itemTwo][2] . "</h6></a>");
					printf("<a href='" . $front_page[$itemThree][0] . "'> <div class='sideItem' id='" . $front_page[$itemThree][1] . "'></div><h6 class='sideName'>" . $front_page[$itemThree][2] . "</h6></a>");
		}else if($itemOne == $itemTwo || $itemOne == $itemThree || $itemTwo == $itemThree){
			while($itemOne == $itemTwo || $itemOne == $itemThree || $itemTwo == $itemThree){
				$itemOne = rand(0,8);
				$itemTwo = rand(0,8);
				$itemThree = rand(0,8);
			}	
					printf("<a href='" . $front_page[$itemOne][0] . "'> <div class='sideItem' id='" . $front_page[$itemOne][1] . "'></div><h6 class='sideName'>" . $front_page[$itemOne][2] . "</h6></a>");
					printf("<a href='" . $front_page[$itemTwo][0] . "'> <div class='sideItem' id='" . $front_page[$itemTwo][1] . "'></div><h6 class='sideName'>" . $front_page[$itemTwo][2] . "</h6></a>");
					printf("<a href='" . $front_page[$itemThree][0] . "'> <div class='sideItem' id='" . $front_page[$itemThree][1] . "'></div><h6 class='sideName'>" . $front_page[$itemThree][2] . "</h6></a>");
		}
		
		// While loop to make sure that both items are unique
	
	
?>
	

	
	</div>





						<!--Content of Site-->

	<section id='content'>
		<h3 id='header'>DJ Services</h3>
		<p id='headerSub'>Book one of ours or rent the equipment and be your own DJ!</p>
		
		<img id='djmarcb' src='../DJ/2djmarcb2016.jpg'>
		<img id='djlogo' src='../DJ/djmarcblogo2016.jpg'>
		<p id='desc'>Need a DJ for a special event? Call us today and book one of our DJs for it. We provide the equipment and music for your guests to have fun to! Make sure to look at the DJ contract below.
		If you would like a list of DJs that can possibly do your event please <a href='http://blokclubtv.com/dj-marc-b/'>click here</a></p>
		
		<div id='contract'>
			<a  href='../DJ/contract.pdf'>DJ Contract</a>
		</div>
		
	
	
	</section>

						<!--Footer of Site-->
	<footer>


		<ul>
								<!--facebook icon-->
		
			<li>
				<a class='socialLink' href="https://www.facebook.com/SoundCoure/" id='facebook'>
					<img class='social' src='../images/Facebook.png'>
					Like our page on facebook!
				</a>
			</li>
			
								<!--reverb icon-->
			<li>
				<a class='socialLink' href="https://reverb.com/shop/sound-core-music-and-video" id='reverb'>
					<img class='social' src='../images/reverb.png'>
					Check out our store at Reverb!
				</a>
			</li>
			
								<!--twitter icon-->
			<li>
				<a class='socialLink' href="https://twitter.com/SoundCoreSI" id='twitter'>
					<img class='social' src='../images/Twitter.png'>
					Follow us on Twitter!
				</a>
			</li>
		</ul>
		
<iframe
	id='map'
  width="200"
  height="150"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCdTqbIHbyAjFVeVdZx5hloHw3heQuwbb8
    &q=Sound+Core+Music,Carbondale+Il" allowfullscreen>
</iframe>
		
		
	</footer>
	<script src='../js/navigation.js'></script>
</div>	
</body>
</html>
