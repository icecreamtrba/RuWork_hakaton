<?php
$db = mysqli_connect('localhost', 'f0805594_datadb', 'dddddd', 'f0805594_datadb');
$queryq = "SELECT * FROM orders ";
$result = mysqli_query($db, $queryq);

$order = mysqli_fetch_assoc($result);

$id = $order['id']; 
$order_header = $order['header'];
$accepted_order = $order['order_desc'];
$order_price = $order['price'];
$order_duration = $order['duration'];
$order_place = $order['place'];

$queryqw = "INSERT INTO `accepted_orders` (id, order_header, accepted_order_desc, order_price, order_duration, order_place) VALUE ('$id','$order_header', '$accepted_order','$order_price','$order_duration','$order_place')";
$resultqw = mysqli_query($db, $queryqw);
header('Location: profile-worker.php');

?>