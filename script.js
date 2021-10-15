function go() {
    map = L.map("map").setView([47, 2.424], 6);
    var lyrMaps = L.geoportalLayer.WMTS({
        layer: "GEOGRAPHICALGRIDSYSTEMS.MAPS",
    }, { // leafletParams
        opacity: 0.7
    });
    map.addLayer(lyrMaps) ;
    var routeCtrl = L.geoportalControl.Route({
    });
	map.addControl(routeCtrl);

}

Gp.Services.getConfig({
    apiKey : "53p4y6s38oqms2vkep7c0p0v",
    onSuccess : go
}) ;

var infoDiv= document.getElementById("info") ;
infoDiv.innerHTML= "<p> Extension Leaflet version "+Gp.leafletExtVersion+" ("+Gp.leafletExtDate+")</p>" ;
