<?php

function connect($server,$user,$mdp,$db)
{
try
{
    $bdd = new PDO('mysql:host='.$server.';dbname='.$db.'', $user, $mdp);
    echo print_r("je suis passé");
}
catch (Exception $e)
{
        die('Erreur  : ' . $e->getMessage());
}
}

connect('172.17.0.6:3306','nicolas','jeSaisPasQuoi','docker_project');


?>


