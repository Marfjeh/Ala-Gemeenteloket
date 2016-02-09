<?php
function mysqlstart()
{
    $servername = "localhost";
    $username = "root";
    $password = "1997";
    $database = "ala";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
      $error = mysqli_connect_error();
        die(MffLog("MYSQL Error: " . $error));
    }
      MffLog("MYSQL: Verbinding met de database is succesvol.");
}

?>
