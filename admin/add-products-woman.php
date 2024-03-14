<?php include('common.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Style for the notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            display: none; /* Initially hidden */
            z-index: 9999;
        }
        .show-notification {
            display: block;
            animation: fadeOut 3s ease-in-out;
        }

        @keyframes fadeOut {
            0% { opacity: 1; }
            100% { opacity: 0; }
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST["category"];

    $resetAutoIncrementSQL = "ALTER TABLE $category AUTO_INCREMENT = 1";
    $conn->query($resetAutoIncrementSQL);
    
    $imagePath = $_FILES["image"]["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    switch ($category) {
        case "woman_tshirts":
            $targetTable = "woman_tshirts";
            break;
        case "woman_jeans":
            $targetTable = "woman_jeans";
            break;
        case "woman_shoes":
            $targetTable = "woman_shoes";
            break;
        case "woman_dress":
            $targetTable = "woman_dress";
            break;
        default:
            break;
    }

    if (isset($targetTable)) {
        $sql = "INSERT INTO $targetTable (image_path, price, description) VALUES ('$imagePath', '$price', '$description')";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="notification show-notification">New record created successfully!</div>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid category selection";
    }
}

$conn->close();
?>


<div class="main">
    <div id="back">
        <a href="home.php"><img src="../user/assets/images/logo/back-arrow.png" alt=""> </a>
    </div>
    <div class="content-Signup">
        <h1>Add Products</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="file_image">
                <label for="fileInput" id="fileLabel">Choose an Image:</label>
                <input type="file" id="fileInput" name="image">
            </div>
            <input type="text" name="price" id="price" placeholder="Price" required>
            <textarea class="textarea" placeholder="Description" name="description" id="description" cols="30" rows="10"></textarea>
            <div>
                <select name="category" class="Categorsss">
                    <optgroup label="Category">
                        <option value="woman_tshirts">T-shirts</option>
                        <option value="woman_jeans">Jeans</option>
                        <option value="woman_shoes">Shoes</option>
                        <option value="woman_dress">dress</option>
                    </optgroup>
                </select>
            </div>
            <button type="submit">Add</button>
        </form>
    </div>
</div>
<script src="assets/js/script.js"></script>

</body>
</html>
