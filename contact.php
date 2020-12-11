<?php 
include('inc/init.php');//Fonctionnement de la bdd
//VERIFICATION DU FORMULAIRE ET DE L'ENVOI DE L'EMAIL
//Message d'erreur
$erreurGlobal = "";
$erreurNom = "";
$erreurPrenom = "";
$erreurEmail = "";
$erreurMessage = "";

//Booléen à valider pour l'envoi de l'email
$nomVerif = false;
$prenomVerif = false;
$messageVerif = false;

if(isset($_POST['bouton'])){ //Lorsqu'on clique sur le bouton envoyer
	//Vérifier nom
	if(iconv_strlen(trim($_POST['nom'])) > 1 && iconv_strlen(trim($_POST['nom'])) <=20 && !is_numeric($_POST['nom'])){
		$nomVerif = true;
	}else{
		$erreurNom ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le nom doit avoir entre 2 et 20 caractères et sans chiffre</div>';
		$erreurGlobal = '<div class="alertGlobal">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
	}

    //Vérifier le prénom
    if(iconv_strlen(trim($_POST['prenom'])) > 1 && iconv_strlen(trim($_POST['prenom'])) <=20 && !is_numeric($_POST['prenom'])){
		$prenomVerif = true;
	}else{
		$erreurPrenom ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le prénom doit avoir entre 2 et 20 caractères et sans chiffre</div>';
		$erreurGlobal = '<div class="alertGlobal">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
	}

	//Vérifier le message
    if(iconv_strlen(trim($_POST['message'])) > 19 && iconv_strlen(trim($_POST['message'])) <=500) { 
		$messageVerif = true;
    }else{
		$erreurMessage ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le message doit avoir entre 20 et 500 caractères</div>';
	}
	
	//Vérifier l'email
	if (($nomVerif == true) && ($prenomVerif == true) && ($messageVerif == true)){
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

			//envoi de l'email
			$to = 'karenazoulay92@gmail.com'; //le destinataire
			$subject = 'Demande d\'information';
			$headers = 'From: ' . $_POST['email'] . "\r\n" . //de qui proviens l'email
			'Reply-To: ' . $_POST['email'] . "\r\n" . //répondre à l'envoyeur
			'X-Mailer: PHP/' . phpversion();

			if(mail($to, $subject, $_POST['message'], $headers)){ //message d'envoi email
				$erreurGlobal = '<div class="alertGlobal"><i class="fas fa-envelope"></i> Merci ' . $_POST['prenom'] . " " . $_POST['nom'] . ', ton email a bien été envoyé.<br> Nous te recontacterons prochainement.</div>';	
				
				//Enregistrement BDD
				$nom = trim($_POST['nom']);
				$prenom = trim($_POST['prenom']);
				$email = trim($_POST['email']);

				$enregistrement_contact = $pdo->prepare("INSERT INTO contact (nom, prenom, email, date_envoi) VALUES (:nom, :prenom, :email, CURDATE())");
					$enregistrement_contact->bindParam(':nom', $nom, PDO::PARAM_STR);
					$enregistrement_contact->bindParam(':prenom', $prenom, PDO::PARAM_STR);
					$enregistrement_contact->bindParam(':email', $email, PDO::PARAM_STR);
					$enregistrement_contact->execute();

			}else{ //erreur envoi d'email
				$erreurGlobal ='<div class="alertGlobal">Problème lors de l\'envoi de l\'email. Merci de réessayer plus tard.</div>';
			}

		// Si l'email n'est pas correct
    	}else{
			$erreurEmail ='<div class="alert"><i class="fas fa-exclamation-circle"></i> Le format de l\'email est incorrect</div>';
			$erreurGlobal = '<div class="alertGlobal">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
		}
	
	}else{
		$erreurGlobal = '<div class="alertGlobal">Tu n\'as pas rempli correctement les champs du formulaire !</div>';
	}
}

include('inc/head.php'); //Head 
?>

<title>Contact</title>
<meta name="description" content="Pour nous contacter">
</head>

<body>
	<?php include('inc/menu.php'); //Nav simple et nav burger ?>
    <section id="contact"> <!-- formulaire de contact -->
	    <h2>Contact</h2>
	    <h3>Nous contacter  <i class="fas fa-comments"></i></h3>
		<br><br>
	    <?php echo $erreurGlobal?>
	    <form id="monFormulaire" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
		    <input type="text" class="champ" name="nom" placeholder="Nom" required>
		    <?php echo $erreurNom?>
			<br><br><br>

		    <input type="text" class="champ" name="prenom" placeholder="Prénom" required>
		    <?php echo $erreurPrenom?>
			<br><br><br>

		    <input type="email" class="champ" name="email" placeholder="Email" required>
		    <?php echo $erreurEmail?>
			<br><br><br>

		    <textarea name="message" placeholder="Message" required></textarea>
			<?php echo $erreurMessage?>
			
		    <input type="submit" id="bouton" value="Envoyer" name="bouton">
	    </form>
    </section>
<?php include('inc/footer.php') ?> <!-- Footer -->