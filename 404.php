<?php
    $title = 'page erreur 404';
    $description = "La page qui s'affiche quand l'erreur 404 se produit";
    $h1 = "Erreur 404";
    include_once 'include/head.inc.php';
?>
    <section>
        <h2> La page n'a pas été trouver sur notre site </h2>
        <p class="error404">
            Désoler la page à laqu'elle vous essayer d'acceder à éter sois suprimer ou na jamais exiser. Il vous ais possible
            de vous redirigée grâce au menu. Ou alors continuer à appreciere notre belle page 404.
        </p>
    </section>

    <img id="img404" src='img/mecontent.png' alt='Image smiley mécontent'>
<?php
    include_once 'include/footeur.inc.php';
?>