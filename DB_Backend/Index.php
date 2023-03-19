<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dm_name  = "beckend";

$conn = new mysqli($hostname,$username,$password,$dm_name);
if ($conn->connect_error){
    die("Připojení nenavázano" . $conn->connect_error);
}

$sql = "SELECT * FROM 'f1 jezdci'";
$result = $conn->query($sql);

if ($result->num_rows>0)
    echo "<table><tr><th>ID</th><th>Jméno</th><th>Tým</th><th>pozice</th><th>datum</th></tr>";
    while($row = $result->fetch_assoc()) {
        
    }
?>