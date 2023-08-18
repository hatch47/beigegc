<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<script src="script.js"></script>
<link rel="icon" href="Logo.png" type="image/png">
<title>Browse</title>
</head>
<body>
<div class="container">

<br>
<?php
include "navbar.html";
?> 

<br><br><br><br><br><br>

<div class="navbar" style="width:1000px">
    <a href="browse.php?section=featured">Featured</a>
    <a href="browse.php?section=headwear">Headwear</a>
    <a href="browse.php?section=tops">Tops</a> 
    <a href="browse.php?section=bottoms">Bottoms</a>
    <a href="browse.php?section=footwear">Footwear</a>
</div>

<?php
// Check if a section parameter is provided in the URL
if(isset($_GET['section'])) {
    $section = $_GET['section'];
    
    // Determine which section to display
    if($section === 'tops') {
        echo '<div class="stock-container">';
    echo '<table class="fancy-text">';
    echo '  <tr>';
    echo '    <td><img src="photos\top\t1.jpg" alt="Image 1"></td>';
    echo '    <td><img src="photos\top\t2.jpg" alt="Image 2"></td>';
    echo '    <td><img src="photos\top\t3.jpg" alt="Image 3"></td>';
    echo '  </tr>';
    echo '  <tr>';
    echo '    <td><h3><a href="purchase.php?product=beige-sleeveless-jacket">Beige Sleeveless Jacket</a></h3><b>$129.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-puffy-jacket">Beige Puffy Jacket</a></h3><b>$89.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-slim-sweater">Beige Slim Sweater</a></h3><b>$59.99</b></td>';
    echo '  </tr>';
    echo '  <tr style="height: 50px;"></tr>';
    echo '  <tr>';
    echo '    <td><img src="photos\top\t4.jpg" alt="Image 4"></td>';
    echo '    <td><img src="photos\top\t5.jpg" alt="Image 5"></td>';
    echo '    <td><img src="photos\top\t6.jpg" alt="Image 6"></td>';
    echo '  </tr>';
    echo '  <tr>';
    echo '    <td><h3><a href="purchase.php?product=beige-long-sleeve-t-w">Beige Long Sleeve T (W)</a></h3><b>$49.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-sleeveless-puffy-jacket">Beige Sleeveless Puffy Jacket</a></h3><b>$79.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-slylish-polo">Beige Stylish Polo</a></h3><b>$139.99</b></td>';
    echo '  </tr>';
    echo '  <tr style="height: 50px;"></tr>';
    echo '  <tr>';
    echo '    <td><img src="photos\top\t7.jpg" alt="Image 7"></td>';
    echo '    <td><img src="photos\top\t8.jpg" alt="Image 8"></td>';
    echo '    <td><img src="photos\top\t9.jpg" alt="Image 9"></td>';
    echo '  </tr>';
    echo '  <tr>';
    echo '    <td><h3><a href="purchase.php?product=beige-slim-polo-w">Beige Slim Polo (W)</a></h3><b>$69.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-and-white-pullover">Beige and White Pullover</a></h3><b>$129.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-knitted-polo">Beige Knitted Polo</a></h3><b>$119.99</b></td>';
    echo '  </tr>';
    echo '  <tr style="height: 50px;"></tr>';
    echo '  <tr>';
    echo '    <td><img src="photos\top\t10.jpg" alt="Image 10"></td>';
    echo '    <td><img src="photos\top\t11.jpg" alt="Image 11"></td>';
    echo '    <td><img src="photos\top\t12.jpg" alt="Image 12"></td>';
    echo '  </tr>';
    echo '  <tr>';
    echo '    <td><h3><a href="purchase.php?product=beige-hooded-zip-light">Beige Hooded Zip Light</a></h3><b>$169.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-hooded-zip">Beige Hooded Zip</a></h3><b>$229.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-striped-polo-w">Beige Striped Polo (W)</a></h3><b>$49.99</b></td>';
    echo '  </tr>';
    echo '  <tr style="height: 50px;"></tr>';
    echo '  <tr>';
    echo '    <td><img src="photos\top\t13.jpg" alt="Image 13"></td>';
    echo '    <td><img src="photos\top\t14.jpg" alt="Image 14"></td>';
    echo '    <td><img src="photos\top\t15.jpg" alt="Image 15"></td>';
    echo '  </tr>';
    echo '  <tr>';
    echo '    <td><h3><a href="purchase.php?product=beige-short-sleeve-t-w">Beige Short Sleeve T (W)</a></h3><b>$69.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-slim-half-zip">Beige Slim Half Zip</a></h3><b>$99.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-zip-jacket">Beige Zip Jacket</a></h3><b>$159.99</b></td>';
    echo '  </tr>';
    echo '  <tr style="height: 50px;"></tr>';
    echo '  <tr>';
    echo '    <td><img src="photos\top\t16.jpg" alt="Image 16"></td>';
    echo '    <td><img src="photos\top\t17.jpg" alt="Image 17"></td>';
    echo '    <td><img src="photos\top\t18.jpg" alt="Image 18"></td>';
    echo '  </tr>';
    echo '  <tr>';
    echo '    <td><h3><a href="purchase.php?product=beige-reg-polo">Beige Reg Polo</a></h3><b>$69.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-reg-t">Beige Reg T</a></h3><b>$29.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-reg-zip">Beige Reg Zip</a></h3><b>$69.99</b></td>';
    echo '  </tr>';
    echo '  <tr style="height: 50px;"></tr>';
    echo '  <tr>';
    echo '    <td><img src="photos\top\t19.jpg" alt="Image 19"></td>';
    echo '    <td><img src="photos\top\t20.jpg" alt="Image 20"></td>';
    echo '    <td><h3></h3><b></b></td>';
    echo '  </tr>';
    echo '  <tr>';
    echo '    <td><h3><a href="purchase.php?product=beige-hooded-pullover">Beige Hooded Pullover</a></h3><b>$169.99</b></td>';
    echo '    <td><h3><a href="purchase.php?product=beige-stylish-polo-2">Beige Stylish Polo 2</a></h3><b>$75.99</b></td>';
    echo '  </tr>';
    echo '  <tr style="height: 50px;"></tr>';
    echo '</table>';
    echo '</div>';


    } elseif($section === 'featured') {
        echo '<div class="stock-container">';
        echo '<table class="fancy-text">';
        echo '  <tr>';
        echo '    <td><img src="photos\top\t6.jpg" alt="Image 1"></td>';
        echo '    <td><img src="photos\bottom\b1.jpg" alt="Image 2"></td>';
        echo '    <td><img src="photos\foot\f6.jpg" alt="Image 3"></td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td><h3><a href="purchase.php?product=beige-stylish-polo">Beige Stylish Polo</a></h3><b>$139.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-classic-shorts">Beige Classic Shorts</a></h3><b>$89.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-fade-shoes">Beige Fade Shoes</a></h3><b>$199.99</b></td>';        
        echo '  </tr>';
        echo '  <tr style="height: 50px;"></tr>';
        echo '</table>';
        echo '</div>';
        
    } elseif($section === 'bottoms') {
        echo '<div class="stock-container">';
        echo '<table class="fancy-text">';
        echo '  <tr>';
        echo '    <td><img src="photos\bottom\b1.jpg" alt="Image 1"></td>';
        echo '    <td><img src="photos\bottom\b2.jpg" alt="Image 2"></td>';
        echo '    <td><img src="photos\bottom\b3.jpg" alt="Image 3"></td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td><h3><a href="purchase.php?product=beige-classic-shorts">Beige Classic Shorts</a></h3><b>$89.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-dark-shorts">Beige Dark Shorts</a></h3><b>$59.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-classic-pants">Beige Classic Pants</a></h3><b>$99.99</b></td>';
        echo '  </tr>';
        echo '  <tr style="height: 50px;"></tr>';
        echo '  <tr>';
        echo '    <td><img src="photos\bottom\b4.jpg" alt="Image 4"></td>';
        echo '    <td><img src="photos\bottom\b5.jpg" alt="Image 5"></td>';
        echo '    <td><img src="photos\bottom\b6.jpg" alt="Image 6"></td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td><h3><a href="purchase.php?product=beige-light-shorts">Beige Light Shorts</a></h3><b>$69.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-cut-pants">Beige Cut Pants</a></h3><b>$79.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-straight-pants">Beige Straight Pants</a></h3><b>$79.99</b></td>';
        echo '  </tr>';
        echo '  <tr style="height: 50px;"></tr>';
        echo '  <tr>';
        echo '    <td><img src="photos\bottom\b7.jpg" alt="Image 7"></td>';
        echo '    <td><img src="photos\bottom\b8.jpg" alt="Image 8"></td>';
        echo '    <td><img src="photos\bottom\b9.jpg" alt="Image 9"></td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td><h3><a href="purchase.php?product=beige-round-pants">Beige Round Pants</a></h3><b>$69.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-skort">Beige Skort (W)</a></h3><b>$79.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-lined-shorts">Beige Lined Shute (W)</a></h3><b>$89.99</b></td>';
        echo '  </tr>';
        echo '  <tr style="height: 50px;"></tr>';
        echo '  <tr>';
        echo '    <td><img src="photos\bottom\b10.jpg" alt="Image 10"></td>';
        echo '    <td><img src="photos\bottom\b11.jpg" alt="Image 11"></td>';
        echo '    <td><img src="photos\bottom\b12.jpg" alt="Image 12"></td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td><h3><a href="purchase.php?product=beige-loose-pants">Beige Loose Pants</a></h3><b>$69.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-fit-pants">Beige Fit Pants</a></h3><b>$79.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-tight-pants">Beige Tight Pants</a></h3><b>$79.99</b></td>';
        echo '  </tr>';
        echo '  <tr style="height: 50px;"></tr>';
        echo '  <tr>';
        echo '    <td><img src="photos\bottom\b13.jpg" alt="Image 13"></td>';
        echo '    <td><img src="photos\bottom\b14.jpg" alt="Image 14"></td>';
        echo '    <td><img src="photos\bottom\b15.jpg" alt="Image 15"></td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td><h3><a href="purchase.php?product=beige-slim-pants">Beige Slim Pants</a></h3><b>$89.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-light-shorts">Beige Light Shorts</a></h3><b>$89.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-stylish-shorts">Beige Stylish Shorts</a></h3><b>$99.99</b></td>';
        echo '  </tr>';
        echo '  <tr style="height: 50px;"></tr>';
        echo '  <tr>';
        echo '    <td><img src="photos\bottom\b16.jpg" alt="Image 16"></td>';
        echo '    <td><img src="photos\bottom\b17.jpg" alt="Image 17"></td>';
        echo '    <td><img src="photos\bottom\b18.jpg" alt="Image 18"></td>';
        echo '  </tr>';
        echo '  <tr>';
        echo '    <td><h3><a href="purchase.php?product=beige-skirt">Beige Skirt (W)</a></h3><b>$79.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-reg-pants">Beige Reg Pants</a></h3><b>$59.99</b></td>';
        echo '    <td><h3><a href="purchase.php?product=beige-stylish-pants">Beige Stylish Pants</a></h3><b>$129.99</b></td>';
        echo '  </tr>';
        echo '  <tr style="height: 50px;"></tr>';
        echo '</table>';
        echo '</div>';
        
    } elseif($section === 'headwear') {
        echo '<div class="stock-container">';
        echo '<table class="fancy-text">';
        echo '<tr>';
        echo '  <td><img src="photos\hat\h1.jpg" alt="Image 1"></td>';
        echo '  <td><img src="photos\hat\h2.jpg" alt="Image 2"></td>';
        echo '  <td><img src="photos\hat\h3.jpg" alt="Image 3"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '  <td><h3><a href="purchase.php?product=beige-cap">Beige Cap</a></h3><b>$49.99</b></td>';
        echo '  <td><h3><a href="purchase.php?product=beige-wide-brim-hat">Beige Wide Brim Hat</a></h3><b>$39.99</b></td>';
        echo '  <td><h3><a href="purchase.php?product=beige-soft-bucket-hat">Beige Soft Bucket Hat</a></h3><b>$89.99</b></td>';
        echo '</tr>';
        echo '<tr style="height: 50px;"></tr>';
        echo '<tr>';
        echo '  <td><img src="photos\hat\h4.jpg" alt="Image"></td>';
        echo '  <td><img src="photos\hat\h5.jpg" alt="Image"></td>';
        echo '  <td></td>';
        echo '</tr>';
        echo '<tr>';
        echo '  <td><h3><a href="purchase.php?product=beige-white-bucket-hat">Beige White Bucket Hat</a></h3><b>$69.99</b></td>';
        echo '  <td><h3><a href="purchase.php?product=beige-visor">Beige Visor</a></h3><b>$29.99</b></td>';
        echo '  <td><h3></h3><b></b></td>';
        echo '</tr>';
        echo '</table>';
        echo '</div>';

        
    } elseif($section === 'footwear') {
        echo '<div class="stock-container">';
        echo '<table class="fancy-text">';
        echo '<tr>';
        echo '<td><img src="photos\foot\f1.jpg" alt="Image 1"></td>';
        echo '<td><img src="photos\foot\f2.jpg" alt="Image 2"></td>';
        echo '<td><img src="photos\foot\f3.jpg" alt="Image"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '  <td><h3><a href="purchase.php?product=beige-tall-kicks">Beige Tall Kicks</a></h3><b>$149.99</b></td>';
        echo '  <td><h3><a href="purchase.php?product=beige-fine-shoes">Beige Fine Shoes</a></h3><b>$139.99</b></td>';
        echo '  <td><h3><a href="purchase.php?product=beige-elite-golf-shoes">Beige Elite Golf Shoes</a></h3><b>$189.99</b></td>';    
        echo '</tr>';
        echo '<tr style="height: 50px;"></tr>';
        echo '<tr>';
        echo '<td><img src="photos\foot\f4.jpg" alt="Image"></td>';
        echo '<td><img src="photos\foot\f5.jpg" alt="Image"></td>';
	echo '<td><img src="photos\foot\f6.jpg" alt="Image"></td>';
        echo '<td></td>';
        echo '</tr>';
        echo '<tr>';
        echo '  <td><h3><a href="purchase.php?product=beige-light-shoes">Beige Light Shoes</a></h3><b>$179.99</b></td>';
        echo '  <td><h3><a href="purchase.php?product=beige-line-shoes">Beige Line Shoes</a></h3><b>$89.99</b></td>';
        echo '  <td><h3><a href="purchase.php?product=beige-fade-shoes">Beige Fade Shoes</a></h3><b>$199.99</b></td>';    
	echo '</tr>';
	echo '<tr style="height: 50px;"></tr>';
        echo '<tr>';
        echo '<td><img src="photos\foot\f7.jpg" alt="Image"></td>';
        echo '<td></td>';
        echo '</tr>';
        echo '<tr>';
        echo '  <td><h3><a href="purchase.php?product=beige-b-shoes">Beige B Shoes</a></h3><b>$129.99</b></td>';
	echo '</tr>';
	echo '<tr style="height: 50px;"></tr>';
        echo '</table>';
        echo '</div>';

    }else {
        echo '<h2>Choose a Section</h2>';
    }
} else {
    echo '<h2></h2>';
}
?>


<br>
<?php
// include "DBConnection.php"; // include the database connection file
// mysqli_close($conn); // Close the database connection
?>


</body>
</div>

<footer class="copyright-footer">
        <p>&copy; 2023 BeigeGC. All rights reserved.</p>
</footer>
</html>