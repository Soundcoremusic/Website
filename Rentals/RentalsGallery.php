<!DOCTYPE html>
<html>
<head>


<!--META DATA -->
<meta name="author" content="Joseph Castrejon">
<meta name="description" content="Sound Core Music's online store. Check out our deals on instruments, lights, speakers and much more!  ">
<meta name="keywords" content="Sound Core Music Online, Sound Core Music Store, music store Carbondale, music instruments Carbondale, ">
<meta charset='UTF-8'>


<title>Sound Core Music & Video | Store</title>
<link rel='stylesheet' type='text/css' href='../css/SoundCoreTheme.css'>
<link rel='stylesheet' type='text/css' href='../css/StoreTheme.css'>
<link rel='stylesheet' href='../css/animate.css'/>
<link rel="shortcut icon" href="../images/favicon.png" />
<script src='../js/jquery.js'></script>
<script src='../js/rentals.js'></script>
<?php 
include 'server.php';
?>

</head>

<body>

<div id="wrap">	


						<!--HEADER-->
<script type='text/javascript' src='../js/head.js'></script>
						<!--Navigation Bar--> 
	

<script src='../js/nav.js'></script>

						<!--Content of Site-->

	<section id="content" style="height: 1420px;">
		
	<!--CheckBox selection-->			
	<form id="side" action="../Store/Store.php" method="GET" style="height: 1420px;">
	<h3 id="storeHeader"><strong>Categories</strong></h3>

	<button class="catergorySelect" type="submit" name="category" value="Guitars">Guitar</button>
	<button class="catergorySelect" type="submit" name="category" value="Basses">Bass</button>
	<button class="catergorySelect" type="submit" name="category" value="Amps">Amps</button>
	<button class="catergorySelect" type="submit" name="category" value="Pedals">Effects Pedals</button>
	<button class="catergorySelect" type="submit" name="category" value="Microphones">Microphones</button>
	<button class="catergorySelect" type="submit" name="category" value="Speakers">Speakers</button>
	<button class="catergorySelect" type="submit" name="category" value="Pro Audio">Pro Audio</button>
	<button class="catergorySelect" type="submit" name="category" value="Percussion">Percussion</button>
	<button class="catergorySelect" type="submit" name="category" value="DJ Equipment">DJ Equipment</button>
	<button class="catergorySelect" type="submit" name="category" value="Folk Instruments">Folk Instruments</button>
	<button class="catergorySelect" type="submit" name="category" value="Keyboards">Keyboards</button>

	</form>

	<h2 id="categoryHeader">
	<?php 
		if(isset($_GET['cat']))echo $_GET['cat'];
		else echo 'Miscellaneous';
	?> </h2>	
	
	
	<?php for($i=0;$i<$length ; $i++){
		
			echo("<a href='../Rentals/RentalsItem.php?item="
			. $i .
			"'><div class='item'><img class='itemImg' src='../"
			. json_decode($sqlfd[$i][5])[0] .
			"'><p class='itemDesc' >" . $sqlfd[$i][1] . "</p></div></a>");
	}
	?>
		
	</section>

						<!--Footer of Site-->

	
</div>	


<script src="../js/itemLength.js"></script>
<script src="../js/navigation.js"></script>


</body>
</html>
