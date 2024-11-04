<?php
session_start();


// Check if user is logged in, else redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}


// Retrieve the booking details from the database
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


// Get the booking ID from the URL parameter
if (isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];


    // Prepare and execute the SQL statement to retrieve booking details
    $stmt = $conn->prepare("SELECT * FROM room_schedule WHERE booking_id = ?");
    $stmt->bind_param("s", $booking_id);
    $stmt->execute();


    // Fetch the result
    $result = $stmt->get_result();


    if ($result->num_rows === 1) {
        $booking = $result->fetch_assoc();
    } else {
        echo "Invalid booking ID.";
        exit;
    }


    // Close the statement
    $stmt->close();
} else {
    echo "Booking ID not specified.";
    exit;
}


// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Booking Success</title>
        <link rel = "icon" href = "https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" type = "image/x-icon">
        <style>
            body {
                font-family: Arial, sans-serif;
                background: rgb(238,174,202);
                background: radial-gradient(circle, rgba(238,174,202,0.3) 13%, rgba(148,187,233,0.25) 99%);
            }
           
            h1 {
                color: #333;
            }
           
            p {
                margin: 0 0 10px;
            }
           
            .navbar{
                height: 10%;
                display: flex;
                align-items: center;
                padding-left: 20px;
                padding-right: 5%;
                background: rgba(255, 255, 255, 0.25);
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.07);
            }
           
            .logo {
                margin-top: auto;
                width: 100px;
                cursor: pointer;
                margin-left: auto;
                margin-right: auto;
                padding: 8px;
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
           
            .container{
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                width: 100%;
                height: 100hv;
            }
           
            .box{
                background: rgba(255, 255, 255, 0.05);
                max-height: 500px;
                max-width: 800px;
                padding: 25px 40px 10px 40px;
                box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
                border-radius: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-bottom: 130px;
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
            <div class="box">
                <h1>Booking Successful</h1>
                <p>Thank you for your booking. Here are the details:</p>
               
                <p><br><strong>Booking ID:</strong> <?php echo $booking['booking_id']; ?></p>
                <p><strong>Room Number:</strong> <?php echo $booking['room_number']; ?></p>
                <p><strong>Check-in Date:</strong> <?php echo $booking['start_date']; ?></p>
                <p><strong>Check-out Date:</strong> <?php echo $booking['end_date']; ?></p>
                <p><strong>Price per Night:</strong> <?php echo $booking['price_per_night']; ?></p>
                <p><strong>Booked Nights:</strong> <?php echo $booking['booked_nights']; ?></p>
                <p><strong>Total Cost:</strong> <?php echo $booking['total_cost']; ?></p>
               
                <p><br>For any inquiries or changes to your booking, please contact our customer service.</p>
            </div>
        </div>
       
    </body>
</html>
