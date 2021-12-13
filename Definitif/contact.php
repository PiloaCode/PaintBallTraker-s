<?php
    //element a remplire pour le head
    $title = "PaintBallTraker-s";
    $description = "Page contact";
    $h1 = "Contact";
    
    include_once 'include/head.inc.php';
?>

<h2>Qui sommes nous ?</h2>

<div class="row">
    <div class="col-12 col-md-6">
        <!--Card Alexis-->
        <div class="pCard_card_ctAlexis">
            <!--Partie haute de la carte--> 
            <div class="pCard_up">
                <div class="pCard_text">
                    <h2>Alexis Mosquera</h2>
                    <p>Etudiant licence informaqtique</p>
                </div>
                <div class="pCard_add_ctAlexis">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            <!--Partie basse de la carte--> 
            <div class="pCard_down_contact">
                <div>
                    <p>Projets</p>
                    <p>5</p>
                </div>
                <div>
                    <p>Age</p>
                    <p>19</p>
                </div>
                <div>
                    <p>Etude</p>
                    <p>Bac+3</p>
                </div>
            </div>
            <!--Verso de la carte-->
            <div class="pCard_back">
                <p>Maîtrise des langages suivants :</p>
                <span style="font-size: 3em;">
                    <span style="color: #e9573f;">
                        <i class="fab fa-html5"></i>
                    </span>
                </span>    
                <span style="font-size: 3em;">
                    <span style="color: #264de4;">
                        <i class="fab fa-css3-alt"></i>
                    </span>
                </span>
                <span style="font-size: 3em;">
                    <span style="color: #f7df1d;">
                        <i class="fab fa-js-square"></i>
                    </span>
                </span>
                <div>
                <span style="font-size: 3em;">
                    <span style="color: #777bb3;">
                    <i class="fab fa-php"></i>
                    </span>
                </span>  
                <img src="img/logo-mysql.png" style="vertical-align: top; width:20%;">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <!--Card Vincent-->
        <div class="pCard_card_ctVincent">
            <!--Partie haute de la carte-->     
            <div class="pCard_up">
                <div class="pCard_text">
                    <h2>Vincent Girard</h2>
                    <p>Etudiant licence informaqtique</p>
                </div>
                <div class="pCard_add_ctVincent">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            <!--Partie basse de la carte-->         
            <div class="pCard_down_contact">
                <div>
                    <p>Projets</p>
                    <p></p>
                </div>
                <div>
                    <p>Age</p>
                    <p></p>
                </div>
                <div>
                    <p>Etude</p>
                    <p></p>
                </div>
            </div>
            <!--Verso de la carte-->
            <div class="pCard_back">
                <p>Maîtrise des langages suivants :</p>
                <span style="font-size: 3em;">
                    <span style="color: #e9573f;">
                        <i class="fab fa-html5"></i>
                    </span>
                </span>    
                <span style="font-size: 3em;">
                    <span style="color: #264de4;">
                        <i class="fab fa-css3-alt"></i>
                    </span>
                </span>
                <span style="font-size: 3em;">
                    <span style="color: #f7df1d;">
                        <i class="fab fa-js-square"></i>
                    </span>
                </span>
                <div>
                <span style="font-size: 3em;">
                    <span style="color: #777bb3;">
                    <i class="fab fa-php"></i>
                    </span>
                </span>  
                <img src="img/logo-mysql.png" style="vertical-align: top; width:8vh;">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

<?php
    include_once 'include/footeur.inc.php';
?>