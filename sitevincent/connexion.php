<?php
    include_once 'include/function.inc.php';

    //verifie si on a déja rentrer des informations
    if(isset($_POST['login']) && isset($_POST['pasword']))
    {
        conect();

        //retour à l'index si conection réussi
        if(isset($_SESSION['login']))
        {
            header("location:http://localhost/www/PaintBallTraker-s/sitevincent/index.php");
        }
    }
    
    //element a remplire pour le head
    $title="conexion";
    $h1 = "conexion";
    $description = "Page permettant la création de conpte ainsi que la connexion.";
    
    include_once 'include/head.inc.php';
?>
<!--Code Alexis formulaire de connexion-->
<h2>Connexion</h2>
<form method="post" id="" >
    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup"><span>ou</span>S'inscrire</h2>
            <div class="form-holder">
                <input type="text" name="nom" id="nom" required  minlength="5" class="input" placeholder="Nom" />
                <input type="text" name="prenom" id="prenom" required  class="input" placeholder="Prénom" />
                <!--<input type="text" name="login" id="login" class="input" placeholder="Identifiant" required  /> -->
                <input type="email" class="input" placeholder="Email" />
                <input type="password" class="input" placeholder="Mot de passe" />
            </div>
            <button class="submit-btn">S'inscire</button>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login"><span>ou</span>Se connecter</h2>
                <div class="form-holder">
                    <input type="text" name="login" required class="input" placeholder="Identifiant" />
                    <input type="password" name="pasword" id="pasword" required class="input" placeholder="Mot de passe" />
                </div>
                <input type="submit" class="submit-btn">Se connecter/>
            </div>
        </div>
    </div>
</form>


<article class="col12" >
        
        <h2> Inscription </h2>
        
        <form method="post" id="form">
            <label for="nomJoueur" class="row"> Nom </label>
            <input type="text" name="nom" id="nom" required  minlength="5" class="row"/>
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


<script>
    const loginBtn = document.getElementById('login');
    const signupBtn = document.getElementById('signup');

    loginBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode.parentNode;
        Array.from(e.target.parentNode.parentNode.classList).find((element) => {
            if(element !== "slide-up") {
                parent.classList.add('slide-up')
            }else{
                signupBtn.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });

    signupBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode;
        Array.from(e.target.parentNode.classList).find((element) => {
            if(element !== "slide-up") {
                parent.classList.add('slide-up')
            }else{
                loginBtn.parentNode.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });
</script>

<script src="Ajax.js"></script>

<?php
    include_once 'include/footeur.inc.php';
?>