<?php 
include('inc/init.php');//Fonctionnement de la bdd
//Déconnexion
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
	session_destroy();
	header('location:index.php');
}

$nouvImg = $pdo->query("SELECT * FROM image ORDER BY id_image DESC LIMIT 0, 3;"); //Pour "Nouveautés"

include('inc/head.php'); //Head
?>
<title>Le site web de Brook</title>
<meta name="description" content="Découverte du personnage Brook du manga One Piece">
</head>
	
<body>
	<?php include('inc/menu.php'); //Nav simple et nav burger ?>
	<header>
		<h1>Le site web de Brook</h1>
		<img src="image/Brook_page01.png" alt="Brook debout qui chante">
	</header>

	<section id="personnage"> <!-- Présentation du personnage -->
        <h2>Biographie</h2>
        <br>
        <div class="bio">
		    <div class="polaroid">
				<i class="fas fa-skull cranePhoto1"></i>
				<i class="fas fa-skull cranePhoto2"></i><br>
				<img src="image/brookBio.png" alt="Brook avec sa guitare">
			    <p>Brook le fredonneur</p>
			</div>
			<img class="imgBio" src="image/brookBio.png" alt="Brook avec sa guitare"> <!-- Image responsive -->
		    <div class="description">
                <p>Nom : Brook<br> Sexe : masculin <br> Age : 90 ans <br> Activités : musicien et épéiste <br> Manga : One Piece <br> </p> <br>
                <p class="information"><br>Brook est un musicien épéiste qui fut le 8ème membre à rejoindre l'équipage de Luffy. <br>Il est un utilisateur d'un Fruit du Démon : le Fruit de la Résurrection. <br> Autrefois, il était capitaine d'un équipage de pirates dont tous les membres mourrurent à la suite d'une attaque pirate ennemie. <br>Ce Fruit du Démon lui a permis de revenir à la vie et de devenir le musicien de l'équipage de Chapeau de Paille. <br>Son but est de retrouver sa baleine Laboon qui l'attend depuis 60 ans. </p>
			</div>
		</div>
		<p class="clique">Clique sur l'image<br> <i class="fas fa-long-arrow-alt-right"></i></p>
	</section>


	<section id="slide"> <!--Actualités du blog-->
       <h2>Actualités du blog</h2>  
            <div class="slideshow">
				<a href="blog.php">
				<div class="slides">
				<div class="maSlide"><img src="image/img_slide/imgSlide_0001.jpg" alt="Brook avec sa baleine Laboon"></div>
				<div class="maSlide"><img src="image/img_slide/imgSlide_0002.jpg" alt="Luffy et Nami attaché chez Big Mom"></div>
				<div class="maSlide"><img src="image/img_slide/imgSlide_0003.jpg" alt="Brook et son médicament"></div>
				<div class="maSlide"><img src="image/img_slide/imgSlide_0004.jpg" alt="Nami avec des yeux en forme d'argent"></div>
				<div class="maSlide"><img src="image/img_slide/imgSlide_0005.jpg" alt="Luffy qui attaque au pays des Wa"></div>
				</div>
				</a>
            </div>
        <br><br>
        <p><i class="fas fa-arrow-right"></i> Tu veux voir les articles de ces photos ou tu veux encore plus d'actualité, clique <a href="blog.php">ici</a></p>
	</section>


	<section id="imgMoment"> <!-- Nouveautés de la semaine : Images du moment -->
		<h2>Nouveautés de la semaine</h2>
		<div class="img">
			<?php
			while($imgNouv = $nouvImg->fetch(PDO::FETCH_ASSOC)){ //Affiche les 3 dernières publication de la galerie d'image
				echo '<div>';
				echo '<a href="'. $imgNouv['image'] .'" data-lightbox="Brook" data-title="' . $imgNouv['alt'] . '<br><i> Publié par ' . $imgNouv['pseudo'] . '</i>"><img src="' . $imgNouv['image'] . '" alt="' . $imgNouv['alt'] . '"></a>';
				echo '<p>' . $imgNouv['alt'] . '</p>';
				echo '</div>';
			}
			?>
		</div>
		<br><br>
		<p><i class="fas fa-arrow-right"></i> Plus de photo, clique <a href="image.php">ici</a></p>
	</section>

	<section id="contactMini">
		<h2>Des questions ?</h2>
		<i class="fas fa-skull craneInter1"></i><br>
		<i class="fas fa-skull craneInter2"></i><br>
		<p>Clique <a href="contact.php">ici</a></p>
		<br><br>
		<img src="image/brookContact.png" alt="Brook qui fuit">
	</section>

<?php include('inc/footer.php') ?> <!-- Footer -->