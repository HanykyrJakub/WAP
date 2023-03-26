<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB_Beckend</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dm_name  = "jezdci";

$conn = new mysqli($hostname,$username,$password,$dm_name);
if ($conn->connect_error){
    die("Připojení nenavázano" . $conn->connect_error);
}

$sql = "SELECT * FROM `drivers`";
$result = $conn->query($sql);

if ($result -> num_rows > 0){
    echo "<table><tr><th>ID</th><th>Příjmení</th><th>Tým</th><th>Číslo</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id']. "</td><td>". $row['prijmeni']."</td><td>". $row['nazev v tymu']."</td><td>". $row['cislo jezdce']."</td><td>";
        echo "<a href='upravit.php?id=" . $row["id"] . "'>Upravit</a> ";
        echo "<a href='smazat.php?id=" . $row["id"] . "' onclick=\"return confirm('Opravdu chcete smazat tento záznam?')\">Smazat</a></td></tr>";
  }
    echo "</table>";
}else{
    echo "0 záznamů";
}


$conn->close();


?>
</body>
</html>
