<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>

</head>

<body>
    <header class="menu-bar">
        <div class="logo"><img src="assets/images/logo/logo.png" alt="logo not found"></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a class="active" href="Shop.php">Shop <img class="arrow" src="assets/images/logo/arrow.png" alt="arrow" width="15px"> </a>
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

    <div class="content-shop">
        <div class="shop-category">
            <div class="img-man">
                <p>NEW ARRIVALS</p>
                <h2>MEN'S</h2>
                <div class="image-container">
                    <img id="navigateButton" src="assets/images/Man/image1.jpg" alt="image">
                    <script>
                        document.getElementById('navigateButton').onclick = function() {
                            window.location.href = 'Man.php';
                        };
                    </script>
                </div>
            </div>
            <div class="img-women">
                <p>NEW ARRIVALS</p>
                <h2>WOMEN'S</h2>
                <div class="image-container">
                    <img id="navigateButton1" src="assets/images/Women/image2.jpg" alt="image">
                    <script>
                        document.getElementById('navigateButton1').onclick = function() {
                            window.location.href = 'Woman.php';
                        };
                    </script>
                </div>
            </div>
            <div class="img-kid">
                <p>NEW ARRIVALS</p>
                <h2>KID'S</h2>
                <div class="image-container">
                    <img id="navigateButton2" src="assets/images/Kids/image1.jpg" alt="image">
                    <script>
                        document.getElementById('navigateButton2').onclick = function() {
                            window.location.href = 'kids.php';
                        };
                    </script>
                </div>
            </div>
        </div>
        <div class="animation-img">
            <img src="assets/images/logo/adidas.png" alt="">
            <img src="assets/images/logo/ck.png" alt="">
            <img src="assets/images/logo/zara.png" alt="">
            <img src="assets/images/logo/gucci.png" alt="">
            <img src="assets/images/logo/d&g.png" alt="">
            <img src="assets/images/logo/Nike.png" alt="">
        </div>


        <div class="container-popular-products">
            <h2>POPULAR PRODUCTS</h2>
            <div class="popular_products">
                <div class="popular_products-collection">
                    <img src="assets/images/Man/gallery-1.jpg" alt="">
                    <p>Red t-shirt</p>
                    <p class="product-price">$20</p>
                </div>
                <div class="popular_products-collection">
                    <img src="assets/images/Man/product-4.jpg" alt="">
                    <p>blue t-shirt</p>
                    <p class="product-price">$20</p>
                </div>
                <div class="popular_products-collection">
                    <img src="assets/images/Man/product-12.jpg" alt="">
                    <p>jennes</p>
                    <p class="product-price">$40</p>
                </div>
                <div class="popular_products-collection">
                    <img src="assets/images/Man/hodies.jpg" alt="">
                    <p>blue t-shirt</p>
                    <p class="product-price">$35</p>
                </div>
                <div class="popular_products-collection">
                    <img src="assets/images/Man/hodies2.jpg" alt="">
                    <p>powderblue t-shirt</p>
                    <p class="product-price">$35</p>
                </div>
                <div class="popular_products-collection">
                    <img src="assets/images/Women/dress.jpg" alt="">
                    <p>dress</p>
                    <p class="product-price">$70</p>
                </div>
                <div class="popular_products-collection">
                    <img src="assets/images/Women/dress6.jpg" alt="">
                    <p>dress</p>
                    <p class="product-price">$70</p>
                </div>
                <div class="popular_products-collection">
                    <img src="assets/images/Kids/t-shirt1.png" alt="">
                    <p>grey t-shirt</p>
                    <p class="product-price">$26</p>
                </div>
                <div class="popular_products-collection">
                    <img src="assets/images/Kids/t-shirt2.jpg" alt="">
                    <p>white t-shirt</p>
                    <p class="product-price">$33</p>
                </div>
            </div>
        </div>

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
                                    <p class="product-title descriptionId">black T-shirts</p>
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
                                    <img src="assets/images/Women/dress2.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">dark blue t-shirt</p>
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
                                    <img src="assets/images/Women/dress5.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">flower t-shirt</p>
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
                                    <img src="assets/images/Women/jacket1.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">white hoodies</p>
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
                                    <img src="assets/images/shoes/buy-2.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black shoes Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Magnam voluptatibus
                                        seda accusamus sint unde odit asperiores quae, ipsa ducimus totam veniam,
                                        similique minus
                                        expedita magni eius deleniti voluptas? Laboriosam.</p>
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
                                    <img src="assets/images/Man/man-tshirts3.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">white t-shirt</p>
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
                                    <img src="assets/images/Man/man-tshirts1.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">purple tshirts</p>
                                    <p class="product-price paragraphId">$10</p>
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
                                    <img src="assets/images/Women/woman-tshirts4.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">red t-shirt</p>
                                    <p class="product-price paragraphId">$14</p>
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
                                    <img src="assets/images/Women/woman-tshirts9.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black t-shirt</p>
                                    <p class="product-price paragraphId">$19</p>
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
                                    <img src="assets/images/shoes/woman-shoes9.png" alt="image">
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
                                    <img src="assets/images/Kids/t-shirt6.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">good t-shirts</p>
                                    <p class="product-price paragraphId">$10</p>
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
                                    <img src="assets/images/Kids/t-shirt11.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black t-shirt</p>
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
                </div>
            </div>

            <div class="ss">
                <h1>FEATURE</h1>
                <div class="category1-collection">
                    <div class="pro1">
                        <div class="product">
                            <div class="collection-image">
                                <div class="img-backgroud">
                                    <img src="assets/images/Man/man-suits6.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">black suits</p>
                                    <p class="product-price paragraphId">$100</p>
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
                                    <img src="assets/images/dress/ladies-dress1.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">dark dress</p>
                                    <p class="product-price paragraphId">$66</p>
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
                                    <img src="assets/images/slacks/man-slacks6.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">white jeans</p>
                                    <p class="product-price paragraphId">$25</p>
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
                                    <img src="assets/images/Kids/pajamas5.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">barbies pajamas.</p>
                                    <p class="product-price paragraphId">$35</p>
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
                                    <img src="assets/images/Kids/t-shirt3.png" alt="image">
                                </div>
                                <div class="des">
                                    <p class="product-title descriptionId">red t-shirts</p>
                                    <p class="product-price paragraphId">$23</p>
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

        <div class="offer">
            <div class="special_div">
                <h1>f</h1>
                <p>DISCOUNT</p>
                <p>SALE <span>70%</span></p>
            </div>
            <p class="special_p">BLACK FRIDAY</p>
            <img src="assets/images/Untitled-1.PNG" alt="image">
        </div>

        <div class="launch-time">
            <div class="for-timer">
                <p id="days">00</p>
                <span>Days</span>
            </div>
            <div class="for-timer">
                <p id="hours">00</p>
                <span>Hours</span>
            </div>
            <div class="for-timer">
                <p id="minutes">00</p>
                <span>Minutes</span>
            </div>
            <div class="for-timer">
                <p id="seconds">00</p>
                <span>Seconds</span>
            </div>
        </div>

        <script>
            var countDownDate = new Date("Mar 3, 2024 00:00:00").getTime(); // Corrected by adding parentheses

            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

            }, 1000);
        </script>

    </div>

    <?php include("footer.php")?>


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