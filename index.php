<?php
	
	//Inclusion fichiers principaux
	include_once( '_config/config.php' );  //constantes, gestion affichage erreurs, session_start()...
	include_once( '_config/db.php' ); //connexion base de données
	include_once( '_functions/functions.php' ); //fonctions non-spécifiques
	
	
	include_once ( '_classes/Authors.php' );
	include_once ( '_classes/Categories.php' );
	include_once ( '_classes/Articles.php' );

	// include_once( '_classes/Authors.php' );
	// Authors::getAllAuthors();
	// $classname = 'Authors';
	// var_dump($classname::getAllAuthors());
	
	// $authors = new Authors();
	// var_dump($authors->getAllAuthors());

	//$var = Categories::getAllCategories();
	//var_dump( $var  );
	
	// -Définition de la page courante- //
	// si j'ai une variable $_GET['page'] et non vide alors
	if( isset( $_GET['page'] ) AND !empty( $_GET['page'] ) ) {
		//je la sauvegarde
		$page = trim( strtolower( $_GET['page'] ) ); //minuscule (strtolower) sans espace av/apr (trim)

	//sinon
	}else {
		//je sauvegarde une valeur de 'base' pour la redirection
		$page = 'home';
	}
	
	// Array contenant toutes les différentes pages de mon site (contenu dans dossier 'controllers')
	$allPages = scandir('./controllers/');
	
	
	
	//Si ma variable existe dans le dossier (donc dans l'array) 'controllers' alors
	if( in_array( $page.'_controller.php', $allPages ) ) {
		
		//Inclusion des pages avec include_once 'Structure MVC'
		include_once( 'models/'.$page.'_model.php' );
		include_once( 'controllers/'.$page.'_controller.php' );
		include_once( 'views/'.$page.'_view.php' );
		
	//sinon
	}else {
		//je retourne une erreur
		echo 'Erreur 404';
	}
	
?>