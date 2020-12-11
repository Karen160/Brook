<?php 
include('inc/init.php');//Fonctionnement de la bdd
$nouvImg = $pdo->query("SELECT * FROM image ORDER BY id_image DESC");

include('inc/head.php'); //Head
?>
<title>La galerie d'image de Brook</title>
<meta name="description" content="Les différentes images du personnage Brook du manga One Piece">
</head>

<body> 
    <?php include('inc/menu.php'); //Nav simple et nav burger ?>
    <section id="imgGalerie">
        <h2>Galerie d'images</h2>
        <div class="image">
            <p>Bienvenue dans notre galerie d'image ! Nous disposons de <?php echo $nouvImg->rowCount(); ?> images.</p>
            <?php 
            while($imgTotal = $nouvImg->fetch(PDO::FETCH_ASSOC)) { //Montrer toute les images dans la bdd
                echo '<a href="'. $imgTotal['image'] .'" data-lightbox="Brook" data-title="' . $imgTotal['alt'] . '<br><i> Publié par ' . $imgTotal['pseudo'] . '</i>">
                <img src="' . $imgTotal['image'] . '" alt="' . $imgTotal['alt'] . '"></a>'; 
            }
            ?>
        </div>
        <p>Toutes ces images proviennent de la société Toei Animation</p>
    </section>
<?php include('inc/footer.php') ?> <!-- Footer -->
