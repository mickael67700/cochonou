
<?php
require 'dbAdmin.php';


function listAllPig()
{
  $bdd = new database();
  $bdd->connexion();
  $query = $bdd->getBdd()->query($bdd->selectAllPig());

  echo '<table>';
  echo '<tr>';
  echo '<th>'."id".'</th>';
  echo '<th>'."Nom".'</th>';
  echo '<th>'."Poids".'</th>';
  echo '<th>'."Date de naissance".'</th>';
  echo '<th>'."Date de de mort".'</th>';
  echo '<th>'."Image".'</th>';
  echo '<th>'."Vivant".'</th>';
  echo '<th>'."Sexe".'</th>';
  echo '<th>'."Race".'</th>';
  echo '</tr>';
  while ($data = $query->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<th scope="col">'.$data['idPig'].'</th>';
    echo '<th scope="col">'." ".'</th>';
    echo '<th scope="col">'.$data['nomPig'].'</th>';
    echo '<th scope="col">'." ".'</th>';
    echo '<th scope="col">'.$data['dateNaissance'].'</th>';
    echo '<th scope="col">'." ".'</th>';
    echo '<th scope="col">'.$data['dateMort'].'</th>';
    echo '<th scope="col">'." ".'</th>';
    echo '<th scope="col">'.$data['picPig'].'</th>';
    echo '<th scope="col">'." ".'</th>';
    echo '<th scope="col">'.$data['enVie'].'</th>';
    echo '<th scope="col">'." ".'</th>';
    echo '<th scope="col">'.$data['sexePig'].'</th>';
    echo '<th scope="col">'." ".'</th>';
    echo '<th scope="col">'.$data['idRace'].'</th>';

  }

echo '</table>';
$query->closeCursor();

}
 ?>
