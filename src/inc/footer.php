<div id="footer">
    <table style="width:100%">
  <tr>
    <td>&copy; Gemeente Bordeaux</td>
    <td></td>
    <td><button class="knop" id="knop">Ga naar boven</button></td>
  </tr>
  <tr>
    <td><small>Site by: Marvin Ferwerda, Robin Kuijpers</small></td>
    <td style="width: 60%;"></td>
    <td><button class="knop" onclick="goUrl('tourist_eng.php');"><img src="img/english.png"/> English</button></td>
  </tr>
</table>
</div>
<script>
    Footer(); /* Global Footer MarfFrameWork */
        $("#knop").click(function() {
    $('html, body').animate({
        scrollTop: $("#header").offset().top
    }, 2000);
});
</script>
</body>
</html>
