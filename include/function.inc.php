<?php

use PHPMailer\PHPMailer\PHPMailer;

    include_once 'include/PHPMailer-master/src/Exception.php';
    include_once 'include/PHPMailer-master/src/PHPMailer.php';
    include_once 'include/PHPMailer-master/src/SMTP.php';


    function valideMdp(string $mdp, string $login)
    {
        printf("<p> mdp:" . $mdp . "</p>");
        $hash = password_hash($mdp, PASSWORD_DEFAULT);

        $conn = openBD();
        $result = $conn->query("SELECT pasword FROM Utilisateur WHERE login=" .$login .";");
        $mdpBD = "";

        if(password_verify($mdp,$mdpBD))
        {

        }
        printf("<p> hash:" . $hash . "</p>"); 
    }

    function connectMail()
    {
        $mail = new PHPMailer();
        
        $mail->isSMTP();
        $mail->Port = 465;
        $mail->SMTPAuth = 1;
        $mail->Host ='smtp-piloa.alwaysdata.net';

        if($mail->SMTPAuth)
        {
            $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
            $mail->Username   =  'piloa@alwaysdata.net';  
            $mail->Password   =  'Vilucas04';
        }

         $mail->CharSet = 'UTF-8';
         $rep = $mail->smtpConnect();

         if($rep == false)
         {
             printf("problème de conexion");
         }
         else
         {
            printf("pas problème de conexion");
         }

    return $mail;
    }

    function tableUser()
    {
        $conn = openBD();
        $conn->query("SELECT * FROM Utilisateur");
    }

    function tableJoueur()
    {
        $conn = openBD();
        $conn->query("");
    }

    function tableEquipe()
    {
        $conn = openBD();
    }

    function tableMatchs()
    {
        $conn = openBD();
    }

    function tableDeathmatch()
    {
        $conn = openBD();
    }

    function tableProtectVip()
    {
        $conn = openBD();
    }

    function tableCaptureDrapeau()
    {
        $conn = openBD();
    }

    function adreseeConfirme()
    {
        $conn = openBD();

    }

    function confirmMail(String $adresse,  String $login, String $lien)
    {   
        //creation du mail
        $mail= connectMail();
        $mail->From = "piloa@alwaysdata.net";
        $mail->Subject = "Confirmation inscription PaintBallTrakers";
        $mail->WordWrap = 50;
        $mail->AltBody ="message voici mon message tout se passe bien chez nouss";
        $mail->Body = "Bonjour" . $login . ",\n voici l'adresse de confirmation de mail: " . $lien;
        $mail->addAddress($adresse);
        $mail->isHTML(false);
        $rep = $mail->send();

        if (!$rep) {
            echo $mail->ErrorInfo;
      } else{
            echo 'Message bien envoyé';
      }
    }

    function openBD(): mysqli
    {
        $port = 3306;
        $user = "piloa";
        $mdp = "Vilucas04";
        $BD = "piloa_paintballtrakers_database";
        $hostname = "mysql-piloa.alwaysdata.net";

        $conn = new mysqli( $hostname, $user, $mdp, $BD, $port);

        if($conn->connect_error)
        {
            die('Erreur : ' .$conn->connect_error);
        }
        else
        {
            echo 'Connexion réussie';
        }
       
       
       /* $result = $conn->query("SELECT * FROM Matchs");
        printf("<p> mdp:" . $result->num_rows . "</p>");*/
    return $conn;
    }

    function validRegistation()
    {

    }
    
    function verifDate(String $id): bool
    {
        //recuperation de la date d'inscription de l'utilisateur 
        $conn = openBD();
        $result = $conn->query("SELECT date_inscription FROM Utilisateur WHERE id='" . $id . "';");
        $dateSign = "";
        $dateLimit = date_create_from_format('Y-m-d', '2021-12-12');

        //recuperation de la date actuel
        $nowDate = new dateTime;
        $nowDateString = "" . $nowDate->format('Y-m-d');
        
        
        if($nowDateString != $dateSign)
        {
            return false;
        }
    return true;
    }

    function idUnique(String $champs)
    {
        $conn = openBD();
        do
        {
            $id = mt_rand(10000000, 99999999);
            $query = $conn->query("SELECT * FROM Joueur WHERE" . $champs . "=\"" . $id ."\"");
        }while($query->num_rows != 0);
    
    return $id;
    }

    function addCompteBD($mdp, $nom, $date,$login,$prenom, $adresse, $id_joueur)
    {
        //formatage des données
        $mdp =  password_hash($mdp, PASSWORD_DEFAULT);
        $mdp = ",'" . $mdp . "'";
        $nom = ",'" . $nom . "'";
        $date = ",'" . $date . "'";
        $login = "'" . $login . "'";
        $prenom = ",'" . $prenom . "'";
        $adresse = ",'" . $adresse . "'";
        $id_joueur = "'" . $id_joueur . "'";

        $conn = openBD();

        $conn->query("INSERT INTO joueur(id_joueur, nom_joueur, prenom_joeur) VALUES (" . $id_joueur . $nom . $prenom . ");");
        $id_joueur = "," . $id_joueur;
        $conn->query("INSERT INTO Utilisateur(pseudo,pasword,adresse_mail,date_naissance,id_joueur,id_joueur) VALUES (" . $login . $mdp . $adresse . $date . $id_joueur . ");");
    }

    function verifLogin($login): bool
    {
        $conn = openBD();
        $query = $conn->query("SELECT * FROM Utilisateur WHERE login='" . $login ."';");

        if($query->num_rows == 0)
        {
            return true;
        }
    return false;
    }

    function inscription():string
    {   
        $erreur = "";
        $message = "";

        $mdp = $_POST["mdp"];
        $nom = $_POST["nom"];
        $cMdp = $_POST["cMdp"];
        $date = $_POST["date"];
        $login = $_POST["login"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
       
        $haveErreur = false;

        //verification sur les infos à entrer dans la bd
        if(!filter_var($adresse, FILTER_VALIDATE_EMAIL) || strlen($adresse) > 100)
        {
            $erreur = "adresse mail invalide, " . $erreur;
            $haveErreur = true;
        }
        if(strlen($nom) > 30 || strlen($nom) < 0)
        {
            $erreur = "taille nom invalide, " . $erreur;
            $haveErreur = true;
        }
        if(strlen($prenom) > 25 || strlen($prenom) < 0)
        {
            $erreur = "taille prenom invalide, " . $erreur;
            $haveErreur = true;
        }
        if(strlen($login) > 20 || strlen($login) < 0)
        {
            $erreur = "taille login invalide, " . $erreur;
            $haveErreur = true;
        }
        else
        {
            //verifie l'unicite du login
            if(!verifLogin($login))
            {
                $erreur = "login déja utiliser, " . $erreur;
                $haveErreur = true;
            }
        }

        if(strlen($mdp) > 20 || strlen($mdp) < 0)
        {
            $erreur = "taille mdp invalide, " . $erreur;
            $haveErreur = true;
        }
        if( strcmp($mdp, $cMdp) !== 0)
        {
            $erreur = "confirmation de pasword invalide, " . $erreur;
            $haveErreur = true;
        }

        if($haveErreur)
        {
            $message="Les erreur suivante empeche votre inscription: ";
            $message = $message . $erreur;
        }
        else
        {
            $id_joueur = idUnique("id_joueur");

            //ajout des donnes d'inscription dans la base de donnes   
            addCompteBD($mdp, $nom, $date,$login,$prenom, $adresse, $id_joueur);

            //creation du lien personaliser
            $lien = "https://localhost//Projet_web/PaintBallTraker-s/confirm.php?id=" . $id_joueur;

            //envoie du mail de confirmation
            confirmMail($adresse, $login, $lien);

            $message= "Inscription validée!";
        }
    

    return $message;
    }
?>