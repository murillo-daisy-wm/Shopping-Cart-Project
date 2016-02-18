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
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=' . $name, 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if($_GET['id']){
    $stmt = $dbh->prepare("select * from products where id=:id");
    $stmt->execute(array('id'=>$_GET['id']));
    $results = $stmt->fetchAll();

    if(count($results)){
        $_SESSION['cart'][] = $results[0];
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
    <link rel="stylesheet" type="text/css" href="cart.css">
    <title> Infused Waters </title>
</head>

<body>
<h1> Cart</h1>

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
<?php
if(count($_SESSION['cart'])) {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        ?>
        <li><?php echo $item['name']; ?></li>
        <?php
    }
    echo "</ul>";
}
?>
    <?php
    session_start();
    $con = mysql_connect("localhost","root","");
    mysql_select_db("uloaku", $con);
    $id = $_GET['id'];
    $sql = mysql_query("DELETE FROM products WHERE id='$id' LIMIT 1") or die   (mysql_error());
    header("Location: vacct.php");
    ?>


</form>

<p> Infused Waters CopyRight 2016 </p>
</body>
</html>
