<?php
    include_once 'include/head.inc.php';
    include_once 'include/Objet.php';
?>
    <form methode="get" enctype="multipart/form-data">
        <input type="file" name="myfile" >
        <input type="submit" value="validée" >
    </form>
<?php

    if(isset($_SESSION['login']))
    {
        $user = new InfoUser($_SESSION['login']);
        echo $user->test();

        print_r($_FILES);

        $img = file_get_contents($_FILES['myfile']['tmp_name']);
        $type = $_FILES['myfile']['type'];

        // echo "type: " . $type;
        // echo "contenus img" . $img;

        // addImg();
    }
?>
    
<?php
    include_once 'include/footeur.inc.php'
?>