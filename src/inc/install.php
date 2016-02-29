<?php
require_once("config.php") or die("UW CONFIG.PHP IS NIET GEVONDEN OF UW MYSQL INSTELLINGEN ZIJN FOUT.");

$sql = "
CREATE TABLE IF NOT EXISTS `Afspraken` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `VolledigeNaam` text NOT NULL,
  `E-Mail` text NOT NULL,
  `Afspraak` text NOT NULL,
  `Onderwerp` text NOT NULL,
  `IP` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

$link = mysqli_connect($servername, $username, $password, $database);
if(mysqli_query($link, $sql))
  {
      mysqli_close($link);
      echo "INSTALATIE COMPLEET. VERWIJDER INSTALL.PHP VOOR VEILIGHEID REDENEN.";
  }
  else
  {
      echo "HET LIJKT ER OP DAT ER GEEN VERBINDING KON WORDEN GEMAAKT MET DE DATABASE.
      \nCONTROLEER INC/CONFIG.PHP WAAR UW MYSQL INLOG DATA INSTAAT EN PROBEER HET OPNIEUW ALS DAT NOG NIET WERKT, HIER ONDER STAAT DE FOUTMELDING: \n\n\n\n";
      echo "Could not execute $sql. \n" . mysqli_error($link); 
    }
?>