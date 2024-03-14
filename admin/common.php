<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["login_admin"]) || $_SESSION["login_admin"] !== true || !isset($_SESSION["admin_info"])) {
    // Redirect to the login page if not logged in
    header("Location: index.php");
    exit();
}

$admin_info = $_SESSION["admin_info"];

$servername = "localhost";
$username = "root";
$password = "";
$db_user = "ecommerce";
$conn = new mysqli($servername, $username, $password, $db_user);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle logout action
if (isset($_POST["logout_admin"])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: index.php"); // Redirect to the login page after logout
    exit();
}

$admin_id = $admin_info['id']; // Assuming 'id' is the column name for user ID in your 'users' table

$stmt = $conn->prepare("SELECT * FROM admins WHERE id = ?");
$stmt->bind_param("i", $admin_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    // Handle the case when no rows are found
    echo "No users found";
    $stmt->close();
    $conn->close();
    exit();
}

$stmt->close();
$conn->close();
?>
