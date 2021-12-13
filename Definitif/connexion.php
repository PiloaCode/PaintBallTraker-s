<?php
    include_once 'include/function.inc.php';

    //verifie si on a déja rentrer des informations
    if(!empty($_POST['login']) && !empty($_POST['pasword']))
    {
        conect();

        //retour à l'index si conection réussi
        if(isset($_SESSION['login']))
        {

            // version local du lien: https://https://paintballtrackers.com/index.php
            // version en ligne du lien: https://piloa.alwaysdata.net/
            header("location:https://paintballtrackers.com/index.php");
        }
    }
    
    //element a remplire pour le head
    $title="connexion";
   // $h1 = "connexion";
    $description = "Page permettant la création de conpte ainsi que la connexion.";
    
    include_once 'include/head.inc.php';
?>
<!--Code Alexis formulaire de connexion-->
<div class="hero-image_bis">
    <form method="post" id="form">
        <div class="form-structor">
            <div class="signup">
                <h2 class="form-title" id="signup"><span>ou</span>S'inscrire</h2>
                <div class="form-holder">
                    <input type="text" name="nom" id="nom" minlength="5" class="input" placeholder="Nom" />
                    <input type="text" name="prenom" id="prenom"   class="input" placeholder="Prénom" />
                    <input type="text" name="login_i" id="login_i" class="input" placeholder="Identifiant" />
                    <input type="mail" name ="adresse" id="adresse" class="input" placeholder="Email" />
                    <input type="password" name="mdp" id="mdp" class="input" placeholder="Mot de passe" />
                    <input type="password" name="cMdp" id="cMdp" class="input" placeholder="Confirmer votre mot de passe"/>
                    <input type="date" name="date" id="date" class="input"/> 
                </div>
                <button class="submit-btn">S'inscrire</button>
            </div>
            <div class="login_bis slide-up">
                <div class="center">
                    <h2 class="form-title" id="login_bis"><span>ou</span>Se connecter</h2>
                    <div class="form-holder">
                        <input type="text" name="login" id="login"  class="input" placeholder="Identifiant" />
                        <input type="password" name="pasword" id="pasword" class="input" placeholder="Mot de passe" />
                    </div>
                    <input type="submit" class="submit-btn">Se connecter</input>
                </div>
            </div>
        </div>
    </form>
</div> 

<script>
const loginBtn = document.getElementById('login_bis');
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
    if(isset($_POST['prenom']))
    {
        inscription(); 
    }
?>