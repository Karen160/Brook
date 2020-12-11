<?php 
include('../inc/init.php');//Fonctionnement de la bdd

//Redirection
if(empty($_SESSION['membre'])) { // l'internaute n'est pas connecté on le redirige
    header('location:index.php');
} else if(isset($_SESSION['membre']['statut']) < 3) { // l'internaute est connecté en statut 1 ou 2 on le redirige
    header('location:profil.php');
}

$liste_membres = $pdo->query("SELECT id_membre, nom, prenom, pseudo, email, statut FROM membre");

include('../inc/head.php');
?>
<title>Membres</title>
<meta name="description" content="Les membres du site">
</head>
<body>
    <?php include('../inc/menu.php'); //Nav simple et nav burger ?>
    <section id="gestionMembre">
        <h2>Membres</h2>
            <?php 
            echo '<p>' . $liste_membres->rowCount() . ' membres sont inscrits sur notre site<br></p>';
            echo '<div class="membre">';
            while($membre = $liste_membres->fetch(PDO::FETCH_ASSOC)) { //Montre les membres enregistrer dans la bdd           
                echo '<div class="listeMembre">';
                foreach($membre AS $indice => $valeur) { //Affiches le nom des données avec la valeur
                    echo '<b>' . ucfirst($indice) . '</b> : ' . ucfirst($valeur) . '<br>';
                }
                echo '</div>';
            }
            echo '</div>';
            ?>
    </section>

<?php include('../inc/footer.php'); //footer ?>





