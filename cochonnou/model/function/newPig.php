<?php
require 'dbAdmin.php';
/**
 *Insertion d'un nouveau cochon en base de données. Il est en vie par défault, dans la table
 * Race de la base, le turple "enVie" est à 1.
 */
function newPig()
{


	/*Détermine le genre du cochon, 1 pour male 0 pour femelle*/
	if (isset($_POST['male']))
	{
		if ($_POST['male'] == "1")
		{
			$sexePig = 1;
		}
	}
	else
	{
		$sexePig = 0;
	}
	if (isset($_POST['femelle']))
	{
		if ($_POST['femelle'] == "1")
		{
			$sexePig = 0;
		}
	}
	else
	{
		$sexePig = 1;
	}

	/*Détermine idrace en fonction du nom de celle-ci */
	switch ($_POST['idRace']) {
		case "1":
			$idRace = 1;
			break;
		case "2":
			$idRace = 2;
			break;
		case "3":
			$idRace = 3;
			break;
	}


	$nomPig 				= $_POST['nom'];
	$poidsPig 				= $_POST['poids'];
	$dateNaissance  		= $_POST['datenaissance'];
	$picPig 				= $_POST['pic'];
	$idRace					= $_POST['idRace'];


	/**
	 *préparation de la requête.
	 */
	 $bdd = new database();
	 $bdd->connexion();
	 $query = $bdd->getBdd()->prepare($bdd->addPig());
	 $array = array(

		 'nomPig' 		 => $nomPig,
		 'poidsPig' 	 => $poidsPig,
		 'dateNaissance' => $dateNaissance,
		 'picPig' 		 => $picPig,
		 'sexePig' 		 => $sexePig,
		 'idRace'		 => $idRace,
		 );

	 $query->execute($array);
		 		echo $nomPig;
					print("\n");
		 		echo $poidsPig;
					print("\n");
		 		echo $dateNaissance;
					print("\n");
		 		echo $picPig;
					print("\n");

		 		echo $idRace;
					print("\n");
		 		echo $sexePig;
					print("\n");
  }



