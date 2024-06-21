<?php
    include ("database.php");
    if (isset($_POST['Item']))
    {
        extract($_POST);
        $Name = $_POST["Name"];
        $Item = $_POST["Item"];
        $Price = $_POST["Price"];
        $Quantity = $_POST["Quantity"];
        $Payment = $_POST["Payment"];

        $sql ="INSERT INTO `signup`.`order` (`Name`,`Item`, `Price`, `Quantity`, `Payment`) VALUES ('$Name','$Item', '$Price', '$Quantity', '$Payment');";

        // echo $sql;
        if ($conn->query($sql) == true)
        {   
            echo "<h1>Your Order is done successfully</h1><br><br>";
            echo "<h2>Thank you, $Name , for Ordering food from our restaurant!</h2><br>";
            echo "<h3>Order details:-</h3><br>";
            echo "Name: $Name<br>";
            echo "Item: $Item<br>";
            echo "Price: $Price<br>";
            echo "Quantity: $Quantity<br>";
            echo "Payment: $Payment<br>";
            exit();
        }
        else
        {
            echo "<br>Error : $sql <br> $conn->error";
        }
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Food Online</title>
</head>

<style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Background image property */
            background-image: url('image/bg1.jpeg'); 
            backdrop-filter: blur(10px);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

    form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

    label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

    input,
    select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

    button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

    button:hover {
            background-color: #45a049;
        }
    </style>

<body>
    <!-- Online order -->
    <form action="order.php" method="post">
        <h2>Order Food Online</h2>
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required>

        <label for="item">Item:</label>
        <input type="text" id="Item" name="Item" required>

        <label for="price">Price:</label>
        <input type="number" id="Price" name="Price" required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="Quantity" name="Quantity" required>

        <label for="payment">Payment method:</label>
        <select id="Payment" name="Payment" required>
            <option value="1">Cash on Delivery</option>
            <option value="2">Online</option>
            <option value="3">Debit card</option>
            <option value="4">UPI</option>
        </select>

        <button type="submit">Order</button>
    </form>
    
</body>

</html>