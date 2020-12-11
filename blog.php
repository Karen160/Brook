<?php 
include('inc/init.php');//Fonctionnement de la bdd

// Récupération des article en BDD
$articles = $pdo->query("SELECT * FROM article, membre WHERE membre_id = id_membre ORDER BY id_article DESC");

include('inc/head.php'); //Header
?>
<title>Le blog de Brook</title>
<meta name="description" content="Toutes les actualités sur le personnage Brook du manga One Piece">
</head>

<body> 
    <?php include('inc/menu.php'); //Nav simple et nav burger ?>
    <section id="blog">
        <h2>Blog</h2>
        <p class="description">Bienvenue sur le blog de Brook !<br><br> Ici vous avez accès aux dernières actualités concernant Brook et son équipage. Voici <?php echo $articles->rowCount(); ?> articles les concernant.</p>
        <?php 
        while($article_post = $articles->fetch(PDO::FETCH_ASSOC)) { //Montre tous les articles du blog
            echo '<div class="article"><hr>';
            echo '<h3>' . $article_post['titre'] . '</h3>';
            echo '<img src="' . $article_post['image'] . '" alt="image de l\'article ' . $article_post['titre'] . '">';
            echo '<p><b>Publié par : ' . $article_post['prenom'] .' ' . $article_post['nom'] . ' le ' . $article_post['date_publication'] . ' </b></p>';
            echo '<p>' . $article_post['contenu'] .'</p>';
            echo '</div>';
        }
        ?>
    </section>

<?php include('inc/footer.php') ?> <!-- Footer -->