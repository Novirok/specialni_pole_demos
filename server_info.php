<?php
echo "<h2>Informace o serveru ($_SERVER)</h2>";
echo "HTTP metoda požadavku: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Aktuální URL: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "Server host: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Verze PHP: " . $_SERVER['PHP_VERSION'] . "<br>";
?>
