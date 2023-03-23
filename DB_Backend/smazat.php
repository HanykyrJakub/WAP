<?php
$conn = mysqli_connect($hostname,$username,$password,$dm_name);

if ($conn->connect_error){
    die("Připojení nenavázano" . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM beckend WHERE id = $id";


if ($conn->query($sql) === TRUE){
    echo "Záznam smazán";
}else{
    echo "chyba" . $conn->error;
}

$conn->close();
?>