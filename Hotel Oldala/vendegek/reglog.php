<?php
require '../../cfg.php';
session_start();

if(isset($_POST['log-btn'])){
    $lekerdezes = "SELECT * FROM users WHERE email='$_POST[email]'";
    $talalt_fiok = $conn->query($lekerdezes);

    if(mysqli_num_rows($talalt_fiok) == 1){
        $felhasznalo = $talalt_fiok->fetch_assoc();
			
			if(password_verify($_POST['password'], $felhasznalo['password'])){
				
			setcookie("id", $felhasznalo['id'], time() + 3600, "/");
            header("Location: index.php");
    }
    else{
        echo "<script>alert('Hibas Jelszo')</script>";
    }
}else{
    echo "<script>alert('Nincs ilyen felhasznalo')</script>";

}
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
                echo "<script>alert('Siekres Regisztráció')</script>";
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
   
    	<form method="post" class="reglog" style="display: none" id="log">
             <h1>Bejelentkezes</h1>
        <input type="email" name="email" placeholder="valami@valami.hu">
        <input type="text" name="username" placeholder="felhasznalonev">
        <input type="password" name="password" placeholder="jelszo">
        <input type="submit" value="Bejelentkezes" name="log-btn">
        <a>Még nincs fiókod?</a> <a href="#" onclick="showForm('reg')">Regisztrálj!</a>
    </form>

    	<form method="post" class="reglog" id="reg">
                <h1>Regisztráció</h1>
        <input type="email" name="email" placeholder="valami@valami.hu">
        <input type="text" name="username" placeholder="felhasznalonev">
        <input type="password" name="pass1" placeholder="jelszo">
        <input type="password" name="pass2" placeholder="jelszo">
        <input type="submit" value="Regisztracio" name="reg-btn">
        	<a>Már van fiókod?</a> <a href="#" onclick="showForm('log')">Lépj be!</a>
    </form>
</body>
</html>
<script>

	function showForm(form){
		
		if(form == "reg"){
			document.getElementById("reg").style.display = "block";
			document.getElementById("log").style.display = "none";
		}
		else{
			document.getElementById("reg").style.display = "none";
			document.getElementById("log").style.display = "block";
		}
		
	}

</script>
