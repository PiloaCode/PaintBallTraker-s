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

    function tableEquipeId($id)
    {
        $conn = OpenBD();
        $request = $conn->query("SELECT * FROM Equipe WHERE id_equipe = '" . $id ."'");
        $res = $request->fetch_all(MYSQLI_ASSOC);
        
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

    function afficheTabMatch($login)
    {
        $i = 0;
        
        $res = tableMatchs($login);

        $chaine =  "\n\t<table>";
        $chaine .= "\n\t\t<thead>";
        $chaine .= "\n\t\t\t<tr>";
        $chaine .= "\n\t\t\t<th> terrain </th>";
        $chaine .= "\n\t\t\t<th> equipe_allie </th>";
        $chaine .= "\n\t\t\t<th> equipe_adv </th>";
        $chaine .= "\n\t\t\t<th> durée </th>";
        $chaine .= "\n\t\t\t<th> élimination </th>";
        $chaine .= "\n\t\t\t<th> loader </th>";
        $chaine .= "\n\t\t\t<th> ingame </th>";
        $chaine .= "\n\t\t\t<th> gun </th>";
        $chaine .="\n\t\t\t</tr>";
        $chaine .= "\n\t\t</thead>";
        $chaine .= "\n\t\t<tbody>";

        foreach($res as $line)
        {
            if(isset($line['equipe_adv']))
            {
                $equipeAdv = tableEquipeId($line['equipe_adv']);
            }
            $equipeAllie = tableEquipeId($line['equipe_allie']);

            $chaine .= "\n\t\t<tr>";
            if(isset($line['terrain']))
            {
                $chaine .= "\n\t\t\t<td>" . $line['terrain'] . "</td>";
            }
            else
            {
                $chaine .="\n\t\t\t<td> </td>";
            }
           
            $chaine .= "\n\t\t\t<td> <param name='equipeAdv' value='". $line['equipe_allie'] ."'>"  . $equipeAllie [0] ['nom_equipe'] . "</td>";
            if(isset($line['equipe_adv']))
            {
                $chaine .= "\n\t\t\t<td> <param name='equipeAdv' value='". $line['equipe_adv'] ."'>" . $equipeAdv[0] ['nom_equipe'] . "</td>";
            }
            else
            {
                $chaine .="\n\t\t\t<td> </td>";
            }
            $chaine .= "\n\t\t\t<td>" . $line['duree_match'] . "</td>";
            $chaine .= "\n\t\t\t<td>" . $line['nbr_elimin_user'] . "</td>";
            $chaine .= "\n\t\t\t<td>" . $line['nombre_loader'] . "</td>";
            $chaine .= "\n\t\t\t<td>" . $line['duree_ingame'] . "</td>";
            $chaine .= "\n\t\t\t<td>" . $line['type_gun'] . "</td>";
            $chaine .= "\n\t\t</tr>";
        }
        $chaine .= "\n\t\t</tbody>";
        $chaine .= "\n\t</table>";
    return $chaine;
    }

    echo afficheTabMatch($_SESSION['login']);
?>