<head>

<!-- META DATA -->

<meta name='author' content='Joseph Castrejon'>
<meta name='description' content='Sound Core Music is a family owned music shop in Carbondale Illinois, providing audio and video services to Southern Illinois Area for over 30 years. The number one stop for audio and video equipment in Southern Illinois.'>
<meta name='keywords' content='music shop carbondale,music store carbondale,musical instrument store carbondale,southern illinois music,southern illinois music shop,video carbondale,video service carbondale, music lessons carbondale, guitar store carbondale, music, music store, audio, video'>
<meta charset='UTF-8'>

<meta name='viewport' content='width=320px, initial-scale=1.0'>



<!--stylesheets and script links-->


<title>Sound Core Music & Video | Home</title>
<link rel='stylesheet' type='text/css' href='./css/SoundCoreTheme.css'>
<link rel='stylesheet' href='./css/animate.css'/>
<link rel="shortcut icon" href="./images/Favicon.png" />
<script src='./js/jquery.js'></script>




</head>
<body>

<div id="wrap">


						<!--HEADER-->
<header>
	<img id='scLogo' src='./images/scLogo.png'>
	<img id='Logo' src='./images/logo.png'>
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
	
	
	
						<!--HOMEPAGE LIST--> 
	
	<nav>
				<ul>	
		<li id="active" class="active"><a href='.'>Home</a></li>
		
		
		<li>
			<a href='./Services/Services.php'>Services</a>
				<div class='dropdown'>
					<a href='./Services/Audio-Video-Transfers.php'>Audio & Video Transfers</a>
					<a href='./Services/Repairs.php'>Repairs & Set-Ups</a>	
					<a href='./Services/Audio-Video-Installations.php'>Audio & Video Installs</a>
					<a href='./Services/DJ_services.php'>DJ Services</a>
				</div>
		</li>
		
		
		
		<li>
		<a href='./Rentals/Rentals.php'>Rentals</a>
			<div class='dropdown'>
				<a href='./Rentals/PA-System-Rentals.php'>PA & Live Sound</a>
				<a href='./Rentals/Video-Projector-Rentals.php'>Video Projectors</a>	
				<a href='./Rentals/Light-Rentals.php'>Lights</a>
				<a href='./Rentals/Stage-Truss-Rentals.php'>Staging & Trussing</a>
			</div>
		</li>
		
		
		<li>
			<a href='./Productions/Productions.php'>Productions</a>
				<div class='dropdown'>
					<a href='./Productions/Film-Video-Production.php'>Video & Film</a>
					<a href='./Productions/Studio-Production.php'>Audio</a>	
				</div>
		</li>
		
		<li><a href='./Store/Store.php'>Store</a></li>
		
		</ul>
	</nav>

						<!--Side bar with selling items-->

					
						
						

	<div id='sideBar'>
	<h3 id='GOTW'>Featured Gear</h3>
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

		
		if($itemOne != $itemTwo){
					printf("<a href='" . $front_page[$itemOne][0] . "'> <div class='sideItem' id='" . $front_page[$itemOne][1] . "'></div><h6 class='sideName'>" . $front_page[$itemOne][2] . "</h6></a>");
					printf("<a href='" . $front_page[$itemTwo][0] . "'> <div class='sideItem' id='" . $front_page[$itemTwo][1] . "'></div><h6 class='sideName'>" . $front_page[$itemTwo][2] . "</h6></a>");

		}else if($itemOne == $itemTwo ){
			while($itemOne == $itemTwo){
				$itemOne = rand(0,9);
				$itemTwo = rand(0,9);
			}	
					printf("<a href='" . $front_page[$itemOne][0] . "'> <div class='sideItem' id='" . $front_page[$itemOne][1] . "'></div><h6 class='sideName'>" . $front_page[$itemOne][2] . "</h6></a>");
					printf("<a href='" . $front_page[$itemTwo][0] . "'> <div class='sideItem' id='" . $front_page[$itemTwo][1] . "'></div><h6 class='sideName'>" . $front_page[$itemTwo][2] . "</h6></a>");
				
		}
		
		// While loop to make sure that both items are unique	
	
?>
	</div>
						<!--Content of Site-->

	<div id='content'>
		

		
	<img id='lesPaul' src='./images/SClespaul.jpg'>
	
	<div id='welcome'>
		<h3>Welcome to SoundCoreMusic.com!</h3>
			<p>Sound Core Music is a small family owned shop in Carbondale, IL. 
			We have almost anything you can imagine when it comes to music, whether its the newest recording software or vintage microphones.
			We have a large selection of musical and electronic equipment. We carry instruments and speakers from some of the biggest brands in the music business.
			Stop by our store today and check out what we have, or look under the "Store" section to see some of our deals online.
			</p>
	</div>
	

			
	
	</div>



						<!--Footer of Site-->
	<footer>


		<ul>
								<!--facebook icon-->
		
			<li>
				<a class='socialLink' href="https://www.facebook.com/SoundCoure/" id='facebook'>
					<img class='social' src='./images/Facebook.png'>
					Like our page on facebook!
				</a>
			</li>
			
								<!--reverb icon-->
			<li>
				<a class='socialLink' href="https://reverb.com/shop/sound-core-music-and-video" id='reverb'>
					<img class='social' src='./images/reverb.png'>
					Check out our store at Reverb!
				</a>
			</li>
			
								<!--twitter icon-->
			<li>
				<a class='socialLink' href="https://twitter.com/SoundCoreSI" id='twitter'>
					<img class='social' src='./images/Twitter.png'>
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
	<script src='./js/navigation.js'></script>
</div>	
</body>
</html>
