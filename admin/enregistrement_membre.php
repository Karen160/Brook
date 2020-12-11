<?php 
include('../inc/init.php');
// CE FICHIER NE DOIT PAS ETRE APPELE PLUS D'UNE FOIS

//Membre 1 (admin)
$pseudo = 'admin';
$mdp = 'mdp';
$email = 'karenazoulay92@gmail.com';
$prenom = "Karen";
$nom = "Azoulay";
$statut = 3;
$date_membre = '2020-01-01';
// Mot de passe crypté
$mdp = password_hash($mdp, PASSWORD_DEFAULT);

$enregistrement_membre = $pdo->prepare("INSERT INTO membre (nom, prenom, pseudo, mdp, email, date_membre, statut) VALUES (:nom, :prenom, :pseudo, :mdp, :email, :date_membre, :statut)");
    $enregistrement_membre->bindParam(':nom', $nom, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':mdp', $mdp, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':email', $email, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':date_membre', $date_membre, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':statut', $statut, PDO::PARAM_STR);
    $enregistrement_membre->execute();


//Membre 2 (classique)
$pseudo = 'nath';
$mdp = 'nathliu';
$email = 'nathalieliu@gmail.com';
$prenom = "Nathalie";
$nom = "Liu";
$statut = 2;
$date_membre = '2020-05-22';

$mdp = password_hash($mdp, PASSWORD_DEFAULT);

$enregistrement_membre = $pdo->prepare("INSERT INTO membre (nom, prenom, pseudo, mdp, email, date_membre, statut) VALUES (:nom, :prenom, :pseudo, :mdp, :email, :date_membre, :statut)");
    $enregistrement_membre->bindParam(':nom', $nom, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':mdp', $mdp, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':email', $email, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':date_membre', $date_membre, PDO::PARAM_STR);
    $enregistrement_membre->bindParam(':statut', $statut, PDO::PARAM_STR);
    $enregistrement_membre->execute();