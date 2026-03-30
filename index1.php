<?php
	function getGet( $key ){
		return isset( $_GET[ $key ] ) ? $_GET[ $key ] : null;
	}
	$pg = getGet('pagina');
		if( is_file( ''.$pg.'.php' ) )
			include ''.$pg.'.php';
		else
			include 'home.php';
?>
	
<?php include 'footer.php'; ?>
		
