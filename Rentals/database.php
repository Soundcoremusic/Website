
<?php
$hostNm='localhost';
$userNm='test';
$pass='pass';



try{
	$dbd = new PDO("mysql:host=$hostname;dbname=mysql");
} catch (PDOException $e){
	echo $e->getMEssage();
	
}
?>
