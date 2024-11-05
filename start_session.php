<?php
session_start();  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['sessionName']) && isset($_POST['sessionAge'])) {
        $_SESSION['username'] = htmlspecialchars($_POST['sessionName']);
        $_SESSION['age'] = htmlspecialchars($_POST['sessionAge']);
        echo "<h2>Data byla uložena do relace</h2>";
        echo "Jméno: " . $_SESSION['username'] . ", Věk: " . $_SESSION['age'];
    } else {
        echo "<h2>Formulář neobsahuje data pro relaci</h2>";
    }
} else {
    echo "<h2>Formulář nebyl odeslán správně</h2>";
}
?>
