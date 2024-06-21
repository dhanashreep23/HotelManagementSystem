<?php
    include ("database.php");
    if (isset($_POST['Name']))
    {
        extract($_POST);
        $Name = $_POST["Name"];
        $Email = $_POST["Email"];
        $Phone = $_POST["Phone"];
        $Date = $_POST["Date"];
        $Time = $_POST["Time"];
        $Members = $_POST["Members"];

        $sql ="INSERT INTO `signup`.`booking` (`Name`, `Email`, `Phone`, `Date`, `Time`, `Members`) 
        VALUES ('$Name', '$Email', '$Phone', '$Date', '$Time', '$Members');";

        // echo $sql;
        if ($conn->query($sql) == true)
        {   
            echo "<h1>Your Table is booked successfully</h1><br><br>";
            echo "<h2>Thankyou, $Name, for Booking a Table !</h2><br>";
            echo "<h3>Table reservation details:-</h3><br>";
            echo "Email: $Email<br>";
            echo "Phone: $Phone<br>";
            echo "Date: $Date<br>";
            echo "Time: $Time<br>";
            echo "Members: $Members<br>";
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
    <title>Table Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* background-color: white; */
            background-image: url('image/bg3.jpeg'); 
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
</head>

<body>

    <form action="table.php" method="post">
        <h2>Book your Table</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="Name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="Phone" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="Date" required>

        <label for="time">Time:</label>
        <input type="time" id="time" name="Time" required>

        <label for="members">Total Members:</label>
        <select id="members" name="Members" required>
            <option value="1">1 person</option>
            <option value="2">2 people</option>
            <option value="3">3 people</option>
            <option value="4">4 people</option>
            <option value="6">6 people</option>
            <option value="10">10 people</option>
            <option value="12">12 people</option>
        </select>

        <button type="submit">Book Table</button>
    </form>
    
</body>

</html>