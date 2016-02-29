<?php
    /*
        Copyright MarfProjects 2006-2016, RK 2015-2016
        ===============================================
    */
    require_once("inc/head.php");   // HTML Head
    require_once("inc/menu.php");   // Menu, header
    require_once("inc/mff.php");    // MarfFrameWork Php Edition
    require_once("inc/config.php"); // Config file.. duh
    $page = "Home";

    /*
        Home Pagina
        TODO:
        - Nieuws
        - De infromatie pagina's
        - mindblow.jpg
    */
?>
<div id="pagina">
  <div id="content">
      <div id="content-home">
         <div id="slideShowImages">
            <img src="img/slide/1.jpg" alt="Slide 1" />
            <img src="img/slide/2.jpg" alt="Slide 2" />
            <img src="img/slide/3.jpg" alt="Slide 3" />    
            <img src="img/slide/4.jpg" alt="Slide 4" />
          </div> 
          <h2>Welkom bij Gemeente Bordeaux.</h2>
          <table style="width:100%">
              <tr>
                 <td style="width: 33%"> <!-- Nieuws -->
                     <div id="element" style="padding-left: 20px;">
                         <h1>Nieuws</h1>
                         <p>test</p>
                     
                     </div>
                 </td>
                 
                 <td style="width: 33%"> <!-- Infromatie -->
                     <div id="element" style="padding-left: 20px;">
                         <h1>Infromatie</h1>
                         <ul>
                             <li><a href="paspoort.php">Paspoort verlengen</a></li>
                             <p>ewfewfewf</p><br>
                             <li><a href="kappen.php">KapVergunning</a></li>
                             <p>wefewfewfewf</p><br>
                             <li><a href="uitrekensel.php">Uitrekense</a></li>
                             <p>wefewfwefwefewfwef</p>
                         </ul>
                     
                     </div>
                 </td>
                 
                 <td style="width: 33%"> <!-- Kaart -->
                     <div id="element" >
                         <h1>Kaart</h1>
                         <div id="map"></div>
                            <script>
                                function initMap() {
                                var mapDiv = document.getElementById('map');
                                var map = new google.maps.Map(mapDiv, { /* global google */
                                center: {lat: 44.838676, lng: -0.580736},
                                zoom: 11
                                });
                                }
                            </script>
                        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
                     </div>
                </td>
              </tr>
          </table>
    </div>
</div>
</div>
<?php
    require_once("inc/footer.php"); // Footer, waar ook de einde van de site staat </html> dus.
?>
