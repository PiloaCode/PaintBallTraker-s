<?php
    $title = "PaintBallTraker-s";
    $description = "Page d'accueil du site.";
    $h1 = "Connexion";
    include_once 'include/header.inc.php';
?>
<body>
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
                    <input type="email" class="input" placeholder="Email" />
                    <input type="password" class="input" placeholder="Mot de passe" />
                </div>
                <button class="submit-btn">Se connecter</button>
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
</body>  
<?php
    include_once 'include/footer.inc.php';
?>  