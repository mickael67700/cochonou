<?php
require 'model/function/dbAdmin.php';
function listAllRacePig()
{
    $bdd = new database();
    $bdd->connexion();
    $query = $bdd->getBdd()->query($bdd->selectRacePig());

    echo '<table>';

    while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<th>' . $data['nomRace'] . '</th>';
        echo '<th>' . " " . '</th>';
    }
    echo '</table>';
    $query->closeCursor();

}
?>
