<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        echo "<h2>Údaje přenesené přes POST</h2>";
        echo "Jméno: $name, Věk: $age";
    } else {
        echo "<h2>Formulář nebyl odeslán správně</h2>";
    }
} else {
    echo "<h2>Formulář neodeslán</h2>";
}
?>
