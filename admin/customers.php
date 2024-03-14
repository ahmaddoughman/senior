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
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_user = "ecommerce";

    $conn = new mysqli($servername, $username, $password, $db_user);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    ?>


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
                <a class="active" href="customers.php">
                    <h2>Customers</h2>
                </a>
                <a href="all-products.php">
                    <h2>All Products</h2>
                </a>
                <a href="feedback.php">
                    <h2>feedbacks</h2>
                </a>
                <a href="purchase.php">
                    <h2 class="Logout_admin">purchase</h2>
                </a>
                <a href="admin_info.php">
                    <h2>Setting</h2>
                </a>
            </div>
        </div>
        <div class="left">
            <div class="content-customers">
                <h1>Customer List</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["firstname"] . "</td>";
                                echo "<td>" . $row["lastname"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["password"] . "</td>";
                                echo "<td>" . $row["phone"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No customers found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <?php
            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>