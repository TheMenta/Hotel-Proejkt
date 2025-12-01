<?php
require '../../cfg.php';

if(isset($_POST['add-btn'])){
    $room_number = $_POST['room_number'];
    $price = $_POST['price'];
    $conn->query("INSERT INTO rooms VALUES('','$room_number', '$price')");
}
if(isset($_POST["del-btn"])){
    
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Üdvözlünk xy Admin</h1>
    <input type="text" id="serach-input" placeholder="Keresés...">
    <br></br>
    <?php
    $lekerdezes = "SELECT * FROM rooms";
    $talalt_sorok = $conn->query($lekerdezes);
    while($sor  = $talalt_sorok->fetch_assoc()){
        echo "<a href=>".$sor['room_number']."</p>"."</a>";
        echo "<p>".$sor['price']."FT"."</p>";
        echo "<form>";
        echo "<input type='submit' value='torles' name='del-btn'>";
        echo "</form>";
    } 
    ?>
    <form method="post">
        <label for="room_number">Szobaszám:</label>
        <input type="text" id="room_number" name="room_number" required>
        <br>
        <label for="price">Ár:</label>
        <input type="number" id="price" name="price" required>
        <br>
        <input type="submit" value="Hozzáadás" name="add-btn">
    </form>
 
</body>
<script>
    document.querySelector('#search-input').
    addEventListener('input', filterlist)

    function(){
        const searchInput = document.querySelector ('#search-input')
    }
</script>
</html>
