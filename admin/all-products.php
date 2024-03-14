<?php include('common.php'); ?>
<?php
// Check if there's a notification message in the URL
if (isset($_GET['notification'])) {
    $notification_message = urldecode($_GET['notification']);
    echo '<div id="notification" class="notification show-notification">' . htmlspecialchars($notification_message) . '</div>';
}
?>
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

        table {
            margin-left: 20px;
            border-collapse: collapse;
            width: 90%;
            margin-bottom: 40px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 15px;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-btn {
            display: inline-block;
            width: 60px;
            height: 30px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .updates-btn {
            margin-top: 10px;
        }

        .delete-btn:hover {
            background-color: #0056b3;
        }

        .update_delete {
            display: flex;
            justify-content: space-around;
        }

        .img_view {
            text-align: center;
        }

        .img_view img {
            width: 50px;
        }



        .bin-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background-color: rgb(255, 95, 95);
            cursor: pointer;
            border: 2px solid rgb(255, 201, 201);
            transition-duration: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .bin-bottom {
            width: 15px;
            z-index: 2;
        }

        .bin-top {
            width: 17px;
            transform-origin: right;
            transition-duration: 0.3s;
            z-index: 2;
        }

        .bin-button:hover .bin-top {
            transform: rotate(45deg);
        }

        .bin-button:hover {
            background-color: rgb(255, 0, 0);
        }

        .bin-button:active {
            transform: scale(0.9);
        }

        .garbage {
            position: absolute;
            width: 14px;
            height: auto;
            z-index: 1;
            opacity: 0;
            transition: all 0.3s;
        }

        .bin-button:hover .garbage {
            animation: throw 0.4s linear;
        }

        @keyframes throw {
            from {
                transform: translate(-400%, -700%);
                opacity: 0;
            }

            to {
                transform: translate(0%, 0%);
                opacity: 1;
            }
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
                <a class="active" href="all-products.php">
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
            <h1 class="Category">Products</h1>


            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "ecommerce";

            $conn = new mysqli($servername, $username, $password);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            function displayProducts($conn, $db_name, $category)
            {
                mysqli_select_db($conn, $db_name);
                $sql = "SELECT id, image_path, price, LEFT(description, 50) AS truncated_desc FROM $category";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<caption style='font-size: 30px;'>$db_name - $category Products</caption>";
                    echo "<tr><th>ID</th><th>Image</th><th>Price</th><th>Description</th><th>Action</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . "<div class='img_view'> <img src='../user/assets/images/" . $row['image_path'] . "' alt='Product Image'> </div>" . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td style='max-width: 300px; overflow: hidden; text-overflow: ellipsis;' title='" . $row['truncated_desc'] . "'>" . $row['truncated_desc'] . "</td>";
                        echo "<td>
                                    <div class='update_delete'>";

                        if ($category === 'man_tshirts' || $category === 'man_jeans' || $category === 'man_shoes' || $category === 'man_suits') {
                            echo "<form method='post' action='update_man.php'>";
                        } elseif ($category === 'woman_tshirts' || $category === 'woman_jeans' || $category === 'woman_shoes' || $category === 'woman_dress') {
                            echo "<form method='post' action='update_woman.php'>";
                        } elseif ($category === 'kids_tshirts' || $category === 'kids_jeans' || $category === 'kids_shoes' || $category === 'kids_pajamas') {
                            echo "<form method='post' action='update_kids.php'>";
                        }
                        echo "
                                                <input type='hidden' name='id' value='" . $row['id'] . "'>
                                                <input type='hidden' name='category' value='$category'>
                                                <input type='submit' class='delete-btn updates-btn' name='update' value='Update'>
                                            </form>";


                                            if ($category === 'man_tshirts' || $category === 'man_jeans' || $category === 'man_shoes' || $category === 'man_suits') {
                            echo "<form method='post' action='delete_user.php'>";
                        } elseif ($category === 'woman_tshirts' || $category === 'woman_jeans' || $category === 'woman_shoes' || $category === 'woman_dress') {
                            echo "<form method='post' action='delete_woman.php'>";
                        } elseif ($category === 'kids_tshirts' || $category === 'kids_jeans' || $category === 'kids_shoes' || $category === 'kids_pajamas') {
                            echo "<form method='post' action='delete_kids.php'>";
                        }

                        echo "
                                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                                            <input type='hidden' name='category' value='$category'>
                                            <button type='submit' class='delete-btn bin-button' name='delete'>
                                                <svg
                                                xmlns='http://www.w3.org/2000/svg'
                                                fill='none'
                                                viewBox='0 0 39 7'
                                                class='bin-top'
                                                >
                                                <line stroke-width='4' stroke='white' y2='5' x2='39' y1='5'></line>
                                                <line
                                                    stroke-width='3'
                                                    stroke='white'
                                                    y2='1.5'
                                                    x2='26.0357'
                                                    y1='1.5'
                                                    x1='12'
                                                ></line>
                                                </svg>
                                                <svg
                                                xmlns='http://www.w3.org/2000/svg'
                                                fill='none'
                                                viewBox='0 0 33 39'
                                                class='bin-bottom'
                                                >
                                                <mask fill='white' id='path-1-inside-1_8_19'>
                                                    <path
                                                    d='M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z'
                                                    ></path>
                                                </mask>
                                                <path
                                                    mask='url(#path-1-inside-1_8_19)'
                                                    fill='white'
                                                    d='M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z'
                                                ></path>
                                                <path stroke-width='4' stroke='white' d='M12 6L12 29'></path>
                                                <path stroke-width='4' stroke='white' d='M21 6V29'></path>
                                                </svg>
                                                <svg
                                                xmlns='http://www.w3.org/2000/svg'
                                                fill='none'
                                                viewBox='0 0 89 80'
                                                class='garbage'
                                                >
                                                <path
                                                    fill='white'
                                                    d='M20.5 10.5L37.5 15.5L42.5 11.5L51.5 12.5L68.75 0L72 11.5L79.5 12.5H88.5L87 22L68.75 31.5L75.5066 25L86 26L87 35.5L77.5 48L70.5 49.5L80 50L77.5 71.5L63.5 58.5L53.5 68.5L65.5 70.5L45.5 73L35.5 79.5L28 67L16 63L12 51.5L0 48L16 25L22.5 17L20.5 10.5Z'
                                                ></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No products found";
                }
            }

            displayProducts($conn, $db_name, "man_tshirts");
            displayProducts($conn, $db_name, "man_jeans");
            displayProducts($conn, $db_name, "man_shoes");
            displayProducts($conn, $db_name, "man_suits");

            displayProducts($conn, $db_name, "woman_tshirts");
            displayProducts($conn, $db_name, "woman_jeans");
            displayProducts($conn, $db_name, "woman_shoes");
            displayProducts($conn, $db_name, "woman_dress");

            displayProducts($conn, $db_name, "kids_tshirts");
            displayProducts($conn, $db_name, "kids_jeans");
            displayProducts($conn, $db_name, "kids_shoes");
            displayProducts($conn, $db_name, "kids_pajamas");

            $conn->close();

            ?>
        </div>
    </div>


    <script>
        // Hide the notification after 3 seconds
        setTimeout(function() {
            var notification = document.getElementById('notification');
            if (notification) {
                notification.style.display = 'none';
            }
        }, 3000);
    </script>
</body>

</html>