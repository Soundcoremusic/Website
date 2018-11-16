<!DOCTYPE html>
<html>
<head>

<!--META DATA -->
<meta name="author" content="Crhistopher Kyser">
<meta name="description" content="Audio and video rental services for the Southern Illinois area. We have all types of equipment, including audio and video Systems, staging and trussing, lights, and projectors.">
<meta name="keywords" content="rentals carbondale, audio equipment rentals carbondale, video equipment rentals carbondale">
<meta charset='UTF-8'>

<title>Sound Core Music & Video | Rentals</title>
<link rel='stylesheet' type='text/css' href='../css/SoundCoreTheme.css'>
<link rel='stylesheet' type='text/css' href='../css/Menu-Rentals.css'>
<link rel="shortcut icon" href="../images/favicon.png" />
<script src='../js/jquery.js'></script>
<?php
 include 'reference.php';


?>
</head>

<body>

<div id="wrap">


						<!--HEADER-->
						
<script type='text/javascript' src='../js/head.js'></script>

						<!--Navigation Bar--> 
<script src='../js/nav.js'></script>
						<!--Site Content-->
	<section id='content'>
	<h3>Audio Visual Rentals</h3>
	
	<a class="panel" href='./RentalsItem.php' id="light">
		<table><tr>
			<td>LIGHTING<p>
			words about category
			</p></td>
			<td>
			<img src='../images/RentalsMenu/lighting.png'></img>
			</td>
		</tr></table>
	</a>
	<a class="panel" href='./RentalsItem.php' id="truss">
		<table><tr>
			<td>TRUSS + STAGING<p>
			words about category
			</p></td>
			<td>
			<img src='../images/RentalsMenu/stage.jpg'></img>
			</td>
		</tr></table>
	</a>
	<a class="panel" href='./RentalsItem.php' id="screens">
		<table><tr>
			<td>PROJECTORS + SCREENS<p>
			words about category
			</p></td>
			<td>
			<img src='../images/RentalsMenu/projectors.jpg'></img>
			</td>
		</tr></table>
	</a>
	<a class="panel" href='./RentalsItem.php' id="pa">
		<table><tr>
			<td>PA + LIVE SOUND<p>
			words about category
			</p></td>
			<td>
			<img src='../images/RentalsMenu/mixingBoard.jpg'></img>
			</td>
		</tr></table>
	</a>
	<a class="panel" href='./RentalsItem.php' id="misc" onClick="setInstance();">
		<table><tr>
			<td><?php echo $instance ?><p>
			words about category
			</p></td>
			<td>
			<img src='../images/RentalsMenu/miscellaneous.jpg'></img>
			</td>
		</tr></table>
	</a>

	</section>
	<?php $instance='jub';?>
	<script type='text/javascript'>
	function setInstance(){
		
		console.log("test");
	}
	</script>


						<!--Footer of Site-->
<script type='text/javascript' src='../js/foot.js'></script>

</div>	
</body>
</html>
