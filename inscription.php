<?php 
include('inc/init.php'); //Fonctionnement de la bdd
//VERIFICATION DU FORMULAIRE
//Message d'erreur
$erreurGlobal = "";
$erreurNom = "";
$erreurPrenom = "";
$erreurEmail = "";
$erreurPseudo = "";
$erreurMdp = "";

//Booléen à valider pour l'enregistrement dans la bdd
$nomVerif = false;
$prenomVerif = false;
$pseudoVerif = false;
$mdpVerif = false;
$emailVerif= false;

if(isset($_POST['bouton'])){ //Lorsqu'on clique sur le bouton envoyer
	//Vérifier nom
	if(iconv_strlen(trim($_POST['nom'])) > 1 && iconv_strlen(trim($_POST['nom'])) <=20 && !is_numeric($_POST['nom'])){
		$nomVerif = true;
	}else{
		$erreurNom ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le nom doit avoir entre 2 et 20 caractères et sans chiffre</div>';
		$erreurGlobal = '<div class="alertGlobal2">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
	}

    //Vérifier le prénom
    if(iconv_strlen(trim($_POST['prenom'])) > 1 && iconv_strlen(trim($_POST['prenom'])) <=20 && !is_numeric($_POST['prenom'])){
		$prenomVerif = true;
	}else{
		$erreurPrenom ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le prénom doit avoir entre 2 et 20 caractères et sans chiffre</div>';
		$erreurGlobal = '<div class="alertGlobal2">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
    }
    
    //Vérifier pseudo
	if(iconv_strlen(trim($_POST['pseudo'])) > 1 && iconv_strlen(trim($_POST['pseudo'])) <=20){
		$pseudoVerif = true;
	}else{
		$erreurPseudo ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le pseudo doit avoir entre 2 et 20 caractères</div>';
		$erreurGlobal = '<div class="alertGlobal2">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
	}
	
    //Vérifier l'email
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $emailVerif= true;
    }else{
        $erreurEmail ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le format de l\'email est incorrect</div>';
        $erreurGlobal = '<div class="alertGlobal2">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
    }

    //Vérifier mdp
    if(iconv_strlen(trim($_POST['mdp'])) > 3 && iconv_strlen(trim($_POST['mdp'])) <=20){
        $mdpVerif = true;
        $mdp = trim($_POST['mdp']);
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
	}else{
		$erreurMdp ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le mot de passe doit avoir entre 4 et 20 caractères</div>';
		$erreurGlobal = '<div class="alertGlobal2">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
	}
    
    //Enregistrement dans la bdd
    if (($nomVerif == true) && ($prenomVerif == true) && ($pseudoVerif == true) && ($emailVerif == true) && ($mdpVerif == true)){
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $pseudo = trim($_POST['pseudo']);
        $email = trim($_POST['email']);
        
        $enregistrement_membre = $pdo->prepare("INSERT INTO membre (nom, prenom, pseudo, mdp, email, date_membre, statut) VALUES (:nom, :prenom, :pseudo, :mdp, :email, CURDATE(), 2)");
            $enregistrement_membre->bindParam(':nom', $nom, PDO::PARAM_STR);
            $enregistrement_membre->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $enregistrement_membre->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $enregistrement_membre->bindParam(':mdp', $mdp, PDO::PARAM_STR);
            $enregistrement_membre->bindParam(':email', $email, PDO::PARAM_STR);
            $enregistrement_membre->execute();

        $erreurGlobal = '<div class="alertGlobal2">Tu es officiellement inscris !</div>';
    }
}

include('inc/head.php'); //Head 
?>
<title>Inscription</title>
<meta name="description" content="Pour vous inscrire">
</head>

<body>
    <?php include('inc/menu.php'); //Nav simple et nav burger ?>
    <section id="inscription"> <!-- formulaire de contact -->
	    <h2>Inscription</h2>
	    <p>Inscris-toi et fais partie de notre équipe !</p>
			    
        <form class="formInscription" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
            <img src="image/brookLogo.png"> <br>
            <?php echo $erreurGlobal?>

            <label for="nom">Nom</label><br>
		    <input type="text" name="nom" class="champ" required>
		    <?php echo $erreurNom?>
            <br><br>

            <label for="prenom">Prénom</label><br>
		    <input type="text" name="prenom" class="champ" required>
		    <?php echo $erreurPrenom?>
            <br><br>

            <label for="pseudo">Pseudo</label><br>
            <input type="text" name="pseudo" class="champ" required>
		    <?php echo $erreurPseudo?>
            <br><br>

            <label for="email">Email</label><br>
		    <input type="email" name="email" class="champ" required>
		    <?php echo $erreurEmail?>
            <br><br>

            <label for="mdp">Mot de passe</label><br>
            <input type="text" name="mdp" class="champ" required>
		    <?php echo $erreurMdp?>
            <br><br>
            
		    <input type="submit" value="Envoyer" name="bouton" class="envoyer">
	    </form>
    </section>
<?php include('inc/footer.php') ?> <!-- Footer -->
