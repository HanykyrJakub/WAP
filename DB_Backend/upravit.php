<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dm_name  = "jezdci";

$conn = mysqli_connect($hostname,$username,$password,$dm_name);

if ($conn->connect_error){
    die("Připojení nenavázano" . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $jmeno = $_POST["prijmeni"];
    $pozice_v_tymu = $_post["nazev v tymu"];


$sql = "UPDATE drivers SET prijmeni='$jmeno', nazev v tymu='$pozice_v_tymu' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Úspěšně změněno";
}else{
    echo "Chyba při změně" . $conn->error;
 }
}

$id = $_GET["id"];
$sql = "SELECT * FROM drivers WHERE id='$id'";
$result = $conn->query($sql);


if($result->num_rows == 1){

    $row = $result->fetch_assoc();
    echo "<h2>Upravit záznam</h2>";
  echo "<form method='post'>";
  echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
  echo "Příjmení: <input type='text' name='Příjmení' value='" . $row["prijmeni"] . "'><br>";
  echo "Název v týmu: <input type='text' name='Název v týmu' value='" . $row["nazev v tymu"] . "'><br>";
  echo "<input type='submit' value='Uložit'>";
  echo "</form>";
}else{
    echo "nenalezeno";
}


$conn->close();
?>