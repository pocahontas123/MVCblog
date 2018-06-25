//Permet de jouer le rôle de "Point d'accès"
Fichier index.php

//Permet d'indiquer des commandes pour le serveur. Il configure Apache.
//Il permet de rediriger quand il y a une erreur, d'avoir un mdp, de faire marcher un '/index.php?page=contact' avec directement '/contact'


Dossier 'assets' contient:
	-javascript
	-images
	-styles/polices d'écritures et css

//La partie qui va faire le traitement en PHP.
Dossier 'controllers' contient:
	-
	-
	-

//Models: Les classes dédiées aux différentes pages (on appel celles du dossiers '_classes').
Dossier 'models' contient:
	-contact_model.php
	-home_model.php
	-
	


//Views: Le HTML (ce que l'utilisateur voit).
Dossier 'views' contient:
	-contact_view.php
	-home_view.php
	-
	-
	-
	Sous dossier 'includes' contient:
	-Des éléments 'footer.php', 'head.php' et 'header.php' pour faciliter intégration / code


//Les classes du projet
Dossier '_classes' contient (POO):
	-Articles.php
	-Membres.php
	-Authors.php
	-tables.sql (code sql du projet)

Dossier '_config' contient:
	-Accès à la base de données 'db.php'
	-Variables 'Constantes' du site dans 'config.php'

//Les fonctions du projet
Dossier '_function' contient:
	-'function.php' contient les fonctions 'non-spécifiques'

//Permet de faire des 'scripts'
Dossier '_scripts 'contient:
