<?php include('common.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="content_admin">
        <div class="right">
            <div class="icons-profile-photo">
                <img src="assets/images/866781-fotor-bg-remover-2024022795950.png" alt="profile not found">
            </div>
            <div class="admin_name">
                <p style="font-size: 30px;"><?php echo $row['firstname']; ?></p>
            </div>
            <div class="dashboard">
                <a class="active" href="home.php">
                    <h2>Home</h2>
                </a>
                <a href="customers.php">
                    <h2>Customers</h2>
                </a>
                <a href="all-products.php">
                    <h2>All Products</h2>
                </a>
                <a href="feedback.php">
                    <h2>feedbacks</h2>
                </a>
                <a href="purchase.php">
                    <h2 class="Logout_admin">purchase</h2>
                </a>
                <a href="admin_info.php">
                    <h2>Setting</h2>
                </a>
            </div>
        </div>
        <div class="left">
            <div>
                <h1 class="Category">Category</h1>
                <div class="shop-category">
                    <div class="img-man">
                        <h2>MEN'S</h2>
                        <div class="image-container">
                            <img id="navigateButton" src="../user/assets/images/Man/image1.jpg" alt="image">
                            <script>

                                document.getElementById('navigateButton').onclick = function () {
                                    window.location.href = 'add-products.php';
                                };
                            </script>
                        </div>
                    </div>
                    <div class="img-women">
                        <h2>WOMEN'S</h2>
                        <div class="image-container">
                            <img id="navigateButton1" src="../user/assets/images/Women/image2.jpg" alt="image">
                            <script>

                                document.getElementById('navigateButton1').onclick = function () {
                                    window.location.href = 'add-products-woman.php';
                                };
                            </script>
                        </div>
                    </div>
                    <div class="img-kid">
                        <h2>KID'S</h2>
                        <div class="image-container">
                            <img id="navigateButton2" src="../user/assets/images/Kids/image1.jpg" alt="image">
                            <script>

                                document.getElementById('navigateButton2').onclick = function () {
                                    window.location.href = 'add-products-kids.php';
                                };
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="assets/js/script.js"></script>

</html>