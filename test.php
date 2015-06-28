
Cliquer pour obtenir vos cordonnées de localisation :

<button class="btn btn-default navbar-btn" onclick="getLocation()">Se localiser</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation n'est pas supporté par ce navigateur.";
    }
}

function showPosition(position) {
    x.innerHTML = "Lattitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.post("test.php", {"latitude": latitude,"longitude": longitude},function(data){
    console.log(data);
    window.location = 'getplusproche.php';
    });	
}
</script>



