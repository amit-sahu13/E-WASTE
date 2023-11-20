<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Waste | Agent</title>
    <link rel="stylesheet" href="CSS/technicalagentform.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>

<body>
    <header class="head">
        <div class="navbar">
            <div class="logo">E-WASTE</div>
            <div class="main-nav">
                <ul>
                    <a href="index.html">
                        <li>HOME</li>
                    </a>
                    <a href="locate.html">
                        <li>LOCATE</li>
                    </a>
                    <a href="credit.php">
                        <li style="color: #1B6B95;">CREDIT</li>
                    </a>
                    <a href="about.php">
                        <li>ABOUT</li>
                    </a>
                    <a href="bot.html">
                        <li>BOT</li>
                    </a>
                </ul>
            </div>
            <div class="user-account">
                <a href="index-login.html"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>

    <div class="first-para-div">
        <p>EXCHANGE OLD DEVICE</p>
    </div>
    <h2 class="center-text">Connect with our Technical Agent</h2>

    <div class="forms">
        <?php

        include 'database/technical_agent.php';

        ?>
        <form action="technicalagent.php" method="post">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" placeholder="Enter your Name">
            <br><br>
    
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="Enter your Email">
            <br><br>
    
            <label for="contact">Mobile Number</label><br>
            <input type="number" id="contact" name="contact" placeholder="Enter your Mobile Number">
            <br><br>
    
            <label for="address">Address</label><br>
            <input type="text" id="address" name="address" placeholder="Enter your Address">
            <br><br>
    
            <label for="model">Model Number</label><br>
            <input type="text" id="model" name="model" placeholder="Enter your Device Model Number">
            <br><br>
            <input class="btn-submit" name="submit" type="submit" value="Confirm" onclick="technical()">
        </form>
    </div>

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