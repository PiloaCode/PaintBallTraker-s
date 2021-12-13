<?php

include_once 'include/function.inc.php';
class User
{
    private $login;
    private $adresseMail;
    private $date_naissance;

    public function __construct(string $login, string $adresseMail, $date_naissance)
    {
        $this->login = $login;
        $this->adresseMail = $adresseMail;
        $this->date_naissance = $date_naissance;
    }

    public function set_idJoueur(string $login)
    {
        $this->login = $login;
    }

    public function set_adresseMail(string $adresseMail)
    {
        $this->adresseMail = $adresseMail;
    }

    public function set_date_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    public function get_idJoueur(): string
    {
        return $this->login;
    }

    public function get_adresseMail(): string
    {
        return $this->adresseMail;
    }

    public function get_date_naissance()
    {
        return $this->date_naissance;
    }

}

class Joueur
{
    private $id_joueur;
    private $nom_joueur;
    private $prenom_joueur;

    public function __construct($id_joueur, string $nom_joueur, string $prenom_joueur)
    {
        $this->prenom_joueur;
        $this->id_joueur = $id_joueur;
        $this->nom_joueur = $nom_joueur;
    }

    public function set_id_joueur($id_joueur)
    {
        $this->id_joueur = $id_joueur;
    }

    public function  set_nom_joueur(string $nom_joueur):void
    {
        $this->nom_joueur = $nom_joueur;
    }

    public function set_prenom_joueur($prenom_joueur):void
    {
        $this->prenom_joueur = $prenom_joueur;
    }

    public function get_id_joueur()
    {
       return $this->id_joueur; 
    }

    public function get_nom_joueur():string
    {
        return $this->nom_joueur;
    }

    public function get_prenom_joueur():string
    {
        return $this->prenom_joueur;
    }
}

class Equipe
{
    private $id_equipe;
    private $nb_joueur;
    private $nom_equipe;

    public function __construct($id_equipe, int $nb_joueur, $nom_equipe)
    {
        $this->id_equipe = $id_equipe;
        $this->nb_joueur = $nb_joueur;
        $this->nom_equipe = $nom_equipe;
    }

    public function set_id_equipe($id_equipe)
    {
        $this->id_equipe = $id_equipe;
    }

    public function set_nb_joueur($nb_joueur)
    {
        $this->nb_joueur = $nb_joueur;
    }

    public function set_nom_equipe($nom_joueur)
    {
        $this->nom_joueur = $nom_joueur;
    }

    public function get_id_equipe()
    {
        return $this->id_equipe;
    }

    public function get_nb_joueur()
    {
        return $this->nb_joueur;
    }

    public function get_nom_equipe()
    {
        return $this->nom_equipe;
    }
}

class Matchs
{
    private $login;
    private $matchs;
    
    public function __construct($loader, $terrain, $id_match, $type_gun, $dure_match, $choix_match, $dure_ingame, $choix_loisir, $nbr_elimmin_user)
    {
        $this->login = $_SESSION['login'];
        $conn = openBD();
        $query = $conn->query("SELECT * FROM Matchs;");
        $matchs = $query->fetch_row();
        $conn->close();
    }

    public function set_loader($loader)
    {
        $this->loader = $loader;
    }

    public function set_terrain($terrain)
    {
        $this->terrain = $terrain;
    }

    public function set_id_match($id_match)
    {
        $this->id_match = $id_match; 
    }

    public function set_type_gun($type_gun)
    {
        $this->type_gun = $type_gun;
    }

    public function set_dure_match($dure_match)
    {
        $this->dure_match = $dure_match;
    }

    public function set_choix_match($choix_match)
    {
        $this->choix_match = $choix_match;
    }

    public function set_dure_ingame($dure_ingame)
    {
        $this->dure_ingame = $dure_ingame;
    }

    public function set_choix_loisir($choix_loisir)
    {
        $this->choix_loisir = $choix_loisir;
    }

    public function set_nbr_elimmin_user($nbr_elimmin_user)
    {
        $this->nbr_elimmin_user = $nbr_elimmin_user;
    }

