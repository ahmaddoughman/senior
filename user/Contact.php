<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
</head>

<body>
    <header class="menu-bar">
        <div class="logo"><img src="assets/images/logo/logo.png" alt="logo not found"></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="Shop.php">Shop <img class="arrow" src="assets/images/logo/arrow.png" alt="arrow" width="15px">
                </a>
                <div class="dropdown-list">
                    <ul>
                        <li><a href="Man.php">Man</a></li>
                        <li><a href="Woman.php">Women</a></li>
                        <li><a href="kids.php">Kids</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="About.php">About</a></li>
            <li><a class="active" href="Contact.php">Contact</a></li>
            <li><a href="Log_In.php">Log in</a></li>
        </ul>
        <div class="icons">
            <div><a href="card.php"><img src="assets/images/logo/cart.png" alt="cart not found"></a></div>
            <div class="icons-profile"><a href="user-info.php"><img src="assets/images/logo/profile.png" alt="profile not found"></a></div>
        </div>
    </header>

    <div class="content-Contact">
        <div class="left-Contact">
            <h1>Lets Get In Touch</h1>
            <p>Thanks you for reaching out to us! We value your feedback and inquires.
                Please provide your contact details and message below, and we will get
                back to you promptly. Feel free to include any relevant information to
                assist us in addressing your needs effectively.</p>
            <div class="iconbefore-contect">
                <img src="assets/images/iconmail.png" alt="" width="10px">
                <p>amd040@live.aul.edu.lb</p>
            </div>
            <div class="iconbefore-contect">
                <img src="assets/images/iconphone.png" alt="">
                <p>+96171653043</p>
            </div>
            <div class="iconbefore-contect">
                <img src="assets/images/iconmap.png" alt="">
                <p>Beirut</p>
            </div>
            <h3>contacts with us:</h3>
            <div class="iconbefore1-contect">
                <img src="assets/images/iconwhatsup.png" alt="">
                <img src="assets/images/icongithub.png" alt="">
                <img src="assets/images/iconfacebook.png" alt="">
                <img src="assets/images/iconinstagram.png" alt="">
            </div>
        </div>


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
            $email = $_POST["email"];
            $firstname = $_POST["firstname"];

            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            if ($result === false) {
                echo '<script>showSweetAlert1("Error in query: ' . $conn->error . '", "error");</script>';
            } else {
                if ($result->num_rows > 0) {
                    if ($firstname == $row["firstname"]) {
                        $_SESSION["contact"] = true;
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["feedback"] = $row; // Store user information in session

                        $feedback = $_POST["feedback"];

                        $updateQuery = $conn->prepare("UPDATE users SET feedback = ? WHERE id = ?");
                        $updateQuery->bind_param("si", $feedback, $row["id"]);

                        if ($updateQuery->execute()) {
                            echo '<script>showSweetAlert1("Message sent successfully", "success");</script>';
                        } else {
                            echo '<script>showSweetAlert1("Problem sending message: ' . $conn->error . '", "error");</script>';
                        }

                        $updateQuery->close();
                    } else {
                        echo '<script>showSweetAlert1("Name is incorrect", "error");</script>';
                    }
                } else {
                    echo '<script>showSweetAlert1("Email is incorrect", "error");</script>';
                }
            }

            $stmt->close();
        }

        $conn->close();
        ?>


        <div class="right-Contact">
            <h1>Contact Us</h1>
            <form action="" method="post">
                <div>
                    <input type="text" name="firstname" id="name" placeholder="Name" required>
                </div>
                <div>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>

                <div>
                    <textarea name="feedback" id="text-sub" cols="59" rows="8" placeholder="Subject" required></textarea>
                </div>
                <button type="submit" name="submit">send</button>
            </form>
        </div>
    </div>

    <?php include("footer.php")?>
</body>

</html>