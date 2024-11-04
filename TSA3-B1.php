<!DOCTYPE html>
<html>
<head>
  <title>Join us now!</title>
  <link rel = "icon" href = "https://scontent.fmnl3-1.fna.fbcdn.net/v/t1.15752-9/358660467_239602338882908_6660556498456884805_n.png?_nc_cat=110&cb=99be929b-59f725be&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFfpACZ8IXZzekA6d6TxR3dUuI9j384mwNS4j2PfzibA3b9j89lHZkNmBT_q1z1U7lOkx5SJpIlWY-zmSDt-9wX&_nc_ohc=GL06r8BcMecAX867DPS&_nc_ht=scontent.fmnl3-1.fna&oh=03_AdQE0WitgvIE8VC5vyGVCIAKI-s_BJVa6YPpYfuv0wmk7A&oe=64CF98CD" type = "image/x-icon">
  <style>
    body{
        font-family: arial, sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        width: 100%;
        height: 100hv;
        background: rgb(148,187,233);
        background: linear-gradient(90deg, rgba(148,187,233,0.2) 0%, rgba(238,174,202,0.2) 100%);
    }
   
    .container{
        background: rgba(255, 255, 255, 0.15);
        width: 750px;
        max-width: 800px;
        padding: 25px 40px 10px 40px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        border-radius: 20px;
    }


    .logo {
        position: absolute;
        top: 8px;
        left: 40px;
        transform: none;
        width: 120px;
        cursor: pointer;
        padding: 10px;
    }


    p{
      font-size: 12px;
      color: #2E2E2E;
      text-align: center;
    }


    .container .text {
      text-align: center;
      font-size: 35px;
      font-weight: 600;
      background: -webkit-linear-gradient(right, #034b8e, #d25290, #034b8e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }


    .container form{
        padding: 30px 0 0 0 0;
    }


    .container form .form-row{
        display: flex;
        margin: 32px 0;
    }


    form .form-row .input-data{
        width: 100%;
        height: 40px;
        margin: 0 20px;
        position: relative;
    }


    .input-data label{
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        font-size: 14px;
        color: #2E2E2E;
        padding: 0 5px;
        pointer-events: none;
        transition: .3s ease;
    }


    .input-data input{
        height: 100%;
        width: 100%;
        font-size: 15px;
        color: black;
        padding: 0 10px;
        background: rgba(130, 130, 130, 0.1);
        border: 0.7px rgba(130, 130, 130, 0.75);
        outline: none;
        border-radius: 10px;
    }
   
    .input-data input:focus~label,
    .input-data input:valid~label{
        top: 0;
        font-size: 12px;
        border-radius: 5px;
        font-weight: 750;
    }


    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: rgba(130, 130, 130, 0.4);
      color: solid black;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }


    input[type="submit"]:hover {
      background-color: #EAA5C5;
    }


    .error-message {
      color: red;
      margin-top: 10px;
    }


</style>
</head>


    <body>
    <img src="https://scontent.fmnl3-3.fna.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&cb=99be929b-59f725be&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGStOzq6fPN9ybT6ylb_e-IIehLVcgk1N0h6EtVyCTU3U_xBAwgSqHclJXpt4KPHdCf3S5M9ptXiff_o0M-HlML&_nc_ohc=MDwbsvxzpPkAX-MUg7u&_nc_ht=scontent.fmnl3-3.fna&oh=03_AdSiTthu07cYONrsZZHCoC7dv1wn5e56aYJx7d4vpvOY8Q&oe=64CF63F5" class="logo">
    <div class="container">
        <div class="text">Join Dreamland Now! </div>
        <p>Your dream hotel stay is just a few clicks away! Register now and unlock exclusive hotel deals that will make your stay unforgettable.</p>


        <form method="POST" action="registration.php">
          <div class="form-row">
                <div class="input-data">
                    <input type="text" name="firstName" required>
                    <label for="firstName">First Name</label>
                </div>
                <div class="input-data">
                    <input type="text" name="middleName" required>
                    <label for="middleName">Middle Name</label>
                </div>
                <div class="input-data">
                    <input type="text" name="lastName" required>
                    <label for="lastName">Last Name</label>
                </div>
            </div>


            <div class="form-row">
            <div class="input-data">
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
            </div>


            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
            </div>


            <div class="form-row">
                <div class="input-data">
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-data">
                    <input type="password" name="confirm_password" required>
                    <label for="confirm_password">Confirm Password</label>
                </div>
            </div>


            <div class="form-row">
                <div class="input-data">
                  <input type="text" placeholder=" " name="birthday" required onfocus="(this.type='date')">
                    <label for="birthday">Birthday</label>
                </div>
                <div class="input-data">
                    <input type="text" name="contact_number" required>
                    <label for="contact_number">Contact Number</label>
                </div>
            </div>


            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner">
                        <input type="submit" value="Register">
                    </div>
                </div>
            </div>


        </form>
    </div>


    </body>
</html>