<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Station</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header fixed-top">
    <div class="container">
        <div class="row align-times-center justify-content-between">
            <a href="#home" class="logo">Aqua <span>Claire.</span> </a>

            <nav class="nav">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services ">Services</a>
                <a href="contacts.html"></a>
            </nav>
            
            <a href="#contact" class="link-btn">Order Now</a>

            <div id="menu-btn" class="fas fa-bars"></div>

        </div>
    </div>

</header>

<!-- home page -->

<section class="home" id="home">

    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h1>Stay Hydrated!</h1>
                <p>Welcome to Aqua Claire - Purified Drinking Water Refilling Station website!</p>
                <a href="#contact" class="link-btn" >Order now</a>
            </div>

        </div>
    </div>
    
   
</section>

<!-- home page -->

<!-- about page -->
<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            
            <div class="col-md-6 image">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/aqua-claire-logo-1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/water-station-2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/water-station-4.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  
                </div>
            </div>
            

            <div class="col-md-6 content">
                <span>About us</span>
                <h3>"Purified water can save others"</h3>
            <p>
                Aqua Claire is a purified drinking water refilling station that offers high quality service and product that satisfy the customers. The services included here are cleaning, refilling and selling of galons. The Purified Water offered here undergone 24 stages of purification to ensure the safety of the customers when consuming the water.
            </p>
            <a href="#contact" class="link-btn">Order now</a>
            </div>
            
            
        </div>

    </div>
</section>

<!-- about page -->


<!-- services page -->

<section class="services" id="services">

    <h1 class="heading">Our Services</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/refill water.png"  alt="">
            <h3>Refilling Water</h3>
            <p>Purified water is used to refill the water galons of the customers.</p>
        </div>

        <div class="box">
            <img src="images/bubbles.png"  alt="">
            <h3>Cleaning water container</h3>
            <p>Essential part of the service to sanitize and remove bacteria like amoeba inside the galons; and to keep the purified water clean.</p>
        </div>

        <div class="box">
            <img src="images/delivery.png"  alt="">
            <h3>Water Delivery</h3>
            <p>For the convenience of customers who live far-away or doesn't have any vehicle to carry many galons. Thus delivery service is provided but with extra charge per galon for the service.</p>
        </div>

</section>


<!-- services page -->

<!-- contact page -->

<section class="location" id="location">

    <h1 class="heading">Our Location</h1>
    <div class="container">
        <div class="row allign-items-center">
            <img src="images/Location-station.jpg" class="d-block w-150" style="border: solid;" alt="">
                    
        </div>

        <div class="d-block w-150">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30825.00496573724!2d120.66639468956443!3d15.041166456867543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f77b22bd78d5%3A0x5104decd45a9ce9a!2s6th%20Avenue%2C%20San%20Fernando%2C%20Pampanga!5e0!3m2!1sen!2sph!4v1685825049662!5m2!1sen!2sph" class="d-block w-150" width="1200" height="450" style="border:solid;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading">Contact Us!</h1>
    
    <form action="connect.php" method="post">
       
        <p class="message">Please enter the required Information</p>
        <span>Your name: </span>
        <input type="text" name="name" placeholder="enter your name" class="box">
        <span>Your email: </span>
        <input type="email" name="email" placeholder="enter your email" class="box">
        <span>Your number: </span>
        <input type="number" name="number" placeholder="enter your number" class="box">
        <span>The date: </span>
        <input type="datetime-local" name="date" class="box">
        <input type="submit" value="Order now" name="submit" class="link-btn">

    </form>


</section>
<!-- contact page -->


<section class="footer" id="footer">

    <div class="box-container container">


        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone number</h3>
            <p>+911-420-6699</p>
            <p>+973-0222-8888</p>
        </div>

        

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Find us here</h3>
            <p>Assumption Del Pilar CSFP</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Open Hours and Day</h3>
            <p>7:00AM to 7:00PM</p>
            <p>Monday-Saturday</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>randomemail.gmail.com</p>
        </div>


    </div>
</section>

















<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>