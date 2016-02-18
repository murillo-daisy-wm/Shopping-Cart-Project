<?php
session_start();
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/10/16
 * Time: 4:29 PM
 */
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/10/16
 * Time: 4:17 PM
 */
$user = 'root';
$pass = 'root';
$name = 'Infused_Waters';
$dbh = null;
try {
    $dbh = new PDO('mysql:host=localhost;dbname=' .$name, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print"error: ". $e->getMessage() . "<br/>";
    die();
}

$stmt = $dbh->prepare("select * from products");
$stmt->execute();
$results = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="products.css">




</head>
<body background=url("http://www.skinnymom.com/wp-content/uploads/2013/06/fresh-fruit-pile.jpg")>
<h1> Infused Waters Products</h1>
<div id="navBar">
    <ul>
        <li><a  href="home.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="register.php">Sign Up</a></li>
    </ul>
</div>


<img src="http://www.likestosmile.com/wp-content/uploads/2013/06/likes-to-smile-summer-infused-water.jpg" width="550px" length="550px">


<table style="width:80%">

<?php
$id = 1;
foreach($results as $key=>$item){
    echo $item['name'];

    if($key % 3 == 0){
        echo "</tr><tr>";
    }

    echo "<td><b> $id </b>  \${$item['price']} <i> {$item['name']} </i><a href='cart.php?id={$item['id']}'> <button type='button' class='btn btn-info'>Add</button> </a></td>";
    $id++;
}
?>


<!---->
<!--    <td><b> 1 </b>  $5.00 <i> Berries & Hibiscus </i><a href="purchase.php?id=1&name=Berries%20"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->
<!---->
<!--    <td><b> 2</b> $5.00 <i> Mint & Cucumber </i><a href="purchase.php?id=2&name=MinT%20and%20Cucumber"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->
<!--    <td><b>3 </b> $5.00 <i>Watermelon & Mint </i><a href="purchase.php"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->
<!--</tr>-->
<!--<br> </br>-->
<!--<tr>-->
<!--    <td><b> 4 </b> $5.00 <i> Pineapple & Blackberry </i><a href="purchase.php"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->
<!--    <td><b> 5 </b> $5.00 <i> Papaya & Blueberries </i><a href="purchase.php"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->
<!--    <td><b> 6 </b> $5.00<i> Orange & Blueberries </i><a href="purchase.php"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->
<!--</tr>-->
<!--<br> </br>-->
<!--<tr>-->
<!--    <td><b> 7</b> $5.00 <i> Strawberries & Mint </i><a href="purchase.php"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->
<!--    <td><b>8 </b> $5.00 <i>Lemon & Lime </i><a href="purchase.php"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->
<!--    <td><b>9</b>$5.00 <i> Cherry & Zucchini </i><a href="purchase.php"> <button type="button" class="btn btn-info">Buy</button> </a></td>-->

</table>
</body>

</html>