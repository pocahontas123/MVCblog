<?php
	
	//Evite 'faille XSS', l'interprétation du code d'un String (Convertit les caractères spéciaux en entités HTML neutres)
	function str_secur( $string ) {
		return htmlspecialchars( $string );
	}
	
	//Meilleur mise en forme d'un var_dump avec la prise en charge des tabulations (<pre></pre>)
	function debug( $var ) {
		echo '<pre>';
		var_dump( $var );
		echo '</pre>';
	}
	
?>