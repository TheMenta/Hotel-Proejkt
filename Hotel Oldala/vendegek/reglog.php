<?php
require '../../cfg.php';

if(isset($_POST['log-btn'])){
    $_POST['email'] = $email;
    $_POST['pass'] = $password;

}
if(isset($_POST['reg-btn'])){
		
		$lekerdezes = "SELECT * FROM users WHERE email='$_POST[email]'";
		$talalt_fiok = $conn->query($lekerdezes);
		
		if(mysqli_num_rows($talalt_fiok) == 0){
			
			if($_POST['pass1'] == $_POST['pass2']){
				
				$titkos = password_hash($_POST['pass1'], PASSWORD_DEFAULT);
				
				$conn->query("INSERT INTO users VALUES(id, '$_POST[email]', '$_POST[username]', '$titkos', 0)");
				
				$lekerdezes = "SELECT * FROM users WHERE email='$_POST[email]'";
				$talalt_fiok = $conn->query($lekerdezes);
				$felhasznalo = $talalt_fiok->fetch_assoc();

				setcookie("id", $felhasznalo['id'], time() + 3600, "/");
			}
	}
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