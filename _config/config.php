<?php
	
	// ----------------- //
	//	 ERRORS DISPLAY  //
	// ----------------- //
	
	//!\\ A enlever lors du déploiement
	error_reporting(E_ALL); //prend en compte toutes les erreurs
	ini_set( 'display_errors', true ); //affiche les erreurs prisent en compte
	
	// ------------- //
	//	  SESSIONS   //
	// ------------- //
	ini_set( 'session.cookie_lifetime', false );
	session_start();
	
	// ------------- //
	//	  CONSTANTS  //
	// ------------- //
	
	// Paths
	//nom du dossier jusqu'à la racine sans le index.php (substr de 9 charactères). Utile pour un include ou require par exemple
	define( "PATH_REQUIRE", substr( $_SERVER['SCRIPT_FILENAME'], 0, -9 ) );
	//url sans le nom de domaine sans le index.php (substr de 9 charactères). Utile pour les attributs HTML tels que src ou href
	define( "PATH", substr( $_SERVER['PHP_SELF'], 0, -9 ) );
	
	// Website informations
	define( "WEBSITE_TITLE", "Mon site" );
	define( "WEBSITE_NAME", "Mon site" );
	define( "WEBSITE_URL", "https://monsite.com" );
	define( "WEBSITE_DESCRIPTION", "" );
	define( "WEBSITE_KEYWORDS", "" );
	define( "WEBSITE_LANGUAGE", "" );
	define( "WEBSITE_AUTHOR", "" );
	define( "WEBSITE_AUTHOR_MAIL", "" );
	
	// Facebook Open Graph tags
	define( "WEBSITE_FACEBOOK_NAME", "" );
	define( "WEBSITE_FACEBOOK_DESCRIPTION", "" );
	define( "WEBSITE_FACEBOOK_URL", "" );
	define( "WEBSITE_FACEBOOK_IMAGE", "" );
	
	// DataBase informations
	define( "DATABASE_HOST", "localhost" );
	define( "DATABASE_NAME", "test" );
	define( "DATABASE_USER", "root" );
	define( "DATABASE_PASSWORD", "" );
	
?>