<?php 
	require ('lib/rb.php');
	R::setup( 'mysql:host=localhost;dbname=u1276140_default',
        'u1276_140default', '_C5saaVr');

        if(!R::testConnection()) die('No DB connection!');

	session_start();
	ob_start();
?> 