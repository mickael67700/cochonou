<?php
/*****************************************************************************
*Fichier contenant toutes les fonctions nécessaires pour l'administrateur.   *
*La connexion en utilisateur avec privilège et les requêtes sql pérarées.    *
*Les fonctions avec la transmission des parmètres sont dans les modeles admin*
******************************************************************************/
// Report all errors
error_reporting(E_ALL);

/*************************************************************************
 *La classe database instancie la fonctions de connexion et retourne les *
 *requêtes																															 *
 *************************************************************************/
class database
{
    private $_host = 'mysql:host=192.162.69.205;port=3306;dbname=gestion;charset=utf8';
    private $_username = 'test';
    private $_pass = 'test';
    private $_bdd;

    public function getBdd()
    {
        return $this->_bdd;
    }

    public function setBdd($bdd)
    {
        $this->_bdd = $bdd;
    }

    /************************************************************************************************************************
     *fonction de connection à la base de données                                                                                                                                                        *
     *Lorsqu’on va appeler notre fonction, on va tout d’abord tenter de se connecter avec nos identifiants grâce au « try ».*
     *Si on n’arrive pas à s’y connecter,                                                                                                                                                                        *
     *alors la partie « catch » va nous afficher une erreur.                                                                                                                                *
     ************************************************************************************************************************/

    function connexion()
    {
        try {
            $this->setBdd(new PDO($this->getHost(), $this->getUsername(), $this->getPass()));
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    /*********************
     *Getters et Setters *
     *********************/
    public function getHost()
    {
        return $this->_host;
    }

    public function setHost($host)
    {
        $this->_host = $host;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function setUsername($username)
    {
        $this->_username = $username;
    }

    public function getPass()
    {
        return $this->_pass;
    }

    /*****************************************
     ******************************************
     *METHODES POUR L'ADMINISTRATION DU COCHON*
     ******************************************
     ******************************************/

    /*************************************************************************************
     *Méthode addCochon qui va retourner la requête sql permettant d'insérer des données.*
     *************************************************************************************/
    function addPig()
    {
        return 'INSERT INTO pig (nomPig, poidsPig, dateNaissance, picPig, sexePig, idRace) VALUES(:nomPig, :poidsPig,:dateNaissance, :picPig,:sexePig, :idRace)';
    }

    /*************************************************************************************
     *Méthode selectAllClient retourne la requête qui permet de lister touts les cochons *
     *************************************************************************************/
    function selectAllPig()
    {
        return 'SELECT * FROM pig;';
    }

    /*****************************************************************************************
     *Méthode selectidPig retourne la requête qui permet de selectionner un cochon  par id   *
     *****************************************************************************************/
    function selectidPig()
    {
        return 'SELECT * FROM pig WHERE idPig = :idPig';
    }

    /**********************************************************************************
     *Méthode updateInfoPig requete mise à jour champs du cochon selectionné par id   *
     **********************************************************************************/
    function updateInfoPig()
    {
        return 'UPDATE pig SET nomPig = :nomPig, poidsPig = :poidsPig, dateMort = :dateMort, picPig = :picPig, enVie = :enVie, racePig = :racePig , sexePig =:sexePig WHERE idPig = :idPig;';
    }

    /**********************************************
     * Méthode killPig requête pour tuer un cochon*
     **********************************************/

    function killPig()
    {
        return 'UPDATE pig SET	dateMort = :dateMort, enVie = O, WHERE idPig = :idPig;';
    }

    /***************************************************************************************
     * Méthode selectRacePig requête pour retourner les races de cochons pour liste déroulante*
     ***************************************************************************************/
    function selectRacePig()
    {
        return 'SELECT nomRace FROM Race';
    }
}

