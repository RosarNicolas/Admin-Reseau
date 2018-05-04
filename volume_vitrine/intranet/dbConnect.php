<?php

try{
	$dbh = new PDO("mysql:host=54.37.65.115;dbname=docker_project",'nicolas', 'jeSaisPasQuoi');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if($dbh->connect_error){};
}
catch (PDOException $e){
	echo 'Echec lors de la connexion : ' . $e->getMessage();
}	

?>
