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
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: white; /* Set the background color of the body to white */
            text-transform: none;
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
            color:yellow;
        }
        .feature p {
            color: whitesmoke;
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

/* Style the table header */
.timetable th {
    font-family: 'Black Ops One', cursive;
color:yellow;
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
    color:white;
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
    background-color: white; /* Choose a background color that fits your design */
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
    color: #fff;
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
        <div class="feature">
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


<footer class="fixed-footer">
        <p> "Empowering Minds, Elevating Spirits - Unleashing Potential with every Punch and Kick. © 2023 Gorkha Martial Arts. All Rights and Fights Reserved."</p>
    <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

</body>
</html>
