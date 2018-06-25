<?php
	//-fichier Authors.php-//

	class Authors {
		//propriétés membres de la classe Authors
		public $id;
		public $firstname;
		public $lastname;
		
		
		function __construct( $id ) {
			//connexion BDD ( include_once( '_config/db.php' ) dans 'index.php' )
			global $db;
			
			//évite faille XSS
			$id = str_secur( $id );
			
			$req = $db->prepare('SELECT * FROM authors WHERE id=?');
			$req->execute( [$id] );
			
			$data = $req->fetch();
			
			$this->id = $id;
			$this->firstname = $data['firstname'];
			$this->lastname = $data['lastname'];
		}
		
		//envoie de toutes les autheurs
		//$var = Authors::getAllAuthors(); var_dump( $var  );
		static function getAllAuthors() {
			//connexion BDD ( include_once( '_config/db.php' ) dans 'index.php' )
			global $db;
			
			//ou query
			$req = $db->prepare( 'SELECT * FROM authors' );
			//car pas query donc vide (pas de variable '?' dans la requête)
			$req->execute([]);
			
			//Enregistre dans $data. Cela crée un tableau organisé
			$data = $req->fetchAll();
			
			// array (size=2)
			  // 0 => 
				// array (size=6)
				  // 'id' => string '1' (length=1)
				  // 0 => string '1' (length=1)
				  // 'firstname' => string 'John' (length=4)
				  // 1 => string 'John' (length=4)
				  // 'lastname' => string 'Does' (length=4)
				  // 2 => string 'Does' (length=4)
			  // 1 => 
				// array (size=6)
				  // 'id' => string '2' (length=1)
				  // 0 => string '2' (length=1)
				  // 'firstname' => string 'Jack' (length=4)
				  // 1 => string 'Jack' (length=4)
				  // 'lastname' => string 'Paul' (length=4)
				  // 2 => string 'Paul' (length=4)
			return $data;
		}
	}
?>