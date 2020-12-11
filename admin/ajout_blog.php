<?php 
include('../inc/init.php'); //Fonctionnement de la bdd

//Redirection
if(empty($_SESSION['membre'])) { // l'internaute n'est pas connecté on le redirige
    header('location:index.php');
} else if(isset($_SESSION['membre']['statut']) < 2) { // l'internaute est connecté en statut 1 on le redirige
    header('location:profil.php');
}

$msg = "";
// Enregistrement des articles
if(isset($_POST['titre']) && isset($_POST['image']) && isset($_POST['contenu'])) {
    $titre = trim($_POST['titre']);
    $image = trim($_POST['image']);
    $contenu = trim($_POST['contenu']);

    // Défini id_membre de l'internaute connecté = membre_id de la table article en bdd
    $membre_id = $_SESSION['membre']['id_membre'];
    $pseudo_membre = $_SESSION['membre']['pseudo'];

    // Enregistrement de l'artcile dans la bdd
    $enregistrement = $pdo->prepare("INSERT INTO article (id_article, titre, membre_id, pseudo, image, date_publication, contenu) VALUES (NULL, :titre, $membre_id, :pseudo, :image, CURDATE(), :contenu)");
    $enregistrement->bindParam(':titre', $titre, PDO::PARAM_STR);
    $enregistrement->bindParam(':image', $image, PDO::PARAM_STR);
    $enregistrement->bindParam(':contenu', $contenu, PDO::PARAM_STR);
    $enregistrement->bindParam(':pseudo', $pseudo_membre, PDO::PARAM_STR);
    $enregistrement->execute();

    $msg = "<div class='alertGlobal2'>Merci ! Votre nouveau post a bien été enregistré !</div>";
}

$articles = $pdo->query("SELECT id_article, titre, pseudo, image FROM article");

include('../inc/head.php'); //Head
?>
<title>Modification du blog</title>
<meta name="description" content="Modification du blog de Brook">
</head>
<body>
    <?php include('../inc/menu.php'); //Nav simple et nav burger ?>
    <section id="ajout">
        <h2>Gestion du blog</h2>
        <p>Tu souhaites ajouter une nouvelle actualité à notre blog ? Tu es au bon endroit ! <br> Complète ce formulaire et clique <a href="<?php echo URL; ?>blog.php">ici</a> pour voir ton nouveau post.<br> <br>
        <?php echo $articles->rowCount(); ?> articles sont déjà publiés sur notre site.</p>
        <form method="post" id="monFormulaire">
            <?php echo $msg; ?>
            <label for="titre">Titre</label>
            <input type="text" name="titre" class="champ" required>
            <br><br>

            <label for="image">Image</label>
            <input type="text" name="image" class="champ" required>
            <br><br>

            <label for="contenu">Contenu</label><br><br>
            <textarea type="text" name="contenu" class="champ" required></textarea>

            <button type="submit" name="enregistrement" id="bouton">Enregistrement</button>
        </form>
                
        <?php
        if(isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] == 3) { //Si l'internaute est admin
            echo '<br><br><br>';
            echo'<p>Listes des articles publiés :<p>';

            echo '<table>';
                echo '<tr>';
                //Affichage du nom des colonnes
                for($i = 0; $i < $articles->columnCount(); $i++) { //Affiche toutes les colonnes en comptant leurs nombres
                    $colonne = $articles->getColumnMeta($i); //Récupération des données de la colonne en cours
                    echo '<th>' . $colonne['name'] . '</th>';
                }
                echo '</tr>';
                //Affichage des données du tableau
                while($ligne = $articles->fetch(PDO::FETCH_ASSOC)) {
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

<!-- Pour WYSIWYG -->
<script src="../ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('contenu')</script>

<?php include('../inc/footer.php'); //footer?>