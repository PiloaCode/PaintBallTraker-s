<?php
    if(strcmp($_GET['mdp'], $_GET['cMdp']) == 0)
    {
        printf("True");
    }
    else
    {
        printf("False");
    }
?>