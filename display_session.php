<?php
session_start();  

if (isset($_SESSION['username']) && isset($_SESSION['age'])) {
    echo "<h2>Údaje uložené v relaci</h2>";
    echo "Uživatel: " . $_SESSION['username'] . ", Věk: " . $_SESSION['age'];
} else {
    echo "<h2>V relaci nejsou žádná data</h2>";
}
?>