    public function get_loader()
    {
        return $this->loader;
    }

    public function get_terrain()
    {
        return $this->terrain;
    }

    public function get_id_match()
    {
        return $this->id_match;
    }

    public function get_type_gun()
    {
        return $this->type_gun;
    }

    public function get_dure_match()
    {
        return $this->dure_match;
    }

    public function get_choix_match()
    {
        return $this->choix_match;
    }

    public function get_dure_ingame()
    {
        return $this->dure_ingame;
    }

    public function get_choix_loisir()
    {
        return $this->choix_loisir;
    }

    public function get_nbr_elimmin_user()
    {
        return $this->nbr_elimmin_user;
    }
}

class Deathmatch
{
    private $bonus_bille;
    private $nb_elimin_allie;
    private $nb_elimin_adverse;

    public function __construct($bonus_bille, $nb_elimin_allie, $nb_elimin_adverse)
    {
        $this->bonus_bille = $bonus_bille;
        $this->nb_elimin_allie = $nb_elimin_allie;
        $this->nb_elimin_adverse = $nb_elimin_adverse;
    }

    public function set_bonus_bille($bonus_bille)
    {
        $this->bonus_bille = $bonus_bille;
    }

    public function set_nb_elimin_allie($nb_elimin_allie)
    {
        $this->nb_elimin_allie = $nb_elimin_allie;
    }

    public function set_nb_elimin_adverse($nb_elimin_adverse)
    {
        $this->nb_elimin_adverse = $nb_elimin_adverse;
    }
    
    public function get_bonus_bille()
    {
        return $this->bonus_bille;
    }

    public function get_nb_elimin_allie()
    {
        return $this->nb_elimin_allie;
    }

    public function get_nb_elimin_adverse()
    {
        return $this->nb_elimin_adverse;
    }
}

class Protect_vip
{
    private $nb_elimin_vip;

    public function __construct($nb_elimin_vip)
    {
        $this->nb_elimin_vip = $nb_elimin_vip;
    }

    public function set_nb_elimin_vip($nb_elimin_vip)
    {
        $this->nb_elimin_vip = $nb_elimin_vip;
    }

    public function get_nb_elimin_vip()
    {
        return $this->nb_elimin_vip;
    }
}

class Capture_drapeau
{
    private $nb_drapeau;
    private $nb_elim_flag;

    public function __construct($nb_drapeau, $nb_elim_flag)
    {
        $this->nb_drapeau = $nb_drapeau;
        $this->nb_elim_flag = $nb_elim_flag;
    }

    public function set_nb_drapeau($nb_drapeau)
    {
        $this->nb_drapeau = $nb_drapeau;
    }

    public function set_nb_elimin_flag($nb_elim_flag)
    {
        $this->nb_elim_flag = $nb_elim_flag;
    }

    public function get_nb_drapeau()
    {
        return $this->nb_drapeau;
    }

    public function get_nb_elim_flag()
    {
        return $this->nb_elim_flag;
    }
}

class InfoUser
{
    private $pseudo;
    private $adressMail;
    private $dateNaissance;
    private $nom;
    private $prenom;
    private $idJoueur;
    private $avatar;
    private $mime;

    public function __construct($login)
    {
        //recupÃ¨re les informations de l'utilisateur dans la bd
        $conn = openBD();
        $request = "SELECT * FROM Utilisateur u, Joueur j WHERE u.pseudo = '" . $login . "' AND j.id_joueur = u.id_joueur;";
        $query = $conn->query($request);
        $utilisateur = $query->fetch_all(MYSQLI_ASSOC);
        $conn->close();

        //stock les information de la BD dans l'objet
        $this->pseudo = $utilisateur[0]['pseudo'];
        $this->adressMail = $utilisateur[0]['adresse_mail'];
        $this->dateNaissance = $utilisateur[0]['date_naissance'];
        $this->nom = $utilisateur[0]['nom_joueur'];
        $this->prenom = $utilisateur[0]['prenom_joueur'];
        $this->idJoueur = $utilisateur[0]['id_joueur'];
        $this->avatar =  $utilisateur[0]['avatar'];
        $this->mime =  $utilisateur[0]['mime'];

    }

