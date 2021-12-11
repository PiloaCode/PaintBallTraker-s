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
<h2> Connexion</h2>
<form method="post" id="form" >
    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup"><span>ou</span>S'inscrire</h2>
            <div class="form-holder">
                <input type="text" class="input" placeholder="Nom" />
                <input type="email" class="input" placeholder="Email" />
                <input type="password" class="input" placeholder="Mot de passe" />
            </div>
            <button class="submit-btn">S'inscire</button>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login"><span>ou</span>Se connecter</h2>
                <div class="form-holder">
                    <input type="text" class="input" placeholder="Identifiant" />
                    <input type="password" class="input" placeholder="Mot de passe" />
                </div>
                <input type="submit" class="submit-btn">Se connecsdter/>
            </div>
        </div>
    </div>
</form>

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