<?php 
include('../inc/init.php');//Fonctionnement de la bdd

//Redirection
if(empty($_SESSION['membre'])) {// l'internaute n'est pas connecté on le redirige
    header('location:index.php');
}

$id = $_SESSION['membre']['id_membre']; //Charge les données bdd pour connaitre le pseudo de l'internaute
$afficher_profil = $pdo->query("SELECT * FROM membre WHERE id_membre = $id");
$afficher = $afficher_profil->fetch(PDO::FETCH_ASSOC); 

$pseudo = $_SESSION['membre']['pseudo']; //Charge les données bdd pour connaitre le nombre d'article et d'image publié par le pseudo de l'internaute
$nb_article = $pdo->query("SELECT * FROM article WHERE pseudo = '$pseudo'");
$nb_image = $pdo->query("SELECT * FROM image WHERE pseudo = '$pseudo'");

include('../inc/head.php');
?>
<title>Profil</title>
<meta name="description" content="Votre profil">
</head>
<body>
    <?php include('../inc/menu.php'); //Nav simple et nav burger ?>
    <section id="profil">
        <h2>Profil</h2>
        <p>Bienvenu <?=$afficher['pseudo']?> ! Voici ton profil <i class="fas fa-address-card" style="font-size:20px"></i></p>
        <br> <br>
        <div class="bio">
            <div class="polaroid2">
		        <img src="../image/brookBio.png" alt="Brook avec sa guitare">
			    <p style="color:black;"><?=$afficher['pseudo']?></p>
		    </div>
		    <div class="description">
                <ul>
                    <li><b>Nom :</b>  <?= $afficher['nom'] ?></li><br>
                    <li><b>Prénom :</b> <?= $afficher['prenom'] ?></li><br>
                    <li><b>Pseudo :</b> <?= $afficher['pseudo'] ?></li>
                    <li><b>Email :</b> <?= $afficher['email'] ?></li>
                    <li><b>Date de création du compte :</b> <?= $afficher['date_membre'] ?></li><br>
                    <li><b>Nombre d'image publié :</b> <?php echo $nb_image->rowCount(); ?></li>
                    <li><b>Nombre d'article publié :</b> <?php echo $nb_article->rowCount(); ?></li>
                </ul>
            </div>
        </div>
    </section>
<?php include('../inc/footer.php'); //Footer ?>
