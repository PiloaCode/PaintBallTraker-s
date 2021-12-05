<?php
    include_once 'include/function.inc.php';

    if(isset($_POST['login']) && isset($_POST['pasword']))
    {
        conect();
        if(isset($_SESSION['login']))
        {
            header("location:https://localhost/Projet_web/PaintBallTraker-s/index.php");
        }
    }
    
    if(isset($_POST['login']) && isset($_POST['pasword']) && isset($_SESSION['login']) )
    {
        
    }
    
    $title="conexion";
    $h1 = "conexion";
    $description = "Page permettant la création de conpte ainsi que la connexion.";
    include_once 'include/head.inc.php';
?>

<body>
    <article> 
        <h2> Connexion</h2>
    
        <form method="post" id="form" >
        
            <label for="login"> login: </label>
            <input type="text" name="login" id="login" required     />
            <label for="pasword"> pasword: </label> 
            <input type="text" name="pasword" id="pasword" required     />
            <input type="submit"    />
        </form>

    </article>
    
</body>

<?php
    include_once 'include/footeur.inc.php';
?>