<?php
require '../../cfg.php';

if(isset($_POST['log-btn'])){
    $_POST['email'] = $email;
    $_POST['pass'] = $password;

}
if(isset($_POST['reg-btn'])){
    $_POST['email']= $email;
    $_POST['pass1'] = $password1;
    $_POST['pass2'] = $password2;
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés/Regisztráció</title>
</head>
<body>
    <h1>Bejelentkezes</h1>
    <form method="post">
        <input type="email" name="email" placeholder="valami@valami.hu">
        <input type="text" name="username" placeholder="felhasznalonev">
        <input type="password" name="pass" placeholder="jelszo">
        <input type="submit" value="Bejelentkezes" name="log-btn">
    </form>
    <h1>Regisztráció</h1>
    <form method="post">
        <input type="email" name="email" placeholder="valami@valami.hu">
        <input type="text" name="username" placeholder="felhasznalonev">
        <input type="password" name="pass1" placeholder="jelszo">
        <input type="password" name="pass2" placeholder="jelszo">
        <input type="submit" value="Regisztracio" name="reg-btn">
    </form>
</body>
</html>
