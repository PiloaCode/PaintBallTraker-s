<?php
    include_once 'include/head.inc.php';
    include_once 'include/Objet.php';
?>
    <form method="post" enctype="multipart/form-data">
        <input name="avatar" type="file" accept="image/png, image/jpeg">
        <input type="submit" value="validée" >
    </form>
<?php


    if(isset($_SESSION['login']))
    {
        $user = new InfoUser($_SESSION['login']);
        echo $user->test();
        if(isset($_FILES))
        {
            addImg();
            updatAvatar();
        }
    }
?>
    
<?php
    include_once 'include/footeur.inc.php'
?>