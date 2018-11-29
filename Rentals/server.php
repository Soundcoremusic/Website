<?php
$hostNm='localhost';
$dbNm='mysql';
$userNm='root';
$pass='root';




if(isset($_GET['cat'])){

	$sql="SELECT * FROM rentals WHERE Type='" . $_GET['cat'] . "';";	//get item and category from client
	
}
else $sql="SELECT * FROM rentals";
if(isset($_GET['item'])) $itemfd=$_GET['item'];

try{
	$conn = new PDO("mysql:host=$hostNm;dbname=$dbNm",$userNm,$pass);	//establish connection
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	$stmt = $conn->prepare($sql);	//prepare  and execute sql statement
	$stmt->execute();														
	
	$sqlfd = $stmt->fetchAll();
	$length= $stmt->rowCount();
	
} catch (PDOException $e){
	echo $e->getMEssage();
}

$conn = null;	//reset connection


?>