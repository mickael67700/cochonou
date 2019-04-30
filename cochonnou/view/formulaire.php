<!DOCTYPE html>
<html lang="fr">
<title>Insertion nouveau cochon</title>
<head>

</head>

<body>
    <!-- Page Content -->
    <div class="insertPig">


    <h1>Inscription</h1>
    <h2>Renseignements</h2>
    <form id="formu" class="form-horizontal" action="../model/insertPig.php" method="post">



        <label for="nom">Nom</label><br/>
        <input type="text" class="form-control" id="nom" name="nom"><br/><br/>


        <label for="poid">Poids</label><br>
        <label for="poids"></label><input class="form-control" id="poids" name="poids" type="text">
        <br/><br/>

        <label for="datenaissance">Date de naissance</label><br/>
        <input type="date" class="form-control" id="datenaissance" name = "datenaissance"><br/><br/>

        <label >Sexe</label><br/>
        <input type="radio" name="sexe" value="1" id="male"/>
        <label for="male">Male</label><br/>
        <input type="radio" name="sexe" value="0" id="femelle" />
        <label for="femelle" >Femelle </label><br/><br/>

        <label >Race Porcine</label><br/>

        <div class="btn-group btn-group-lg">
            <input type="radio" class="btn btn-primary" value= "1" name="idRace"> Large White
            <input type="radio" class="btn btn-primary" value= "2" name="idRace"> Landrace français
            <input type="radio" class="btn btn-primary" value= "3" name="idRace"> Piétrain
        </div>


        <br/>
        <br/>
        <label for="file">Photo</label><br/>
        <input type="file" name="pic" [...] />
        <br/> <br/>
        <button type="submit" name="form_insert" value = "Envoyer">Envoyer</button>
    </form>

</div>


</html>
