<<?php
// Define product information (you can replace this with a database query)
$productName = "DnD accesories for pets";
$productPrice = 19.99;
$productDescription = "This is a sample product description.";

// Output product information within the HTML structure
echo "<div id='product'>";
echo "<h1>$productName</h1>";
echo "<p>Price: $$productPrice</p>";
echo "<p>Description: $productDescription</p>";
echo "</div>";
?>