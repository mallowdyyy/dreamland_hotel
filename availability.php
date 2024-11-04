<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Database connection configuration
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "dbs";
       
        // Connect to the database
        $conn = new mysqli($servername, $username, $password, $dbname);
       
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
       
        // Retrieve form data
        $room_number = $_POST['room_number'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
       
        // Query to check the availability of the room within the date range
        $query = "SELECT COUNT(*) AS booked_rooms FROM room_schedule WHERE room_number = '$room_number'
        AND (start_date <= '$end_date' AND end_date >= '$start_date')";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $booked_rooms = $row['booked_rooms'];
       
        // Calculate the available days
        $total_days = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24) + 1;
        $available_days = $total_days - $booked_rooms;
       
        // Display availability message with the "Book now" button
        if ($booked_rooms >= 5) {
            echo "Room $room_number is fully booked within the specified date range.";
        } else if ($available_days > 0) {
            echo "Room $room_number is available for $available_days day(s) within the specified date range. ";
            echo "<a href='booking.php?room_number=$room_number&start_date=$start_date&end_date=$end_date'>Book now</a>";
        } else {
            echo "Room $room_number is fully booked within the specified date range.";
        }
       
        $conn->close();
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Room Availability</title>
        <link rel = "icon" href = "https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" type = "image/x-icon">
       
        <style>
            body {
                font-family: Arial, sans-serif;
                background: rgb(238,174,202);
                background: radial-gradient(circle, rgba(238,174,202,0.4) 13%, rgba(148,187,233,0.3) 99%);
            }
           
            .container {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
           
            .logo {
                position: absolute;
                top: 10px;
                left: 20px;
                transform: none;
                width: 110px;
                cursor: pointer;
                padding: 10px;
            }
           
            h1 {
                left: 20px;
                color: #333;
            }
           
            .contact-box{
                max-width: 950px;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                justify-content: center;
                align-items: center;
                text-align: center;
            }
           
            .left{
                height: 100%;
                text-align: left;  
                margin-bottom: 10px;
            }
           
            .left-grid{
                margin-bottom: 10px;
                display: grid;
                grid-template-columns: auto auto 1fr;
                grid-gap: 13px;
            }
           
            .right{
                padding: 25px 40px;
                margin-left: 10px;
            }
           
            form {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 30px;
                width: 300px;
                margin: 0 auto;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 35px;
                align-items: center;
            }
           
            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                text-align: left;
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
           
            .room{
                width: 200px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                transition: 0.6s ease-in-out;
            }
           
            .room:hover{
                width: 280px;
                transition: .5s ease-in-out
            }
           
            p{
                font-size: 12px;
                text-align: justify;
            }
           
            .notice{
                font-style: italic;
                font-size: 10px;
                color: #333;
            }
           
        </style>
       
    </head>
    <body>
        <img src="https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" class="logo">
        <div class="container">
            <div class="contact-box">
                <div class="left">
                    <h1>Rooms & Rates</h1>
                    <p class="notice">Hover over the images to enlarge.</p>
                   
                    <div class="left-grid">
                        <img src="https://media.architecturaldigest.com/photos/6465170b3fda4d1bd418eb40/master/w_1600,c_limit/AD0623_BARBIE_4%20copy.jpg" class="room">
                        <p><b>Presidential Suite</b><br><br> A 178 sq.m of splendid space. The suite has two bedrooms, kitchenettes, living rooms, a dining room and outdoor patios that are fully furnished for that fancy living experience.<br><br> Price: P 45,000</p>
                    </div>
                   
                    <div class="left-grid">
                        <img src="https://media.architecturaldigest.com/photos/6465170a70372bed481e8c9f/master/w_1600,c_limit/AD0623_BARBIE_3%20copy.jpg" class="room">
                        <p><b>Junior Suite</b><br><br>These strategically located corner suites offer a spacious living area. At 43 sq. m, it has ample space to move around and floor-to-ceiling glass windows to view the city.<br><br> Price: P 25,000</p>
                    </div>
                   
                    <div class="left-grid">
                        <img src="https://media.architecturaldigest.com/photos/6465170b3fda4d1bd418eb42/master/w_1600,c_limit/AD0623_BARBIE_6%20copy.jpg" class="room">
                        <p><b>Deluxe Room</b><br><br>This 34 sq. m guestroom features a king-size bed. The cozy ambiance offers privacy and relaxation away from the hustle and bustle.<br><br> Price: P 15,000</p>
                    </div>
                </div>
               
                <div class="right">
                    <form action="availability.php" method="post">
                        <h1>Check Room Availability</h1>
                        <div class="form-group">
                            <label for="room_number">Room Number:</label>
                            <select name="room_number" required>
                                <option value="1">Presidential Suite</option>
                                <option value="2">Junior Suite</option>
                                <option value="3">Deluxe Room</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="start_date">Start Date:</label>
                            <input type="date" name="start_date" required>
                        </div>
                       
                        <div class="form-group">
                            <label for="end_date">End Date:</label>
                            <input type="date" name="end_date" required>
                        </div>
                       
                        <input type="submit" value="Check Availability">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
