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

    if(isset($_POST["submit"])){
        $email_user = $_POST["email_user"];
        $password_user = $_POST["password_user"];
        
        $sql = "SELECT * from users where email ='{$email_user}'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            if($password_user == $row["password"]){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                $_SESSION["user_info"] = $row; // Store user information in session

                echo '<script>showSweetAlert1("login confirm successfully", "success");
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 2000); 
                </script>';
            } else {
                echo '<script>showSweetAlert1("password are incorrect: ' . $conn->error . '", "error");</script>';
            }
        } else {
            echo '<script>showSweetAlert1("Email are incorrect: ' . $conn->error . '", "error");</script>';
        }
    }

    $conn->close();
?>



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
                <li><a href="Contact.php">Contact</a></li>
                <li><a class="active" href="Log_In.php">Log in</a></li>
            </ul>
            <div class="icons">
                <div><a href="card.php"><img src="assets/images/logo/cart.png" alt="cart not found"></a></div>
                <div class="icons-profile"><a href="user-info.php"><img src="assets/images/logo/profile.png"
                            alt="profile not found"></a></div>
            </div>
        </header>
        <div class="content-Login">
            <h1>Sign In.</h1>
            <p class="p1">Welcome! Please enter your <br>details below to create an account.</p>
            <form action="" method="post">
                <input type="email" name="email_user" id="email" placeholder="Email" required>
                <input type="password" name="password_user" id="password" placeholder="Password" required>
                <button type="submit" name="submit">Log In</button>
            </form>
            <p>don't have an account ! <span><a href="Sign_up.php" class="Sign_up">Sign Up</a></span></p>
        </div>
    </body>

    </html> 