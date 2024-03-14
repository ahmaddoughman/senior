<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="assets/js/script.js" defer></script>
    <style>
        .a {
            text-decoration: none;
            color: white;
            font-size: large;
        }
    </style>
</head>

<body>
    <header class="menu-bar">
        <div class="logo"><img src="assets/images/logo/logo.png" alt="logo not found"></div>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
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
            <div class="icons-profile"><a href="user-info.php"><img src="assets/images/logo/profile.png" alt="profile not found"></a></div>
        </div>
    </header>

    <div class="content-home">
        <div class="left">

            <div class="mySlides fade">
                <img src="assets/images/image1.png">
            </div>

            <div class="mySlides fade">
                <img src="assets/images/image2.png">
            </div>

            <div class="mySlides fade">
                <img src="assets/images/image3.png">
            </div>
            <div class="mySlides fade">
                <img src="assets/images/image4.png">
            </div>
            <div class="mySlides fade">
                <img src="assets/images/image5.png">
            </div>
            <div class="mySlides fade">
                <img src="assets/images/image6.png">
            </div>
            <br>
        </div>

        <div class="right">
            <h1 class="h1">Shop With Us</h1>
            <div class="title">
                Catch Your Own <br><span><b>Stylish & Look</b></span>
            </div>
            <div>
                <button type="button"><a href="Shop.php" class="a">Shop now</a></button>
            </div>
        </div>
    </div>
    <div class="dots">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <?php include("footer.php")?>
    
</body>

</html>