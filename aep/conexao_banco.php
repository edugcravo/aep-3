
<?php
//conectando com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco_aep";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



?>