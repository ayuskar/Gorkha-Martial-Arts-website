<!DOCTYPE html>
<body>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Black+Ops+One&family=Cardo&family=Cormorant+Garamond:wght@500&family=Permanent+Marker&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500&display=swap');
    .{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Poppins', sans-serif;
    }
    .wrapper{
        background-color:#106fde;
        width:100%;
        height:100vh;
        padding:15px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .container{
        width:500px;
        background-color:white;
        padding:30px;
        border-radius:16px;
        background-color:rgba(0,0,0,0.8)0px 4px 12px;
    }
    .title-section{
        margin-botton:30px;
    }
    .title{
        color:#38475a;
        font-size:25px;
        font-weight:500;
        text-transform:capitalize;
        margin-bottom:10px;
    }
    .para{
        color:#38475a;
        font-weight:400;;
        line-height: 1.5;
        margin-bottom:20px;
        text-transform:capitalize;
    }
    .input-group{
        position: relative;;
    }
    .input-group .label-title{
        color:#38475a;
        text-transform:capitalize;
        margin-bottom:11px;
        font-size:14px;
        display:block;
        font-weight:500;
    }
    .input-group  input{
        width: 100%;
        background-color:none;
        color:#38475a;
        height:50px;
        fotn-size:16px;
        font-weight:300;
        border:1px  solid white;
        padding:9px 18px 9px 52px;
        outline:none;
        border-radius:8px;
        margin: bottom 20px; 
    }
    .input-group input::placeholder{
        color:#38475a;
        font-size:16px;
        font-weight:400;
    }
    .input-group .icon{
        position:absolute;
        color:#38475a;
        left:13px;
        top:calc(50% - 11px);
        text-align:center;
        font-size:23px;
    }
    .submit-btn{
          width:100%;
          background-color:#106fde;
          border:1px solid transparent;
          border-radius:8px;
          font-size:16px;
         color:white;
         padding:13px 24px;
         font-weight:500;
         text-align:center;
         text-transform:capitalize;
         cursor:pointer
    }
    .submit-btn :hover{
       opacity:0.95;
    }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Reset password page desing in html and css || Ravi Web </title> <!-- css link --><link rel="stylesheet" href="style.css">
<body>
    <?php require('header.php'); ?>
<div class="wrapper">
<div class="container">
<div class="title-section">
<h2 class="title">Reset Password</h2>

<p class="para">Enter your mail send link your mail please check and varify if your mail before account create you have a link inbox. Click link & your New Password </p>
</div>
<form action="reset_password.php" method="post" class="form">
    <div class="input-group">
        <label for="name" class="label-title">Your Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
    </div>
    <div class="input-group">
        <label for="email" class="label-title">Your Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
    </div>
    <div class="input-group">
        <label for="new_password" class="label-title">New Password:</label>
        <input type="password" name="new_password" id="new_password" placeholder="Enter your new password" required>
    </div>
    <div>
        <label>Re-type New Password</label>
        <input type="password" name="confirm_password" placeholder="confirm_password">
    </div>
    <button class="submit-btn" type="submit">Reset Password</button>
</form>

</div>
</div>
</body>
</html>
