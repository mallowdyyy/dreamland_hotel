<?php
session_start();


// Check if user is logged in, else redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}


// Process the booking form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Generate a unique booking ID
    $booking_id = uniqid() . '_' . mt_rand(1000, 9999);


    // Get the selected room number and price per night
    $room_number = $_POST['room_number'];
    $price_per_night = 0;


    if ($room_number == 1) {
        $room_number = 1;
        $price_per_night = 45000;
    } elseif ($room_number == 2) {
        $room_number = 2;
        $price_per_night = 25000;
    }elseif ($room_number == 3) {
        $room_number = 3;
        $price_per_night = 15000;
    }
    // Get the start and end dates
    $start_date = $_POST['check_in'];
    $end_date = $_POST['check_out'];


    // Calculate the number of booked nights
    $start = strtotime($start_date);
    $end = strtotime($end_date);
    $booked_nights = ($end - $start) / (60 * 60 * 24);


    // Calculate the total cost
    $total_cost = $booked_nights * $price_per_night;


    // Get the logged-in user's information from the regisform table
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "dbs";


    // Create a connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);


    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // Prepare and execute the SQL statement to retrieve user information
    $stmt = $conn->prepare("SELECT firstName, lastName FROM regisform WHERE username = ?");
    $stmt->bind_param("s", $_SESSION['username']);
    $stmt->execute();


    // Fetch the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];


    // Close the statement
    $stmt->close();


    // Perform necessary SQL query to check if the room is available for the selected date range
    $stmt = $conn->prepare("SELECT COUNT(*) as bookings FROM room_schedule WHERE room_number = ? AND start_date <= ? AND end_date >= ?");
    $stmt->bind_param("iss", $room_number, $end_date, $start_date);
    $stmt->execute();


    // Fetch the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $bookings = $row['bookings'];


    if ($bookings >= 5) {
        // Room is not available
        echo "Sorry, the room is fully booked for the selected date range.";
        exit;
    }


    // Close the statement
    $stmt->close();


    // Prepare and bind the SQL statement to insert the booking information into the table
    $stmt = $conn->prepare("INSERT INTO room_schedule (booking_id, room_number, start_date, end_date, username, firstName, lastName, price_per_night, booked_nights, total_cost) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisssssiii", $booking_id, $room_number, $start_date, $end_date, $_SESSION['username'], $firstName, $lastName, $price_per_night, $booked_nights, $total_cost);


    // Execute the SQL statement
    if ($stmt->execute()) {
        // Redirect to the booking success page with the booking ID as a URL parameter
        header("Location: booking_success.php?booking_id=" . urlencode($booking_id));
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }


    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Book Now</title>
        <link rel = "icon" href = "https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" type = "image/x-icon">
       
        <style>
            body {
                font-family: Arial, sans-serif;
                background: rgb(238,174,202);
                background: radial-gradient(circle, rgba(238,174,202,0.3) 13%, rgba(148,187,233,0.25) 99%);
            }
           
            .container {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                height: 80vh;
                margin-left: 30px;
                margin-right: 30px;
            }
           
            .logo {
                margin-top: auto;
                width: 100px;
                cursor: pointer;
                margin-left: auto;
                margin-right: auto;
                padding: 8px;
            }
           
           
            form {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 30px;
                width: 270px;
                margin: 0 auto;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 25px;
                align-items: center;
            }
           
            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                text-align: left;
                font-size: 12px;
            }
           
            select,
            input[type="date"],
            input[type="submit"] {
                width: 90%;
                padding: 8px;
                margin-bottom: 20px;
                border: 1.5px solid #ababab;
                border-radius: 5px;
                background: transparent;
            }
           
            input[type="submit"] {
                background-color: #333;
                color: #fff;
                cursor: pointer;
                border-radius: 5px;
            }
           
            input[type="submit"]:hover {
                background-color: #555;
            }
           
            .room {
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                width: 100%;
                height: auto;
                position: relative;
                display: block;
                transition: transform 0.3s;
            }
           
            .room:hover {
                transform: scale(1.05);
            }
           
           
            .column{
                flex: 1;
                padding: 1px;
                margin: 9px;
                position: relative;
                width: 50%;
            }
           
            .content {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                background-color: rgba(0, 0, 0, 0.75);
                display: flex;
                align-items: center;
                justify-content: center;
                transition: opacity 0.4s ease;
                border-radius: 8px;
            }
           
            .column:hover .content {
                opacity: 1;
                transition: 0.3s ease;
            }
           
            .content p {
                color: white;
                font-size: 15px;
                text-align: justify;
                padding: 20px;
                margin: 10px;
            }
           
            h2{
                text-align: center;
                color: #333;
            }
           
            select,
            button[type="submit"]{
                width: 90%;
                padding: 8px;
                margin-bottom: 20px;
                border: 1.5px solid #ababab;
                border-radius: 5px;
                background: transparent;
                align-items: center;
                text-align: center;
            }
           
            button[type="submit"] {
                background-color: #333;
                color: #fff;
                cursor: pointer;
                border-radius: 5px;
            }
           
            button[type="submit"]:hover {
                background-color: #555;
            }
           
            .navbar{
                height: 10%;
                display: flex;
                align-items: center;
                padding-left: 20px;
                padding-right: 5%;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.07);
            }
           
            nav{
                flex: 1;
                text-align: right;
            }
           
            nav ul li{
                list-style: none;
                display: inline-block;
                margin-left: 30px;
            }
           
            nav ul li a{
                text-decoration: none;
                color: black;
                font-weight: bolder;
                font-size: 12.5px;
            }
           
            nav ul li a:hover{
                color: #555;
            }
           
            .notice{
                font-style: italic;
                font-size: 10px;
                text-align: center;
                color: #333;
            }
           
        </style>
       
    </head>
    <body>
        <div class="navbar">
            <img src="https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" class="logo">
            <nav>
                <ul>
                    <li><a href="welcomepage.php">Home</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </div>
       
        <div class="container">
           
            <div class="column">
                <h2>Presidential Suite</h2>
                <img src="https://media.architecturaldigest.com/photos/6465170b3fda4d1bd418eb40/master/w_1600,c_limit/AD0623_BARBIE_4%20copy.jpg" class="room">
                <div class="content">
                    <p><br><br><br>A 178 sq.m of splendid space. The suite has two bedrooms, kitchenettes, living rooms, a dining room and outdoor patios that are fully furnished for that fancy living experience.<br><br> Price: P 45,000</p>
                </div>
            </div>
           
            <div class="column">
                <h2>Junior Suite</h2>
                <img src="https://media.architecturaldigest.com/photos/6465170a70372bed481e8c9f/master/w_1600,c_limit/AD0623_BARBIE_3%20copy.jpg" class="room">
                <div class="content">
                    <p><br><br><br>These strategically located corner suites offer a spacious living area. At 43 sq. m, it has ample space to move around and floor-to-ceiling glass windows to view the city.<br><br> Price: P 25,000</p>
                </div>
            </div>
           
            <div class="column">
                <h2>Deluxe Room</h2>
                <img src="https://media.architecturaldigest.com/photos/6465170b3fda4d1bd418eb42/master/w_1600,c_limit/AD0623_BARBIE_6%20copy.jpg" class="room">
                <div class="content">
                    <p><br><br><br>This 34 sq. m guestroom features a king-size bed. The cozy ambiance offers privacy and relaxation away from the hustle and bustle.<br><br> Price: P 15,000</p>
                </div>
            </div>
           
            <div class="column">
                <form method="POST" action="booking.php">
                    <h2><color: #333>Available Rooms</color:></h2>  
                    <div class="form-group">
                        <!-- Check-in and check-out date fields -->
                        <label for="">Check-in Date:</label>
                        <input type="date" name="check_in" required><br>            
                    </div>
                   
                    <div class="form-group">
                        <!-- Check-in and check-out date fields -->
                        <label for="">Check-out Date:</label>
                        <input type="date" name="check_out" required><br>
                    </div>
                   
                    <div class="form-group">
                        <!-- Room selection -->
                        <label for="">Select Room:</label>
                        <select name="room_number" required>
                            <option value="1">Presidential Suite</option>
                            <option value="2">Junior Suites</option>
                            <option value="3">Deluxe Room</option>
                        </select><br>
                    </div>
                   
                    <button type="submit">Book Now</button>
                </form>
            </div>
           
        </div>
        <p class="notice">Hover over the images to see details.</p>
       
    </body>
</html>
