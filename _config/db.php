<?php
	
	
	//exemple: $bdd = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "");
	$db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);
	
?>