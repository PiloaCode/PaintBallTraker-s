<?php
    //element a remplire pour le head
    $title = "PaintBallTraker-s";
    $description = "Page d'accueil du site.";
    $h1 = "Paramètres";
    
    include_once 'include/header.inc.php';
?>




<?php
// SELECT (pseudo,adresse_mail,date_naissance,u.id_joueur,nom_joueur,prenom_joueur) FROM Utilisateur u, Joueur j WHERE u.pseudo = 'Vincent' AND j.id_joueur = u.id_joueur;
//SELECT pseudo,adresse_mail,date_naissance,nom_joueur,prenom_joueur FROM Utilisateur u, Joueur j WHERE u.pseudo = 'Vincent' AND j.id_joueur = u.id_joueur;
    include_once 'include/footeur.inc.php'
?>