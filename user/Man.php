<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
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


    <div class="content-man">
        <div class="left-man">
            <div class="mySlides fade">
                <img class="im2" src="assets/images/Man/t-shirt3.png">
            </div>
            <div class="mySlides fade">
                <img src="assets/images/Man/hodies.png" alt="">
            </div>
            <div class="mySlides fade">
                <img class="im1" src="assets/images/Man/t-shirt1.png">
            </div>

            <div class="mySlides fade">
                <img src="assets/images/Man/t-shirt2.png">
            </div>
            <div class="dots" style="display: none;">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>

        <div class="right-man">
            <div>
                <h1>Categories</h1>
            </div>
            <div class="man-collection">
                <div>
                    <img id="navigateButton1" src="assets/images/shoes/slider0.jpg" alt="">
                    <script>
                        // JavaScript code
                        document.getElementById('navigateButton1').onclick = function() {
                            // Change 'another-page.html' to the URL of the page you want to navigate to
                            window.location.href = 'man-shoes.php';
                        };
                    </script>
                </div>
                <div>
                    <img id="navigateButton" src="assets/images/Man/t-shirt-collection.png" alt="">
                    <script>
                        // JavaScript code
                        document.getElementById('navigateButton').onclick = function() {
                            // Change 'another-page.html' to the URL of the page you want to navigate to
                            window.location.href = 'man-t-shirts.php';
                        };
                    </script>
                </div>
                <div>
                    <img id="navigateButton3" src="assets/images/slacks/cover-slacks.jpeg" alt="">
                    <script>
                        // JavaScript code
                        document.getElementById('navigateButton3').onclick = function() {
                            // Change 'another-page.html' to the URL of the page you want to navigate to
                            window.location.href = 'man-slacks.php';
                        };
                    </script>
                </div>
                <div>
                    <img id="navigateButton4" src="assets/images/Man/suits-collection.png" alt="">
                    <script>
                        // JavaScript code
                        document.getElementById('navigateButton4').onclick = function() {
                            // Change 'another-page.html' to the URL of the page you want to navigate to
                            window.location.href = 'man-suits.php';
                        };
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="ttt1">
        <div class="container-collection-row">
            <div class="ss">
                <h1>HOT TREND</h1>
                <div class="category1-collection">
                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/product-6.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black t-shirts</p>
                                    <p class="product-price paragraphId">$13</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/man-tshirts4.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">orange t-shirt</p>
                                    <p class="product-price paragraphId">$37</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/buy-3.jpg" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black jeans</p>
                                    <p class="product-price paragraphId">$20</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/slacks/man-slacks5.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">dark jeans</p>
                                    <p class="product-price paragraphId">$30</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/shoes/product-10.jpg" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black shoes</p>
                                    <p class="product-price paragraphId">$50</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/shoes/product-5.jpg" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">gray shoes</p>
                                    <p class="product-price paragraphId">$33</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="ss">
                <h1>BEST SELLER</h1>
                <div class="category1-collection">
                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/man-suits7.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">white suits.</p>
                                    <p class="product-price paragraphId">$70</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/man-tshirts6.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">brown t-shirts</p>
                                    <p class="product-price paragraphId">$15</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/t-shirt2.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black t-shirt</p>
                                    <p class="product-price paragraphId">$33</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/man-suits4.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">red suits</p>
                                    <p class="product-price paragraphId">$80</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/shoes/product-11.jpg" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">gray shoes</p>
                                    <p class="product-price paragraphId">$41</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/slacks/man-slacks1.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black jeans</p>
                                    <p class="product-price paragraphId">$33</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ss">
                <h1>FEATURE</h1>
                <div class="category1-collection">
                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/man-suits9.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">green suits</p>
                                    <p class="product-price paragraphId">$85</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/man-tshirts2.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">purple t-shirt</p>
                                    <p class="product-price paragraphId">$17</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/product-4.jpg" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">dark blue t-shirt</p>
                                    <p class="product-price paragraphId">$24</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/hodies2.jpg" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">powder blue hoodies</p>
                                    <p class="product-price paragraphId">$36</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/shoes/product-12.jpg" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">brown shoes</p>
                                    <p class="product-price paragraphId">$48</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/slacks/man-slacks5.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black jeans</p>
                                    <p class="product-price paragraphId">$34</p>
                                    <div class="btn-change">
                                        <button type="button" onclick="handleButtonClick1(this)" class="button222">more details</button>
                                        <button class="CartBtn add-to-cart">
                                            <span class="IconContainers">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="carts">
                                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                </svg>
                                            </span>
                                            <p class="texts">Add to Cart</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

</body>

</html>