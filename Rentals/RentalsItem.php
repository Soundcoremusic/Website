<!DOCTYPE html>
<html ng-app="rentalsItem">
<head>

<!--META DATA -->
<meta name="author" content="Christopher Kyser">
<meta name="description" content="Audio and video rental services for the Southern Illinois area. We have all types of equipment, including audio and video Systems, staging and trussing, lights, and projectors.">
<meta name="keywords" content="rentals carbondale, audio equipment rentals carbondale, video equipment rentals carbondale">
<meta charset='UTF-8'>

<title>Sound Core Music & Video | Rentals</title>
<link rel='stylesheet' type='text/css' href='../css/SoundCoreTheme.css'>
<link rel='stylesheet' type='text/css' href='../css/Item-View.css'>
<link rel="shortcut icon" href="../images/favicon.png" />
<script src='../js/jquery.js'></script>
<script src='../js/angular.js'></script>
<script src='../js/itemView.js'></script>
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
						<!--Side bar with selling items-->

	<section id='content'>
		<h3><?php echo($reference[1]); ?> </h3>		<!-- requests Name -->
		
		<table id ='view'>

		<tr>
			<td>
			<img src = '<?php echo('../'.$temp[0] . $temp[1]); ?>' ></img>
			</td>
	
			<td>

			<p><?php echo($reference[5]); ?></p> <!-- requests Description -->
			<a><?php echo('../'.$temp[0] . $temp[2] ); ?></a>		 <!-- requests URL -->
			</td>
		</tr>
		</table>
		
		<table id='gallery'>
		<tr>
			<td><a>
			<img src = '<?php echo('../'.$temp[0] . $temp[2]); ?>'></img>
			</a></td>
			
			<td><a>
			<img src = '<?php echo('../'.$temp[0] . $temp[3]); ?>'></img>
			</a></td>
			
			<td><a>
			<img src = '<?php echo('../'.$temp[0] . $temp[4]); ?>'></img>
			</a></td>
		
			<td><a>
			<img src = '<?php echo('../'.$temp[0] . $temp[4]); ?>'></img>
			</a></td>
		</tr>
		</table>
	
	</section>


						<!--Footer of Site-->
<script type='text/javascript' src='../js/foot.js'></script>

</div>	
</body>
</html>
