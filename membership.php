<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image:url('pric.jpg');
  background-size:cover;
  background-position:center center;
}

.container {
  width: 100%;
  max-width: 722px;
 margin-right:435px;
  box-sizing: border-box;
  text-align:center;
}

.pricing-table {
    width:90%;
    max-width:1100px;
    padding:108px 20px;
    margin:auto;
  display: flex;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-gap:25px;
 
}

.pricing-plan {
  background:#1f283b;
  border: 1px solid #ddd;
  padding: 7% 10%; /* Increase padding for larger boxes */
  text-align: center;
  color:white;
  border-radius: 10px; /* More rounded corners */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
  flex: 1;
}

.pricing-plan:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 16px rgba(0, 0, 0, 0.2);
}

.recommended {
  border: 2px solid #007bff;
}

.price {
  font-size: 32px; /* Larger font size */
  font-weight: bold;
  margin: 15px 0;
  color: #007bff;
  font-family: 'Roboto', sans-serif;

}
.pricing-plan p{
    font-size:44px;
    margin: 20px 0 40px;
    font-weight:500;
    font-family: 'Montserrat', sans-serif;
}
.pricing-plan p span{
    font-size:16px;
}
ul {
  list-style: none;
  padding: 0;
}
label {
  color: white;
  font-family: "Times New Roman";
  font-size: 20px;
  font-weight: bold; /* Makes the text bold */
  text-decoration: underline; /* Adds an underline */
}

li {
  margin: 10px 0; /* Increased spacing for features */
}

button {
  background:transparent;
  color: #fff;
  width:100%;
  padding:14px 0;
  border: 2px solid #e33058;
  /* Slightly larger button */
  border-radius: 6px;
  cursor: pointer;
  font-size: 15px;
  margin-top: auto;
}

button:hover {
  background-color: #e33058;
}

/* Responsive styles */
@media (max-width: 768px) {
  .pricing-table {
    flex-direction: column;
    align-items: center;
  }
  .pricing-plan {
    margin: 10px 0;
  }
}

</style>
  <title>Pricing Table</title>
</head>
<body>
<?php require('header.php') ?>
  <div class="container">
   
    <div class="pricing-table">
      <div class="pricing-plan">
        <h2>Basic</h2>
        <p class="price">£25.00<span>/monthly fee</span></p>
        <ul>
          <li>BASIC</li>
          <li>(1 martial art – 2 sessions per week)</li>
        </ul>
        <a href="pricing.php"><button>Select Plan</button></a>
      </div>
      <div class="pricing-plan recommended">
        <h2>Intermediate</h2>
        <p class="price">£35.00<span>/monthly fee</span></p>
        <ul>
          <li>Intermediate</li>
          <li>(1 martial art – 3 sessions per week) – monthly fee</li>
          
        </ul>
        <a href="pricing.php"><button>Select Plan</button></a>
      </div>
      <div class="pricing-plan">
        <h2>ADVANCED</h2>
        <p class="price">£45.00<span>/monthly fee</span></p>
        <ul>
          <li>Advanced</li>
          <li>(Any 2 martial arts – 5 sessions per week)</li>
         
        </ul>
        <a href="pricing.php"><button>Select Plan</button></a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="pricing-table">
      <div class="pricing-plan">
        <h2>Elite</h2>
        <p class="price">£60.00<span>/monthly fee</span></p>
        <ul>
          <li>ELITE</li>
          <li>Unlimited Classes</li>
        </ul>
        <a href="pricing.php"><button>Select Plan</button></a>
      </div>
      <div class="pricing-plan recommended">
        <h2>Private Tuition</h2>
        <p class="price">£15.00<span>/monthly fee</span></p>
        <ul>
          <li>Private martial arts tuition – per hour</li>
        </ul>
        <a href="pricing.php"><button>Select Plan</button></a>
      </div>
      <div class="pricing-plan">
        <h2>Junior Membership</h2>
        <p class="price">£25.00<span>/monthly fee</span></p>
        <ul>
          <li>Can attend all-kids martial arts sessions</li>
        </ul>
        <a href="pricing.php"><button>Select Plan</button></a>
      </div>
    </div>
  </div>
  <div class="container">
    <label>Addititonal Specialist Courses and Fitness Training</label>
    <div class="pricing-table">
      <div class="pricing-plan">
        <h2>Beginners' Course</h2>
        <p class="price">£180.00<span>/6-week course</span></p>
        <ul>
          <li>6-week beginners’ self-defence course</li>
          <li>2 × 1-hour session per week</li>
        </ul>
      
      </div>
      <div class="pricing-plan">
        <h2>Fitness Room</h2>
        <p class="price">£6.00<span>/visit</span></p>
        <ul>
          <li>Use of fitness room – per visit</li>
        </ul>
       
      </div>
      <div class="pricing-plan">
        <h2>Personal Training</h2>
        <p class="price">£35.00<span>/hour</span></p>
        <ul>
          <li>Personal fitness training – per hour</li>
        </ul>
   
      </div>
    </div>
  </div>
</body>
</html>
