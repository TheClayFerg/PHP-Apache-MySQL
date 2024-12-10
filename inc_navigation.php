<?php

$navCaptions = array("Home", "Products", "Contact");
$navLinks = array("index.php", "products.php", "contact.php");

// Used to generate the nav menu
echo "<ul>";
foreach ($navCaptions as $index => $caption) {
    echo "<li><a href='" . $navLinks[$index] . "'>$caption</a></li>";
}
echo "</ul>"
?>