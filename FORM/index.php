<?php

$response = $_GET['status'];
if($response == md5("sent")){
    $status = "message delivered";
}else{
    $status = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>Contact us</title>
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="logo"><img src="./logo.png" alt=""></div>
            <div class="info"> <h1>Contact Us</h1></div>
            <nav>
                <a href="#"><i class="fas fa-house"></i></a>
                <a href="#"><i class="fas fa-sign-out"></i></a>
                <p id="status">  </p>
            </nav>
        </div>
        <div class="form">
            <form action="./upload.php" method="post">
                <div class="input">
                    <input type="text" name="name" id="" required  placeholder="Your Name">
                </div>
                <div class="input">
                    <input type="email" name="email" id="" required placeholder="Your email">
                </div>
                <div class="input">
                    <input type="tel" name="phone" id="" required placeholder="Your Phone">
                </div>
                <div class="input">
                    <textarea name="msg" id="" cols="30" required rows="10" placeholder="What's Your Message For Us?"></textarea>
                </div>
                <div class="input">
                    <input type="submit" name="send" id="btn" value="SUBMIT">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>