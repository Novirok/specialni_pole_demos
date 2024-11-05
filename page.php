<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']);  
    echo "<h2>Údaje přenesené přes GET</h2>";
    echo "Jméno: $name, Věk: $age";
} else {
    echo "<h2>Žádná data v URL parametrech</h2>";
}
?>
