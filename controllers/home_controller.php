<?php

	include_once( '_classes/Articles.php' );
	$Allarticles = Articles::getAllArticles();
	$lastArticle = Articles::getLastArticle( );
	$lastArticleLeft = Articles::getLastArticle( 5 );
	$lastArticleRight = Articles::getLastArticle( 3 );
	
	
	include_once( '_classes/Categories.php'  );
	$allCategories = Categories::getAllCategories( );

?>

