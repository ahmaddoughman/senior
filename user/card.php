<?php
session_start();

$user_info = isset($_SESSION["user_info"]) ? $_SESSION["user_info"] : null;

// Response array for your_purchase_handler.php
$response = array("success" => true, "message" => "Purchase successful!");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Set JavaScript variable based on PHP login status
        var loggedIn = <?php echo isset($_SESSION["login"]) && $_SESSION["login"] === true ? 'true' : 'false'; ?>;
    </script>
    <script src="assets/js/script.js" defer></script>

    <style>
        .bin-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background-color: rgb(255, 95, 95);
            cursor: pointer;
            border: 2px solid rgb(255, 201, 201);
            transition-duration: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .bin-bottom {
            width: 15px;
            z-index: 2;
        }

        .bin-top {
            width: 17px;
            transform-origin: right;
            transition-duration: 0.3s;
            z-index: 2;
        }

        .bin-button:hover .bin-top {
            transform: rotate(45deg);
        }

        .bin-button:hover {
            background-color: rgb(255, 0, 0);
        }

        .bin-button:active {
            transform: scale(0.9);
        }

        .garbage {
            position: absolute;
            width: 14px;
            height: auto;
            z-index: 1;
            opacity: 0;
            transition: all 0.3s;
        }

        .bin-button:hover .garbage {
            animation: throw 0.4s linear;
        }

        @keyframes throw {
            from {
                transform: translate(-400%, -700%);
                opacity: 0;
            }

            to {
                transform: translate(0%, 0%);
                opacity: 1;
            }
        }
    </style>
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
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Log_In.php">Log in</a></li>
        </ul>
        <div class="icons">
            <div><a href="card.php"><img src="assets/images/logo/cart.png" alt="cart not found"></a></div>
            <div class="icons-profile"><a href="user-info.php"><img src="assets/images/logo/profile.png" alt="profile not found"></a></div>
        </div>
    </header>

    <div class="content-card-home">

        <div class="content-card">
            <!-- Cart section -->
            <div class="cart">
                <h2>Cart</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="cartItems">
                        <!-- Cart items will be dynamically added here using JavaScript -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"><strong>Total:</strong></td>
                            <td id="totalPrice"></td>
                            <td><button class="btttt" id="clearCartButton">Clear Cart</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: right;">
                                <form method="post" action="your_purchase_handler.php" id="purchaseForm">
                                    <input type="hidden" name="user_id" value="<?php echo isset($_SESSION["user_info"]["id"]) ? $_SESSION["user_info"]["id"] : ''; ?>">
                                    <button id="purchaseButton" type="button" onclick="submitPurchaseForm()">Purchase</button>
                                </form>

                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>


            <script>
                function submitPurchaseForm() {
                    // Check if the user is logged in
                    if (loggedIn) {
                        // If logged in, proceed with the purchase
                        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

                        // Extract relevant information from the cart items
                        const purchaseData = cartItems.map(item => ({
                            image_path: item.image,
                            quantity: item.quantity || 1,
                            price: parseFloat(item.price.replace(/\$/g, '') * (item.quantity || 1) ),
                            description: item.title // You may need to adjust this based on your data structure
                        }));

                        // Add user_id to each item
                        const user_id = <?php echo isset($_SESSION["user_info"]["id"]) ? $_SESSION["user_info"]["id"] : 'null'; ?>;
                        purchaseData.forEach(item => item.user_id = user_id);

                        // Send the purchaseData to your_purchase_handler.php
                        $.ajax({
                            type: "POST",
                            url: "your_purchase_handler.php",
                            data: {
                                purchaseData: purchaseData
                            }, // Send an array of purchaseData to the server
                            dataType: "json",
                            success: function(response) {
                                if (response.success) {
                                    // Display success alert
                                    alert(response.message);
                                    clearCart()
                                } else {
                                    // Display error alert if needed
                                    alert("Purchase failed. " + response.message);
                                }
                            },
                            error: function() {
                                alert("Error processing the purchase request");
                            }
                        });
                    } else {
                        // If not logged in, show a confirmation dialog
                        var confirmPurchase = confirm("You are not logged in. Do you want to log in and proceed with the purchase?");
                        if (confirmPurchase) {
                            // Redirect to the login page
                            window.location.href = "Log_In.php";
                        } else {
                            // User chose not to log in, handle accordingly
                            // You may choose to do nothing, show a message, or perform any other action
                        }
                    }
                }
            </script>



            <script>
                function displayCartItems() {
                    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                    const cartItemsElement = document.getElementById('cartItems');
                    cartItemsElement.innerHTML = '';

                    let totalPrice = 0;

                    cartItems.forEach(item => {
                        const cartRow = document.createElement('tr');
                        const quantity = item.quantity || 1; // Initial quantity

                        const price = parseFloat(item.price.replace(/\$/g, ''));

                        cartRow.innerHTML = `
            <td><img src="${item.image}" alt="${item.title}" style="width: 50px; height: 50px;"></td>
            <td class= "product-title">${item.title}</td>
            <td>$${price.toFixed(2)}</td>
            <td>
                <button class="btttt" onclick="decrementQuantity(this)">-</button>
                <input type="number" value="${quantity}" min="1" onchange="updateTotalPriceForRow(this)">
                <button class="btttt" onclick="incrementQuantity(this)">+</button>
            </td>
            <td class="total-price" id="total_price">$${(price * quantity).toFixed(2)}</td>
            <td>
                <button class="bin-button btttt" onclick="removeRow(this)">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 39 7"
                    class="bin-top"
                    >
                    <line stroke-width="4" stroke="white" y2="5" x2="39" y1="5"></line>
                    <line
                        stroke-width="3"
                        stroke="white"
                        y2="1.5"
                        x2="26.0357"
                        y1="1.5"
                        x1="12"
                    ></line>
                    </svg>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 33 39"
                    class="bin-bottom"
                    >
                    <mask fill="white" id="path-1-inside-1_8_19">
                        <path
                        d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"
                        ></path>
                    </mask>
                    <path
                        mask="url(#path-1-inside-1_8_19)"
                        fill="white"
                        d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z"
                    ></path>
                    <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                    <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                    </svg>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 89 80"
                    class="garbage"
                    >
                    <path
                        fill="white"
                        d="M20.5 10.5L37.5 15.5L42.5 11.5L51.5 12.5L68.75 0L72 11.5L79.5 12.5H88.5L87 22L68.75 31.5L75.5066 25L86 26L87 35.5L77.5 48L70.5 49.5L80 50L77.5 71.5L63.5 58.5L53.5 68.5L65.5 70.5L45.5 73L35.5 79.5L28 67L16 63L12 51.5L0 48L16 25L22.5 17L20.5 10.5Z"
                    ></path>
                    </svg>
                </button>
            </td>
        `;
                        cartItemsElement.appendChild(cartRow);

                        totalPrice += price * quantity;
                    });

                    const totalPriceElement = document.getElementById('totalPrice');
                    totalPriceElement.innerText = `$${totalPrice.toFixed(2)}`;

                }

                function clearCart() {
                    const cartItemsElement = document.getElementById('cartItems');
                    cartItemsElement.innerHTML = ''; // Clear the table contents

                    const totalPriceElement = document.getElementById('totalPrice');
                    totalPriceElement.innerText = '$0.00'; // Reset the total price

                    localStorage.removeItem('cart'); // Remove 'cart' from localStorage
                }

                // Add a button or trigger that will call clearCart function
                const clearCartButton = document.getElementById('clearCartButton'); // Replace 'clearCartButton' with your button's ID
                clearCartButton.addEventListener('click', clearCart);

                function updateQuantityInLocalStorage(title, quantity) {
                    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                    const updatedCart = cartItems.map(item => {
                        if (item.title === title) {
                            item.quantity = quantity;
                        }
                        return item;
                    });

                    localStorage.setItem('cart', JSON.stringify(updatedCart));
                }

                function incrementQuantity(button) {
                    const input = button.parentElement.querySelector('input');
                    input.value = parseInt(input.value) + 1;
                    updateTotalPriceForRow(input);
                    updateTotalPrice();
                    updateQuantityInLocalStorage(input.closest('tr').cells[1].innerText, parseInt(input.value));
                }

                function decrementQuantity(button) {
                    const input = button.parentElement.querySelector('input');
                    if (parseInt(input.value) > 1) {
                        input.value = parseInt(input.value) - 1;
                        updateTotalPriceForRow(input);
                        updateTotalPrice();
                        updateQuantityInLocalStorage(input.closest('tr').cells[1].innerText, parseInt(input.value));
                    }
                }

                function updateTotalPriceForRow(input) {
                    const quantity = parseInt(input.value);
                    const row = input.closest('tr');
                    const price = parseFloat(row.cells[2].innerText.replace(/\$/g, ''));
                    const totalCell = row.cells[4];
                    const totalPrice = price * quantity;
                    totalCell.innerText = `$${totalPrice.toFixed(2)}`;
                }

                function updateTotalPrice() {
                    let totalPrice = 0;
                    const cartItems = document.querySelectorAll('#cartItems tr');

                    cartItems.forEach(row => {
                        const price = parseFloat(row.cells[2].innerText.replace(/\$/g, ''));
                        const quantity = parseInt(row.cells[3].querySelector('input').value);
                        totalPrice += price * quantity;
                    });

                    const totalPriceElement = document.getElementById('totalPrice');
                    totalPriceElement.innerText = `$${totalPrice.toFixed(2)}`;
                }

                function removeRow(button) {
                    const row = button.closest('tr');
                    const title = row.cells[1].innerText;
                    const price = parseFloat(row.cells[2].innerText.replace(/\$/g, '')); // Parse the price to a number

                    row.remove();
                    updateTotalPrice();
                    updateLocalStorage(title, price);
                }

                function updateLocalStorage(title, price) {
                    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                    const updatedCart = cartItems.filter(item => !(item.title === title && parseFloat(item.price.replace(/\$/g, '')) === price)); // Compare parsed prices

                    localStorage.setItem('cart', JSON.stringify(updatedCart));
                }


                displayCartItems(); // Initially display items on page load
            </script>
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

    </div>
    <footer>
        <div class="footer1">
            <img src="assets/images/logo/logo.png" alt="image" onclick="redirectToAdmin()">
            <script>
                function redirectToAdmin() {
                    //window.location.href = '../admin/index.php';
                    window.open('../admin/index.php', '_blank');
                }
            </script>
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