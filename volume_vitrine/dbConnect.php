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

connect('54.37.65.115:3306','nicolas','jeSaisPasQuoi','docker_project');
//54.35.65.115:3306

?>


