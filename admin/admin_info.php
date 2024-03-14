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

    $sql = "SELECT * FROM admins WHERE id = $admin_id"; // Filter by user ID
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error in SQL query: " . $conn->error);
    }
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        // Handle the case when no rows are found
        echo "No users found";
        $conn->close();
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <style>
            .table-info {
                width: 600px;
                margin-top: 20px;
                margin-left: 20px;
                border-collapse: collapse;
                border-spacing: 0;
            }

            .title-Info {
                border-bottom: 3px solid black;
                width: 100%;
                padding: 10px;
                font-weight: 600;
                font-size: 20px;
                text-align: center;
            }

            .data-info td {
                padding: 15px;
                border-bottom: 1px solid #ddd;
                text-align: left;
            }

            .data-info:last-child {
                border-bottom: none;
            }

            .user-informations {
                width: 700px;
                background-color: #c7c2c2;
                height: 320px;
                margin-left: 100px;
                margin-top: 100px;
            }

            .Btn {
                --black: #000000;
                --ch-black: #141414;
                --eer-black: #1b1b1b;
                --night-rider: #2e2e2e;
                --white: #ffffff;
                --af-white: #f3f3f3;
                --ch-white: #e1e1e1;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                width: 45px;
                height: 45px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                position: relative;
                overflow: hidden;
                transition-duration: .3s;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
                background-color: var(--af-white);
                margin-top: 20px;

            }

            /* plus sign */
            .sign {
                width: 100%;
                transition-duration: .3s;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .sign svg {
                width: 17px;
            }

            .sign svg path {
                fill: var(--night-rider);
            }

            /* text */
            .text {
                position: absolute;
                right: 0%;
                width: 0%;
                opacity: 0;
                color: var(--night-rider);
                font-size: 1.2em;
                font-weight: 600;
                transition-duration: .3s;
            }

            /* hover effect on button width */
            .Btn:hover {
                width: 125px;
                border-radius: 5px;
                transition-duration: .3s;
            }

            .Btn:hover .sign {
                width: 30%;
                transition-duration: .3s;
                padding-left: 20px;
            }

            /* hover effect button's text */
            .Btn:hover .text {
                opacity: 1;
                width: 70%;
                transition-duration: .3s;
                padding-right: 10px;
            }

            /* button click effect*/
            .Btn:active {
                transform: translate(2px, 2px);
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
                    <a href="purchase.php">
                        <h2 class="Logout_admin">purchase</h2>
                    </a>
                    <a class="active" href="admin_info.php">
                        <h2>Setting</h2>
                    </a>
                </div>
            </div>
            <div class="left">
                <div class="user-informations">
                    <?php if ($result->num_rows > 0) { ?>
                        <table class="table-info">
                            <thead>
                                <tr>
                                    <td class="title-Info">Admin Info</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="data-info">
                                    <td>
                                        <label for="">Name : </label>
                                    </td>
                                    <td>
                                        <input type="text" name="username" value="<?php echo $row['firstname']; ?>" class="textInput">
                                    </td>
                                    <td>
                                        <button type="button" onclick="update_admin('firstname', document.getElementsByName('username')[0].value)">Update</button>
                                    </td>
                                </tr>
                                <tr class="data-info">
                                    <td>
                                        <label for="">Email :</label>
                                    </td>
                                    <td>
                                        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="textInput">
                                    </td>
                                    <td>
                                        <button type="button" onclick="update_admin('email', document.getElementsByName('email')[0].value)">Update</button>
                                    </td>
                                </tr>
                                <tr class="data-info">
                                    <td>
                                        <label for="">Password :</label>
                                    </td>
                                    <td>
                                        <input type="password" name="password" value="<?php echo $row['password']; ?>" class="textInput" id="passwordField" onclick="togglePasswordVisibility()">
                                    </td>
                                    <td>
                                        <button type="button" onclick="update_admin('password', document.getElementById('passwordField').value)">Update</button>
                                    </td>
                                </tr>
                                <script>
                                    function togglePasswordVisibility() {
                                        var passwordField = document.getElementById("passwordField");
                                        if (passwordField.type === "password") {
                                            passwordField.type = "text";
                                        } else {
                                            passwordField.type = "password";
                                        }
                                    }
                                </script>
                                <tr class="data-info">
                                    <td>
                                        <label for="">Phone :</label>
                                    </td>
                                    <td>
                                        <input type="tel" name="phone" value="<?php echo $row['phone']; ?>" class="textInput">
                                    </td>
                                    <td>
                                        <button type="button" onclick="update_admin('phone', document.getElementsByName('phone')[0].value)">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } else {
                        echo "No users found";
                    }
                    $conn->close();
                    ?>

                    <form method="post" action="">
                        <button type="submit" name="logout_admin" class="Btn" style="float: right; margin-right: 50px;">
                            <div class="sign">
                                <svg viewBox="0 0 512 512">
                                    <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                                </svg>
                            </div>
                            <div class="text">Logout</div>
                        </button>
                    </form>
                </div>
            </div>

            <script>
                function update_admin(field, value) {
                    $.ajax({
                        type: "POST",
                        url: "update_admin.php",
                        data: {
                            field: field,
                            value: value
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                alert("Update successful");
                                // Optionally, you can update the UI here, e.g., update the displayed value
                            } else {
                                alert("Update failed. " + response.message);
                            }
                        },
                        error: function() {
                            alert("Error processing the update request");
                        }
                    });
                }
            </script>
        </div>

    </body>


    </html>