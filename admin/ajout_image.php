<?php 
include('../inc/init.php');//Fonctionnement de la bdd

//Redirection
if(empty($_SESSION['membre'])) { // l'internaute n'est pas connecté on le redirige
    header('location:index.php');
} else if(isset($_SESSION['membre']['statut']) < 2) { // l'internaute est connecté en statut 1 ou 2 on le redirige
    header('location:profil.php');
}

$msg = "";
if(isset($_POST['bouton'])) {
    $image = trim($_POST['image']);
    $alt = trim($_POST['alt']);
    $pseudo = $_SESSION['membre']['pseudo'];

    //Enregistrement des données rentrées dans le formulaire dans la bdd
    $enregistrement_image = $pdo->prepare("INSERT INTO image (id_image, image, alt, pseudo) VALUES (NULL, :image, :alt, :pseudo)");
        $enregistrement_image->bindParam(':image', $image, PDO::PARAM_STR);
        $enregistrement_image->bindParam(':alt', $alt, PDO::PARAM_STR);
        $enregistrement_image->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $enregistrement_image->execute();
        
    $msg = "<div class='alertGlobal2'>Merci ! Votre nouvelle image a bien été enregistré !</div>";
}

$nbImg = $pdo->query("SELECT * FROM image");

include('../inc/head.php'); //head
?>
<title>Modification de la galerie d'image</title>
<meta name="description" content="Modification de la galerie d'image de notre site">
</head>
<body>
    <?php include('../inc/menu.php'); //Nav simple et nav burger ?>
    <section id="ajout">
        <h2>Gestion des images</h2>
        <br>
        <p>Fait partie de notre équipe en ajoutant des images et leurs légendes.<br> A ce jour <?php echo $nbImg->rowCount(); ?> images sont publiées, clique <a href="<?php echo URL; ?>image.php">ici</a> pour les voir !</p>
        <br><br>
        <form method="post" id="monFormulaire">
            <?php echo $msg; ?>
            <label for="image">Ajouter une image à partir d'une URL <i class="fas fa-file-image"></i></label>
            <input type="text" name="image" class="champ" required>
            <br><br><br>

            <label for="image">Descritpion de l'image</label>
            <br>
                    
            <input type="text" name="alt" class="champ" required>
            <br><br>
            
            <button type="submit" name="bouton" id="bouton">Enregistrement</button>
        </form>

        <?php 
        if(isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] == 3) { //Si l'internaute est admin
            echo '<br><br><br>';
            echo '<p>Listes des images publiées :<p>';
            
            echo '<table>';
                echo '<tr>';
                //Affichage du nom des colonnes
                for($i = 0; $i < $nbImg->columnCount(); $i++) { //Affiche toutes les colonnes en comptant leurs nombres
                    $colonne = $nbImg->getColumnMeta($i); //Récupération des données de la colonne en cours
                    echo '<th>' . $colonne['name'] . '</th>';
                }
                echo '</tr>';
                //Affichage des données du tableau
                while($ligne = $nbImg->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    foreach($ligne AS $valeur) {
                        echo '<td>' . $valeur .  '</td>';
                    }
                    echo '</tr>';
                }
            echo '</table>';
        }
        ?>
    </section>
<?php include('../inc/footer.php'); //footer?>