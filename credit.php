<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Waste | CREDIT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/credit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="CSS/footer.css">
</head>

<body>
    <header class="head">
        <div class="navbar">
            <div class="logo">E-WASTE</div>
            <div class="main-nav">
                <ul>
                    <a href="index.html"><li>HOME</li></a>
                    <a href="locate.html"><li>LOCATE</li></a>
                    <a href="credit.php"><li style="color: #1B6B95;;">CREDIT</li></a>
                    <a href="about.php"><li>ABOUT</li></a>
                    <a href="bot.html"><li>BOT</li></a>
                </ul>
            </div>
            <div class="user-account">
                <a href="index-login.html"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>


    <main>
        <div class="bg-main-image">
            <img src="IMAGES/credit-main-bg.png" alt="Error loading image">
                <div class="big-gap">
                    <div class="text-part1">
                        <p>Earn credit points by giving your e-waste for recycling.</p>
                        <a href="exchange.html"><button class="btn-click-here">Click here</button></a>
                    </div>
                    <div class="text-part2">
                        <p>S e a r c h</p>
                        <p>R e c y c l e</p>
                        <p>E a r n</p>
                    </div>
                </div>
        </div>
        <div class="products-recycle">
            <div class="heading">
                <h3>Products We Recycle</h3>
                <hr>
                <br><br>
            </div>
            <div class="para-product-recycle">
                <p>Our e-Waste Management department is one of the biggest electrical and electronic recyclers in India. The process we follow when recycling your old product is very simple. We take all the necessary steps to ensure that your old product is fully recycled and not just dumped. Our facility has a quality check area where we test each unit before it is sent to our shredding centre. This ensures that no product is sold as scrap even if it is not working properly or has some minor damage. We offer a wide range of services to the end consumer, including collection, dismantling, recycling and remanufacturing of electronic and electrical equipment.</p>
            </div>
            <hr id="horizontal-line">
            <div class="devices-images">
                <img src="IMAGES/Devices.png" alt="Error loading image">
            </div>
        </div>
        <hr>
        <div class="last-section-credit">
            <div class="dispose-text">
                <p>Want to <span>Dispose</span> Off your e-Waste <span>Today</span></p>
            </div>
            <div class="form">
                <?php

                include 'database/credit_email.php';

                ?>
                <form action="credit.php" method="post">
                    <div class="label-email"><label for="email">We saved a spot for your e-mail</label></div>
                <div class="whole-email">
                    <div>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                    </div>   
                    <div>
                        <input type="submit" class="submit-btn-email-credit" name="submit" onclick="emails()">
                    </div>
                </div>
                </form>
            </div>
        </div>
        <br><br>
    </main>

    <footer>
        <div class="footer">
            <div class="connect">
                <p>CONNECT WITH US!</p>
            </div>
            <div class="social-links">
                <a target="_blank" href="https://instagram.com/amit_sahu_13?igshid=OGQ5ZDc2ODk2ZA=="><i
                        class="fa-brands fa-instagram"></i> Instagram</a>
                <a target="_blank" href="https://www.linkedin.com/in/amit-sahu-08ab62220/"><i
                        class="fa-brands fa-linkedin"></i> Linkedin</a>
                <a target="_blank" href="https://www.youtube.com/watch?v=DpEiNciVLwM"><i
                        class="fa-brands fa-youtube"></i> Youtube</a>
            </div>
            <div class="copyright">
                <p>COPYRIGHT &copy; BYTECLEAN | 2023 - MEDICAPS UNIVERSITY</p>
            </div>
        </div>
    </footer>
    <script src="JAVA-SCRIPTS/alert.js"></script>
</body>

</html>