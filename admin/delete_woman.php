<?php include('common.php'); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce"; // Use the 'woman' database

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    if (isset($_POST['id'], $_POST['category'])) {
        $id_to_delete = $_POST['id'];
        $category = $_POST['category'];

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $delete_query = "DELETE FROM $category WHERE id = ?";
        $stmt = $conn->prepare($delete_query);
        $stmt->bind_param("i", $id_to_delete);

        if ($stmt->execute()) {
            echo "Record with ID $id_to_delete deleted successfully";

            // Update IDs using MySQL variables for the specific table
            $update_ids_query = "SET @counter = 0";
            if ($conn->query($update_ids_query) === TRUE) {
                $update_ids_query = "UPDATE $category SET id = @counter := @counter + 1";
                if ($conn->query($update_ids_query) === TRUE) {
                    echo "IDs updated successfully";
                } else {
                    echo "Error updating IDs: " . $conn->error;
                }
            } else {
                echo "Error resetting counter: " . $conn->error;
            }

            // Redirect back to the products page
            header("Location: all-products.php");
            exit();
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        $conn->close();
    } else {
        echo "Invalid request";
    }
} else {
    echo "Invalid request method";
}
?>
