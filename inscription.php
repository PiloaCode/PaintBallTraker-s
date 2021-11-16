<?php
    $title="inscription";
    $description = "Page permettant la création de conpte.";
    include_once 'include/head.inc.php';
    include_once 'include/function.inc.php'
?>

<body>
<article>
        <h2> Inscription </h2>
        <form>
            <label for="nomJoueur"> Nom: </label>
            <input type="text" name="nom" id="nom" required  minlength="5"    />
            <label for="prenom"> Prenom: </label>
            <input type="text" name="prenom" id="prenom" required   />
            <label for="login"> login </label>
            <input type="text" name="login" id="login"  />
            <label for="pasword"> pasword: </label>
            <input type="text" name="mdp" id="mdp"  />
            <label for="ConfirmMdp"> Confirmer le mot de passe: </label>
            <input type="text" name="cMdp" id="cMdp"    />
            <label for="adresse"> Adresse Mail: </label>
            <input type="text" name="adresse" id="adresse"  />
            <label for="date"> date de naissance </label> 
            <input type="text" name="date" id="date"    /> 
            <input type="submit"    />
        </form>
    </article>
    <?php
        $id_joueur = mt_rand(10000000, 99999999);
        $conn = openBD();
        $result = $conn->query("SELECT * FROM Joueur WHERE id_joueur=\"" . $id_joueur ."\""); //joueur WHERE id_joueur=\"" . $id_joueur ."\"
        
            printf("<p> id:". $result->num_rows . "</p>");
            if($result->num_rows == 0)
            {
                printf("<p> salut tout va bien </p>");
            }

        $result = $conn->query("SELECT * FROM Matchs");
        printf("<p> mdp:" . $result->num_rows . "</p>");
    ?>
</body>