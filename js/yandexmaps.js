/**
 * Created by maxsi on 25.04.2017.
 */
var myMap;
ymaps.ready(init);

function init() {
    myMap = new ymaps.Map('map', {
        center: [47.114015, 51.908174],
        zoom: 12
    });

    myMap.events.add('click', function (e) {
        var coords = e.get('coords');
        var myGeoObject = new ymaps.GeoObject({
            geometry: {
                type: 'Point',
                coordinates: coords
            }
        });
        myMap.geoObjects.add(myGeoObject);
        $('#coords').append(coords.join(',')+" ");
    });
}
$("#coords").hide();