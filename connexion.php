<?php 
include('inc/init.php');//Fonctionnement de la bdd

// Messages d'erreur
$msg = "";
$msgPseudo = "";
$msgMdp = "";

// Booléen à valider
$pseudoVerif = false;
$mdpVerif = false;

// Récupération des données lors de la validation du formulaire
if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    //Récupération des informations de l'internaute sur la bdd à l'aide de son pseudo
    $recup_infos = $pdo->query("SELECT * FROM membre WHERE pseudo = '$pseudo'");

    //Vérifier pseudo
    if($recup_infos->rowCount() > 0) {
        $pseudoVerif = true;

        //Vérifier mot de passe
        $infos_membre = $recup_infos->fetch(PDO::FETCH_ASSOC);
        if(password_verify($mdp, $infos_membre['mdp'])){
            $mdpVerif = true;
            
            //Connexion
            // Recupèration des informations pour la bdd
            $_SESSION['membre']['id_membre'] = $infos_membre['id_membre'];
            $_SESSION['membre']['pseudo'] = $infos_membre['pseudo'];
            $_SESSION['membre']['nom'] = $infos_membre['nom'];
            $_SESSION['membre']['prenom'] = $infos_membre['prenom'];
            $_SESSION['membre']['email'] = $infos_membre['email'];
            $_SESSION['membre']['date_membre'] = $infos_membre['date_membre'];
            $_SESSION['membre']['statut'] = $infos_membre['statut'];
        
        }else{
            $msgMdp = "<div class='alert'><i class='fas fa-exclamation-circle'></i> Mot de passe incorrect</div>";
            $msg = "<div class='alertGlobal2'>Tu n'as pas rempli correctement les champs du formulaire !</div>";
    }
    }else{
        $msgPseudo = "<div class='alert'><i class='fas fa-exclamation-circle'></i> Pseudo incorrect</div>";
        $msg = "<div class='alertGlobal2'>Tu n'as pas rempli correctement les champs du formulaire !</div>";
    }
}
    
include('inc/head.php'); //Head
?>
<title>Connexion</title>
<meta name="description" content="Connexion au site web de Brook">
</head>
<body>
    <?php 
    include('inc/menu.php'); //Nav simple et nav burger

    //Page connexion si l'internaute n'est pas connecté
    if($pseudoVerif == false || $mdpVerif == false){
        echo '<section id="connexion">';
            echo '<h2>Connexion</h2>';
            echo '<p>Connecte toi !!!</p>';
            echo '<form method="post" class="formConnexion">';
                echo '<img src="image/brookLogo.png"><br>';
                echo $msg;

                echo '<label for="pseudo">Pseudo</label>';
                echo '<input type="text" name="pseudo" class="champ" required>';
                echo $msgPseudo;

                echo '<br><br>';
                echo '<label for="mdp">Mot de passe</label>';
                echo '<input type="password" name="mdp" class="champ" required>';
                echo $msgMdp;

                echo '<button type="submit" name="connexion" class="envoyer">Se connecter</button>';
            echo '</form>';
        echo '</section>';
    }else{ //Page connexion si l'internaute est connecté
        echo '<section id="connexion2">';
            echo '<h2>Connexion</h2>';
            echo '<img src="image/brookLogoGif.gif" alt="Logo de Brook animé">';
        echo '</section>';
    }

include('inc/footer.php'); //footer ?>      