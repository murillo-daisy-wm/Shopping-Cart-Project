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
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=' .$name, 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
print_r($_POST);
if(@$_POST['submit'] == "Submit")
{
    print_r($_POST);
    $errorMessage = "";
    if(empty($_POST['firstName']))
    {
        $errorMessage = "<li>You forgot to enter your first name.</li>";
    }
    if(empty($_POST['lastName']))
    {
        $errorMessage = "<li>You forgot to enter your last name.</li>";
    }
    if(empty($_POST['email']))
    {
        $errorMessage = "<li>You forgot to enter your email</li>";
    }
    if(empty($_POST['password']))
    {
        $errorMessage = "<li>You forgot to enter an address</li>";
    }

//        $varfirstName = $_POST['fName'];
//        $varlastName = $_POST['lName'];
//        $varuserName = $_POST['user'];
//        $varpassword = $_POST['password'];
//        $varaddress = $_POST['address'];
//        $varcity = $_POST['city'];
//        $varstate = $_POST['state'];
//        $varzip = $_POST['zip'];
//        $varapt = $_POST['apt'];
    $stmt = $dbh->prepare("INSERT INTO Infused_Waters.users(firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
    $result = $stmt->execute(array($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password']));
    if(!$result){
        print_r($dbh->errorInfo());
    }
    if(!empty($errorMessage))
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }
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
<h1> Sign Up</h1>

<br> </br>
<big>
    <div id="navBar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="register.php">Sign Up</a></li>
        </ul>
    </div>
</big>
<form>
    <input type="text" name="firstName" value="First Name">
    <br></br>
    <input type="text" name="lastName" value="Last Name">
    <br></br>
    <input type="text" name="email" value="email">
    <br></br>
    <input type="text" name="password" value="password">
    <br></br>
    <button type="button" class="btn btn-danger" value="submit">Submit</button>
</form>
</body>
</html>

<p> Infused Waters CopyRight 2016 </p>
