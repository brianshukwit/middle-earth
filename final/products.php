<?php
// connect to database
include 'config/database.php';
 
// include objects
include_once "objects/product.php";
include_once "objects/product_image.php";
include_once "objects/cart_item.php";


// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$product = new Product($db);
$product_image = new ProductImage($db);
$cart_item = new CartItem($db);

// set page title
$page_title="Shop Books";
 
// page header html
include 'layout_head.php';

session_start(); // start session

// do check
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit; // prevent further execution, should there be more code that follows
}

// content
$stmt = $product->read(0,10);
include_once "read_products_template.php";

// layout footer code
include 'layout_foot.php';

echo  "<p>{$products}</p>";
?>

