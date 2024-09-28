<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <!-- Font Awesome Icons cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Poppins:wght@300;400;500&display=swap">
    <style>
        /* Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Poppins:wght@300;400;500&display=swap');
        
        /* Custom Martial Arts Font */
        @font-face {
            font-family: 'MartialArtsFont';
            src: url('path-to-your-font/MartialArtsFont.ttf'); /* Replace with the actual path to your font file */
        }

        * {
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            transition: 0.2s linear;
          
            font-family: "Poppins", sans-serif;
        }

   

        .btn {
            margin-top: 2rem;
            width: 150px;
            padding: 12px;
            color: #fff;
                        font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background: rgba(212, 48, 48, 0.76);
            transition: 0.4s;
        }

        /* Header */
        .header {
              position: fixed;
              background-color:#12306a;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1rem 2%;
            display:flex;
            align-items: center;
            color: #fff;
            justify-content: space-between;
        }
        .logo-image {
    width: 100px; /* Adjust the width as needed */
    height: auto; /* Maintain aspect ratio */
}
        .header .logo {
            font-family: 'MartialArtsFont', sans-serif;
            font-size: 22px;
            font-weight: bolder;
            color: #fff;
            padding-right: 10px;
            margin-right: 20rem;
        }

        .header .logo i {
            color: #fff;
            padding: 0.5rem;
        }

        .header .navbar a {
            font-size: 1.1rem;
            margin: 0 1rem;
            color: #fff;
        }

        .header .navbar a:hover {
            color: #baa6cf;
        }

        .header .btn {
            background: transparent;
            color: tomato;
            border: 1px solid tomato;
            font-size: 12px;
            padding: 8px;
        }
         /* Profile Picture */
#profile-menu-item {
    margin-right: 10px; /* Add some spacing between the profile picture and "Edit Profile" button */
}

#profile-pic {
    width: 40px; /* Adjust the width as needed */
    height: 40px; /* Adjust the height as needed */
    border-radius: 50%; /* Makes the image round */
    border: 2px solid #fff; /* Add a white border */
    cursor: pointer;
    transition: transform 0.2s ease-in-out; /* Add a slight hover effect */
}

#profile-pic:hover {
    transform: scale(1.1); /* Enlarge the image on hover */
}

        /* Rest of your header styles */
    </style>
</head>
<body>
    
    <header class="header">
        <a href="#" class="logo">
        <span class="material-symbols-outlined">sports_gymnastics</span>
            <i class ="fas fa-dumbell"></i>Gorkha Martial Arts
        </a>
        <nav class="navbar">
            <a href="/assignment/home.php">Home</a>
            <a href="/assignment/abouts.php">About US</a>
            <a href='/assignment/timetable.php'>Time Table</a>
            <a href="#">||</a>
            <?php if (isset($_SESSION['user']))  { ?>
                <a href="/assignment/membership.php">Pricing</a>
             
            <a href="/assignment/logout.php">Log Out</a>
            <a href="/assignment/delete.php">Delete Profile</a>
       
            <a href="/assignment/prof.php" class="btn">Edit Profile</a>
            <?php } else{
                ?>
                  <a href="/assignment/login.php">Log In</a>
                <?php }  ?>
        </nav>
    </header>
</body>
</html>
