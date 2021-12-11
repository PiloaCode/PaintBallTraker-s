<?php
    include_once 'include/head.inc.php';
    include_once 'include/Objet.php';
?>

<?php
    $user = new InfoUser($_SESSION['login']);

    echo $user->test();
?>
    
<?php
    include_once 'include/footeur.inc.php'
?>