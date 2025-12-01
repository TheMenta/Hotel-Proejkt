
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
    <input type="text" id="search-input" placeholder="Keresés...">
    <div id="rooms-list"></div>
    <?php
    $lekerdezes = "SELECT * FROM rooms";
    $talalt_sorok = $conn->query($lekerdezes);
    while($sor  = $talalt_sorok->fetch_assoc()){
        echo "<div class='room-item'>";
        echo "<a href='#' class='room-number'>".$sor['room_number']."</a>";
        echo "<p>".$sor['price']."FT</p>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='room_id' value='".$sor['id']."'>";
        echo "<input type='submit' value='Törlés' name='del-btn'>";
        echo "</form>";
        echo "</div>";
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
const searchInput = document.querySelector('#search-input');
const roomItems = document.querySelectorAll('.room-item');

searchInput.addEventListener('input', () => {
    const filter = searchInput.value.toLowerCase().trim();
    roomItems.forEach(item => {
        const roomNumber = item.querySelector('.room-number').textContent.toLowerCase();
        if(roomNumber.includes(filter) || filter === "") {
            item.style.display = "";
        } else {
            item.style.display = "none";
        }
    });
});
</script>
</html>
