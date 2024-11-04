<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DREAMLAND</title>
    <link rel = "icon" href = "https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
<body>




<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/358334517_1067185700932164_2734816006084881205_n.png?_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_ohc=4_37zdj5XS8Q7kNvgHgzH7j&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QFqjRroJ2neo6n8d3toJeCfDZxTnyk7-bPkf2rUSMgEgQ&oe=67505535" alt="" class="logo">
    </a>
    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#rooms">Rooms</a></li>
        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-1">Login</button>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="TSA3-B1.php">
            <button type="button" class="btn btn-outline-dark shadow-none ms-lg">Register</button>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<!--
  CAROUSEL
 -->
     
     <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-indicators">
            <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
      <img src="https://hips.hearstapps.com/hmg-prod/images/01-ken-s-dreamhouse-airbnb-exterior-credit-hogwash-studios-649af4cad3562.jpg?crop=1.00xw:1.00xh;0,0&resize=2048:*" alt="..." class="url">
                <div class="carousel-caption">
                    <h5>Welcome to Dreamland</h5>
                    <p>An oasis of luxury and tranquility nestled in the heart of breathtaking landscapes. Indulge in the ultimate escape where impeccable service,
            exquisite accommodations, and unforgettable experiences await.</p>
                    <p><a class="btn btn-warning mt-3" href="availability.php">BOOK NOW</a></p>
                </div>
            </div>
            <div class="carousel-item">
      <img src="https://cdn.i-scmp.com/sites/default/files/d8/images/canvas/2023/07/02/e2df3b56-640e-49f4-9b53-ebc7939c2235_686e78c9.jpg" alt="..." class="url">
                <div class="carousel-caption">
                    <h5>Where Dreams Come To Stay</h5>
                    <p>An oasis of luxury and tranquility nestled in the heart of breathtaking landscapes. Indulge in the ultimate escape where impeccable service,
            exquisite accommodations, and unforgettable experiences await.</p>
                    <p><a class="btn btn-warning mt-3" href="availability.php">BOOK NOW</a></p>
                </div>
            </div>
            <div class="carousel-item">
      <img src="https://cdn.i-scmp.com/sites/default/files/d8/images/canvas/2023/07/02/4c6bebe6-2527-4048-9d7c-28d33472effd_686e78c9.jpg" alt="..." class="url">
                <div class="carousel-caption">
                    <h5>Embrace Luxury and Tranquility</h5>
                    <p>An oasis of luxury and tranquility nestled in the heart of breathtaking landscapes. Indulge in the ultimate escape where impeccable service,
            exquisite accommodations, and unforgettable experiences await.</p>
                    <p><a class="btn btn-warning mt-3" href="availability.php">BOOK NOW</a></p>
                </div>
            </div>
        </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
    </div>
 
  <!--
    ABOUT
  -->


    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-10">
                    <div class="about-img"><img alt="" class="img-fluid" src="https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/359361486_241140255441407_4233093251374488190_n.png?_nc_cat=107&ccb=1-7&_nc_sid=0024fc&_nc_ohc=ma9UFVh3luMQ7kNvgGyuBFa&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QG3oWWkalrRKYp3XlhjjRGvrszA1M08LUL1MAwmxnbAmw&oe=67507517"></div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>Welcome to Dreamland!<br>
            Where Your Dreams Find a Home!</h2>
                        <p>Welcome to Dreamland Resort, where dreams come to life! As one of the premier destinations for luxury getaways, we strive to provide our guests with an
              unforgettable experience. Our resort is nestled in the picturesque countryside, surrounded by breathtaking natural beauty
              that enhances the tranquility and serenity of your stay. With our dedicated team of highly trained professionals, we ensure that every
              aspect of your visit is carefully curated to exceed your expectations. From our world-class amenities and indulgent spa treatments to our exquisite
              dining options and personalized service, Dreamland Resort is the epitome of relaxation and indulgence.</p><a class="btn btn-warning" href="#">Learn More</a>
                    </div>
                </div>
            </div>
    </section>
   


    <!--
    ROOMS
  -->


    <section class="rooms section-padding" id="rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>ROOMS</h2>
                        <p>Experience elegance and comfort at Dreamland with our thoughtfully designed rooms featuring contemporary decor,
              plush furnishings, and modern amenities. Whether you're here for business or leisure, immerse yourself in luxury
               and wake up to stunning views, creating a serene retreat for a memorable stay.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://media.architecturaldigest.com/photos/6465170b3fda4d1bd418eb40/master/w_1600,c_limit/AD0623_BARBIE_4%20copy.jpg"></div>
                            <h3 class="card-title">Presidential Suite</h3>
                            <p class="lead">A 178 sq.m of splendid space. The suite has two bedrooms, kitchenettes, living rooms, a dining room and outdoor patios that are fully furnished for that fancy living experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://media.architecturaldigest.com/photos/6465170b3fda4d1bd418eb42/master/w_1600,c_limit/AD0623_BARBIE_6%20copy.jpg"></div>
                            <h3 class="card-title">Deluxe Room</h3>
                            <p class="lead">Strategically located corner suites offer a spacious living area. At 43 sq. m, it has ample space to move around and floor-to-ceiling glass windows to view the city.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img alt="" class="img-fluid" src="https://media.architecturaldigest.com/photos/6465170a70372bed481e8c9f/master/w_1600,c_limit/AD0623_BARBIE_3%20copy.jpg"></div>
                            <h3 class="card-title">Junior Suite</h3>
                            <p class="lead">This 34 sq. m guestroom features a king-size bed. The cozy ambiance offers privacy and relaxation away from the hustle and bustle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 


    <!--
    OUR TEAM
  -->


    <section class="team section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>OUR TEAM</h2>
                        <p>Meet our exceptional Dreamland Resort team, dedicated to providing exceptional service and creating a memorable experience for your stay.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img alt="" class="img-fluid rounded-circle" src="https://tse2.mm.bing.net/th?id=OIP.ldHcuFXDs4-c-FQ7ynitMAHaII&pid=Api&P=0&h=180">
                            <h3 class="card-title py-2">Shalimar Arzaga</h3>
                            <p class="card-text"> With her extensive experience in the hospitality industry, Shalimar brings a wealth of knowledge and a
                genuine passion for guest satisfaction. Her warm and friendly demeanor ensures that every guest feels welcomed and well taken
                care of during their stay at Dreamland Resort.</p>
                            <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img alt="" class="img-fluid rounded-circle" src="https://tse3.mm.bing.net/th?id=OIP.4S3ctZn3ltEEVw-Bc_qFJwHaHa&pid=Api&P=0&h=180">
                            <h3 class="card-title py-2">Erica Eusebio</h3>
                            <p class="card-text">As a seasoned concierge, Erica is dedicated to going above and beyond to fulfill guests' requests and provide
                them with insider tips to make their visit truly unforgettable. Her attention to detail and impeccable organizational skills ensure
                that every aspect of guests' itineraries is flawlessly arranged.</p>
                            <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img alt="" class="img-fluid rounded-circle" src="https://tse2.explicit.bing.net/th?id=OIP.QwnWqz3dNKUpnsqPm7mZ-QHaJ4&pid=Api&P=0&h=180">
                            <h3 class="card-title py-2">Angelika Gonzales</h3>
                            <p class="card-text">With a background in culinary arts, Angelika oversees the resort's dining experiences with finesse.
                Her commitment to quality and creativity shines through in every dish, delivering a memorable culinary journey for guests to
                savor during their stay at Dreamland Resort.</p>
                            <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img alt="" class="img-fluid rounded-circle" src="https://tse1.mm.bing.net/th?id=OIP.gNLcMy0CrrCeAhRMIqxkegAAAA&pid=Api&P=0&h=180">
                            <h3 class="card-title py-2">Elijah Villanueva</h3>
                            <p class="card-text">As the front desk manager, Elijah ensures smooth check-ins and check-outs, making sure that guests feel
                valued and attended to from the moment they arrive. With his exceptional communication skills and problem-solving abilities,
                he handles any inquiries or issues with efficiency and professionalism.</p>
                            <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!--
    FOOTER
  -->


    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All Right Reserved By Dreamland</p>
        </div>
    </footer>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
   
    <div class="button-container">


        <?php        
        if (isset($_SESSION['username'])) { // // User is logged in ?>                        
            <div class="dropdown">
                <div class="dropdown-content">
                    <a href="#">Welcome <?= $_SESSION['username'] ?> </a>
                    <a href="hotel_pictures.php">Gallery</a>
                    <a href="logout.php">Log Out</a>
                </div>
            </div>


        <?php } else { // User is not logged in ?>                      
            <div class="dropdown">


        <?php }?>
    </div>
