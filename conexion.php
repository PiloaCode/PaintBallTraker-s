<?php
    $title="conexion";
    $description = "Page permettant la création de conpte ainsi que la connexion.";
    include_once 'include/head.inc.php';
?>

<body>
    <article> 
        <h2> Connexion</h2>
    
        <form method="post" >
        
            <label for="login"> login: </label>
            <input type="text" name="login" id="login" required     />
            <label for="pasword"> pasword: </label> 
            <input type="text" name="pasword" id="pasword" required     />
        </form>

    </article>
    
</body>

<?php
    include_once 'include/function.inc.php';
    valideMdp("test","test");
    openBD();
    //confirmMail("vincentGirard04@hotmail.fr");
    //connectMail();
    include_once 'include/footeur.inc.php';
?>