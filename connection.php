<?php 
try{
	$db = new PDO("mysql:host=localhost;dbname=push_electronics", "root", "");
}catch(PDOException $e){
	echo $e->getMessag();
}






 ?>