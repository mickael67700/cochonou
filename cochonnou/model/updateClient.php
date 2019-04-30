 <?php
      function displayInfoPig()
      {
        $bdd = new database();
        $bdd -> connexion();
        $NumCli = $_GET['id'];

        $query = $bdd->getBdd()->prepare($bdd->selectidPig());
        $array = array('idPig' => $NumCli );
        $query->execute($array);
        if ($data = $query->fetch())
        {
          echo '<form action="update.php?id='.$data['idPig'].'"method="post">';
          echo '<input type="text" name="nom_update" value="'.$data['nomPig'].'"required/>'.'</br>'.'</br>';
          echo '<input type="text" name="prenom_update" value="'.$data['PrenomCli'].'"required/>'.'</br>'.'</br>';
          echo '<input type="text" name="datenaissance_update" value="'.$data['DateNaissance'].'"required/>'.'</br>'.'</br>';
          echo '<input type="text" name="adresse_update" value="'.$data['Adresse'].'"required/>'.'</br>'.'</br>';
          echo '<input type="text" name="codepostal_update" value="'.$data['CodePostal'].'"required/>'.'</br>'.'</br>';
          echo '<input type="text" name="ville_update" value="'.$data['Ville'].'"required/>'.'</br>'.'</br>';
          echo '<input type="text" name="telcli_update" value="'.$data['TelCli'].'"required/>'.'</br>'.'</br>';
          echo '<input type="text" name="email_update" value="'.$data['Email'].'"required/>'.'</br>'.'</br>';
          echo '<input type="text" name="pays_update" value="'.$data['Pays'].'"required/>'.'</br>'.'</br>';
          echo '<button type="submit" name="form_update" value = "Enregister">Enregister</button>';
        }
      }
  ?>
