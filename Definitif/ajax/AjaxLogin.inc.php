<?php

    function openBD(): mysqli
    {
        include_once '../include/bd.con.php';

        $conn = new mysqli( HOST, USER, MDP, BD, PORT);
        if($conn->connect_error)
        {
            die('Erreur : ' .$conn->connect_error);
        }
    return $conn;
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

    if(verifLogin($_GET['login']))
    {
        printf("True");
    }
    else
    {
        printf("False");
    }   

?>