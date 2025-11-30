<?php
require '../../cfg.php';

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Főoldal</title>
</head>
<body>
    <h1>Üdvözlünk a React Hotel oldalán!</h1>

    <?php
    $lekerdezes = "SELECT * FROM rooms";
    $talalt_sorok = $conn->query($lekerdezes);
    while($sor  = $talalt_sorok->fetch_assoc()){
        echo "<p>".$sor['room_number']."</p>";
    } 
    ?>
</body>
</html>