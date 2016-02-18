<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/10/16
 * Time: 4:28 PM
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
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
    <title> Infused Waters </title>
</head>

<body>
<h1> Infused Waters </h1>
</body>
<br> </br>
<big>
    <div id="navBar">
        <ul>
            <li><a  href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#register">Sign Up</a></li>
        </ul>
    </div>
</big>

<center>
<div id="bubble">
    <h3 style="color: darkpurple"> We only sale locally! Only in the city of Glendale, AZ</h3>
</div>
</center>

<center>
    <div id="bubble2">
        <h3 style="color: white"> 30% of your purchases will be donated to our local animal shelters. Every time you purchase our products you're giving a homeless animal a home</h3>
    </div>
</center>

<center>
    <div id="bubble3">
        <h3 style="color: white"> All of our drinks are organic and hand picked from the farm of California. We just opened up and we're the first ones in Arizona to open up an <b> Infused Waters</b> business. We personally hand deliver them to the front of your footstep door. Hope you enjoy our products and become part of the journey!</h3>
    </div>
</center>
</html>

<p> Infused Waters CopyRight 2016 </p>
