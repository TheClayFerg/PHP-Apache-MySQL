<?php
// Clayton Ferguson
// 12/03/24

// Created the array for product information
$products = array(
    array("name"=> "Honey Bee", "Price" => 25, "Quantity" => 214, "Location" => "USA"),
    array("name"=> "Satin Azure Butterfly", "Price" => 35, "Quantity" => 4, "Location" => "Australia"),
    array("name"=> "Luna Moth", "Price" => 42, "Quantity" => 23, "Location" => "USA"),
    array("name"=> "Praying Mantis", "Price" => 60, "Quantity" => 7, "Location" => "USA"),
    array("name"=> "Scarab Beetle", "Price" => 75, "Quantity" => 2, "Location" => "Egypt"),
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <!-- Should include the Nav Menu -->
        <?php 
        include 'inc_navigation.php'; ?>
        </div>

    <!-- Products Table -->
    <h1>My Insert Collection</h1>
    <table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Loops through products array and displays prod data in the table.
        foreach ( $products as $product ) {
            echo "<tr>";
            echo "<td>" . $product["name"] . "</td>";
            echo "<td>$". number_format($product["Price"],2) ."</td>";
            echo "<td>" . $product["Quantity"] . "</td>";
            echo "<td>" . $product["Location"] . "</td>"; 
            echo "</tr>";
            }
        ?>
    </tbody>
</table>
</body>
<?php include 'inc_footer.php'; ?>
</html>