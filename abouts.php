<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorkha Martial Arts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Cardo&family=Cormorant+Garamond:wght@500&family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Cormorant+Garamond:wght@500&family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
font-family: 'Cormorant Garamond', serif;
font-family: 'Permanent Marker', cursive;
font-family: 'Poppins', sans-serif;            margin: 0;
            padding: 0;
            background-color: white;
            text-transform:none;
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
            background-image:url('ye.jpg');
            background-size:cover;
            border: 3px solid #ddd;
            border-radius: 5px;
        }
        .featured {
            text-transform:none;
            margin-bottom: 20px;
            padding: 20px;
            background-image:url('info.jpg');
            background-size:cover;
            border: 3px solid #ddd;
            border-radius: 5px;
        }
        .feature h2 {
            font-family: 'Black Ops One', cursive;
            color:#00ffd9;
        }
        .feature p {
            color: white;
            font-size:18px;
            font-family: 'Times New Roman', serif;

        }
       /* Style the timetable table */
.timetable {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    max-width: 1200px;
    border: 3px solid #ddd;

}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
  #portfolio h2 {
    font-size: 30px;
  }
  .card-wrapper {
    margin: 0 10px;
  }
  .card {
    width: 150px; /* Adjust the card width for smaller screens */
  }
  .card-title {
    font-size: 18px;
  }
  .card-text {
    font-size: 14px;
  }
}
/* Portfolio Section Styles */
#portfolio {
  background-image:url('bbbb.jpg');
  background-size:cover;
  padding: 60px 0;
}

#portfolio h2 {
  font-size: 36px;
  color: #333;
}

#portfolio h5 {
  font-size: 18px;
  color: #777;
}

.card-wrapper {
  margin: 0 10px;
  display: flex;
  flex-direction: column;
}

@media (min-width: 768px) {
  .card-wrapper {
    flex-direction: row;
  }
}

.card {
  width: 100%;
  max-width: 300px; /* Adjust the card width as needed */
  height: auto;
  border: none;
  border-radius: 10px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
  margin: 20px;
}

.card:hover {
  transform: translateY(-10px);
}

.card img {
  max-width: 100%;
  height: auto;
  border-radius: 10px 10px 0 0;
}

.card-title {
  font-size: 20px;
  color: #333;
  margin-top: 15px;
}

.card-text {
  font-size: 16px;
  color: #777;
  margin-top: 15px;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
  #portfolio h2 {
    font-size: 30px;
  }
  .card-wrapper {
    margin: 0 10px;
  }
  .card {
    max-width: 250px;
  }
  .card-title {
    font-size: 18px;
  }
  .card-text {
    font-size: 14px;
  }
}


/* Style the table header */
.timetable th {
    font-family: 'Black Ops One', cursive;
color:darkred;
    border: 1px solid #ddd;
    padding: 10px;
    font-weight: bold;
}

/* Style the table rows */


/* Style the table cells */
.timetable td {
    border: 1px solid #ddd;
    padding: 10px;
    font-family:'Times New Roman';
    font-size:20px;
    color:black;
}

/* Style the first column (Time) differently */
.timetable td:first-child {
    font-weight: bold;
}

/* Style the instructor images */
.timetable img {
    max-width: 100px;
    max-height: 100px;
    border-radius: 50%;
    object-fit: cover;
}

/* Center align text in cells */
.timetable th,
.timetable td {
    text-align: center;
}

/* Make the instructor details table responsive */
@media (max-width: 768px) {
    .timetable {
        display: block;
    }
    .timetable th,
    .timetable td {
        display: block;
        width: 100%;
    }
    .timetable td:first-child {
        font-weight: normal;
    }
}
.introduction {
    background-color: ; /* Choose a background color that fits your design */
    padding: 50px 0;
    text-align: center;
}

.introduction h3 {
    font-size: 24px;

    max-width: 800px;
    margin: 0 auto;
}
/* Fixed footer styles */
.fixed-footer {
    position: fixed;
    bottom: -5px;
    left:-5% ;
    width: 100%;
    color: black;
    text-align: center;
    padding: 10px 0;
    z-index: 100; /* Make sure it's on top of other content */
}

/* Social icons styles */
.social-icons {
    margin-top: 10px;
}

.social-icons a {
    color: #fff;
    font-size: 24px;
    margin: 0 15px;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #f00; /* Change the color on hover if needed */
}
/* Add this CSS to your existing stylesheet */
.card-wrapper {
  flex: 1;
  margin: 0 10px;
  display: flex;
  flex-direction: column;
}

@media (min-width: 768px) {
  .card-wrapper {
    flex-direction: row;
  }
}


    </style>
</head>
<body>
    
    <div class="header">
        <?php require('header.php')
        ?>
    </div>
    <div class="container">
    <div class = "feature">
    <h2>Welcome to Gorkha Martial Arts</h2><p> A place where your physical and mental transformation begins. We're more than just a gym; we're a community dedicated to helping you unlock your potential through martial arts and fitness. Our facility is designed to cater to your holistic development, providing a nurturing environment that supports your journey towards strength, confidence, and self-discovery.</p>
