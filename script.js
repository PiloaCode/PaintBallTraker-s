/*function go() {
    var cartesLyr = new ol.layer.GeoportalWMTS({
                layer: "GEOGRAPHICALGRIDSYSTEMS.MAPS",
            }) ;
    var map = new ol.Map({
        target: 'map',
        layers: [
            cartesLyr
        ],
        view: new ol.View({
            center: [ 48.862725 , 2.287592],
            zoom: 12
        })
    });    
    var routeControl = new ol.control.Route({
        collapsed : true
    });
    map.addControl(routeControl);
}

Gp.Services.getConfig({
    apiKey: "53p4y6s38oqms2vkep7c0p0v",
    onSuccess: go
});
/*
var infoDiv = document.getElementById("info");
infoDiv.innerHTML = "<p> Extension OL version " + Gp.olExtVersion + " (" + Gp.olExtDate + ")</p>";
*/
