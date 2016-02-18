<?php
session_start();
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
<h1>  Frequently Asked Question </h1>
</body>
<br> </br>
<big>
    <div id="navBar">
        <ul>
            <li><a  href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="register.php">Sign Up</a></li>
        </ul>
    </div>
</big>

<center>
    <div id="bubble">
        <h3 style="color: darkpurple"> We're a brand new business in the state! We were established January of 2016. </h3>
    </div>
</center>

<center>
    <div id="bubble2">
        <h3 style="color: white"> 30% of your purchases will be donated to our local animal shelters. Every time you purchase our products you're giving a homeless animal a home</h3>
    </div>
</center>

<center>

    <div id="bubble3">
        <h3 style="color: white"> FAQS <br></br> 1. <b> Are the ingredients organic?</b> Yes! They are! All of our drinks are made organically that's why the prices might be a little bit pricy.<br>2.<b> Do you deliver outside of Glendale, AZ? </b> No, because we are only located in Glendale, AZ right now. <br>
        3. <b> Can we customize our drinks?</b> No, as of right now you cannot because we only have a certain number of ingredients to use since we have limited funding.</h3>
    </div>
</center>

</html>

<p> Infused Waters CopyRight 2016 </p>
