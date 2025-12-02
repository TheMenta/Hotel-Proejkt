<?php
require '../../cfg.php';

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Főoldal</title>
</head>
<body>
    <h1>Üdvözlünk a React Hotel oldalán!</h1>
    
    <nav>
        <ul>
            <li><a href="index.php">Főoldal</li>
            <li><a href="feoglalas.php">Foglalás</li>
             <li><a href="reglog.php">Bejelentkezes</li>
        </ul>
    </nav>

    <?php
    $lekerdezes = "SELECT * FROM rooms";
    $talalt_sorok = $conn->query($lekerdezes);
    echo "<div class='container'>";
    while($sor  = $talalt_sorok->fetch_assoc()){
        
        echo "<div>"."<p>".$sor['room_number']."</p>"."</div>";
       
    } 
     echo "</div>";
    ?>
</body>
</html>
