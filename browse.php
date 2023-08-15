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
<br><br><br><br><br><br><br><br>
<div class="stock-container">
<table class="fancy-text">
    <tr>
        <td><img src="photos\hat\h1.jpg" alt="Image 1"></td>
        <td><img src="photos\hat\h2.jpg" alt="Image 2"></td>
        <td><img src="photos\hat\h3.jpg" alt="Image"></td>
    </tr>
    <tr>
        <td><h3><a href="">Beige Cap</a></h3><b>$49.99</b></td>
        <td><h3><a href="">Beige Wide Brim Hat</a></h3><b>$39.99</b></td>
        <td><h3><a href="">Beige Soft Bucket Hat</a></h3><b>$89.99</b></td>
    </tr>  
    <tr style="height: 50px;"></tr>
    <tr>
        <td><img src="photos\hat\h4.jpg" alt="Image"></td>
        <td><img src="photos\hat\h5.jpg" alt="Image"></td>
    </tr>
    <tr>
        <td><h3><a href="">Beige White Bucket Hat</a></h3><b>$69.99</b></td>
        <td><h3><a href="">Beige Visor</a></h3><b>$29.99</b></td>
        <td><h3></h3><b></b></td>
    </tr>  
    <tr style="height: 50px;"></tr>
</table>
</div>
<br>
<?php
// include "DBConnection.php"; // include the database connection file
// mysqli_close($conn); // Close the database connection
?>

</div>
</body>
</html>