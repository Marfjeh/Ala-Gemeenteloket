<?php
    /*
        Copyright MarfProjects 2006-2016, RK 2015-2016
        ===============================================
    */
    require_once("inc/head.php");   // HTML Head
    require_once("inc/menu.php");   // Menu, header
    require_once("inc/mff.php");    // MarfFrameWork Php Edition
    $page = "Touristen_pagina_NLD";
?>
<div id="pagina">
  <fieldset>
    
    <a href="tourist_eng.php"><img src="img/english.png">Read this in English</a>
    <p>Bordeaux stond tot het einde van de 20e eeuw bekend als een grauwe stad. 
    Daar is de forse verandering in gekomen: 
    historische gebouwen zijn gerestaureerd, 
    er zijn nieuwe tramlijnen en de kades langs de Garonne zijn opgeknapt. 
    De stad straalt weer, net als in de hoogtijdagen in de 18e eeuw! 
    Het oude centrum staat niet voor niets op de UNESCO Werelderfgoedlijst. 
    Genoeg unieke bezienswaardigheden en leuke dingen om te doen in Bordeaux!</p>
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
