<?php

$negara = ["Indonesia", "Singapura", "Malaysia", "Brunai", "Thailand"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for Array</title>
</head>
<body>
    <h3>Daftar Negara ASEAN awal :</h3>
    <?php
        for ($i = 0; $i < count($negara); $i++) {
            echo "<li>$negara[$i]</li>";
        }
    ?>

    <br>
    <h3>Daftar Negara ASEAN baru :</h3>

<?php
$negara =
$negara = ["Indonesia", "Singapura", "Malaysia", "Brunai", "Thailand", "Laos", "Filiphina", "Myanmar"];

        for ($i = 0; $i < count($negara); $i++) {
            echo "<li>$negara[$i]</li>";
        }
    ?>
</body>
</html>