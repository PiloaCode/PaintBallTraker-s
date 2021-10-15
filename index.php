<?php
    $title = "PaintBallTraker-s";
    $description = "Page d'accueil du site.";

    include_once 'include/header.inc.php';

?>

<body>
<div class="sidebar">
    <div class="logo-details">
       <!--<i class='bx bxl-c-plus-plus icon'></i>
       <div class="logo_name">CodingLab</div>-->
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Tableau de bord</span>
        </a>
         <span class="tooltip">Tableau de bord</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Utilisateurs</span>
       </a>
       <span class="tooltip">Utilisateurs</span>
     </li>
     <!--
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>-->
     <li>
         
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Analyses</span>
       </a>
       <span class="tooltip">Analyses</span>
     </li>
     <!--
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">File Manager</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>-->
     <li>   
       <a href="#">
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
    </ul>
</div>

<section class="home-section">
    <!--<div>
        <div>
        <img src="img/img1.jpg" class="img-fluid" alt="...">
        <h1>lol</h1>
        </div>
    </div>-->
  
    <div class="hero-image">
        <div class="hero-text">
            <h1>Paintball Tracker's</h1>
        </div>
    </div> 
  <h2>Qu'est-ce que le paintball?</h2>
  <div>
        <p> 
            La paintball est une activité sportive ou de loisir opposant deux équipes dont les joueurs
            sont équipés de masques de protection et de lanceur (ou marqueurs). Les lanceurs propulsent
            par air comprimé au CO2 des billes de peinture de calibre 0.68 constituées de capsules médicales
            renfermant une gélatine colorée, biodégradable.
        </p>

        <p>
            Ces deux équipes  soppose l'une contre l'autre sur différents terrains délimités par des filets 
            de protection.
        </p>

        <p> 
            Le but est de réussir les différentes missions données par l'encadrant. La partie est gagnée lorque
            l'objectif est atteint ou lorsque les joeurs d'une équipe sont totalement éliminés par l'équipe
            adverses au moyen de leurs lanceurs.
        </p>
    </div>
    <h2>Clubs aux alentours</h2>
    <!--
    <div id="map">
        <script>
            var map = L.map('map').setView([48.4990487,2.3663295], 12.5);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([48.4990487,2.3663295]).addTo(map)
                .bindPopup('Paintball SelectPark.<br>Rue de Boigny, 91590 Baulne, France.')
                .openPopup();
        </script>
    </div>

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
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
        }
    </script>-->
    <h2>Calcul itinéraire<h2>
    <div id="map"></div>
    <div id="info"></div>

      
</body>
<?php
    include_once 'include/footer.inc.php';
?>