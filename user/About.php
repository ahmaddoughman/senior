<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <style>
        .padding-top_about {
            position: relative;
            padding-top: 70px;
        }

        .imgabout {
            position: relative;
            display: inline-block;
        }

        .imgabout img {
            max-width: 100%;
            display: block;
            filter: grayscale(100%);
        }

        .imgabout .h1_title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            color: #000;
            padding: 10px;
            margin: 0;
            font-size: 60px;
            mix-blend-mode: screen;
            box-shadow: 0 0 16px #000, 0 0 32px #000;
            opacity: 0.7;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f8f8;
        }

        .content_aboutts {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .content_aboutts h2 {
            position: relative;
            color: #333;
            margin-top: 10px;
            color: #BF882A;
        }

        .content_aboutts ul {
            list-style: none;
            padding: 0;
        }

        .content_aboutts ul li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header class="menu-bar">
        <div class="logo"><img src="assets/images/logo/logo.png" alt="logo not found"></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="Shop.php">Shop <img class="arrow" src="assets/images/logo/arrow.png" alt="arrow" width="15px"> </a>
                <div class="dropdown-list">
                    <ul>
                        <li><a href="Man.php">Man</a></li>
                        <li><a href="Woman.php">Women</a></li>
                        <li><a href="kids.php">Kids</a></li>
                    </ul>
                </div>
            </li>
            <li><a class="active" href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Log_In.php">Log in</a></li>
        </ul>
        <div class="icons">
            <div><a href="card.php"><img src="assets/images/logo/cart.png" alt="cart not found"></a></div>
            <div class="icons-profile"><a href="user-info.php"><img src="assets/images/logo/profile.png" alt="profile not found"></a></div>
        </div>
    </header>

    <div class="padding-top_about">
        <div class="imgabout">
            <img src="assets/images/img-111.jpg" alt="">
            <h1 class="h1_title">TREND MALL</h1>
        </div>

        <section class="content_aboutts">
            <h2>Our Fashion Journey</h2>
            <p><strong>YOU & ME Shop</strong> company was founded in 2020 by Ahmad Doughman. 
                The company quickly gained traction in the online marketplace, 
                earning a reputation for its commitment to quality, customer satisfaction,
                 and prompt delivery. As the demand for online shopping surged, <strong>YOU & ME Shop</strong>
                 expanded its product catalog to include a diverse range of items concerning unique 
                 types of clothes of different famous brands.</p>

            <h2>Our Style Philosophy</h2>
            <ul>
                <li><strong>Trendsetting Designs:</strong> At YOU & ME Shop, we curate our collection with an eye for the latest
                    trends and timeless classics. Our goal is to offer you a diverse range of clothing that allows you to
                    express your personality and stay ahead of the fashion curve.</li>
                <li><strong>Quality Without Compromise:</strong> We understand that clothing is an investment. That's why we
                    meticulously select fabrics and collaborate with skilled artisans to ensure each piece meets our
                    standards
                    of quality and durability.</li>
            </ul>

            <h2>The YOU & ME Shop Experience</h2>
            <ul>
                <li><strong>Easy and Secure Shopping:</strong> Your convenience and security are our priorities. Enjoy a
                    hassle-free shopping experience with our user-friendly website and secure payment options.</li>
                <li><strong>Fast and Reliable Shipping:</strong> We know you can't wait to flaunt your new wardrobe
                    additions. That's why we offer fast and reliable shipping to ensure your YOU & ME Shop pieces reach you
                    promptly.</li>
            </ul>
        </section>
    </div>

    <?php include("footer.php")?>
</body>

</html>