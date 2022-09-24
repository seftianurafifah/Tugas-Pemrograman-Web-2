<?php

$negara = [
    "Indonesia" => "D.K.I Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filiphina" => "Manila",
    "Myanmar" => "Naypydaw"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
    
<?php
    foreach ($negara as $nrp => $ibukota) {
        echo "<li>$nrp : $ibukota</li>";
    }
    ?>
</body>
</html>