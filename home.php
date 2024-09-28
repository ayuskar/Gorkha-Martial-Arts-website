    <?php 
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gorkha Martial Arts</title>
        <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
                background-image: url('second.jpg');
                background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* Keeps the background image fixed while scrolling */
        background-blend-mode: multiply; /* Blend the background image with the background color */
        background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black overlay */
        filter: grayscale(30%);

            }

            /* Your CSS styling goes here */
                .max-width{
                max-width: 1300px;
                padding: 108px 20px;
                margin: auto;
            }
            section{
                padding: 50px 0 50px 0;
            }
            .home{
                display: flex;
                text-transform:capitalize;
            }
            .home .max-width{
                width: 50%;
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


            /* Home Section */
            .max-width{
                max-width: 1300px;
                padding: 108px 20px;
                margin: auto;
            }
            section{
                padding: 50px 0 50px 0;
            }
            #facilities img {
        max-width: 50%;
        height: auto; /* Maintain aspect ratio */
    }

            .home{
                display: flex;
                text-transform:capitalize;

            }
            .home .max-width{
                width: 100%;
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


            .container{
                margin-left: 300px;
            
                width: 85vmin;
                position: absolute;
                transform: translate(-50%, -50%);
                top: 57%;
                left:50%;
                overflow: hidden;
                border: 20px solid #ffffff;
                border-radius: 8px;
                box-shadow: 10px 25px 30px rgba(30, 30, 200, 0.3);
            }
            .container img{
                border-radius: 8px;
            }
            .wrapper{
                width: 100%;
                display: flex;
                animation: slide 16s infinite;
            }
            @keyframes slide{
                0%{
                    transform: translateX(0);
                }
                25%{
                    transform: translateX(0);
                }
                30%{
                    transform: translateX(-100%);
                }
                50%{
                    transform: translateX(-100%);
                }
                55%{
                    transform: translateX(-200%);
                }
                75%{
                    transform: translateX(-200%);
                }
                80%{
                    transform: translateX(-300%);
                }
                100%{
                    transform: translateX(-300%);
                }
            }
            img{
                width: 100%; 
            }
            /* Introduction Section */
    .introduction {
        background-color: #f7f7f7; /* Choose a background color that fits your design */
        padding: 50px 0;
        text-align: center;
    }
    #facilities {
        margin-top: 20px;
    }

    #facilities h2 {
        font-size: 1.5em;
        border-bottom: 1px solid #333;
        padding-bottom: 5px;
        color:white;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table img {
        max-width: 50%;
        height: auto;
        display: block;
        margin: 0 auto;
        border-radius: 5px;
    }

    table td {
        text-align: center;
        padding: 20px;
    }

    table p {
        margin-top: 10px;
        color:white;
    }

    .introduction h3 {
        font-size: 24px;
        color: #333;
        max-width: 800px;
        margin: 0 auto;
    }
    
   
    #btn {
    display: inline-block;
    padding: 10px 20px;
    background-color:orange; /* Button background color */
    color: #fff; /* Text color */
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#btn:hover {
    background-color: #0056b3; /* Button background color on hover */
}
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  color: #d9d9d9;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.content1{
  position: relative;
  margin: 130px auto;
  text-align: center;
  padding: 0 20px;
}
.content1 .text{
  font-size: 2.5rem;
  font-weight: 600;
  color: #202020;
}
.content1 .p{
  font-size: 2.1875rem;
  font-weight: 600;
  color: #202020;
}
footer{
  position: fixed;
  bottom: -560px;
  width: 100%;
  background: #0d456a;
}
.main-content{
  display: flex;
}
.main-content .box{
  flex-basis: 50%;
  padding: 10px 20px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
}
.box .content{
  margin: 20px 0 0 0;
  position: relative;
}
.box .content:before{
  position: absolute;
  content: '';
  top: -10px;
  height: 2px;
  width: 100%;
  background: #1a1a1a;
}
.box .content:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: #f12020;
  top: -10px;
}
.left .content p{
  text-align: justify;
}
.left .content .social{
  margin: 20px 0 0 0;
}
.left .content .social a{
  padding: 0 2px;
}
.left .content .social a span{
  height: 40px;
  width: 40px;
  background: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}
.left .content .social a span:hover{
  background: #f12020;
}
.center .content .fas{
  font-size: 1.4375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
}
.center .content .fas:hover{
  background: #f12020;
}
.center .content .text{
  font-size: 1.0625rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content .phone{
  margin: 15px 0;
}
.right form .text{
  font-size: 1.0625rem;
  margin-bottom: 2px;
  color: #656565;
}
.right form .msg{
  margin-top: 10px;
}
.right form input, .right form textarea{
  width: 100%;
  font-size: 1.0625rem;
  background: #151515;
  padding-left: 10px;
  border: 1px solid #222222;
}
.right form input:focus,
.right form textarea:focus{
  outline-color: #3498db;
}
.right form input{
  height: 35px;
}
.right form .btn{
  margin-top: 10px;
}
.right form .btn button{
  height: 40px;
  width: 100%;
  border: none;
  outline: none;
  background: #f12020;
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
}
.right form .btn button:hover{
  background: #000;
}
.bottom center{
  padding: 5px;
  font-size: 0.9375rem;
  background: #151515;
}
.bottom center span{
  color: #656565;
}
.bottom center a{
  color: #f12020;
  text-decoration: none;
}
.bottom center a:hover{
  text-decoration: underline;
}
@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
}
        </style>
    </head>
    <body>
        <?php require('header.php'); ?>
        <section class="home">
            <div class="max-width">
                <div class="home-content">
                    <h3>help for ideal <br> body fitness</h3>
                    <p>"Unleash your inner warrior at Gorkha Martial Arts - where strength meets discipline."</p>
                        <a href='register.php' class="btn">Get started</a>
                </div>
            </div>
        </section>
        
        <div class="container">
            <div class="wrapper">
                <img src="ninth.jpg">
                <img src="fifth.jpg">
    <img src="siuu.jpg">
                <img src="seventh.jpg">
            </div>
        </div>
    </section>
<footer>
    <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
          <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10078.006609024057!2d83.98119385301606!3d28.206534448312783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f82f7c76b1d96b%3A0xf252411984ae8742!2sSample%20Gym%20Location%2C%20Pokhara%2C%20Nepal!5e0!3m2!1sen!2sus!4v1630901274960!5m2!1sen!2sus"
                width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            <div class="social">
              <a href="https://facebook.com"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>
        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Prithvi Chowk, Pokhara</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+977,9853276124 - 063,23456</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">gorkhamartialarts@gmail.com</span>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="message.php" method="post">
            <form action="message.php" method="post">
    <div class="email">
        <div class="text">Email *</div>
        <input type="email" name="email" required>
    </div>
    <div class="message">
        <div class="text" id="message">Message *</div>
        <textarea name="message" rows="2" cols="25" required></textarea>
    </div>
    <div class="btn">
        <button type="submit">Send</button>
    </div>
</form>
            </form>
          </div>
        </div>
      </div>
        <div class="bottom-details">
        <div class="bottom_text">
            <span class="copyright_text">Copyright © 2021 <a href="#">CodingLab.</a>All rights reserved</span>
            <span class="policy_terms">
            <a href="#">Privacy policy</a>
            <a href="#">Terms & condition</a>
            </span>
        </div>
        </div>
    </footer>


    </body>
    </html>
