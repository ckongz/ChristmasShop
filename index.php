<?php include 'includes/header.php'; ?>

<?php
$username = "Customer"; 
$greeting = "Hello, " . $username . "! Welcome to Christmas Cookies Shop!"; 

$offer = array(
    "item" => "Christmas Cookies",
    "quantity" => 3,
    "normal_price" => 5,
    "discounted_price" => 4
); 

$usual_price = $offer["quantity"] * $offer["normal_price"]; 
$offer_price = $offer["quantity"] * $offer["discounted_price"];
$saving = $usual_price - $offer_price; 
?>

<section class="savings">
    Save $<?php echo $saving; ?>
</section>

<h1><?php echo $greeting; ?></h1>  

<h2>Special Christmas Offer!</h2>
<p>
    Buy <?php echo $offer["quantity"]; ?> packs of <?php echo $offer["item"]; ?> and get an amazing discount!
</p>

<h3>Normal Price</h3>
<p>$<?php echo $usual_price; ?></p>

<h3>Special Price</h3>
<p>$<?php echo $offer_price; ?></p> 

<h2>About Our Christmas Cookies:</h2>
<ul>
    <li>Santa-shaped sugar cookies</li>
    <li>Christmas tree gingerbread</li>
    <li>Snowman shortbread</li>
    <li>Star-shaped cinnamon cookies</li>
</ul>

<img src="img/cookies-1.jpg" alt="Christmas Cookies">

<?php include 'includes/footer.php'; ?>
