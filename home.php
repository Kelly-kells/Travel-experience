<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Away</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background: url(images/chelsea-gates-0653_wY0nRc-unsplash.jpg) no-repeat">
            <div class="content">
            <span>explore, discover,travel</span>
            <h3>Travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/damiano-baschiera-hFXZ5cNfkOk-unsplash.jpg) no-repeat">
            <div class="content">
            <span>explore, discover,travel</span>
            <h3>Discover new places

            </h3>
            <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/samuele-errico-piccarini-MCroQe9ykmM-unsplash.jpg) no-repeat">
            <div class="content">
            <span>explore, discover,travel</span>
            <h3>walks that are worth it
               
            </h3>
            <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section starts  -->


<section class="services">
 <h1 class="heading-title">our services</h1>
 <div class="box-container">
    <div class="box">

      <img class="image" src="images/adventure.png" alt="">
      <h3>adventures</h3>
    </div>

    <div class="box">
      <img class="image" src="images/map.png" alt="">
      <h3>tour guide</h3>
    </div>

    <div class="box">
      <img class="image" src="images/man-with-bag-and-walking-stick.png" alt="">
      <h3>trekking</h3>
    </div>

    <div class="box">
      <img class="image" src="images/bonfire.png" alt="">
      <h3>camp fire</h3>
    </div>

    <div class="box">
      <img class="image" src="images/off-road.png" alt="">
      <h3>off road</h3>
    </div>

    <div class="box">
      <img class="image" src="images/camping.png" alt="">
      <h3>camping</h3>
    </div>
 </div>
</section>










<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +234-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaychiano@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Abuja, Nigeria - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>KellyDev</span> | all rights reserved! </div>

</section>


<script src="app.js"></script>
</body>
</html>