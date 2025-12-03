<?php include 'includes/header.php'; ?>
<?php
$name = "Cookie Lover";
$greeting = "Hello";
if ($name) {
$greeting = "Hello, " . $name . "!";
}
$product = "Christmas Cookies";
$cost = 10;
$totals = array();
for ($counter = 1; $counter <= 15; $counter++) {
$subtotal = $cost * $counter;
$discount = ($cost / 100) * ($counter * 4);
$totals[$counter] = $subtotal - $discount;
}
?>

<h1><?php echo $greeting; ?></h1>
<h2>Our Product: <?php echo $product; ?></h2>
<p>Buy more, save more! Get 4% discount per pack when buying multiple packs!</p>
<p>Price for 1 pack: $<?php echo $cost; ?></p>
<table>
    <tr>
        <th>Quantity</th>
        <th>Price with Discount</th>
        <th>Discount Per Pack</th>
    </tr>
    <?php
    foreach ($totals as $quantity => $price) {
        $discount_percentage = $quantity * 4;
        ?>   
        <tr>
            <td><?php echo $quantity; ?>
            pack<?php echo ($quantity == 1) ? '' : 's'; ?>
        </td>
        <td class="discount">$<?php echo number_format($price, 2); ?></td>
        <td><?php echo $discount_percentage; ?>% off</td>
    </tr>
    <?php
    }
    ?>
</table>

<h2>Our Christmas Cookie Varieties:</h2>
<ul>
    <li>Gingerbread Cookies - $<?php echo $cost; ?>/pack</li>
    <li>Snowflake Sugar Cookies - $<?php echo $cost; ?>/pack</li>
    <li>Santa Claus Cookies - $<?php echo $cost; ?>/pack</li>
    <li>Christmas Tree Cookies - $<?php echo $cost; ?>/pack</li>
    <li>Bell-shaped Cookies - $<?php echo $cost; ?>/pack</li>
</ul>

<img src="img/cookies-3.jpg" alt="Christmas Cookies">

<?php include 'includes/footer.php'; ?>
