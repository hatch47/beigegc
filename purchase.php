<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <link rel="icon" href="Logo.png" type="image/png">
    <title>Purchase</title>
</head>
<body>
    <div class="container">
        <br>
        <?php
        include "navbar.html";
        ?>
        <br><br><br><br><br>
        <br>
        <?php
        if (isset($_GET['product'])) {
            $productName = $_GET['product'];
            $products = array(
                'beige-stylish-polo' => array('Beige Stylish Polo', 139.99, 'photos\top\t6.jpg'),
                'beige-classic-shorts' => array('Beige Classic Shorts', 89.99, 'photos\bottom\b1.jpg'),
                'beige-fade-shoes' => array('Beige Fade Shoes', 199.99, 'photos\foot\f6.jpg'),
                'beige-sleeveless-jacket' => array('Beige Sleeveless Jacket', 129.99, 'photos\top\t1.jpg'),
                'beige-puffy-jacket' => array('Beige Puffy Jacket', 89.99, 'photos\top\t2.jpg'),
                'beige-slim-sweater' => array('Beige Slim Sweater', 59.99, 'photos\top\t3.jpg'),
                'beige-long-sleeve-t-w' => array('Beige Long Sleeve T (W)', 49.99, 'photos\top\t4.jpg'),
                'beige-sleeveless-puffy-jacket' => array('Beige Sleeveless Puffy Jacket', 79.99, 'photos\top\t5.jpg'),
                'beige-slylish-polo' => array('Beige Stylish Polo', 139.99, 'photos\top\t6.jpg'),
                'beige-slim-polo-w' => array('Beige Slim Polo (W)', 69.99, 'photos\top\t7.jpg'),
                'beige-and-white-pullover' => array('Beige and White Pullover', 129.99, 'photos\top\t8.jpg'),
                'beige-knitted-polo' => array('Beige Knitted Polo', 119.99, 'photos\top\t9.jpg'),
                'beige-hooded-zip-light' => array('Beige Hooded Zip Light', 169.99, 'photos\top\t10.jpg'),
                'beige-hooded-zip' => array('Beige Hooded Zip', 229.99, 'photos\top\t11.jpg'),
                'beige-striped-polo-w' => array('Beige Striped Polo (W)', 49.99, 'photos\top\t12.jpg'),
                'beige-short-sleeve-t-w' => array('Beige Short Sleeve T (W)', 69.99, 'photos\top\t13.jpg'),
                'beige-slim-half-zip' => array('Beige Slim Half Zip', 99.99, 'photos\top\t14.jpg'),
                'beige-zip-jacket' => array('Beige Zip Jacket', 159.99, 'photos\top\t15.jpg'),
                'beige-reg-polo' => array('Beige Reg Polo', 69.99, 'photos\top\t16.jpg'),
                'beige-reg-t' => array('Beige Reg T', 29.99, 'photos\top\t17.jpg'),
                'beige-reg-zip' => array('Beige Reg Zip', 69.99, 'photos\top\t18.jpg'),
                'beige-hooded-pullover' => array('Beige Hooded Pullover', 169.99, 'photos\top\t19.jpg'),
                'beige-stylish-polo-2' => array('Beige Stylish Polo 2', 75.99, 'photos\top\t20.jpg'),
                'beige-classic-shorts' => array('Beige Classic Shorts', 89.99, 'photos\bottom\b1.jpg'),
                'beige-dark-shorts' => array('Beige Dark Shorts', 59.99, 'photos\bottom\b2.jpg'),
                'beige-classic-pants' => array('Beige Classic Pants', 99.99, 'photos\bottom\b3.jpg'),
                'beige-light-shorts' => array('Beige Light Shorts', 69.99, 'photos\bottom\b4.jpg'),
                'beige-cut-pants' => array('Beige Cut Pants', 79.99, 'photos\bottom\b5.jpg'),
                'beige-straight-pants' => array('Beige Straight Pants', 79.99, 'photos\bottom\b6.jpg'),
                'beige-round-pants' => array('Beige Round Pants', 69.99, 'photos\bottom\b7.jpg'),
                'beige-skort' => array('Beige Skort (W)', 79.99, 'photos\bottom\b8.jpg'),
                'beige-lined-shorts' => array('Beige Lined Shute (W)', 89.99, 'photos\bottom\b9.jpg'),
                'beige-loose-pants' => array('Beige Loose Pants', 69.99, 'photos\bottom\b10.jpg'),
                'beige-fit-pants' => array('Beige Fit Pants', 79.99, 'photos\bottom\b11.jpg'),
                'beige-tight-pants' => array('Beige Tight Pants', 79.99, 'photos\bottom\b12.jpg'),
                'beige-slim-pants' => array('Beige Slim Pants', 89.99, 'photos\bottom\b13.jpg'),
                'beige-light-shorts-2' => array('Beige Light Shorts', 89.99, 'photos\bottom\b14.jpg'),
                'beige-stylish-shorts' => array('Beige Stylish Shorts', 99.99, 'photos\bottom\b15.jpg'),
                'beige-skirt' => array('Beige Skirt (W)', 79.99, 'photos\bottom\b16.jpg'),
                'beige-reg-pants' => array('Beige Reg Pants', 59.99, 'photos\bottom\b17.jpg'),
                'beige-stylish-pants' => array('Beige Stylish Pants', 129.99, 'photos\bottom\b18.jpg'),
                'beige-cap' => array('Beige Cap', 49.99, 'photos\hat\h1.jpg'),
                'beige-wide-brim-hat' => array('Beige Wide Brim Hat', 39.99, 'photos\hat\h2.jpg'),
                'beige-soft-bucket-hat' => array('Beige Soft Bucket Hat', 89.99, 'photos\hat\h3.jpg'),
                'beige-white-bucket-hat' => array('Beige White Bucket Hat', 69.99, 'photos\hat\h4.jpg'),
                'beige-visor' => array('Beige Visor', 29.99, 'photos\hat\h5.jpg'),
                'beige-tall-kicks' => array('Beige Tall Kicks', 149.99, 'photos\foot\f1.jpg'),
                'beige-fine-shoes' => array('Beige Fine Shoes', 139.99, 'photos\foot\f2.jpg'),
                'beige-elite-golf-shoes' => array('Beige Elite Golf Shoes', 189.99, 'photos\foot\f3.jpg'),
                'beige-light-shoes' => array('Beige Light Shoes', 179.99, 'photos\foot\f4.jpg'),
                'beige-line-shoes' => array('Beige Line Shoes', 89.99, 'photos\foot\f5.jpg'),
                'beige-fade-shoes' => array('Beige Fade Shoes', 199.99, 'photos\foot\f6.jpg'),
                'beige-b-shoes' => array('Beige B Shoes', 129.99, 'photos\foot\f7.jpg')
                        
            );

            if (isset($products[$productName])) {
                echo '<img src="' . $products[$productName][2] . '" alt="' . $products[$productName][0] . '" style="width: 20%;">';
                echo '<h1 class="fancy-text">' . $products[$productName][0] . '</h1>';
                echo '<p class="fancy-text">Price: $' . $products[$productName][1] . '</p>';
                echo '<form action="checkout.php" method="post">';
                echo '  <label for="quantity" class="fancy-text">Quantity:</label>';
                echo '  <select name="quantity" id="quantity" class="fancy-text" style="background-color: black;">';
                for ($i = 1; $i <= 10; $i++) {
                    echo '  <option value="' . $i . '">' . $i . '</option>';
                }
                echo '  </select>';
                // purchase will eventually be add to cart
                echo '  <br><br><input type="submit" value="Purchase" class="fancy-text" style="background-color: black; cursor: pointer;">';
                echo '</form>';
            } else {
                echo '<p class="fancy-text">Product not found.</p>';
            }
        }
        ?>
    </div>
    <br><br>
    <footer class="copyright-footer">
        <p>&copy; 2023 BeigeGC. All rights reserved.</p>
    </footer>
</body>
</html>
