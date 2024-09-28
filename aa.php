<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website | CodingNepal</title>
    <!-- Linking CSS File -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Fontawesome link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <style>
    /* Color variables */
:root {
  --white-color: #fff;
  --bg-color: #fff;
  --gray-color: #ccc;
}
/* Portfolio Section */
#portfolio {
  background-color: #fff; /* Background color for the portfolio section */
  padding: 90px 0; /* Adjust the padding as needed */
}

#portfolio h2 {
  font-family: 'Black Ops One', cursive;
  color: red; /* Color for the h2 text */
}

#portfolio .text-secondary {
  color: black; /* Color for the secondary text */
}

#portfolio .card {
  border: 3px solid #ddd; /* Border style for the cards */
  border-radius: 5px; /* Border radius for the cards */
  margin-top: 20px; /* Adjust the top margin as needed */
  padding: 20px; /* Padding for the cards */
}

#portfolio .card-title {
  font-family: 'Black Ops One', cursive;
  font-size: 18px; /* Font size for the card titles */
}

#portfolio .card-text {
  font-size: 16px; /* Font size for the card text */
  color: #333; /* Text color for the card text */
}

#portfolio .card img {
  height: 300px; /* Adjust the image height as needed */
  object-fit: cover; /* Maintain image aspect ratio */
}

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 90px;
        }
        .feature {
            text-transform:none;
            margin-bottom: 20px;
            padding: 20px;
     
            border: 3px solid #ddd;
            border-radius: 5px;
        }
        .feature h2 {
            font-family: 'Black Ops One', cursive;
            color:red;
        }
        .feature p {
            color: black;
            font-size:18px;
            font-family: 'Times New Roman', serif;

        }
/* Changing background color */
body {
  background: var(--bg-color) !important;
}

/* Changing link color */
.nav-item .nav-link {
  color: var(--white-color);
}

/* Hero section background image */
.hero {
  height: 100vh;
  background-image: url("../images/home-bg.jpg");
  background-repeat: no-repeat;
  background-position: 60% 0%;
  background-size: cover;
  background-attachment: fixed;
}

#skills i {
  height: 100px;
  width: 100px;
}

#portfolio img {
  height: 300px;
  object-fit: cover;
}

#about .img,
#about img,
.hire-text h2 {
  position: relative;
}

/* Timeline background line */
#about .img::before {
  content: "";
  left: 50%;
  width: 4px;
  position: absolute;
  height: calc(100% + 140px);
  background: var(--gray-color);
}

#about img,
#about .hire-text h2 {
  width: 140px;
}

#about .hire-text h2 {
  height: 140px;
}

.social-icons a {
  width: 40px;
  height: 40px;
}

footer .social-icons a {
  width: 30px;
  height: 30px;
}
.btn{
   margin-top: 0px;
}
#cv img {
  width: 230px;
}

/* Contact section background image */
#contact {
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-image: url("../images/contact-bg.jpeg");
}

@media screen and (max-width: 990px) {
  #skills .card {
    width: calc(100% / 2 - 10px) !important;
  }
}

@media screen and (max-width: 668px) {
  #skills .card,
  #portfolio .card-wrapper {
    width: 100% !important;
  }
 #about .hire-text h2 {
   height: 70px;
   width: 70px;
 }
}
  </style>
  </head>
  <body>
    <!-- Header & Navbar -->
    <div class="header" >
     <?php require('header.php')  ?> 
    </div>

              <div class="container">
    <div class = "feature">
    <h2>Welcome to Gorkha Martial Arts</h2><p> A place where your physical and mental transformation begins. We're more than just a gym; we're a community dedicated to helping you unlock your potential through martial arts and fitness. Our facility is designed to cater to your holistic development, providing a nurturing environment that supports your journey towards strength, confidence, and self-discovery.</p>
</div>
            <a href="#skills" class="btn btn-lg fs-6 fw-medium mt-5 btn-primary p-3">TELL ME MORE</a>
            <a href="#portfolio" class="btn btn-lg fs-6 fw-medium mt-5 btn-primary p-3">What we offer</a>
            <a href="#about" class="btn btn-lg fs-6 fw-medium mt-5 btn-primary p-3">Teachers</a>

    <!-- Hero or Showcase Section -->
  
    
    <!-- Skills Section -->
    <section class="container py-5" id="skills">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center justify-content-center">
      
           <div class="feature">
            <h2>Fusion of Tradition and Modernity</h2>
            <p>Centuries-old martial art disciplines seamlessly intertwine with the latest trends in contemporary fitness practices, resulting in a holistic and comprehensive approach that nurtures both body and mind, paving the way for a truly enriching well-being journey.</p>
        </div>
        <div class="feature">
            <h2>Diverse Martial Arts Classes</h2>
            <p>Offering an expansive selection of martial arts classes, our diverse curriculum encompasses disciplines such as Jiu-jitsu and Muay Thai, ensuring a tailored experience for individuals at every stage of their journey, whether they're stepping onto the mat for the first time or harnessing their skills as seasoned martial artists. Our commitment to inclusivity and expertise empowers individuals to pursue their passion and achieve unparalleled growth within a supportive community.</p>
        </div>
        <div class="feature">
            <h2>Expert Instructors</h2>
            <p>Guided by accomplished and dedicated instructors, our dynamic training sessions provide a structured path for students to embark on transformative journeys, fostering not only the honing of their skills but also the cultivation of resilience, discipline, and self-discovery. With their expertise and unwavering support, our instructors serve as mentors, shaping individuals into empowered martial artists and confident individuals ready to conquer challenges both on and off the mat.</p>
        </div>

    <!-- Portfolio Section -->
    <section class="container py-5" id="portfolio">
      <div class="row mt-4 py-3">
        <div class="col-12 d-flex flex-column text-center justify-content-center">
          <h2>What We Offer</h2>
          <h5 class="text-secondary fw-normal py-2 fst-italic">Some basic feautres you can enjoy here!</h5>
        </div>
        <div class="row mt-5 mx-0 justify-content-center align-items-center">
          <div class="col-lg-3 px-md-3 px-0 col-md-4 col-12 card-wrapper">
            <div class="card mt-4">
              <img src="mattted.jpg" class="img-fluid" alt="Steam Room">
              <div class="card-body text-center">
                <h6 class="card-title">Providing matted carpets for training</h6>
                <p class="card-text text-secondary"></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="changing.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">A well-placed changing room</h6>
                <p class="card-text text-secondary"></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="gyme.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Gym section</h6>
                <p class="card-text text-secondary"></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="gymd.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Blog Website</h6>
                <p class="card-text text-secondary"></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="sauna.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">A relaxed sauna room</h6>
                <p class="card-text text-secondary"></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-md-3 px-0 col-md-4 card-wrapper">
            <div class="card mt-4">
              <img src="steam.jpg" class="img-fluid" alt="portfolio-img">
              <div class="card-body text-center">
                <h6 class="card-title">Steam room</h6>
                <p class="card-text text-secondary"></p>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- About Section -->
