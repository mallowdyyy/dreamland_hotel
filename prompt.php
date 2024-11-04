<!DOCTYPE html>
<html>
<head>
    <title>Prompt</title>
    <link rel = "icon" href = "https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" type = "image/x-icon">
   
    <style>
        body{
            font-family: arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100%;
            height: 100hv;
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,0.45) 13%, rgba(148,187,233,0.3) 99%);
        }


        .container{
            background: rgba(255, 255, 255, 0.05);
            height: 200px;
            max-width: 800px;
            padding: 25px 40px 10px 40px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }


        .logo {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            cursor: pointer;
            padding: 10px;
        }




        h2{
            color: #333;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }


        button{
            background: rgba(0, 0, 0, 0.09);
            border: none;
            width: 150px;
            height: 40px;
            border-radius: 25px;
            font-size: 13px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: 0.5s ease;
        }


        button:hover{
            background: rgba(0, 0, 0, 0.3);
        }
       
    </style>
   
</head>
<body>
<img src="https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" class="logo">
    <div class="container">
        <h2>Login Successful! </color:></h2>
        <button onclick="goBackHome()">Go back home</button>
        <button onclick="startBooking()">Start booking</button>


        <script>
            function goBackHome() {
                window.location.href = "welcomepage.php";
            }


            function startBooking() {
                window.location.href = "booking.php";
            }
        </script>
    </div>
</body>
</html>
