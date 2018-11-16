<?php
$hostNm='localhost';
$dbNm='mysql';
$userNm='root';
$pass='root';
$sql="SELECT * FROM rentals WHERE id=1";


try{
	$conn = new PDO("mysql:host=$hostNm;dbname=$dbNm",$userNm,$pass);				//establish connection
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	$stmt = $conn->prepare($sql);	//reference rentals
	$stmt->execute();
	
	$reference = $stmt->fetch();
	$temp = explode(",",$reference[5]);
	
} catch (PDOException $e){
	echo $e->getMEssage();
}

$conn = null;
?>