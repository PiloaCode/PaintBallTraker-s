<?php
    include_once 'include/function.inc.php';

    //verifie si on a déja rentrer des informations
    if(isset($_POST['login']) && isset($_POST['pasword']))
    {
        conect();

        //retour à l'index si conection réussi
        if(isset($_SESSION['login']))
        {
            header("location:https://localhost/Projet_web/PaintBallTraker-s/index.php");
        }
    }
    
    //element a remplire pour le head
    $title="conexion";
    $h1 = "conexion";
    $description = "Page permettant la création de conpte ainsi que la connexion.";
    
    include_once 'include/head.inc.php';
?>
<!--Code Alexis formulaire de connexion-->

    <article> 
        <h2> Connexion</h2>
    
        <!-- formulaire permettant la connection -->
        <form method="post" id="form" >
            <label for="login"> login: </label>
            <input type="text" name="login" id="login" required     />
            <label for="pasword"> pasword: </label> 
            <input type="text" name="pasword" id="pasword" required     />
            <input type="submit"    />
        </form>

    </article>
    

<?php
    include_once 'include/footeur.inc.php';
?>