<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body>
<h1>Implémentation d'une carte</h1>
<div id="map">
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('Coucou Vincent.<br> Easily customizable.')
    .openPopup();
    </script>

</div>
<!--
<script type="text/javascript">
    window.onload= function() {
        var map = L.map("viewerDiv").setView([48.845,2.424],10) ;
        L.tileLayer(
            'https://wxs.ign.fr/53p4y6s38oqms2vkep7c0p0v/geoportail/wmts?service=WMTS&request=GetTile&version=1.0.0&tilematrixset=PM&tilematrix={z}&tilecol={x}&tilerow={y}&layer=ORTHOIMAGERY.ORTHOPHOTOS&format=image/jpeg&style=normal',
            {
                minZoom : 0,
                maxZoom : 18,
                tileSize : 256,
                attribution : "IGN-F/Géoportail"
            }).addTo(map);
    }
</script>
-->
</body>
</html>