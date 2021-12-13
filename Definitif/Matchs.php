<?php
    //element a remplire pour le head
    $title="Analyses";
    $description="Permet de voir les analyses d'un joueur";
    $h1 = "Analyses";

    include_once 'include/head.inc.php';
    include_once 'include/function.inc.php'
?>
    <!-- bouton pour actionner les actions possible sur la page. -->
    <aside class=" buttonMatchs">
        <input class="btn btn-primary" type="button" id="addMatch" value="ajouter un match"     />
        <input class="btn btn-primary" type="button" id="printMatch" value="afficher matchs"     />
        <input class="btn btn-primary" type="button" id="addMEquipe" value="ajouter une équipe"     />
        <input class="btn btn-primary" type="button" id="addMembre" value="ajouter un membre"     />
    </aside>

    <div id="result">

    </div>
    <form method="get" id="formMatch" hidden>
        <div class="form-structor" style="height: 710px !important">
            <div class="signup" style="top: 51% !important">
                <h2 class="form-title" id="signup" style="margin-bottom: 15% !important">Ajouter un match</h2>
                <div class="form-holder">
                    <input type="text" name="terrain" class="input" placeholder="Terrain" />
                    <input type="text" name="duree_match" class="input" placeholder="Durée du match" />
                    <input type="text" name="duree_ingame" class="input" placeholder="Temps rester dans le match" />
                    <input type="text" name="nbr_elimin" class="input" placeholder="Nombre d'élimination" />
                    <input type="text" name ="nbr_loader" class="input" placeholder="Nombre de loader utilisé" />
                    <div class="input" style="height: 80px !important; padding-top: 15px !important">
                        <h3 style="color: #999; font-size: 12px">Type de match</h3>
                        <select name='choix_match' class="input" style="padding-left: 0; margin-left: -4px">
                            <option value='competition'> competition </option>
                            <option value='loisir'> loisir </option>
                        </select>
                    </div>
                    <div class="input" style="height: 80px !important; padding-top: 15px !important">
                        <h3 style="color: #999; font-size: 12px">Type de gun</h3>  
                        <select name='type_gun' class="input" style="padding-left: 0; margin-left: -4px">
                                <option value='mecanique'> mécanique </option>
                                <option value='electronique'> éléctronique </option>
                        </select>
                    </div>
                    <?php
                        echo"<div class='input' style='height: 80px !important; padding-top: 15px !important'>",
                                '<h3 style="color: #999; font-size: 12px">Choissisez votre équipe</h3>';
                            echo choixEquipe($_SESSION['login']);
                        echo "</div>";
                    ?>
                </div>
                <button type="submit" class="submit-btn" style="margin: 47px auto !important">Ajouter</button>
            </div>
        </div>
    </form>
    <form method="get" id="formEquipe" hidden>
        <div class="form-structor">
            <h2 class="form-title" id="signup" style="text-align: center;color: #fff; margin-top: 42%; font-size: 1.7em;">Ajouter une équipe</h2>
            <div class="signup" style="top: 60% !important">
                <div class="form-holder">
                    <input type="text" name="nomEquipe" class="input" placeholder="Nom de l'équipe" />
                    <input type="number" name="nbJoueur" class="input" placeholder="Nombre de joueur" />
                </div>
                <button type="submit" class="submit-btn" style="margin: 50px auto !important">Ajouter</button>
            </div>
        </div>
    </form>
    <form method="get" id="formMenbre" hidden>
        <div class="form-structor">
            <h2 class="form-title" id="signup" style="text-align: center;color: #fff; margin-top: 29%; font-size: 1.7em;">Ajouter une équipe</h2>
            <div class="signup" style="top: 60% !important">
                <div class="form-holder">
                    <input type="text" name="nomJoueur" class="input" placeholder="Nom du joueur" />
                    <input type="text" name="prenomJoueur" class="input" placeholder="Prénom du joueur" />
                    <?php
                        echo"<div class='input' style='height: 80px !important; padding-top: 15px !important'>",
                                '<h3 style="color: #999; font-size: 12px">Choissisez votre équipe</h3>';
                            echo choixEquipe($_SESSION['login']);
                        echo "</div>";
                    ?>
                </div>
                <button type="submit" class="submit-btn" style="margin: 50px auto !important">Ajouter</button>
            </div>
        </div>
    </form>
<script src="Ajax.js"> </script>

<?php
if(isset($_GET['duree_match']))
{
    adMatch($_GET['terrain'], $_GET['equipe'], $_GET['duree_match'], $_GET['nbr_elimin'], $_GET['nbr_loader'], $_GET['duree_ingame'], $_GET['choix_match'], $_GET['type_gun']);
}
if(isset($_GET['nbJoueur']))
{
    addEquipe();
}
if(isset($_GET['nomJoueur']))
{
    addJInEquipe();
}
    include_once 'include/footeur.inc.php';
?>