<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION["login_admin"]) || $_SESSION["login_admin"] !== true) {
    // Redirect to the login page if not logged in
    echo json_encode(["success" => false, "message" => "User not logged in"]);
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$db_user = "ecommerce";
$conn = new mysqli($servername, $username, $password, $db_user);

if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]);
    exit();
}

$admin_info = $_SESSION["admin_info"];
$admin_id = $admin_info['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $field = $_POST["field"];
    $value = $_POST["value"];

    // Implement proper validation and sanitation before updating the database
    // For simplicity, assuming the field names in the database match the ones in the form
    $sql = "UPDATE admins SET $field = ? WHERE id = ?";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $value, $admin_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Update successful"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error updating record: " . $conn->error]);
    }

    $stmt->close();
}

$conn->close();
?>
