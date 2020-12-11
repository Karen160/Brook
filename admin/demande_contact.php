<?php 
include('../inc/init.php');//Fonctionnement de la bdd

//Redirection
if(empty($_SESSION['membre'])) { // l'internaute n'est pas connecté on le redirige
    header('location:index.php');
} else if(isset($_SESSION['membre']['statut']) < 3) { // l'internaute est connecté en statut 1 ou 2 on le redirige
    header('location:profil.php');
}

$liste_contact = $pdo->query("SELECT * FROM contact ORDER BY id_contact DESC");

include('../inc/head.php');
?>
<title>Demande de contact</title>
<meta name="description" content="La liste des demandes de contacts">
</head>
<body>
    <?php include('../inc/menu.php'); //Nav simple et nav burger ?>
    <section id="gestionContact">
        <h2>Gestion des contacts</h2>
            <?php 
               echo '<p>Nous avons ' . $liste_contact->rowCount() . ' demandes de contact<br></p>';
               echo '<div class="contact">';
               while($contact = $liste_contact->fetch(PDO::FETCH_ASSOC)) {  //Montre les demandes de contact enregistrer dans la bdd         
                   echo '<div class="listeContact">';
                   foreach($contact AS $indice => $valeur) { //Affiches le nom des données avec la valeur
                       echo '<b>' . ucfirst($indice) . '</b> : ' . ucfirst($valeur) . '<br>';
                   }
                echo '</div>';
               }
               echo '</div>';
            ?>
    </section>

<?php include('../inc/footer.php'); //Footer ?>  