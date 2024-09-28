<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Black+Ops+One&family=Cardo&family=Cormorant+Garamond:wght@500&family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Gorkha Martial Arts Pricing</title>
    <style>
           body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: #f2f2f2;
            padding: 15px;
            text-transform:capitalize;

        }
  
  .container {
        max-width: 1100px;
        margin: 50px auto;
        padding: 60px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(255, 0, 0);
        border:3px yellow;
        background-image:url('pe.jpg');
        background-size:cover;
    }

    .timetables {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 10px; /* Adds vertical space between rows */
        margin-top: 20px;
   
    }

    .timetable-item {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
        font-family:'Times New Roman';
        font-size:18px;
    }

    th {
        text-align: left;
        padding: 10px;
        font-family:'Times New Roman' Bold;

    }

    h2 {
        color: darkred;
        margin-bottom: 20px;
        font-family: 'Abril Fatface', cursive;
    }            
           
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            color:black;
            font-family:'Garamond';
            font-weight:bold;
            font-size:24px;
        }
        
      
        .feature {
            max-width: 1235px;
            margin: 0 auto;
          background-image:url('time.jpg');
          background-size:cover;
          padding:20px;
            border-radius: -1855px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0);
            margin-top: 30px;
        }
        
        .timetable {
            display: grid;
            grid-template-columns: 1fr repeat(7, minmax(100px, 1fr));
            grid-gap: 10px;
            margin-top: 20px;
            max-width: 1200px;
            text-align: center;
            align-items: center;
        }

        .timetable-item {
            padding: 10px;
            color: black;
         font-family:'Garamond';
            font-weight: bold;
            font-size:20px;
        }
.introduction {
    background-color: #f7f7f7; /* Choose a background color that fits your design */
    padding: 50px 0;
    text-align: center;
}

