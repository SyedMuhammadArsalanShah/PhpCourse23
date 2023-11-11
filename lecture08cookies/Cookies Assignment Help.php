<?php
// Read the cookie
$cookieData = $_COOKIE['product_options'] ?? '';

// Parse the cookie data
parse_str($cookieData, $options);

// Access the options
$color = $options['color'] ?? 'default_color';
$size = $options['size'] ?? 'default_size';

// Use the options to customize the product (replace this with your logic)
$customizedProduct = "Customized Product: Color - $color, Size - $size";

// Output the customized product
echo $customizedProduct;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customized Product</title>
</head>
<body>

    <h2>Select Product Options:</h2>

    <!-- Assume you have some form elements for product customization -->
    <form id="productForm">
        <label for="color">Color:</label>
        <select id="color" name="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
        </select>

        <br>

        <label for="size">Size:</label>
        <select id="size" name="size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>

        <br>

        <button type="button" onclick="setProductOptions()">Set Options</button>
    </form>

    <script>
        function setProductOptions() {
            // Get selected options
            const color = document.getElementById("color").value;
            const size = document.getElementById("size").value;

            // Set a cookie with the selected options
            document.cookie = `product_options=color=${color}&size=${size}; expires=Thu, 18 Dec 2023 12:00:00 UTC; path=/`;

            alert("Product options set successfully!");
        }
    </script>

</body>
</html>
