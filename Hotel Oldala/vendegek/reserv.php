<?php
require '../../cfg.php';
//get-tel majd le kerem az adott szoba dolgait.
if(!isset($_COOKIE['id'])){
    !scriptalert hogy kerlek jelentkezz be a kedvezmenyekert
    
}
else{
    $lekerdezes = "SELECT * FROM users WHERE id=$_COOKIE[id]";
    $talalt_felhasznalo = $conn->query($lekerdezes);
    $felhasznalo = $talalt_felhasznalo->fetch_assoc();
}

// Nézett profil lekérdezése
$lekerdezes = "SELECT * FROM users WHERE id=$_GET[roomid]";
$talalt_szoba = $conn->query($lekerdezes);
$profil = $talalt_szoba->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foglalás</title>
</head>
<body>
<!-- ez majd csak akkor jelenjen meg ha valaki nincs bejelentkezve -->
    <form method="post">
    <input type="email" name="email" placeholder="asd@asd.hu">
    <input type="text" name="name" placeholder="Vezetek Kresztnev">
    <input type="password">
    </form>
</body>
</html>
