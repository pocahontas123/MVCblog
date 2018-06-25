<?php
	//-fichier Authors.php-//

	class Categories {
		//propriétés membres de la classe 'Authors'
		public $id;
		public $name;
		
		
		function __construct( $id ) {
			//connexion BDD ( include_once( '_config/db.php' ) dans 'index.php' )
			global $db;
			
			//évite faille XSS
			$id = str_secur( $id );
			
			$req = $db->prepare( 'SELECT * FROM categories WHERE id=?' );
			$req->execute( [$id] );
			
			$data = $req->fetch();
			
			$this->id = $id;
			$this->name = $data['name'];
		}
		
		//envoie de toutes les catégories
		static function getAllCategories() {
			//connexion BDD ( include_once( '_config/db.php' ) dans 'index.php' )
			global $db;
			
			//ou query
			$req = $db->prepare( 'SELECT * FROM categories' );
			//car pas query donc vide (pas de variable '?' dans la requête)
			$req->execute([]);
			
			//Enregistre dans '$data'. Cela crée un tableau organisé
			$data = $req->fetchAll();
			
			return $data;
		}
	}
?>