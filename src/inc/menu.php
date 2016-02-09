<div id="menu"></div>
<div id="header"></div>
<script>
        if (detectMob() == true) //Mobile browser detected
        {
                addtoElement("menu", "<button class='knop' onclick='' id='menubutton' style='float: left;'><img src='img/menu_button.png'/></button>");
        }
        else // Desktop
        {
                addtoElement("menu", "<a href='index.php'>Home </a> - <a href='blog.php'>Infromatie </a> - <a href='oefenen/index.php'>afspraak </a> - <a href='contact.php'>Tourisme</a>");
        }
</script>
