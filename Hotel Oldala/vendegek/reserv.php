<?php
require '../../cfg.php';

if(!isset($_COOKIE['id'])){
    echo "<script>alert('Kerlek Jelentkezz be tovabbi kedvezmenyekert!')</script>";
     echo  "<form method='post'>";
     echo   "<input type='email' name='email' placeholder='asd@asd.hu'>";
     echo   "<input type='text' name='name' placeholder='Vezetek Kresztnev'>";
     echo   "<input type='password'>";
     echo   "</form>";
}
else{
    
}
echo "<h1>eleherto szobak</h1>";
$lekerdezes = "SELECT * FROM rooms where status = 0";
$talalt_sorok = $conn->query($lekerdezes);
while($sor = $talalt_sorok->fetch_assoc()){
     echo "<div>"."<p>".$sor['room_number']."</p>"."</div>";

}







if(isset($_POST['btn'])){
$_POST['start_d'] = $strat_d;
$_POST['end_d'] = $end_d;
$_POST['quantity'] = $quantity;
$lekerdezes = "SELECT * FROM bookings WHERE ";
$talalt_sorok = $conn->query($lekerdezes);
while($sor = $talalt_sorok->fetch_assoc()){

}
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foglalás</title>
</head>
<body>
    <form method="post">
        <input type="date" name="start_d">
        <input type="date" name="end_d">
        <input type="number" id="quantity" name="quantity" min="1" max="6">
        <input type="submit" name="btn" value="kereses">
    </form>
  
</body>
</html>
