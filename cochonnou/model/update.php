<?php
require 'function/dbAdmin.php';
function updateInfoPig()
{
  $bdd = newdatabase();
	$nomPig 				= $_POST['nom_update'];
	$poidsPig 				= $_POST['poids_update'];
	$dateNaissance  		= $_POST['datenaissance_update'];
	$dateMort 				= $_POST['dateMort_update'];
	$picPig 				= $_POST['pic_update'];
	$idRace					= $_POST['idRace_update'];
	$sexePig	 			= $_POST['sexe_update'];

$query = $bdd->getBdd()->prepare($bdd->updateInfoClient());
$array = array(
	'nomPig' 		=> $nomPig,
	'poidsPig' 	 	=> $poidsPig,
	'dateNaissance' => $dateNaissance,
	'picPig' 		=> $picPig,
	'sexePig' 		=> $sexePig,
	'idRace'		=> $idRace,
);

$query->execute($array);
$query->closeCursor();
}
if (isset($_POST['updateClient']))
{
  updateInfoPig();
  header('listePig.php');
}

?>
