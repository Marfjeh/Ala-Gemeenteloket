<?php
    /*
        Copyright MarfProjects 2006-2016, RK 2015-2016
        ===============================================
    */
    require_once("inc/head.php");   // HTML Head
    require_once("inc/menu.php");   // Menu, header
    require_once("inc/mff.php");    // MarfFrameWork Php Edition
    $page = "Touristenpagina_ENG";
?>
<div id="pagina">
  <fieldset>
    
    <a href="tourist.php">Lees dit in Nederlands</a>
    <p>Bordeaux stood until the end of the 20th century known as a gritty city.
     Since the significant change has come in:
     historic buildings have been restored,
     there are new tram lines and wharfs have been refurbished along the Garonne.
     The city shines again, as in the heyday in the 18th century!
     The old town is not for nothing on the UNESCO World Heritage List.
     Plenty of unique attractions and fun things to do in Bordeaux!</p>
    <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.838576, lng: -0.580736},
          zoom: 11
          //44.838576, -0.580736
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
    </fieldset>
</div>
<?php
    require_once("inc/footer.php"); // Footer, waar ook de einde van de site staat </html> dus.
?>
