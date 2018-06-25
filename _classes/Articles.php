<?php
	
	class Articles {
		//propriétés membres de la classe 'Articles'
		public $id;
		public $title;
		public $sentence;
		public $content;
		public $date;
		public $author;
		public $category;
		

		
		
		function __construct( $id ) {
			//connexion BDD ( include_once( '_config/db.php' ) dans 'index.php' )
			global $db;
			
			//évite faille XSS
			$id = str_secur( $id );
			
			$req = $db->prepare( 
				'
				SELECT ar.*, au.firstname, au.lastname, ca.name AS category
				FROM articles ar
				INNER JOIN authors au ON ar.author_id = au.id
				INNER JOIN categories ca ON ar.category_id = ca.id
				WHERE ar.id = ?
				'
			);
			$req->execute( [$id] );
			
			$data = $req->fetch();
			
			$this->id = $id;
			$this->title = $data['title'];
			$this->sentence = $data['sentence'];
			$this->content = $data['content'];
			$this->date = $data['date'];
			//concaténation 'firstname + lastname'
			$this->author = $data['firstname'] . ' ' . $data['lastname'];
			$this->category = $data['category'];
		}
		
		//envoie de tous les Articles
		//$var = Articles::getAllArticles(); var_dump( $var  );
		static function getAllArticles() {
			//connexion BDD ( include_once( '_config/db.php' ) dans 'index.php' )
			global $db;
			
			$req = $db->prepare( 
				'
				SELECT ar.*, au.firstname, au.lastname, ca.name AS category
				FROM articles ar
				INNER JOIN authors au ON ar.author_id = au.id
				INNER JOIN categories ca ON ar.category_id = ca.id
				'
			);		
			$req->execute( [] );
			
			//Enregistre dans $data. Cela crée un tableau organisé
			$data = $req->fetchAll();
			
			return $data;
		}
		
		static function getLastArticle( $category = null) {
			//connexion BDD ( include_once( '_config/db.php' ) dans 'index.php' )
			global $db;
			
			if( $category == null ) {
				$req = $db->prepare( 
					'
					SELECT ar.*, au.firstname, au.lastname, ca.name AS category
					FROM articles ar
					INNER JOIN authors au ON au.id = ar.author_id
					INNER JOIN categories ca ON ca.id = ar.category_id
					ORDER BY id DESC
					LIMIT 1
					'
				);
				
				$req->execute( [] );
				
			}else {
				$req = $db->prepare( 
					'
					SELECT ar.*, au.firstname, au.lastname, ca.name AS category
					FROM articles ar
					INNER JOIN authors au ON au.id = ar.author_id
					INNER JOIN categories ca ON ca.id = ar.category_id
					WHERE ca.id = ?
					ORDER BY id DESC
					LIMIT 1
					'
				);
				
				$req->execute( [str_secur( $category )] );
			}
			
			//Enregistre dans $data. Cela crée un tableau organisé
			$data = $req->fetch();
			
			return $data;
		}
		
	}
	
?>