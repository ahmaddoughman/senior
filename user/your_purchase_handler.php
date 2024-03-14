<?php


session_start();

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user is logged in
    if (isset($_SESSION["user_info"]["id"])) {
        $user_id = $_SESSION["user_info"]["id"];

        // Extract purchaseData from the POST request
        $purchaseData = isset($_POST['purchaseData']) ? $_POST['purchaseData'] : [];

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

        // Insert each item in purchaseData into shopping_cart table
        foreach ($purchaseData as $item) {
            $image_path = $item['image_path'];
            $price = $item['price'];
            $quantity = $item['quantity'];
            $description = $item['description'];

            // Insert data into shopping_cart table
            $sql = "INSERT INTO shopping_cart (user_id, image_path, price, quantity, description) VALUES ('$user_id', '$image_path', '$price', '$quantity', '$description')";

            if ($conn->query($sql) !== TRUE) {
                // Purchase failed for an item
                $response = array("success" => false, "message" => "Purchase failed for an item: " . $conn->error);
                break;
            }
        }

        if (!isset($response)) {
            // All items inserted successfully
            $response = array("success" => true, "message" => "Purchase successful!");
        }

        // Close the database connection
        $conn->close();
    } else {
        // User not logged in
        $response = array("success" => false, "message" => "User not logged in.");
    }
} else {
    // Invalid request method
    $response = array("success" => false, "message" => "Invalid request method.");
}

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>

