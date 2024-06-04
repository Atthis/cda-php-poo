<?php	
	// CONNEXION A LA BASE SQL //
	try
	{	
    $dbUser = $env["dbuser"];
    $dbPassword = $env["dbpassword"];

    $db = new PDO('pgsql:host=localhost;port=5433;dbname=chirposphere',$dbUser,$dbPassword); 
	}
	catch(Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
?>