</div>
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
        
        <div class="feature">
            <h2>Holistic Growth</h2>
            <p>Rooted in a commitment to holistic growth, Gorkha Martial Arts becomes a sanctuary where individuals shape not only their bodies but also their destinies.</p>
        </div>
        <div class="featured">
          <h2>Instructor Details</h2>
              <table class="timetable">
        <tr>
            <th>Photo</th>
            <th>Name and Job</th>
            <th>Details</th>
        </tr>
        <tr>
            <td><img id="instructorImage" src="first.jpg" alt="Instructor Image"></td>
            <td>Thomas Cook (gym owner/head martial arts coach)</td>
            <td>Coaches in all martial arts 4th Dan Blackbelt judo 3rd Dan Blackbelt jiu-jitsu 1st Dan Blackbelt karate Accredited Muay Thai coach</td>
        </tr>
        <tr>
            <td><img id="instructorImage" src="fifth.jpg" alt="Instructor Image"></td>
            <td>Andrew Smith (assistant martial arts coach)</td>
            <td>5th Dan karate</td>
        </tr>
        <tr>
            <td><img id="instructorImage" src="fourth.jpg" alt="Instructor Image"></td>
            <td>Powel Johnson (assistant martial arts coach)</td>
            <td>2nd Dan Blackbelt jiu-jitsu 1st Dan Blackbelt judo</td>
        </tr>
        <tr>
            <td><img id="instructorImage" src="ninth.jpg" alt="Instructor Image"></td>
            <td>Harris William (assistant martial arts coach)</td>
            <td>Accredited Muay Thai coach 3rd Dan Blackbelt karate</td>
        </tr>
        <tr>
            <td><img id="instructorImage" src="fitness1.jpg" alt="Instructor Image"></td>
            <td>Joseph Anderson (fitness coach)</td>
            <td>BSc in Sports Science Qualified in health and nutrition Specialises in devising strength and conditioning programs for combat athletes</td>
        </tr>
        <tr>
            <td><img id="instructorImage" src="fitness2.jpg" alt="Instructor Image"></td>
            <td>Allen Murphy (fitness coach)</td>
            <td>BSc in Physiotherapy MSc in Sports Science</td>
        </tr>
    </table>
</div>
</div>
<!-- Portfolio Section -->
<section class="container py-5" id="portfolio">
  <div class="row mt-4 py-3">
    <div class="col-12 d-flex flex-column text-center justify-content-center">
      <h2>What We Offer</h2>
      <h5 class="text-secondary fw-normal py-2 fst-italic">Some basic features you can enjoy here!</h5>
    </div>
    <div class="row mt-5 mx-0 justify-content-start align-items-center">
      <!-- Add more cards here -->
      <div class="col-lg-4 col-md-4 col-sm-3   card-wrapper">
        <!-- Card 1 -->
        <div class="card mt-4">
          <img src="mattted.jpg" class="img-fluid" alt="Steam Room">
          <div class="card-body text-center">
            <h6 class="card-title">Providing matted carpets for training</h6>
            <p class="card-text text-secondary"></p>
        
      <div class="col-lg-4 col-md-4 col-sm-3 card-wrapper">
        <!-- Card 2 -->
        <div class="card mt-4">
        <img src="changing.jpg" class="img-fluid" alt="Steam Room">
        <div class="card-body text-center">
            <h6 class="card-title">A well-placed changing room</h6>
            <p class="card-text text-secondary"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 card-wrapper">
        <!-- Card 3 -->
        <div class="card mt-4">
          <img src="gyme.jpg" class="img-fluid" alt="Gym Section">
          <div class="card-body text-center">
            <h6 class="card-title">Gym section</h6>
            <p class="card-text text-secondary"></p>
          </div>
        </div>
      </div>
      </div>
  </div>
      <div class="col-lg-4 col-md-4 col-sm-6 card-wrapper">
        <!-- Card 4 -->
        <div class="card mt-4">
          <img src="gymd.jpg" class="img-fluid" alt="Blog Website">
          <div class="card-body text-center">
            <h6 class="card-title">Blog Website</h6>
            <p class="card-text text-secondary"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 card-wrapper">
        <!-- Card 5 -->
        <div class="card mt-4">
          <img src="sauna.jpg" class="img-fluid" alt="Sauna Room">
          <div class="card-body text-center">
            <h6 class="card-title">A relaxed sauna room</h6>
            <p class="card-text text-secondary"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 card-wrapper">
        <!-- Card 6 -->
        <div class="card mt-4">
          <img src="steam.jpg" class="img-fluid" alt="Steam Room">
          <div class="card-body text-center">
            <h6 class="card-title">Steam room</h6>
            <p class="card-text text-secondary"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<footer class="fixed-footer">
        <p> "Empowering Minds, Elevating Spirits - Unleashing Potential with every Punch and Kick. © 2023 Gorkha Martial Arts. All Rights and Fights Reserved."</p>
    <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

</body>
</html>
