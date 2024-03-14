<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <header class="menu-bar">
        <div class="logo"><img src="assets/images/logo/logo.png" alt="logo not found"></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a class="active" href="Shop.php">Shop <img class="arrow" src="assets/images/logo/arrow.png" alt="arrow" width="15px">
                </a>
                <div class="dropdown-list">
                    <ul>
                        <li><a class="active" href="Man.php">Man</a></li>
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

    <div class="content-man-tshirts">
        <div id="h1">
            <h1>Man T-Shirts</h1>
        </div>
        <div id="back">
            <a href="Man.php"><img src="assets/images/logo/back-arrow.png" alt=""> </a>
        </div>
        <section class="pro-container">
            <!-- Products section -->
            
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "ecommerce";

            $conn = new mysqli($servername, $username, $password);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            function displayProducts($conn, $db_name, $category) {
                mysqli_select_db($conn, $db_name);
                $sql = "SELECT id, image_path, price, LEFT(description, 50) AS truncated_desc FROM $category";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    echo "<table>";
                    
            
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <div class='pro'>
                                <div class='product'>
                                    <img class='man-slacks2' src='assets/images/" . $row['image_path'] . "' alt='Product Image'>
                                    <div class='des'>
                                        <h5 class='product-title descriptionId'>" . $row['truncated_desc'] . "</h5>
                                        <p class='product-price paragraphId'>" . $row['price'] . "</p>
                                        <div class='btn-change'>
                                        <button type='button' onclick='handleButtonClick(this)' class='button222'>more details</button>
                                            <button class='CartBtn add-to-cart'>
                                                <span class='IconContainers'> 
                                                <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512' fill='rgb(17, 17, 17)' class='carts'><path d='M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z'></path></svg>
                                                </span>
                                                <p class='texts'>Add to Cart</p>
                                            </button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";

                    }
            
                    echo "</table>";
                } else {
                    echo "No products found";
                }
            }

            displayProducts($conn, $db_name, "man_tshirts");
            $conn->close();


            ?>


            <script>
                function addToCart(event) {
                    const button = event.target;
                    const product = button.closest('.product'); // Find the closest parent element with class .product
                    const imageSrc = product.querySelector('img').getAttribute('src'); // Get the image source from the related product
                    const title = product.querySelector('.product-title').innerText;
                    const price = product.querySelector('.product-price').innerText;

                    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

                    const productDetails = {
                        image: imageSrc,
                        title,
                        price
                    };

                    cartItems.push(productDetails);

                    localStorage.setItem('cart', JSON.stringify(cartItems));

                    alert('Product added to cart!');
                }

                const addToCartButtons = document.querySelectorAll('.add-to-cart');
                addToCartButtons.forEach(button => {
                    button.addEventListener('click', addToCart);
                });
            </script>
        </section>

    </div>

    <div class="icons-ico">
        <div class="img1">
            <img src="assets/images/logo/icons1.png" alt="image">
            <h3>FREE AND FAST DELIVERY</h3>
            <p>Free delivery for all orders over $140</p>
        </div>
        <div class="img1">
            <img src="assets/images/logo/icons2.png" alt="image">
            <h3>24/7 CUSTOMERS SERVICE</h3>
            <p>Friendly 24/7 customer support</p>
        </div>
        <div class="img1">
            <img src="assets/images/logo/icons3.png" alt="image">
            <h3>MONEY BACKGUARANTEE</h3>
            <p>we return money within 30 days</p>
        </div>
    </div>

    <footer>
        <div class="footer1">
            <img src="assets/images/logo/logo.png" alt="image">
            <div class="container">
                <p>Discover the perfect products for your lifestyle,
                    conveniently delivered right to your doorstep. Experience unparalleld
                    convenience and exceptional quality with our curated selection.</p>
            </div>
        </div>

        <div class="footer1">
            <h3>Category</h3>
            <p>Man</p>
            <p>Women</p>
            <p>Kids</p>
        </div>

        <div class="footer1">
            <h3>Links</h3>
            <p>Home</p>
            <p>Shop</p>
            <p>About</p>
            <p>Contact</p>
            <p>Sign up</p>
        </div>

        <div class="footer1">
            <h3>Services</h3>
            <p>Price Drop</p>
            <p>New Products</p>
            <p>Best Sales</p>
            <p>Contact Us</p>
            <p>Sitemap</p>
        </div>

        <div class="footer1">
            <h3>Contact Me</h3>
            <div class="iconbefore">
                <img src="assets/images/iconmail.png" alt="" width="10px">
                <p>amd040@live.aul.edu.lb</p>
            </div>
            <div class="iconbefore">
                <img src="assets/images/iconphone.png" alt="">
                <p>+96171653043</p>
            </div>
            <div class="iconbefore">
                <img src="assets/images/iconmap.png" alt="">
                <p>Beirut</p>
            </div>
            <div class="iconbefore1">
                <img src="assets/images/iconwhatsup.png" alt="">
                <img src="assets/images/icongithub.png" alt="">
                <img src="assets/images/iconfacebook.png" alt="">
                <img src="assets/images/iconinstagram.png" alt="">
            </div>
        </div>
    </footer>


</body>

</html>