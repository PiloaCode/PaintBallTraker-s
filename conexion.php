<?php
    $title="conexion";
    $description = "Page permettant la création de conpte ainsi que la connexion.";
    include_once 'include/head.inc.php';
    include_once 'include/function.inc.php';
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
    conect();
    printf("<p> Nous avons une session en cours: " . hasSession() . "</p>");
    include_once 'include/footeur.inc.php';
?>