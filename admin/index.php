<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showSweetAlert1(message, icon) {
            Swal.fire({
                icon: icon,
                title: 'Notification',
                text: message,
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showSweetAlert(message) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message,
            });
        }
    </script>
    <style>
        .content-Login {
            width: 600px;
            margin: 70px auto;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: burlywood;

            gap: 25px;
        }

        .content-Login h1 {
            padding-top: 10px;
        }

        .content-Login .p1 {
            color: #747171;
            text-align: center;
        }

        .content-Login form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .content-Login form input {
            width: 450px;
            height: 35px;
            padding-left: 8px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
        }

        .content-Login form input:focus {
            height: 43px;
        }

        .content-Login form button {
            width: 450px;
            height: 40px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            background-color: green;
        }

        .content-Login a {
            text-decoration: none;
        }

        .content-Login .Sign_up {
            color: green;
            border-bottom: 1px solid green;
            font-size: 18px;
            margin-left: 5px;
            padding-bottom: 3px;
        }
    </style>
</head>

<body>

    <?php
    session_start(); // Start the session

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_user = "ecommerce";
    $conn = new mysqli($servername, $username, $password, $db_user);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["submit"])) {
        $email_user = $_POST["email_user"];
        $password_user = $_POST["password_user"];

        $sql = "SELECT * from admins where email ='{$email_user}'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password_user == $row["password"]) {
                $_SESSION["login_admin"] = true;
                $_SESSION["id"] = $row["id"];
                $_SESSION["admin_info"] = $row; // Store user information in session

                echo '<script>
                    showSweetAlert1("login confirm successfully", "success");
                    setTimeout(function() {
                        window.location.href = "home.php";
                    }, 3000); 
                  </script>';
                exit();
            } else {
                echo '<script>showSweetAlert1("password are incorrect: ' . $conn->error . '", "error");</script>';
            }
        } else {
            echo '<script>showSweetAlert1("Email are incorrect: ' . $conn->error . '", "error");</script>';
        }
    }

    $conn->close();
    ?>


    <div class="content-Login">
        <h1>Register Now.</h1>
        <p class="p1">Welcome! Please enter your <br>details below to create an account.</p>
        <form action="" method="post">
            <input type="email" name="email_user" id="email" placeholder="Email" required>
            <input type="password" name="password_user" id="password" placeholder="Password" required>
            <button type="submit" name="submit">Log In</button>
        </form>
        <p>don't have an account ! <span><a href="Sign_up_admin.php" class="Sign_up">Sign Up</a></span></p>
    </div>
</body>

</html>