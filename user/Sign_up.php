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
        
            $sql = "SELECT * from users where email ='{$email}'";
            $result = $conn->query($sql);

            if (mysqli_num_rows($result) > 0) {
                echo '<script>showSweetAlert("Email already Exists. Try again");</script>';
            }
            
            else{
                $insertQuery = $conn->prepare("INSERT INTO users (firstname, lastname, phone, email, password)
                                           VALUES (?, ?, ?, ?, ?)");
                $insertQuery->bind_param("ssiss", $firstname, $lastname, $phone, $email, $userPassword);
            
                if ($insertQuery->execute()) {
                    echo '<script>showSweetAlert1("New record inserted successfully", "success");</script>';
                } else {
                    echo '<script>showSweetAlert1("Error inserting record: ' . $conn->error . '", "error");</script>';
                }                
            
                $insertQuery->close();
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
            <li><a href="Log_In.php">Log in</a></li>
        </ul>
        <div class="icons">
            <div><a href="card.php"><img src="assets/images/logo/cart.png" alt="cart not found"></a></div>
            <div class="icons-profile"><a href="user-info.php"><img src="assets/images/logo/profile.png"
                        alt="profile not found"></a></div>
        </div>
    </header>
    <div class="content-Signup">
        <h1>Register Now.</h1>
        <p class="p1">Welcome! Please enter your <br>details below to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
            <input type="tel" name="phone" id="phone" placeholder="Phone" required>
            <input type="email" name="email" id="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.(com|net)$">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Sign up</button>
        </form>
        <p>have an account !<span><a href="Log_In.php" class="Log_In">Log In</a></span></p>
    </div>
</body>

</html>