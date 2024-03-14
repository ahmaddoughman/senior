<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Style for the notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            display: none;
            /* Initially hidden */
            z-index: 9999;
        }

        .show-notification {
            display: block;
            animation: fadeOut 1s ease-in-out;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_man = "ecommerce";

    $conn = new mysqli($servername, $username, $password, $db_man);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $category = $_POST['category'];


            switch ($category) {
                case "kids_tshirts":
                    $table = "kids_tshirts";
                    break;
                case "kids_shoes":
                    $table = "kids_shoes";
                    break;
                case "kids_pajamas":
                    $table = "kids_pajamas";
                    break;
                case "kids_jeans":
                    $table = "kids_jeans";
                    break;
                default:
                    echo "Invalid category";
                    exit;
            }

            $sql = "SELECT * FROM $table WHERE id='$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $price = $row['price'];
                $description = $row['description'];
                echo "<div class ='container_update'>";
                echo "<div id='back_arrows'>
                        <a href='all-products.php'><img src='../user/assets/images/logo/back-arrow.png'> </a>
                  </div>";
                echo "<h2 class ='h2title'>Update Kids Product</h2>";
                echo "<form method='post' action=''>";
                echo "Price: <input type='text' name='new_price' value='$price'><br><br>";
                echo "Description: <textarea name='new_description' class ='new_description'>$description</textarea><br><br>";
                echo "<input type='hidden' name='id' value='$id'>";
                echo "<input type='hidden' name='category' value='$category'>";
                echo "<input type='submit' name='update_product' value='Update'>";
                echo "</form>";
                echo  "</div>";
            } else {
                echo "Product not found";
            }
        } elseif (isset($_POST['update_product'])) {
            $id = $_POST['id'];
            $category = $_POST['category'];
            $newPrice = $_POST['new_price'];
            $newDescription = $_POST['new_description'];


            $update_query = "UPDATE $category SET price='$newPrice', description='$newDescription' WHERE id='$id'";

            if ($conn->query($update_query) === TRUE) {

                $notification_message = 'Record updated successfully';
                header('Refresh: 1; URL=all-products.php?notification=' . urlencode($notification_message));
                exit();
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }

    $conn->close();
    ?>
</body>

</html>