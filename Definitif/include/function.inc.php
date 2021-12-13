<?php

use PHPMailer\PHPMailer\PHPMailer;

    include_once 'include/PHPMailer-master/src/Exception.php';
    include_once 'include/PHPMailer-master/src/PHPMailer.php';
    include_once 'include/PHPMailer-master/src/SMTP.php';
    include_once 'Objet.php';

    /**
     * Fonction permettant la connexion a la BD
     * @return mysqli
     */

    function openBD(): mysqli
    {
        include_once 'bd.con.php';

        $conn = new mysqli( HOST, USER, MDP, BD, PORT);
        if($conn->connect_error)
        {
            die('Erreur : ' .$conn->connect_error);
        }
        else
        {
        }
    return $conn;
    }

    /**
     * Fonction permettant de vérifier si le mot de passe est valide
     * par rapport au login.
     * 
     * @param string $login le login de l'utilisateur
     * @param string $mdp le mot de passe rentrer par l'utilisateur
     * @return boolean true si le mots de passe est bon false sinon
     */
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

    /**
     * Fonction qui permet la connexion au service de mail
     * @return PHPMailer un objet permettant l'envoie des mails
     */
    function connectMail()
    {
        include_once 'mail.conf.php';
        $mail = new PHPMailer();
        
        $mail->isSMTP();
        $mail->Port = PORT_MAIL;
        $mail->SMTPAuth = 1;
        $mail->Host = HOST_MAIL;
        $mail->Hostname = HOSTNAME;

        if($mail->SMTPAuth)
        {
            $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
            $mail->Username   =  USER_MAIL;  
            $mail->Password   =  MDP_MAIL;
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
        $request = "INSERT INTO Equipe (id_equipe,nom_equipe,nb_joueur) VALUES (?,?,?)";
        $query = $conn->prepare($request);

        if($query)
        {
            $query->bind_param('sss', $idEquipe, $nomEquipe, $nbJoueur);
            $query->execute();
        }
        else
        {
            echo "problèmpe de requete";
        }

        $conn->close();
    }

    function adJOEquipe($idJoueur, $idEquipe)
    {
        $conn = openBD();
        $request = "INSERT INTO appartient_a (id_joueur,id_equipe) VALUES (?,?)";

        $query = $conn->prepare($request);

        if($query)
        {
            $query->bind_param('ss', $idJoueur, $idEquipe);
            $query->execute();
        }

        $conn->close();
    }

    function tableEquipeId($id)
    {
        $conn = OpenBD();
        $request = $conn->query("SELECT * FROM Equipe WHERE id_equipe = '" . $id ."'");
        $res = $request->fetch_all(MYSQLI_ASSOC);
        $conn->close();
    return $res;
    }

    function tableEquipe($login)
    {
        $conn = openBD();
        $res = $conn->query("SELECT * FROM Equipe e, Utilisateur u, appartient_a a WHERE u.pseudo ='" . $login . "' AND a.id_joueur = u.id_joueur AND a.id_equipe = e.id_equipe;");
        $res = $res->fetch_all(MYSQLI_ASSOC);
        $conn->close();
    return $res;
    }

    function tableMatchs($login)
    {
        $conn = openBD();
        $request = "SELECT DISTINCT id_match,terrain,equipe_allie,equipe_adv,duree_match,nbr_elimin_user,nombre_loader,duree_ingame,type_gun FROM Matchs m, Utilisateur u, appartient_a a, Equipe e WHERE  u.pseudo = '" .$login . "' AND a.id_joueur = u.id_joueur AND m.equipe_allie = a.id_equipe AND id_match ";
        $rep = $conn->query($request);
        $rep = $rep->fetch_all(MYSQLI_ASSOC);
        $conn->close();
    return $rep;
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

    /**
     * Fonction qui permet d'envoyer le mail de confirmation de l'inscription.
     * @param string $adresse, l'adresse a qui envoyer le mail
     * @param string $login, le login de l'utilisateur
     * @param string $lien, le lien de confirmation à envoyer
     */
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

    /**
     * Fonction qui permet de rendre actif le compte si l'utilisateur click
     * sur le lien envoyée par mail.
     */
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
    
    /**
     * Fonction qui permet de vérifier si le lien de confirmation du compte est toujours actif
     * @param string $id_lien l'id du lien selon l'utilisateur
     * @return bool true si le true si le lien est toujour valide false sinon
     */
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

    /**
     * Fonction qui permet d'ajouter un compte à la base de donnée.
     * @param string $mdp, le mots de passe du nouveau compte
     * @param string $nom, le nom de l'utilisateur
     * @param string $date, la date de naissance de l'utilisateur
     * @param string $login, le login
     * @param string $prenom, le prenom de l'utilisateur
     * @param string $adresse, l'adresse mail de l'utilisateur
     * @param string $id_lien, l'id a mettre dans le lien pour confirmer le mail
     */
    function addCompteBD($mdp, $nom, $date,$login,$prenom, $adresse, $id_lien)
    {
        //formatage des données
        printf("mdp rentrer dans base est:" . $mdp ."voila");
        $mdp =  password_hash($mdp, PASSWORD_DEFAULT);
        printf("le hesh est:" . $mdp ."voila");

        $conn = openBD();
        
        $id_joueur = addJoueur($nom, $prenom);

        //chaine de caretere representant la requete numero deux
        $request = "INSERT INTO Utilisateur(pseudo,pasword,adresse_mail,date_naissance,id_joueur,actif,id_lien,date_inscription) VALUES (?,?,?,?,?,0,?,NOW())";
        $query = $conn->prepare($request);

        if($query)
        {
             //entre des donnees de l'utilisateur
            $query->bind_param('ssssis',$login,$mdp,$adresse,$date,$id_joueur,$id_lien);
            $query->execute();
        }
        else
        {
            printf("problème a la requette 2");
        }

        $conn->close();
    }

    /**
     * Fonction qui permet de vérifier si un login existe déja dans la base de donnée.
     * @param string
     * @return bool retourn true si il n'existe pas sinon false
     */
    function verifLogin(string $login): bool
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

    /**
     * Fonction qui permet a l'utilisateur de se créer un compte.
     * @return string $message, message d'erreur ou de de confirmation
     */
    function inscription():string
    {   
        $erreur = "";
        $message = "";

        $mdp = $_POST["mdp"];
        $nom = $_POST["nom"];
        $cMdp = $_POST["cMdp"];
        $date = $_POST["date"];
        $login = $_POST["login_i"];
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

    /**
     * Fonction qui permet de vérifier si le compte de l'utilisateur est actif.
     * @param $login, le login de l'utilisateur
     * @return boolean, revoie true si le compte est actif false sinon
     */
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

    /**
     * Fonction qui permet permet la connection sur le site si le mot de passe est bon,
     * et que le compt est actif.
     */
    function conect()
    {
       
            $mdp = $_POST['pasword'];
            $login = $_POST['login'];

            if(valideMdp($mdp,$login) && isActif($login))
            {
                session_start();
                $user = new InfoUser($login);
                
                $_SESSION['login'] = $login;
                $_SESSION['idJoueur'] = $user->getIdJ();
                $_SESSION['avatar'] = $user->getAvatar();
                $_SESSION['mime'] = $user->getMime();
                $_SESSION['nom'] = $user->getNom();
                $_SESSION['prenom'] = $user->getPrenom();
            }
    }

    function choixEquipe($login)
    {
        $equipes = tableEquipe($login);

        $choix =  "<select name='equipe' class='input' style='padding-left: 0; margin-left: -4px'>";

        foreach($equipes as $equipe)
        {
            $choix .=  "\n\t\t<option value='". $equipe['id_equipe'] ."'>" . $equipe['nom_equipe'] . "</option>";
        }

        $choix .= "\n\t</select>";
    return $choix;
    }

    function addJoueur($nom,$prenom)
    {
        $conn = openBD();

        $request1 = "INSERT INTO Joueur(nom_joueur, prenom_joueur) VALUES (?,?)";
        $query = $conn->prepare($request1);

        if($query)
        {
            $query->bind_param('ss',$nom,$prenom);
            $query->execute();
        }

        //reprendre le id joueur pour le retourner
        $query = $conn->query("SELECT * FROM Joueur;");
        $id_joueur = $query->num_rows;
        
        $conn->close();

    return $id_joueur;
    }

    function idUniqueEquipe()
    {
        $conn = openBD();
        do
        {
            
            $id = mt_rand(10000000, 99999999);
            $query = $conn->query("SELECT * FROM Equipe WHERE id_equipe='" . $id ."';");
        }while($query->num_rows != 0);
    
    return $id;
    }

    function addJInEquipe()
    {
        $nom = $_GET['nomJoueur'];
        $prenom = $_GET['prenomJoueur'];
        $idEquipe = $_GET['equipe'];

        $idJoueur = addJoueur($nom,$prenom);
        adJOEquipe($idJoueur, $idEquipe);

    }

    function addEquipe()
    {
        $nomEquipe = $_GET['nomEquipe'];
        $nbJoueur = $_GET['nbJoueur'];
        $idEquipe = idUniqueEquipe();

        adEquipe($idEquipe,$nomEquipe, $nbJoueur);
        adJOEquipe($_SESSION['idJoueur'], $idEquipe);
    }

    function addImg()
    {
        $img = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
        $type = $_FILES['avatar'] ['type'];

        $conn = openBD();
        $request = "SELECT * FROM Utilisateur WHERE pseudo='" .$_SESSION['login'] ."';";
        $query = $conn->query($request);

        if($query)
        {
            $request = "UPDATE Utilisateur SET avatar='". $img . "' WHERE pseudo='" . $_SESSION['login'] . "';";
            $request2 = "UPDATE Utilisateur SET mime='". $type . "' WHERE pseudo='" . $_SESSION['login'] . "';";
            $query = $conn->query($request);
            $query = $conn->query($request2);

            printf("<p> tout se passe bien </p>");
        }

    }

    function afficheAvatar()
    {
        echo "<img src='data:". $_SESSION['mime'] . ";base64,"  . base64_encode($_SESSION['avatar']) . "' alt='test' />";
    }

    function updatAvatar()
    {
        $user = new InfoUser($_SESSION['login']);
        $_SESSION['avatar'] = $user->getAvatar();
        $_SESSION['mime'] = $user->getMime();
    }

    function idMatch()
    {
        $conn = openBD();
        do
        {
            
            $id = mt_rand(10000000, 99999999);
            $query = $conn->query("SELECT * FROM Matchs WHERE id_match='" . $id ."';");
        }while($query->num_rows != 0);
    
    return $id;
    }

    function adMatch($terrain, $equipeAllie, $dureeMatch, $nbrEliminUser, $nombreLoader, $Duree_ingame, $choixMatch, $typeGun)
    {
        $idMatch = idMatch();
        echo $terrain. $equipeAllie. $dureeMatch. $nbrEliminUser. $nombreLoader. $Duree_ingame. $choixMatch. $typeGun;
        echo $idMatch;
        $conn = openBD();
        $request = "INSERT INTO Matchs (id_match, terrain, equipe_allie, duree_match, nbr_elimin_user, nombre_loader, duree_ingame, choix_match, type_gun) VALUES (?,?,?,?,?,?,?,?,?)";
        //$request2 = "INSERT INTO Matchs (id_match, terrain, equipe_allie, duree_match, nbr_elimin_user, nombre_loader, duree_ingame, choix_match, type_gun) VALUES ($idJoueur,$terrain,$equipeAllie,?,?,?,?,?,?)";
        //INSERT INTO Matchs (id_match, terrain, equipe_allie, duree_match, nbr_elimin_user, nombre_loader, duree_ingame, choix_match, type_gun) VALUES ('84775930','test','10000000', 5.5, 4, 4, 4.4, 'loisir', 'mecanique')
        $query = $conn->prepare($request);

        if($query)
        {
            $query->bind_param('sssssssss', $idMatch, $terrain, $equipeAllie, $dureeMatch, $nbrEliminUser, $nombreLoader, $Duree_ingame, $choixMatch, $typeGun);
            if($query->execute())
            {
                echo "reusi";
            }
            else
            {
                echo "erreur insert erreur: " . $query->errno;
            }
        }
        else
        {
            echo "erreur";
        }

        $conn->close();
    }
?>