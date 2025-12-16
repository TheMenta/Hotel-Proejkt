<?php
require '../../cfg.php';

$id = $_GET['id'];  


$lekerdezes = "SELECT * FROM rooms WHERE id = $id";
$talalt_sorok = $conn->query($lekerdezes);
while($sor = $talalt_sorok->fetch_assoc()){
    echo "<h1>".$sor['room_number']."Szoba"."</h1>";
    echo "<p>"."Ferohely:".$sor['capacity']."</p>";
    echo "<p>"."Ara:".$sor['price']."Ft / Éjeszaka"."</p>";
    echo "<p>"."Nagyon jó szoba kenyelmes meg minden"."</p>";

}

?>


