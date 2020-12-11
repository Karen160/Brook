<nav> <!--Menu-->
	<div class="menu">
        <!-- Si l'internaute n'est pas connecté -->
        <?php if(empty($_SESSION['membre'])) { 
            echo '<a href="' . URL . 'index.php#personnage">Biographie</a>';
            echo '<a href="' . URL . 'index.php#slide">Actualités</a>';
            echo '<a href="' . URL . 'index.php#imgMoment">Nouveautés</a>';
            echo '<a href="' . URL . 'image.php">Galerie d\'images</a>';
            echo '<a href="' . URL . 'blog.php">Blog</a>';
            echo '<a href="' . URL . 'contact.php">Contact</a>'; 
            echo '<a href="' . URL . 'inscription.php">Inscription</a>'; 
            echo '<a href="' . URL . 'connexion.php">Connexion</a>';

        //Si l'internaute est connecté en statut 2
        }else if (isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] == 2) {
            echo '<a href="' . URL . 'admin/profil.php">Profil</a>';
            echo '<a href="' . URL . 'admin/ajout_image.php">Gestion images</a>';
            echo '<a href="' . URL . 'admin/ajout_blog.php">Gestion blog</a>';
            echo '<a href="' . URL . 'index.php?action=deconnexion">Déconnexion</a>';

        //Si l'internaute est connecté en statut 3
        }else if(isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] == 3) { 
            echo '<a href="' . URL . 'admin/profil.php">Profil</a>';
            echo '<a href="' . URL . 'admin/ajout_image.php">Gestion images</a>';
            echo '<a href="' . URL . 'admin/ajout_blog.php">Gestion blog</a>';
            echo '<a href="' . URL . 'admin/demande_contact.php">Gestion contacts</a>';
            echo '<a href="' . URL . 'admin/membre.php">Membres</a>';
            echo '<a href="' . URL . 'index.php?action=deconnexion">Déconnexion</a>';
        
        //Si l'internaute est connecté en statut 1
        }else {  
            echo '<a href="' . URL . 'index.php#personnage">Biographie</a>';
            echo '<a href="' . URL . 'index.php#slide">Actualités</a>';
            echo '<a href="' . URL . 'index.php#imgMoment">Images du moment</a>';
            echo '<a href="' . URL . 'image.php">Nouveautés</a>';
            echo '<a href="' . URL . 'blog.php">Blog</a>';
            echo '<a href="' . URL . 'contact.php">Contact</a>';
            echo '<a href="' . URL . 'admin/profil.php">Profil</a>';
            echo '<a href="' . URL . 'index.php?action=deconnexion">Déconnexion</a>';
        }
        ?>    
	</div>
</nav>

<div class="menuBurger">
    <div class="boutonFermer"><p>X</p></div>
    <div class= "click">
        <div class="menuLigne"></div>
        <div class="menuLigne"></div>
        <div class="menuLigne"></div>
     </div>
</div>