.introduction h3 {
    font-size: 24px;
    color: black;
    max-width: 800px;
    margin: 0 auto;
}
/* Fixed footer styles */
.fixed-footer {
    position: fixed;
    bottom: -72px;
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
        <?php require('header.php'); ?>
    </div>
    <div class="container">
    
        <h2>Prices and Membership Options</h2>
        <table class="timetables">
            <tr>
                <th>Membership Type</th>
                <th>Details</th>
                <th>Monthly Fee (£)</th>
            </tr>
            <tr>
                <td class="timetable-item">Basic</td>
                <td class="timetable-item">1 martial art – 2 sessions per week</td>
                <td class="timetable-item">25.00</td>
            </tr>
            <tr>
                <td class="timetable-item">Intermediate</td>
                <td class="timetable-item">1 martial art – 3 sessions per week</td>
                <td class="timetable-item">35.00</td>
            </tr>
            <tr>
                <td class="timetable-item">Advanced</td>
                <td class="timetable-item">Any 2 martial arts – 5 sessions per week</td>
                <td class="timetable-item">45.00</td>
            </tr>
            <tr>
                <td class="timetable-item">Elite</td>
                <td class="timetable-item">Unlimited Classes</td>
                <td class="timetable-item">60.00</td>
            </tr>
            <tr>
                <td class="timetable-item">Private martial arts tuition</td>
                <td class="timetable-item">Per hour</td>
                <td class="timetable-item">15.00</td>
            </tr>
            <tr>
                <td class="timetable-item">Junior membership</td>
                <td class="timetable-item">Can attend all-kids martial arts sessions</td>
                <td class="timetable-item">25.00</td>
            </tr>
        </table>

        <h2>Specialist Courses and Fitness Training</h2>
        <table class="timetables">
            <tr>
                <th>Course / Service</th>
                <th>Details</th>
                <th>Price (£)</th>
            </tr>
            <tr>
                <td class="timetable-item">Six-week beginners’ self-defence course</td>
                <td class="timetable-item">2 × 1-hour session per week</td>
                <td class="timetable-item">180.00</td>
            </tr>
            <tr>
                <td class="timetable-item">Use of fitness room</td>
                <td class="timetable-item">Per visit</td>
                <td class="timetable-item">6.00</td>
            </tr>
            <tr>
                <td class="timetable-item">Personal fitness training</td>
                <td class="timetable-item">Per hour</td>
                <td class="timetable-item">35.00</td>
            </tr>
        </table>
    </div>
        <div class="feature">
                <h2>Well-Curated Timetable</h2>
                <div class="timetable"><tr>
                    <div class="timetable-item">Time</div>
                    <div class="timetable-item">Monday</div>
                    <div class="timetable-item">Tuesday</div>
                    <div class="timetable-item">Wednesday</div>
                    <div class="timetable-item">Thursday</div>
                    <div class="timetable-item">Friday</div>
                    <div class="timetable-item">Saturday</div>
                    <div class="timetable-item">Sunday</div></tr>
                 <tr>   <div class="timetable-item">06:00-07:30</div>
                    <div class="timetable-item">Jiu-jitsu</div>
                    <div class="timetable-item">Karate</div>
                    <div class="timetable-item">Judo</div>
                    <div class="timetable-item">Jiu-jitsu</div>
                    <div class="timetable-item">Muay Thai</div>
                    <div class="timetable-item">-----</div>
                    <div class="timetable-item">-----</div><tr> 
                <tr>   <div class="timetable-item">08:00-10:00</div>
                    <div class="timetable-item">Muai Thai</div>
                    <div class="timetable-item">Private Tution
                    </div>
                    <div class="timetable-item">Private Tution</div>
                    <div class="timetable-item">Private Tution</div>
                    <div class="timetable-item">Jiu-jitsu</div>
                    <div class="timetable-item">Private Tution</div>
                    <div class="timetable-item">Private Tution</div><tr>
                <tr>   <div class="timetable-item">10:30-12:00</div>
                    <div class="timetable-item">Private Tution</div>
                    <div class="timetable-item">Private Tution
                    </div>
                    <div class="timetable-item">Private Tution</div>
                    <div class="timetable-item">Private Tution</div>
                    <div class="timetable-item">Private Tution</div>
                    <div class="timetable-item">Judo</div>
                    <div class="timetable-item">Karate</div><tr>
                <tr>   <div class="timetable-item">13:00-14:30</div>
                    <div class="timetable-item">Open mat/Personal pracitce</div>
                    <div class="timetable-item">Open mat/Personal practice
                    </div>
                    <div class="timetable-item">Open mat/Personal practice</div>
                    <div class="timetable-item">Open mat/Personal practice</div>
                    <div class="timetable-item">Open mat/Personal practice</div>
                    <div class="timetable-item">Karate/Judo</div>
                    <div class="timetable-item">Karate/Judo</div><tr>
                <tr>   <div class="timetable-item">15:00-17:00</div>
                    <div class="timetable-item">Kids Jiu-jitsu</div>
                    <div class="timetable-item">Kids Judo
                    </div>
                    <div class="timetable-item">Kids Karate</div>
                    <div class="timetable-item">Kids Jiu-jitsu</div>
                    <div class="timetable-item">Kids Judo</div>
                    <div class="timetable-item">Muay Thai</div>
                    <div class="timetable-item">Jiu-jitsu</div><tr>
                <tr>   <div class="timetable-item">17:30-19:00</div>
                    <div class="timetable-item">Karate</div>
                    <div class="timetable-item">Muai Thai
                    </div>
                    <div class="timetable-item">Judo</div>
                    <div class="timetable-item">Jiu-jitsu</div>
                    <div class="timetable-item">Muay Thai</div>
                    <div class="timetable-item">------</div>
                    <div class="timetable-item">------</div><tr>
                 <tr>   <div class="timetable-item">19:30-21:00</div>
                    <div class="timetable-item">Jiu-jitsu</div>
                    <div class="timetable-item">Judo
                    </div>
                    <div class="timetable-item">Jiu-jitsu</div>
                    <div class="timetable-item">Karate</div>
                    <div class="timetable-item">Private Tution</div>
                    <div class="timetable-item">------</div>
                    <div class="timetable-item">------</div><tr>
            </div>
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
