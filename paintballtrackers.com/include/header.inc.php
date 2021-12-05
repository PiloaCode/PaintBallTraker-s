<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        echo"\t<title>$title</title>\n"; 
    ?>
    <meta charset="utf-8"/>
    <meta name="author" content="Alexis Mosquera &amp; Vincent Girard" />
    <?php
        echo"<meta name=\"description\" content=\"$description\" />";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--Library Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    
    <!--Library d'icon-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--Library fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--CSS Leaflet--
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

    <!--Extension Géoportail pour Leaflet--
    <link rel="stylesheet" href="plugins/GpPluginLeaflet-2.1.9/GpPluginLeaflet-map.css"/>
    <script src="plugins/GpPluginLeaflet-2.1.9/GpPluginLeaflet-map.js" data-key="53p4y6s38oqms2vkep7c0p0v"></script>

    <!--Ma feuille de style-->
    <link rel="stylesheet" href="./style.css" />
 <!-- leafletjs CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />

</head>  
<body>    
  <div class="sidebar">
    <!--Emplacement Logo + Titre de notre site-->
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name">Paintball Trakers</div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <!--Début de la barre de navigation-->
    <ul class="nav-list">
      <!--Page d'Accueil-->
      <li>
        <a href="index.php">
          <i class='bx bx-home bx-flip-horizontal' ></i>
          <span class="links_name">Accueil</span>
        </a>
        <span class="tooltip">Accueil</span>
      </li>
      <!--Page Recherche-->
      <li>
        <a href="recherche.php">
            <i class='bx bx-search' ></i>
            <input type="text" placeholder="Recherche...">
        </a>
        <span class="tooltip">Rercherche</span>
      </li>
      <!--Page Contact-->
      </li>
      <li>
        <a href="contact.php">
          <i class='bx bx-phone'></i>
          <span class="links_name">Contact</span>
        </a>
        <span class="tooltip">Contact</span>
      </li>
      <!--Page Connexion-->
      <li>
        <a href="connexion.php">
          <i class='bx bx-user' ></i>
          <span class="links_name">Connexion</span>
        </a>
        <span class="tooltip">Connexion</span>
      </li>
      <!--
      <li>
        <a href="tableau_de_bord.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Tableau de bord</span>
        </a>
        <span class="tooltip">Tableau de bord</span>
      </li>
       
      <li>   
      <a href="analyses.php">
        <i class='bx bx-pie-chart-alt-2' ></i>
        <span class="links_name">Analyses</span>
      </a>
      <span class="tooltip">Analyses</span>
      </li>

      <li>   
        <a href="parametres.php">
          <i class='bx bx-cog' ></i>
          <span class="links_name">Paramètres</span>
        </a>
        <span class="tooltip">Paramètres</span>
      </li>

      <li class="profile">
          <div class="profile-details">
            <img src="img/profile1.png" alt="profileImg">
            <div class="name_job">
              <div class="name">Nom</div>
              <div class="job">Prénom</div>
            </div>
          </div>
          <i class='bx bx-log-out' id="log_out" ></i>
      </li>
    -->
    </ul>

  </div>
  <!--Script qui permet d'ajouter une classe active à la page courante-->
  <script type="text/javascript">
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length;
    for(let i=0; i<menuLength; i++){
      if(menuItem[i].href === currentLocation){
        menuItem[i].className = "active";    
      }
    }
  </script>
  <div class="home-section">    
    <!--Animation de la sidebar-->
    <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");

      closeBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("open");
          menuBtnChange();//calling the function(optional)
      });

      searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
          sidebar.classList.toggle("open");
          menuBtnChange(); //calling the function(optional)
      });

      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }
        else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
      }
    </script>
    <!--Hero Image + Titre de la page-->
    <div class="hero-image">
      <div class="hero-text">
          <?php
              echo"\t<h1>$h1</h1>\n"; 
          ?>
      </div>
    </div>  