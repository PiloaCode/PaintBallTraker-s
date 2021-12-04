<?php

use PHPMailer\PHPMailer\PHPMailer;

    include_once 'include/PHPMailer-master/src/Exception.php';
    include_once 'include/PHPMailer-master/src/PHPMailer.php';
    include_once 'include/PHPMailer-master/src/SMTP.php';

    function valideMdp(string $mdp, string $login): bool
    {
        $conn = openBD();
        $query = $conn->query("SELECT pasword FROM Utilisateur WHERE pseudo=\"" .$login ."\";");
        $result = $query->fetch_assoc();
        $conn->close();

        $mdpBD = $result['pasword'];

        if(password_verify($mdp,$mdpBD) == true)
        {
            return true;
        }
    return false;
    }

    function connectMail()
    {
        $mail = new PHPMailer();
        
        $mail->isSMTP();
        $mail->Port = 465;
        $mail->SMTPAuth = 1;
        $mail->Host ='smtp-piloa.alwaysdata.net';
        $mail->Hostname = "PaintBallTraker's";

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

    function tableUser($login)
    {
        $conn = openBD();
        $res = $conn->query("SELECT * FROM Utilisateur WHERE pseudo=\'" . $login . "\';");
        $conn->close();
    }

    function tableJoueur($id_joueur)
    {
        $conn = openBD();
        $res = $conn->query("SELECT * FROM Joueur WHERE id_joueur =" . $id_joueur .";");
        $conn->close();
    }

    function adJoueur($nom, $prenom)
    {
        $conn = openBD();
        $request = "INSERT INTO Joueur (nom_joueur,prenom_joueur) VALUE (?,?)";
        $query = $conn->prepare($request);

        if($query)
        {
            $query->bind_param('ss', $nom, $prenom);
            $query->execute();
        }
        $conn->close();
    }

    function adEquipe($idEquipe,$nomEquipe, $nbJoueur)
    {
        $conn = openBD();
        $request = "INSERT INTO Equipe (id_equipe,nom_equipe,nb_joueur) VALUE (?,?,?)";
        $query = $conn->prepare($request);

        if($query)
        {
            $query->bind_param('sss', $idEquipe, $nomEquipe, $nbJoueur);
            $query->execute();
        }

        $conn->close();
    }

    function adJOEquipe($idJoueur, $idEquipe)
    {
        $conn = openBD();
        $request = "INSERT INTO appartient_a (id_joueur,id_equipe) VALUE (?,?)";
        $query = $conn->prepare($request);

        if($query)
        {
            $query->bind_param('ss', $$idJoueur, $$idEquipe);
            $query->execute();
        }

        $conn->close();
    }

    function adMatch($idMatch, $terrain, $equipeAllie, $equipeAdv, $dureeMatch, $nbrEliminUser, $nombreLoader, $Duree_ingame, $choixMatch, $typeGun)
    {
        $conn = openBD();
        $request = "INSERT INTO Matchs (id_joueur,id_equipe) VALUE (?,?)";
        $query = $conn->prepare($request);

        if($query)
        {
            $query->bind_param('ss', $$idJoueur, $$idEquipe);
            $query->execute();
        }

        $conn->close();
    }

    function tableEquipe($login)
    {
        $conn = openBD();
        $res = $conn->query("SELECT * FROM Equipe e, Utilisateur u, appartient_a a WHERE u.pseudo =\'" . $login . "\' AND a.id_joueur = u.id_joueur AND a.id_equipe = e.id_equipe;");
        $res = $res->fetch_all(MYSQLI_ASSOC);
        $conn->close();
    return $res;
    }

    function tableMatchs($login)
    {
        $conn = openBD();
        $rep = $conn->query("SELECT DISTINCT id_match,terrain,equipe_allie,equipe_adv,duree_match,nbr_elimin_user,nombre_loader,duree_ingame,type_gun FROM Matchs m, Utilisateur u, appartient_a a, Equipe e WHERE  u.pseudo = \' " .$login . "\' AND a.id_joueur = u.id_joueur AND m.equipe_allie = a.id_equipe AND id_match ;");
        $rep = $rep->fetch_all(MYSQLI_ASSOC);
        $conn->close();
    return $rep;
    }

    function afficheTabMatch($login)
    {
        $res = tableMatchs($login);

            $chaine =  "<table>";
            $chaine .= "<thead>";
            $chaine .= "<tr>";
            $chaine .= "<th> id match </th>";
            $chaine .= "<th> terrain </th>";
            $chaine .= "<th> equipe_allie </th>";
            $chaine .= "<th> equipe_adv </th>";
            $chaine .= "<th> duree_match </th>";
            $chaine .= "<th> nbr_elimin_user </th>";
            $chaine .= "<th> nombre_loader </th>";
            $chaine .= "<th> duree_ingame </th>";
            $chaine .= "<th> type_gun </th>";
            $chaine .="</tr>";
            $chaine .= "</thead>";
            $chaine .= "<tbody>";

        foreach($res as $line)
        {
            $chaine .= "<tr>";
            $chaine .= "<td>" . $line['id_match'] . "</td>";
            $chaine .= "<td>" . $line['terrain'] . "</td>";
            $chaine .= "<td>" . $line['equipe_allie'] . "</td>";
            $chaine .= "<td>" . $line['equipe_adv'] . "</td>";
            $chaine .= "<td>" . $line['duree_match'] . "</td>";
            $chaine .= "<td>" . $line['nbr_elimin_user'] . "</td>";
            $chaine .= "<td>" . $line['nombre_loader'] . "</td>";
            $chaine .= "<td>" . $line['duree_ingame'] . "</td>";
            $chaine .= "<td>" . $line['type_gun'] . "</td>";
            $chaine .= "</tr>";
        }
        $chaine .= "</tbody>";
        $chaine .= "</table>";
    return $chaine;
    }

    function tableDeathmatch($idMatch)
    {
        $conn = openBD();
        $conn->query("SELECT * FROM Deathmatch WHERE id_dm = \'" . $idMatch . "\';");
        $conn->close();
    }

    function tableProtectVip($idMatch)
    {
        $conn = openBD();
        $conn->query("SELECT * FROM Protect_vip WHERE id_pv = \'" . $idMatch . "\';");
        $conn->close();
    }

    function tableCaptureDrapeau($idMatch)
    {
        $conn = openBD();
        $conn->query("SELECT * FROM Capture_drapeau WHERE id_cd = \'" . $idMatch . "\';");
        $conn->close();
    }

    function confirmMail(String $adresse,  String $login, String $lien)
    {   
        //creation du mail
        $mail= connectMail();
        $mail->From = "piloa@alwaysdata.net";
        $mail->Subject = "Confirmation inscription PaintBallTrakers";
        $mail->WordWrap = 50;
        //$mail->AltBody ="message voici mon message tout se passe bien chez nouss";
        
        $mail->isHTML(true); //false
        $mail->Body = "<html>
            <h3> Confirmer votre inscription sur PaintBallTrakers </h3>
            <p> Bonjour $login, </p>
            <p> Bonjour pour confirmer votre inscription à notre site web utiliser le lien suivant <br>
                <a href=\"$lien\" > cliquer ici </a>
            </p>
        </html>"; //"Bonjour" . $login . ",\n voici l'adresse de confirmation de mail: " . $lien
        $mail->addAddress($adresse);
        $rep = $mail->send();

        if (!$rep) {
            echo $mail->ErrorInfo;
      } else{
            echo 'Message bien envoyé';
      }
    }

    function openBD(): mysqli
    {
        include_once 'bd.con.php';

        $conn = new mysqli( $hostname, $user, $mdp, $BD, $port);
        if($conn->connect_error)
        {
            die('Erreur : ' .$conn->connect_error);
        }
        else
        {
            echo 'Connexion réussie';
        }
    return $conn;
    }

    function validRegistation()
    {
        $id_lien = $_GET['id'];

        //recuperation des informations dans la BD
        $conn = openBD();
        $request = "SELECT * FROM Utilisateur WHERE id_lien=\"" .$id_lien ."\";";
        $query = $conn->query($request);

        if($query)
        {
            $res = $query->fetch_assoc();
            if(verifDate($id_lien))
            {
                $request = "UPDATE Utilisateur SET actif=1;";
                $query = $conn->query($request);

                printf("<p> tout se passe bien </p>");
            }
            else
            {
                printf("<p> problème de date </p>");
            }
        }
        else
        {
            printf("<p> problème de lien </p>");
        }
        
        $conn->close();
    }
    
    function verifDate(String $id_lien): bool
    {
        //recuperation de la date d'inscription de l'utilisateur 
        $conn = openBD();
        $request = "SELECT * FROM Utilisateur WHERE id_lien=\"" .$id_lien ."\";";
        $query = $conn->query($request);
        $conn->close();
        
        $res = $query->fetch_assoc();
        $dateSign = $res['date_inscription'];
        $dateLimit = date_create_from_format('Y-m-d', '2021-12-12');

        //recuperation de la date actuel
        $nowDate = new dateTime;
        $nowDateString = "" . $nowDate->format('Y-m-d');
        
        if(strcmp($nowDateString, $dateSign) == 0)
        {
            return true;
        }

    return false;
    }

    function idUnique(String $champs)
    {
        $conn = openBD();
        do
        {
            $id = mt_rand(10000000, 99999999);
            $query = $conn->query("SELECT * FROM Utilisateur WHERE " . $champs . "=\"" . $id ."\";");
        }while($query->num_rows != 0);
    
    return $id;
    }

    function addCompteBD($mdp, $nom, $date,$login,$prenom, $adresse, $id_lien)
    {
        //formatage des données
        printf("mdp rentrer dans base est:" . $mdp ."voila");
        $mdp =  password_hash($mdp, PASSWORD_DEFAULT);
        printf("le hesh est:" . $mdp ."voila");

        $conn = openBD();
        
        //chaine de caretere representant la requete numero une
        $request1 = "INSERT INTO Joueur(nom_joueur, prenom_joueur) VALUES (?,?)";

        //chaine de caretere representant la requete numero deux
        $request2 = "INSERT INTO Utilisateur(pseudo,pasword,adresse_mail,date_naissance,id_joueur,actif,id_lien,date_inscription) VALUES (?,?,?,?,?,0,?,NOW())";

        printf("\n\n<p>requete 1 est: " . "INSERT INTO Joueur(nom_joueur, prenom_joueur) VALUES (\"" . $nom ."\",\"" . $prenom . "\"); </p>");

        // entre des donnees du joueur
        $query1 = $conn->prepare($request1);
        if($query1)
        {
            $query1->bind_param('ss',$nom,$prenom);
            $query1->execute();
        }
        else
        {
            printf("problème a la requette 1");
        }

        //reprendre le id joueur pour l'inserer dans le profil de l'utilisateur
        $query = $conn->query("SELECT * FROM Joueur;");
        $id_joueur = $query->num_rows;

        $query2 = $conn->prepare($request2);

        if($query2)
        {
             //entre des donnees de l'utilisateur
            $query2->bind_param('ssssis',$login,$mdp,$adresse,$date,$id_joueur,$id_lien);
            $query2->execute();
        }
        else
        {
            printf("problème a la requette 2");
        }

        $conn->close();
    }

    function verifLogin($login): bool
    {
        $conn = openBD();
        $query = $conn->query("SELECT * FROM Utilisateur WHERE pseudo='" . $login ."';");
        $nbrLigne = $query->num_rows;

        if($nbrLigne == 0)
        {
            return 1;
        }
    return 0;
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
       
        $haveErreur = 0;

        //verification sur les infos à entrer dans la bd
        if(!filter_var($adresse, FILTER_VALIDATE_EMAIL) || strlen($adresse) > 100)
        {
            $erreur = "adresse mail invalide, " . $erreur;
            $haveErreur = 1;
        }
        if(strlen($nom) > 30 || strlen($nom) < 0)
        {
            $erreur = "taille nom invalide, " . $erreur;
            $haveErreur = 1;
        }
        if(strlen($prenom) > 25 || strlen($prenom) < 0)
        {
            $erreur = "taille prenom invalide, " . $erreur;
            $haveErreur = 1;
        }
        if(strlen($login) > 20 || strlen($login) < 0)
        {
            $erreur = "taille login invalide, " . $erreur;
            $haveErreur = 1;
        }
        else
        {
            //verifie l'unicite du login
            if(!verifLogin($login))
            {
                $erreur = "login déja utiliser, " . $erreur;
                $haveErreur = 1;
            }
        }

        if(strlen($mdp) > 20 || strlen($mdp) < 0)
        {
            $erreur = "taille mdp invalide, " . $erreur;
            $haveErreur = 1;
        }
        if( strcmp($mdp, $cMdp) !== 0)
        {
            $erreur = "confirmation de pasword invalide, " . $erreur;
            $haveErreur = 1;
        }

        if($haveErreur)
        {
            $message="Les erreur suivante empeche votre inscription: ";
            $message = $message . $erreur;
        }
        else
        {
            printf("on a des erreur: " . $haveErreur);
            $id_lien = idUnique("id_lien");

            //ajout des donnes d'inscription dans la base de donnes   
            addCompteBD($mdp, $nom, $date,$login,$prenom, $adresse, $id_lien);

            //creation du lien personaliser
            $lien = "https://piloa.alwaysdata.net/PaintBallTraker's/confirm.php?id="  . $id_lien;
            //lien local: "https://localhost//Projet_web/PaintBallTraker-s/confirm.php?id=" . $id_lien;
            //lien en ligne: "https://piloa.alwaysdata.net/PaintBallTraker's/confirm.php?id=" . $id_lien;

            //envoie du mail de confirmation
            confirmMail($adresse, $login, $lien);

            $message= "Inscription validée!";
            printf("création compte réussie");
        }
    

    return $message;
    }

    function isActif(string $login): bool
    {
        $conn = openBD();
        $request = "SELECT actif FROM Utilisateur WHERE pseudo=(?)";
        $query = $conn->prepare($request);

        if($query)
        {
            $query->bind_param('s',$login);
            $query->execute();
            $rep = $query->get_result();
            $rep = $rep->fetch_assoc();
            $rep = $rep['actif'];
            $conn->close();
            
            if($rep == 1)
            {
                return true;
            }
        }

    return false;
    }

    function conect()
    {
        $mdp = $_POST['pasword'];
        $login = $_POST['login'];

        if(valideMdp($mdp,$login) && isActif($login))
        {
            session_start();
            $_SESSION['login'] = $login;
        }
    }

    function hasSession(): bool
    {
        if(session_status() == PHP_SESSION_ACTIVE)
        {
            return true;
        }
    return false;
    }
    function testAffiche($login)
    {
        $conn = openBD();
        $query = $conn->query("SELECT * FROM Matchs;");
        $matchs = $query->fetch_row();
        $conn->close();
    }
?>