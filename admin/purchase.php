<?php include('common.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h3 {
            color: #333;
        }

        .dscrep {
            padding-top: 2px;
            text-transform: capitalize;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            max-width: 190px;
        }
    </style>
</head>

<body>

    <div class="content_admin">
        <div class="right">
            <div class="icons-profile-photo">
                <img src="assets/images/866781-fotor-bg-remover-2024022795950.png" alt="profile not found">
            </div>
            <div class="admin_name">
                <p style="font-size: 30px;"><?php echo $row['firstname']; ?></p>
            </div>
            <div class="dashboard">
                <a href="home.php">
                    <h2>Home</h2>
                </a>
                <a href="customers.php">
                    <h2>Customers</h2>
                </a>
                <a href="all-products.php">
                    <h2>All Products</h2>
                </a>
                <a href="feedback.php">
                    <h2>feedbacks</h2>
                </a>
                <a class="active1" href="purchase.php">
                    <h2 class="Logout_admin">purchase</h2>
                </a>
                <a href="admin_info.php">
                    <h2>Setting</h2>
                </a>
            </div>
        </div>
        <div class="left">

            <h1 class="Category"> Purchase order</h1>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ecommerce";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT shopping_cart.id AS cart_id, shopping_cart.user_id, users.firstname, users.lastname, users.email, shopping_cart.image_path, shopping_cart.price, shopping_cart.quantity, shopping_cart.description
        FROM shopping_cart
        JOIN users ON shopping_cart.user_id = users.id
        ORDER BY users.id";  // Order by email to group by email

            $result = $conn->query($sql);

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
                        echo '<h3>Shopping Cart for ' . $row["email"] . '</h3>';
                        echo '<table border="1">';
                        echo '<tr>';
                        echo '<th>User ID</th>';
                        echo '<th>First Name</th>';
                        echo '<th>Last Name</th>';
                        echo '<th>Email</th>';
                        echo '<th>Image</th>';
                        echo '<th>Total Price</th>';
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
                    echo '<td class="dscrep">' . $row["description"] . '</td>';
                    echo '</tr>';
                }

                // Close the last table
                echo '</table>';
            } else {
                echo "Shopping cart is empty.";
            }

            $conn->close();
            ?>


        </div>
    </div>
</body>

<script src="assets/js/script.js"></script>

</html>