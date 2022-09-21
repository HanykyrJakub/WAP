<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šachovnice</title>
</head>
<body>
    <table width="400px" border="1px" cellspacing = "1px">
    <?php
    $value = 0;
    $col = 0;

    do {
        $row = 0;
        echo "<tr>";
        $value = $col;
        do {  
            if($value%2 == 0) {
                echo 
"<td height=40px width=20px bgcolor=black></td>";
                $value++;
            }
            else {
                echo 
"<td height=40px width=20px bgcolor=white></td>";
                $value++;
            }
            $row++;
        }while($row < 8);
        echo "</tr>";
        $col++;
    }while($col < 8)
    ?>
    </table>
</body>
</html>