<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<script src="script.js"></script>
<link rel="icon" href="Logo.png" type="image/png">
<title>Beige</title>
</head>
<body>
<div class="container">

<br>
<?php
include "navbar.html";
include "bot/botindex.html";
?> 
<br><br><br><br><br>

<div class="stock-container">
    <a href="browse.php?section=featured"><img src="photos\home\stock1.jpg" alt="Image 1"></a>
    <a href="browse.php?section=featured"><img src="photos\home\stock2.jpg" alt="Image 2"></a>
    <a href="browse.php?section=featured"><img src="photos\home\stock3.jpg" alt="Image 3"></a>
</div>

<div class="stock-container">
    <a href="browse.php?section=featured"><img src="photos\home\stock7.jpg" alt="Image 4"></a>
    <a href="browse.php?section=featured"><img src="photos\home\stock5.jpg" alt="Image 5"></a>
    <a href="browse.php?section=featured"><img src="photos\home\stock6.jpg" alt="Image 6"></a>
</div>

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

<!-- get clothes photos from https://www.bogner.com/en-gb/c/unisex/golf-styles/477798/?prefn1=productGroup&prefv1=Cap%7CSkirt%7CPolo%20Shirt%7CShorts%7CTrousers&prefn2=refinementColor&prefv2=Beige -->