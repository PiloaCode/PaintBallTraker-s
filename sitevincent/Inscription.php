<?php
    //element a remplire pour le head
    $title="inscription";
    $description = "Page permettant la création de conpte.";
    
    include_once 'include/head.inc.php';
    include_once 'include/function.inc.php'
?>

<body>
    <p id="test">
        Salut voici un test JS.

    </p>
    
    <article class="col12" >
        
        <h2> Inscription </h2>
        
        <form method="post" id="form">
            <label for="nomJoueur" class="row"> Nom </label>
            <input type="text" name="nom" id="nom" required  minlength="5" class="row"    />
            <label for="prenom" class="row"> Prenom </label>
            <input type="text" name="prenom" id="prenom" required  class="row" />
            <label for="login" class="row"> login </label>
            <input type="text" name="login" id="login" class="row" required  />
            <label for="pasword" class="row"> pasword </label>
            <input type="password" name="mdp" class="row" id="mdp" required/>
            <label for="ConfirmMdp" class="row"> Confirmer le mot de passe </label>
            <input type="password" name="cMdp" class="row" id="cMdp"  required />
            <label for="adresse" class="row"> Adresse Mail </label>
            <input type="mail" name="adresse" id="adresse" class="row" required />
            <label for="date" class="row"> date de naissance </label> 
            <input type="date" name="date" id="date"  required class="row" /> 
            <input type="submit"    />
        </form>
    </article>
    <?php
    if(isset($_POST['prenom']))
    {
        inscription(); 
    }
    ?>
</body>


<script src="Ajax.js"></script>

<?php
    include_once 'include/footeur.inc.php';
?>