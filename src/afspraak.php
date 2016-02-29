<?php
    /*
        Copyright MarfProjects 2006-2016, RK 2015-2016
        ===============================================
    */
    require_once("inc/head.php");   // HTML Head
    require_once("inc/menu.php");   // Menu, header
    require_once("inc/mff.php");    // MarfFrameWork Php Edition
    $page = "Afspraak";

    /*
      Database:
      ID
      VolledigeNaam
      E-Mail
      Datum
      Tijd
      Onderwerp
    */
?>
<script>
$(function() {
  $( "#Datum" ).datepicker();
});

$(function() {
  $('#Tijd').timepicker({
    'minTime': '8:00',
    'maxTime': '17:30' });
});

</script>
<div id="pagina">
  <div id="content">
  <h1 style="padding-left: 20px;">U wilt een afspraak maken? dat kan!</h1>
  <fieldset>
  <legend>Uw Gegevens</legend>
  <form action="inc/verzend.php" method="post" accept-charset="utf-8">
    <p>
        <label for="VolledigeNaam">Volledige Naam: </label>
        <input class="css-input" type="text" name="VolledigeNaam" id="VolledigeNaam" required>
    </p>

    <p>
        <label for="E-Mail">E-mail: </label>
        <input class="css-input" type="text" name="E-Mail" id="E-Mail" required>
    </p>
    </fieldset>
    <fieldset>
      <legend>Afspraak</legend>
    <p>
        <label for="Datum">Datum: </label>
        <input class="css-input" type="text" name="Datum" id="Datum" required>
    </p>

    <p>
        <label for="Tijd">Tijd: </label>
        <input class="css-input" type="text" name="Tijd" id="Tijd" required>
    </p>
    <p>
        <label for="Onderwerp">Onderwerp: </label>
        <select class="css-input" name="Onderwerp" id="Onderwerp" onclick="anders();" required>
          <option value="Kap-Vergunning">Kap Vergunning</option>
          <option value="Uitrekensel">Uitrekensel</option>
          <option value="Paspoort verlengen">Paspoort Verlengen</option>
          <option value="anders">Anders</option>
        </select>
        <script>
          function anders()
          {
            var combobox1 = document.getElementById("Onderwerp").value;
            if (combobox1 == "anders")
            {
              var vraag = prompt("Waar over wild u een afspraak maken?");
              if (vraag == null)
              {
                document.getElementById("Onderwerp").value = "Kap-Vergunning";
              }
              else
              {
                addtoElement("Onderwerp", "<option value='"+ vraag +"'> " + vraag +"</option>");
                document.getElementById("Onderwerp").value = vraag;
              }
            }
          }
        </script>
    </p>
    </fieldset>
    <fieldset>
      <p>
        <label for="antispam">Bent u een mens? <img src="img/910.png"/> </label>
        <input class="css-input" type="text" name="antispam" id="antispam" required>
      </p>
      
      <p>
        <label for="submit">-</label>
        <button class="knop" type="submit" name="submit">Verzenden</button>
      </p>
  </form>
  </fieldset>
</div>
</div>

<?php
    require_once("inc/footer.php"); // Footer, waar ook de einde van de site staat </html> dus.
?>