<section class="container py-5" id="about">
  <div class="row mt-4 py-3">
    <div class="col-12 d-flex flex-column text-center">
      <h2>ABOUT</h2>
      <h5 class="text-secondary fw-normal py-2 fst-italic">Learn more about me, my background, and what motivates me.</h5>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-4 mt-5">
      <div class="card text-center">
        <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="first.jpg" alt="img">
        <div class="card-body">
          <h5>Thomas Cook</h5>
          <h6>Gym owner/head martial arts coach</h6>
          <p>Coaches in all martial arts 4th Dan Blackbelt judo 3rd Dan Blackbelt jiu-jitsu 1st Dan Blackbelt karate Accredited Muay Thai coach</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mt-5">
      <div class="card text-center">
        <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="fifth.jpg" alt="img">
        <div class="card-body">
          <h5>Andrew Smith</h5>
          <h6>Assistant martial arts coach</h6>
          <p>5th Dan Karate</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mt-5">
      <div class="card text-center">
        <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="fourth.jpg" alt="img">
        <div class="card-body">
          <h5>Powel Johnson</h5>
          <h6>Assistant martial arts coach</h6>
          <p>2nd Dan Blackbelt jiu-jitsu 1st Dan Blackbelt judo</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mt-5">
      <div class="card text-center">
        <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="ninth.jpg" alt="img">
        <div class="card-body">
          <h5>Harris William</h5>
          <h6>Assistant martial arts coach</h6>
          <p>Accredited Muay Thai coach 3rd Dan Blackbelt karate</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mt-5">
      <div class="card text-center">
        <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="fitness1.jpg" alt="img">
        <div class="card-body">
          <h5>Joseph Anderson</h5>
          <h6>Fitness coach</h6>
          <p>BSc in Sports Science Qualified in health and nutrition Specializes in devising strength and conditioning programs for combat athletes</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mt-5">
      <div class="card text-center">
        <img class="rounded-circle border border-5 border-dark-subtle img-fluid" src="fitness2.jpg" alt="img">
        <div class="card-body">
          <h5>Allen Murphy</h5>
          <h6>Fitness coach</h6>
          <p>BSc in Physiotherapy MSc in Sports Science</p>
        </div>
      </div>
    </div>
  </div>
</section>




     <!-- Contact Section -->
     <section class="py-5" id="contact">
      <div class="container-xxl py-5">
        <div class="col-12 d-flex flex-column text-center justify-content-center">
          <h2 class="text-white">CONTACT ME</h2>
          <h5 class="text-white fw-normal py-2 fst-italic">Interested if I'd be the right fit for your team? Fill in this form and I will respond within 24-48 hours.</h5>
        </div>
        <div class="row pt-4 mt-5">
          <div class="col-12">
            <form action="#" method="POST">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name*" required>
                    <label for="floatingInput">Enter Name*</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Enter Email*" required>
                    <label for="floatingEmail">Enter Email*</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingPassword" placeholder="Enter Phone*" required>
                    <label for="floatingPassword">Enter Phone*</label>
                  </div>
                </div>
                <div class="form-floating col-lg-6">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage" style="height: 205px" required></textarea>
                  <label for="floatingMessage" class="px-4">Enter Message*</label>
                </div>
                <div class="col-12 mt-5 d-flex justify-content-center">
                  <button class="btn btn-lg btn-outline-light">SEND MESSAGE</button>
                </div>
              </div>
  
            </form>
          </div>
        </div>
       </div>
     </section>

     <!-- Footer -->
     <footer>
      <div class="container-xxl flex-wrap pt-3 d-flex align-items-center justify-content-center justify-content-md-between">
        <p>Copyright © 2023 James Anderson</p>
        <ul class="social-icons d-flex">
          <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i class="fa-brands fa-twitter"></i></small></a>
          <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i class="fa-brands fa-facebook-f"></i></small></a>
          <a href="#" class="bg-primary mx-2 text-white d-flex align-items-center justify-content-center text-decoration-none rounded-circle"><small><i class="fa-brands fa-linkedin-in"></i></small></a>
        </ul>
      </div>
     </footer>
    
     <!-- Bootstrap script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>