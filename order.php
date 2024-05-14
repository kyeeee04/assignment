<?php
session_start();

// Define variables and initialize with empty values
$name = $telephone = $address = $verification_code = "";
$name_err = $telephone_err = $address_err = $verification_err = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
        $name_err = "Name can only contain letters and white spaces.";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate telephone
    if (empty(trim($_POST["telephone"]))) {
        $telephone_err = "Please enter your telephone number.";
    } elseif (!preg_match("/^\d{3}-\d{3}-\d{4}$/", $_POST["telephone"])) {
        $telephone_err = "Telephone number must be in the format xxx-xxx-xxxx.";
    } else {
        $telephone = trim($_POST["telephone"]);
    }

    // Validate address
    if (empty(trim($_POST["address"]))) {
        $address_err = "Please enter your address.";
    } else {
        $address = trim($_POST["address"]);
    }

    // Validate verification code
    if (empty(trim($_POST["verification_code"]))) {
        $verification_err = "Please enter the verification code.";
    } elseif ($_POST["verification_code"] !== $_SESSION["verification_code"]) {
        $verification_err = "The verification code you entered is incorrect.";
    } else {
        $verification_code = trim($_POST["verification_code"]);
    }

    // If there are no errors, proceed to translation.php
    if (empty($name_err) && empty($telephone_err) && empty($address_err) && empty($verification_err)) {
        // Redirect to translation.php or perform further processing
        $_SESSION['name'] = $name; // Store name in session for later use
        $_SESSION['telephone'] = $telephone; // Store telephone in session for later use
        $_SESSION['address'] = $address; // Store address in session for later use
        header("Location: translation.php");
        exit;
    }
}

// Retrieve order details and total price if cart session exists
if (isset($_SESSION["cart_item"]) && !empty($_SESSION["cart_item"])) {
    // Retrieve order details and calculate total price
    // You can fetch these details from the session variables or database

    // Example: Retrieving order details from session variables
    $cartItems = $_SESSION["cart_item"];

    // Calculate total price
    $total_price = 0;
    foreach ($cartItems as $item) {
        $total_price += $item["quantity"] * $item["price"];
    }
} else {
    // Handle the case where the cart is empty
    // Redirect the user back to the shopping page or display a message
    header("Location: cart.php");
    exit;
}

// Generate a random 6-digit alphanumeric code for verification
$verification_code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
// Store the code in the session for validation
$_SESSION["verification_code"] = $verification_code;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- Add any necessary CSS stylesheets -->
</head>
<body>
<div class="orderdetails">
    <h2>Order Details</h2>
    <table class="order-table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo $item["quantity"]; ?></td>
                    <td><?php echo "$" . $item["price"]; ?></td>
                    <td><?php echo "$" . ($item["quantity"] * $item["price"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total:</td>
                <td><?php echo "$" . $total_price; ?></td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="userdetails">
    <h2>Enter Your Details</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="input-text"  value="<?php echo htmlspecialchars($name); ?>">
        <span class="error"><?php echo $name_err; ?></span><br>

        <label for="telephone">Telephone:</label>
        <input type="tel" id="telephone" name="telephone" class="input-text"  value="<?php echo htmlspecialchars($telephone); ?>">
        <span class="error"><?php echo $telephone_err; ?></span><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" class="input-text" ><?php echo htmlspecialchars($address); ?></textarea>
        <span class="error"><?php echo $address_err; ?></span><br>

        <!-- Add custom "not a robot" verification -->
        <div class="verification">
            <label for="verification_code">Enter the code:</label><br>
            <strong><?php echo $verification_code; ?></strong><br>
            <input type="text" id="verification_code" name="verification_code" class="input-text" >
            <span class="error"><?php echo $verification_err; ?></span>
        </div>

        <input type="submit" class="submit-button" value="Proceed to Payment">
        <!-- Back button to cart.php -->
        <div class="back-button">
            <a href="cart.php">Back</a>
        </div>
    </form>
</div>

<!-- Add any necessary JavaScript scripts -->
</body>
</html>
