<?php
    //element a remplire pour le head
    $title="Matchs";
    $description="permet de voir les matchs du joueur";
    $h1 = "Vos Matchs";

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

    <article id='formMatch' hidden>
                <h2> Ajouter un match </h2>

                <form>
                    <label> terrain </label>
                    <input name='terrain' type='text'> </input>

                    <label for='duree_match'> durée du match  </label>
                    <input name='duree_match' type='text'> </input>

                    <label for='nbr_elimin'> nombre d'élimination </label>
                    <input name='nbr_elimin' type='text'> </input>

                    <label for='nbr_loader'> nombre de loader </label>
                    <input name='nbr_loader' type='text'> </input>

                    <label for='duree_ingame'> durée en jeux  </label>
                    <input name='duree_ingame' type='text'> </input>
                    
                    <select name='choix_match'>
                        <option value='competition'> competition </option>
                        <option value='loisir'> loisir </option>
                    </select>
                    
                        <select name='type_gun'>
                            <option value='mecanique'> mecanique </option>
                            <option value='electronique'> electronique </option>
                        </select>
                    <?php
                       echo choixEquipe($_SESSION['login']);
                    ?>

                    <input type='submit'    />
                </form>
    </article>

    <article id='formEquipe' hidden>
                <h2> Ajouter une equipe </h2>

                <form>
                    <label for='nomEquipe'> nom de l'equipe </label>
                    <input name='nomEquipe' type=''> </input>

                    <label for='duree_match'> nombre de joueur  </label>
                    <input name='nbJoueur' type=''> </input>

                    <input type='submit'    />
                </form>
    </article>

    <article id='formMenbre' hidden >
                <h2> Ajouter un membre à une equipe </h2>

                <form>
                    <label for='nomEquipe'> nom de l'equipe </label>
                    <?php
                        echo choixEquipe($_SESSION['login']);
                    ?>

                    <label for='nomJoueur'> nom  </label>
                    <input name='nomJoueur' type=''> </input>

                    <label for='prenomJoueur'> prenom  </label>
                    <input name='prenomJoueur' type=''> </input>

                    <input type='submit'    />
                </form>
    </article>


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