<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Gym</title>
    <style>
        /* Reset default styles */
        body, h1, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        nav {
            background-color: #444;
            text-align: center;
            padding: 1rem;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .hero {
            background-image: url('gym_hero.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.5rem;
        }

        .services {
            display: flex;
            justify-content: center;
            margin: 2rem 0;
        }

        .service {
            text-align: center;
            padding: 1rem;
            flex: 1;
            max-width: 250px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 1rem;
        }

        footer {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Gym</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>

    <div class="hero">
        <div>
            <h1>Welcome to My Gym</h1>
            <p>Your path to a healthier lifestyle</p>
        </div>
    </div>

    <div class="services">
        <div class="service">
            <h2>Personal Training</h2>
            <p>Customized training plans tailored to your goals and fitness level.</p>
        </div>
        <div class="service">
            <h2>Group Classes</h2>
            <p>Join our energetic group classes led by experienced instructors.</p>
        </div>
        <div class="service">
            <h2>Cardio Equipment</h2>
            <p>Get your heart pumping with our state-of-the-art cardio machines.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 My Gym. All rights reserved.</p>
    </footer>
</body>
</html>
