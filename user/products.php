<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="menu-bar">
        <div class="logo"><img src="assets/images/logo/logo.png" alt="logo not found"></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a class="active" href="Shop.php">Shop <img class="arrow" src="assets/images/logo/arrow.png"
                        alt="arrow" width="15px">
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


    <div class="content-products">
        <div class="product">
            <section id="prodetails">
                <div class="single-pro-image">
                    <div class="prodd">
                        <div id="selectedImageContainer2"></div>
                    </div>
                </div>
                <div class="single-pro-details">
                    <h4>Fashion's </h4>
                    <h1>
                        <div class="product-price" id="selectedPriceContainer2"></div>
                    </h1>
                    <select>
                        <option>Select Size</option>
                        <option>small</option>
                        <option>medium</option>
                        <option>large</option>
                        <option>XL</option>
                        <option>XXL</option>
                    </select>
                    <!-- <input type="number" value="1" min="1"> -->
                    <button class="btn-card add-to-cart">Add To Card</button>
                    <h4>Product Details</h4>
                    <span>
                        <div class="product-titl" id="selectedDescContainer2"></div>
                    </span>
                </div>
            </section>
        </div>

        <script>
            function addToCart(event) {
                const button = event.target;
                const product = button.closest('.product');
        
                const imageSrc = product.querySelector('.single-pro-image img').getAttribute('src');
                const title = product.querySelector('.single-pro-details span').innerText;
                const priceText = product.querySelector('.single-pro-details h1').innerText;
                const price = parseFloat(priceText.replace(/[^0-9.-]+/g, '')); // Extract numerical value
        
                let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        
                const productDetails = {
                    image: imageSrc,
                    title,
                    price: `$${price.toFixed(2)}` // Format price as a string with $ symbol
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
    </div>


    <!-- <div class="content-products">
        <section id="prodetails">
            <div class="single-pro-image">
                <div class="prodd">
                    <div id="selectedImageContainer2"></div>
                </div>
            </div>
            <div class="single-pro-details">
                <h4>Men's Fashion T-Shirt</h4>
                <h1>
                    <div id="selectedPriceContainer2"></div>
                </h1>
                <select>
                    <option>Select Size</option>
                    <option>small</option>
                    <option>medium</option>
                    <option>large</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                <input type="number" value="1" min="1">
                <button class="btn-card">Add To Card</button>
                <h4>Product Details</h4>
                <span>
                    <div id="selectedDescContainer2"></div>
                </span>
            </div>
        </section>
    </div> -->







    <script>
        window.onload = function () {
            var selectedImage = sessionStorage.getItem('selectedImage');
            var selectedPrice = sessionStorage.getItem('selectedPrice');
            var selectedDesc = sessionStorage.getItem('selectedDesc');
            if (selectedImage && selectedPrice && selectedDesc) {
                var imageElement = document.createElement('img');
                imageElement.src = selectedImage;
                imageElement.alt = 'Selected Image';
                document.getElementById('selectedImageContainer2').appendChild(imageElement);

                var priceElement = document.createElement('h1');
                priceElement.textContent = 'Price: ' + selectedPrice;
                document.getElementById('selectedPriceContainer2').appendChild(priceElement);

                var DescElement = document.createElement('span');
                DescElement.textContent = '' + selectedDesc;
                document.getElementById('selectedDescContainer2').appendChild(DescElement);
            } else {
                document.getElementById('selectedImageContainer2').textContent = 'No image selected.';
                document.getElementById('selectedPriceContainer2').textContent = 'No price available.';
                document.getElementById('selectedDescContainer2').textContent = 'No description available.';
            }
        };
    </script>


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