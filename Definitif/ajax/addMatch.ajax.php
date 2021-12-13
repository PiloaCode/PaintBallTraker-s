<?php
    session_start();


    function openBD(): mysqli
    {
        include_once '../include/bd.con.php';

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

    function tableEquipe($login)
    {
        $conn = openBD();
        $res = $conn->query("SELECT * FROM Equipe e, Utilisateur u, appartient_a a WHERE u.pseudo ='" . $login . "' AND a.id_joueur = u.id_joueur AND a.id_equipe = e.id_equipe;");
        $res = $res->fetch_all(MYSQLI_ASSOC);
        $conn->close();
    return $res;
    }

    function choixEquipe($login)
    {
        $equipes = tableEquipe($login);

        $choix =  "<select name='equipe'>";

        foreach($equipes as $equipe)
        {
            $choix .=  "\n\t\t<option value=' ". $equipe['nom_equipe'] ."'>" . $equipe['nom_equipe'] . "</option>";
        }

        $choix .= "\n\t</select>";
    return $choix;
    }

    function addMatch()
    {
        $form =
            "
            <div>
                <h2> Ajouter un match </h2>

                <form>
                    <label> terrain </label>
                    <input name='terrain' type=''> </input>

                    <label for='duree_match'> durée du match  </label>
                    <input name='duree_match' type=''> </input>

                    <label for='nbr_elimin'> nombre d'élimination </label>
                    <input name='nbr_elimin' type=''> </input>

                    <label for='nbr_loader'> nombre de loader </label>
                    <input name='nbr_loader' type=''> </input>

                    <label for='duree_ingame'> durée en jeux  </label>
                    <input name='duree_ingame' type=''> </input>
                    
                    <select name='choix_match'>
                        <option value='competition'> competition </option>
                        <option value='loisir'> loisir </option>
                    </select>
                    
                    <select name='type_gun'>
                        <option value='mecanique'> mecanique </option>
                        <option value='electronique'> electronique </option>
                    </select>" . choixEquipe($_SESSION['login']) . "

                    <input type='submit'    />
                </form>
                </div >
        ";
    return $form;
    }

    $rep = addMatch();
    echo $rep;
?>²