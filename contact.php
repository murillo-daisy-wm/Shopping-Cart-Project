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
    <link rel="stylesheet" type="text/css" href="contact.css">


</head>
<body>

<h1> Contact Us</h1>
<div id="navBar">
    <ul>
        <li><a  href="home.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="register.php">Sign Up</a></li>
    </ul>
</div>

<center>
    <div id="bubble">
        <h3 style="color: white"> InfusedWaters@gmail.com <br> </br> 604-574-9021 <br></br> Office Hours: 8am-8pm</h3>
    </div>
</center>

</body>

</html>
<p>Infused Waters CopyRight 2016</p>