    public function test()
    {
        $chaine = "";

        $chaine .= "<table>";
        $chaine .= "<tr>";
        $chaine .= "<th> pseudo </th>";
        $chaine .= "<td>" . $this->pseudo . "</td>";
        $chaine .= "</tr>";
        
        $chaine .= "<tr>";
        $chaine .= "<th> adresse mail </th>";
        $chaine .= "<td> " . $this->adressMail . " </td>";
        $chaine .= "</tr> ";
        
        $chaine .= "<tr>";
        $chaine .= "<th> date de naissance </th>";
        $chaine .= "<td>" . $this->dateNaissance . "</td>";
        $chaine .= "</tr>";
        
        $chaine .= "<tr>";
        $chaine .= "<th> nom </th>";
        $chaine .= "<td>" . $this->nom . "</td>";
        $chaine .= "</tr>";

        $chaine .= "<tr>";
        $chaine .= "<th> prenom </th>";
        $chaine .= "<td>" . $this->prenom . "</td>";
        $chaine .= "</tr>";

        $chaine .= "</table>";

    return $chaine;
    }


    public function test_bis()
    {
        $chaine = "";
        $chaine.= "<div style='background: #E9EDDE; text-align: center; margin: 20%; border-radius: 15px; height: 700px'>";
        if(empty($this->avatar)){
            $chaine.="<div>";
            $chaine.="<img src='img/profile1.png' alt='profileImg'>";
            $chaine.="</div>";
        }
        else {
            $chaine.="<div>";
            $chaine.="<img src='data:". $this->mime. ";base64,"  . base64_encode($this->avatar) . "' alt='image de profile' style='width: 150px; height: 150px; border-radius: 100%; background: white; margin-top: 10%' />";
            $chaine.="</div>";
        }  
        
        $chaine.= "<div class='name'>";
        $chaine.=       "<h3 class='title' style='font-family: Poppins , sans-serif;'>".$this->nom. " " .$this->prenom."</h3>";
        $chaine.=       "<div style='display:flex; justify-content: center; align-items: baseline'>";
        $chaine.=           "<h3 class='title' style='font-family: Poppins , sans-serif'>Pseudo : </h3>";
        $chaine.=           "<p style='color: #4D5061; margin-left: 15px; margin-right: 15px; font-family: Poppins , sans-serif;'>".$this->pseudo."</p>";
        $chaine.=       "</div>";
        $chaine.=       "<div style='display:flex; justify-content: center; align-items: baseline'>";
        $chaine.=           "<h3 class='title' style='font-family: Poppins , sans-serif'>Email :</h3>";
        $chaine.=           "<p style='color: #4D5061; margin-left: 15px; margin-right: 15px; font-family: Poppins , sans-serif;'>".$this->adressMail."</p>";
        $chaine.=       "</div>";
        $chaine.=       "<div style='display:flex; justify-content: center; align-items: baseline'>";
        $chaine.=           "<h3 class='title' style='font-family: Poppins , sans-serif'>Date de naissance : </h3>";
        $chaine.=           "<p style='color: #4D5061; margin-left: 15px; margin-right: 15px; font-family: Poppins , sans-serif;'>".$this->dateNaissance."</p>";
        $chaine.=       "</div>";
        $chaine.= "</div>";
        $chaine.="<form method='post' enctype='multipart/form-data'>";
        $chaine.="<input name='avatar' style='color: #3C4858' type='file' accept='image/png, image/jpeg'>";
        $chaine.="<input type='submit' value='validé' class='submit-btn'>";
        $chaine.="</form>";
        $chaine.= "</div>";

    return $chaine;
    }




    function getIdJ()
    {
        return $this->idJoueur;
    }

    function getMime()
    {
        return $this->mime;
    }

    function getAvatar()
    {
        return $this->avatar;
    }

    function getNom()
    {
        return $this->nom;
    }
    
    function getPrenom()
    {
        return $this->prenom;
    }

    function afficheId()
    {
        return "id_joueur rentre est " . $this->idJoueur;
    }

}

?>