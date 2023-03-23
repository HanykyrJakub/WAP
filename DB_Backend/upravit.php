<?php
$conn = mysqli_connect($hostname,$username,$password,$dm_name);

if ($conn->connect_error){
    die("Připojení nenavázano" . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $jmeno = $_POST["jmeno"];
    $pozice_v_tymu = $_post["pozice v tymu"];


$sql = "UPDATE beckend SET jmeno='$jmeno', pozice_v_tymu='$pozice_v_tymu' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Úspěšně změněno";
}else{
    echo "Chyba při změně" . $conn->error;
 }
}

$id = $_GET["id"];
$sql = "SELECT * FROM beckend WHERE id='$id'";
$result = $conn->query($sql);


if($result->num_rows == 1){

    $row = $result->fetch_assoc();
    echo "<h2>Upravit záznam</h2>";
  echo "<form method='post'>";
  echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
  echo "Jméno: <input type='text' name='jmeno' value='" . $row["jmeno"] . "'><br>";
  echo "Příjmení: <input type='text' name='pozice v rMu' value='" . $row["pozice_v_tymu"] . "'><br>";
  echo "<input type='submit' value='Uložit'>";
  echo "</form>";
}else{
    echo "nenalezeno";
}


$conn->close();
?>