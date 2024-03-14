<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>

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
    <style>
        .content-Signup {
            width: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 30px auto;
            height: 560px;
            background-color: burlywood;

        }

        .content-Signup h1 {
            padding-top: 30px;
        }

        .content-Signup .p1 {
            color: #747171;
            padding-bottom: -20px;
        }

        .content-Signup form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .content-Signup form input {
            width: 450px;
            height: 35px;
            padding-left: 8px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
        }

        .content-Signup form input:focus {
            height: 43px;
        }

        .content-Signup form button {
            width: 450px;
            height: 40px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            background-color: green;
        }

        .content-Signup a {
            text-decoration: none;
        }

        .content-Signup .Log_In {
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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_user = "ecommerce";

    $conn = new mysqli($servername, $username, $password, $db_user);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $userPassword = $_POST["password"];

        
        $selectQuery = $conn->prepare("SELECT * FROM admins WHERE email = ?");
        $selectQuery->bind_param("s", $email);
        $selectQuery->execute();
        $result = $selectQuery->get_result();

        if ($result->num_rows > 0) {
            echo '<script>showSweetAlert("Email already Exists. Try again");</script>';
        } else {
            
            $insertQuery = $conn->prepare("INSERT INTO admins (firstname, lastname, phone, email, password) VALUES (?, ?, ?, ?, ?)");
            $insertQuery->bind_param("ssiss", $firstname, $lastname, $phone, $email, $userPassword);

            if ($insertQuery->execute()) {
                echo '<script>showSweetAlert1("New record inserted successfully", "success");</script>';
            } else {
                echo '<script>showSweetAlert1("Error inserting record: ' . $conn->error . '", "error");</script>';
            }

            $insertQuery->close();
        }

        $selectQuery->close();
    }

    $conn->close();

    ?>


    <div class="content-Signup">
        <h1>Register Now.</h1>
        <p class="p1">Welcome! Please enter your <br>details below to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
            <input type="tel" name="phone" id="phone" placeholder="Phone" required>
            <input type="email" name="email" id="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Sign up</button>
        </form>
        <p>have an account !<span><a href="index.php" class="Log_In">Log In</a></span></p>
    </div>

</body>

</html>