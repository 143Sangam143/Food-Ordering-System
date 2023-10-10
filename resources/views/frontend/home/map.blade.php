<div class="pt-[5rem] bg-black hidden" id="map-viwer">

    <div class="container py-5 pb-[5rem] px-5 xl:px-[6rem] mx-auto">
    
        <div id="map"></div>
        <div class="flex justify-center items-center mt-[2rem]">
            <a href="{{ route('restaurants') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="add"  onclick="itemsTrigger()">
                Show near by cafe
            </a>
        </div>
    </div>
</div>
<style>
    #map {
        height: 70vh;
    }
</style>
<script>
    
    let map;
    let markersArray = []; 
    let infoWindow;
    const myLatLng = { lat: 27.7172, lng: 85.3240 };

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 13
        });
        infoWindow = new google.maps.InfoWindow();
        get_location();
    }

    function get_location(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };
                    infoWindow.setPosition(pos);
                    infoWindow.setContent("Your Location.");
                    addMarker(pos);
                    addMarkerRandom(position.coords.latitude, position.coords.longitude);
                    infoWindow.open(map);
                    map.setZoom(19);
                    map.setCenter(pos);
                }
            );
        }
    }

    function addMarker(latLng) {
        let marker = new google.maps.Marker({
            map: map,
            position: latLng,
            icon: {
                url: "http://maps.google.com/mapfiles/ms/icons/blue.png",
            },
            draggable: false
        });
        markersArray.push(marker);
    }

    function addMarkerRandom(latitude, longitude) {
        var locations = [[latitude+0.0002005, longitude-0.0002005], [latitude+0.0001111, longitude-0.0001111],[latitude-0.0002005, longitude+0.0002005], [latitude-0.0001111, longitude-0.0001111]];
        for (i = 0; i < locations.length; i++) { 
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                map: map,
                icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/green.png",
                    },

            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {

            return function() {

                infowindow.setContent(locations[i][0]);

                infowindow.open(map, marker);

            }
            })(marker, i));
        }
    }
    window.initMap = initMap;
</script>