<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_info"]["id"])) {
    // Redirect to login page or handle the case where the user is not logged in
    header("Location: Log_In.php");
    exit();
}

// Connect to your database (replace these with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch shopping cart items with user details for all users who have items in the cart
$sql = "SELECT shopping_cart.id AS cart_id, shopping_cart.user_id, users.firstname, users.lastname, users.email, shopping_cart.image_path, shopping_cart.price, shopping_cart.description
        FROM shopping_cart
        JOIN users ON shopping_cart.user_id = users.id";

$result = $conn->query($sql);

// Check if there are items in the shopping cart
if ($result->num_rows > 0) {    
    $currentEmail = null;

    while ($row = $result->fetch_assoc()) {
        // Check if the email has changed
        if ($row["email"] !== $currentEmail) {
            // If it has, close the previous table (if any) and start a new one
            if ($currentEmail !== null) {
                echo '</table>';
            }

            // Output the header for the new table
            echo '<h2>Shopping Cart for ' . $row["email"] . '</h2>';
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>User ID</th>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Email</th>';
            echo '<th>Image</th>';
            echo '<th>Price</th>';
            echo '<th>Quantity</th>';
            echo '<th>Description</th>';
            echo '</tr>';

            $currentEmail = $row["email"];
        }

        // Output the data for the current row
        echo '<tr>';
        echo '<td>' . $row["user_id"] . '</td>';
        echo '<td>' . $row["firstname"] . '</td>';
        echo '<td>' . $row["lastname"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td><img src="' . $row["image_path"] . '" alt="Product Image" style="width: 50px; height: 50px;"></td>';
        echo '<td>' . $row["price"] . '</td>';
        echo '<td>' . $row["quantity"] . '</td>';
        echo '<td>' . $row["description"] . '</td>';
        echo '</tr>';
    }

    // Close the last table
    echo '</table>';
} else {
    echo "Shopping cart is empty.";
}

// Close the database connection
$conn->close();
?>
<style>
    
table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

h2 {
    color: #333;
}
</style>