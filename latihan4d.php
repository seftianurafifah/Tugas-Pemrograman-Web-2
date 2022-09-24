<?php

$nama = [
    array("Indonesia", "D.K.I Jakarta", "+62"),
    array("Singapura", "Singapura", "+65"),
    array("Malaysia", "Kuala Lumpur", "+60"),
    array("Brunai", "Bandar Seri Begawan", "+73"),
    array("Thailand", "Bangkok", "+66"),
    array("Laos", "Vientiane", "+856"),
    array("Filiphina", "Manila", "+63"),
    array("Myanmar", "Naypyidaw", "+95")
];
    echo "<table border=1>";
    echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

    foreach($nama as $rows => $row)
    {
        echo "<tr>";
        foreach ($row as $col => $cell)
        
        {
            echo "<td>".$cell."</td>";
        }
    }
        echo "</tr></table>";

    ?>