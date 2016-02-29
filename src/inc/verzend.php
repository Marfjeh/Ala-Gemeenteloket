<?php
  session_start();
  $_SESSION['key'] = "Awlc3imCn3ECGJMqsI6t";
  require_once("mff.php");    // MarfFrameWork Php Edition
  require_once("config.php");

  /*
    Database indeling:
    ID
    VolledigeNaam
    E-Mail
    Datum
    Onderwerp
    IP
  */
  
  if ($_POST['antispam'] == "21" || $_POST['antispam'] == "19")
  {
  $link = mysqli_connect($servername, $username, $password, $database);
  $VolledigeNaam = mysqli_real_escape_string($link, $_POST['VolledigeNaam']); //ANTI SQL-INJECTION!
  $email = mysqli_real_escape_string($link, $_POST['E-Mail']);
  $afspraak = mysqli_real_escape_string($link, $_POST['Tijd']) . " " . mysqli_real_escape_string($link, $_POST['Datum']);
  $Onderwerp = mysqli_real_escape_string($link, $_POST['Onderwerp']); 

  //$sql2 = "SELECT * FROM Afspraken WHERE Afspraak = '".mysqli_real_escape_string($link, $afspraak)."'"; // TODO: Controleer dat er geen afspraak bestaat op die datum en tijd  

    $sql = "INSERT INTO Afspraken (`VolledigeNaam`, `E-Mail`, `Afspraak`, `Onderwerp`, `IP`) VALUES ('$VolledigeNaam', '$email', '$afspraak', '$Onderwerp', '$ip')";
    if(mysqli_query($link, $sql))
    {
        mysqli_close($link);
        session_destroy();
        echo "<html><head><script src='../js/mff.js'></script></head><body><script>goUrl('../succes.php');</script></body></html>";
    }
    else
    {
      session_destroy();
      if ($debug_mode == true)
      { 
        ini_set('error_reporting', E_ALL|E_STRICT);
        ini_set('display_errors', 1);
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
      }
      else
      {
        $v_date = date("l d F H:i:s");
        $fp = fopen("error.txt", "a");
        fputs($fp, "DATE: $v_date ERROR LOG: \n $sql \n  - \n\n" . mysqli_error($link));
        fclose($fp);
        
       echo "<html><head><script src='../js/mff.js'></script></head><body><script>goUrl('../fout.php');</script></body></html>";
      }
      
    }
    mysqli_close($link);
  }
  else
  {
    echo("<script>alert('Oeps! de antispam is niet juist. probeer opnieuw.'); goBack();</script>");
  }
 ?>
