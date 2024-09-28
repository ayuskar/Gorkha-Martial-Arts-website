<?php
ini_set('display_error', 1);
ini_set('display_startup_error',1);
    error_reporting(E_ALL);
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <!-- Font Awesome Icons cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Poppins:wght@300;400;500&display=swap">
    <title>Document</title>
    <style>
           /* Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Poppins:wght@300;400;500&display=swap');
        
        /* Custom Martial Arts Font */
        @font-face {
            font-family: 'MartialArtsFont';
            src: url('path-to-your-font/MartialArtsFont.ttf'); /* Replace with the actual path to your font file */
        }
            * {
            margin: 6px;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            transition: 0.2s linear;
          
            font-family: "Poppins", sans-serif;
        }
                .header {
            display: flex;
           
            align-items: center;
            margin: 20px 0;
        }

        .logo {
            font-size: 24px;
            color: white;
            text-decoration: none;
            font-family: 'Material Symbols Outlined';
        }
    body {
            font-family: Arial, sans-serif;
            background-image: url('reg.jpg');
            background-size: cover;
    background-position: center top;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background image fixed while scrolling */
    background-blend-mode: multiply; /* Blend the background image with the background color */
    background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black overlay */
    filter: grayscale(30%);
        }
 
        form {
            max-width: 630px;
            margin-left: -47px;
        
        width: 91vmin;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 480%;
        left:50%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="address"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
            font-size: 14px;
        }
        h1{
            color:white;
        margin-right: -10px;

        }
        input[type="file"] {
            margin-bottom: 10px;
        }

        .gender label {
            margin-right: 10px;
        }

        .message textarea {
            height: 80px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
/* Add this CSS code to your <style> section */
p {
    text-align: center;
    color: white;
    
    font-size: 20px; /* You can adjust the font size as needed */
    margin-bottom: -35px; /* Add some space above the <p> element */
}

        input[type="submit"]:hover {
            background-color: #45a049;
        }
           p a {
            color: whitesmoke;
            text-decoration: none;
            font-family: Garamond;
            font-size: 12;
        }

        /* Style for the link when hovered */
        p a:hover {
            text-decoration: underline;
        }
        /* Fixed footer styles */
.fixed-footer {
    position: fixed;
    bottom: -1033px;
   
    width: 100%; color: #fff; text-align: center; padding: 10px 0; z-index:
    100; /* Make sure it's on top of other content */ }

/* Social icons styles */
.social-icons {
    margin-top: 39px;
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
/* Apply basic button styles */
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Style for primary button */
.btn-primary {
    background-color: #4CAF50;
    color: white;
    border: none;
}

/* Hover style for primary button */
.btn-primary:hover {
    background-color: #45a049;
}
.home{
            display: flex;
        }
        .home .max-width{
            width:60%;
            display: flex;
        }
        .home .home-content{
            width: 50%;
            padding: 2rem;
        }

        .home h3 {
            color: #fff;
            font-size: 5rem;
            font-family: 'Philosopher', sans-serif;
            margin-bottom: 1rem; /* Add some space between h3 and p */
        }

        .home p {
            color: rgb(194, 191, 191);
            font-size: 12px;
            margin-bottom: 2rem; /* Add some space between p and button */
        }
        div.personname,
div.address,
div.email,
div.password,
div.confirm-password,
div.phone,
div.gender,
div.photo,
div.message {
    margin-bottom: 20px; /* Adjust the margin as needed */
}

    </style>

</head>
<body>
<script>
function validateName(input) {
    var name = input.value;
    var namePattern = /^[a-zA-Z ]*$/; // Regular expression for alphabets and spaces only

    if (!namePattern.test(name)) {
        document.getElementById("name-error").textContent = "Name should contain alphabets and spaces only.";
        input.setCustomValidity("Name should contain alphabets and spaces only.");
    } else {
        document.getElementById("name-error").textContent = "";
        input.setCustomValidity(""); // Clear the custom validity message
    }
}
function validateEmail(input) {
    var email = input.value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; // Regular expression for email address

    if (!emailPattern.test(email)) {
        document.getElementById("email-error").textContent = "Invalid email address format.";
        input.setCustomValidity("Invalid email address format.");
    } else {
        document.getElementById("email-error").textContent = "";
        input.setCustomValidity(""); // Clear the custom validity message
    }
}
function validatePhoneNumber(input) {
    var phoneNumber = input.value;
    var phoneNumberPattern = /^[0-9]*$/; // Regular expression for numbers only

    if (!phoneNumberPattern.test(phoneNumber)) {
        document.getElementById("phone-error").textContent = "Phone Number should contain numbers only.";
        input.setCustomValidity("Phone Number should contain numbers only.");
    } else {
        document.getElementById("phone-error").textContent = "";
        input.setCustomValidity(""); // Clear the custom validity message
    }
}
</script>

    <?php
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
    <header class="header">

            <a href="#" class="logo">
        <span class="material-symbols-outlined">sports_gymnastics</span></a>
<h1>Gorkha Martial Arts</h1></header>
<p>Register here !</p>

    </section>
    <form action="register_processing.php" method="post" 
    enctype="multipart/form-data">
        <div class="personname">
            <label>Name: </label>
            <input type="text" minlength="2" name="name" required placeholder="Name" oninput="validateName(this)">
<p id="name-error" style="color: red;"></p>
        </div>
         <div>
            <label> Address</label>  
            <input type="address" name="address" required placeholder="Address">
        </div>
        <div>
    <label>Email</label>
    <input type="email" name="emailaddress" required placeholder="Email" oninput="validateEmail(this)">
    <p id="email-error" style="color: red;"></p>
</div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required placeholder="Password">
            <?php
              if (isset($_SESSION['password_error'])){
                echo  $_SESSION['password_error'];
                unset($_SESSION['password_error']);
              } //flash message
              ?>
        </div>
        <div>
            <label>Re-Type Password</label>
            <input type="password" name=" confirm_password" placeholder="Re-Type Password">
        </div>
        <div>
    <label>Phone Number</label>
    <input type="text" name="phone" required placeholder="Phone Number" oninput="validatePhoneNumber(this)">
    <p id="phone-error" style="color: red;"></p>
</div>
        <div>
            <label>Gender</label>
            <div class="gender">
            <label><input type="radio" name="gender" value="1">Male</label>
            <label><input type="radio" name="gender" value="2">Female</label>
            </div>           
        </div>

        <div>
            <label>Photo</label> 
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
        
        </div>
        <div class="message">
            <label>Message</label> 
            <textarea name="message"></textarea>     
        </div>
        <div>    
            <input type="submit" name="register" value ="Register">
        
      <a href="login.php"class="btn btn-primary"> Already have an account, login!</a>
    </form>
            

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