    <?php 
    session_start();
    if ( isset( $_SESSION['user'])){
        $_SESSION['msg'] = "Already logged in.";
        header('location: home.php');
        exit;
    }
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="style.css">
        <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image:url('log.jpg');
        background-size:cover;
    }
    .container{
        width: 100%;
        display: flex;
        max-width: 850px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
    .login{
        width: 400px;
    }
    form{
        width: 250px;
        margin: 60px auto;
    }
    h1{
        margin: 20px;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
    }

    p{
        text-align: center;
        margin: 10px;
    }
    hr{
        border-top: 2px solid tomato;
    }

    .pic img{
        width: 450px;
        height: 100%;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }

    form label{
        display: block;
        font-size: 16px;
        font-weight: 600;
        padding: 5px;
    }
    input{
        width: 100%;
        margin: 2px;
        border: none;
        outline: none;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid gray;
        text-transform:none; 
        font-family: "Times New Roman";
    }
    button{
        border: none;
        outline: none;
        padding: 8px;
        width: 252px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        border-radius: 5px;
        background: tomato;
    }
    button:hover{
        background: rgba(214, 86, 64, 1);
    }
    p{
        margin: 20px;
    }
    a{
        color: black;
        text-decoration: none;
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
        <div class ="header">
            <?php require('header.php'); ?>    </div>
        <div class="container">
            <div class="login">
            <form action ="login_processing.php" method="post">
                <form>
                    <h1>Login</h1>
                    <hr>
                    <p>Explore the World!</p>
                    <label>Email</label>
                    <input type="text" name="email">
                    <label>Password</label>
                    <input type="password" name="password"x>
                    <button>Submit</button>
             
                <closeform></closeform></form>
                <form action="forgot_password.php" method="get">
    <button type="submit">Forgot Password</button>
</form>
            </div>
            <div class="pic">
                <img src="ninth.jpg">
            </div>
        </div>
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
    </footer>
    </body>
    </html>

