<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Waste | ABOUT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/about.css">
    <link rel="stylesheet" href="CSS/connectwithus.css">
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
                        <li>CREDIT</li>
                    </a>
                    <a href="about.php">
                        <li style="color: #1B6B95;">ABOUT</li>
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

    <main>
        <div class="first-section">
            <img src="IMAGES/about-bg.png" alt="Error">
            <div class="text">
                <h3>What are we?</h3>
                <p>Our e-Waste Management is a sustainable and cost-effective company for disposing electronic waste
                    across the country. We provide comprehensive recycling services for getting rid of eWaste
                    efficiently and in environment friendly way and that makes our facility one of the most sustainable
                    in the country with zero waste discharge technology. Our team is committed to providing you with
                    reliable, affordable and sustainable solutions for managing your EEE waste.</p>
            </div>
        </div>

        <div class="second-section">
            <div class="vision">
                <h3>OUR VISION</h3>
                <hr>
                <p>Our e-Waste department believes in three principles: reduce, reuse and recycle. Our goal is to create
                    awareness around the need for responsible eWaste disposal in India. While many people know about
                    electronics recycling, we are committed to the task of creating an enabling environment for informal
                    recyclers by providing them with training on disposal techniques and safe practices.</p>
            </div>
            <div class="mission">
                <h3>OUR MISSION</h3>
                <hr>
                <p>We are committed to using our expertise, resources and experience to build a sustainable future for
                    the planet. We believe that e-waste is one of the most important issues to tackle in order to
                    protect our environment and our way of life. We have reached a point where we have become aware of
                    the damage caused by e-waste and are committed to making a difference.</p>
            </div>
        </div>

        <div class="map-section">
            <div class="map-image">
                <img src="IMAGES/map.gif" alt="Error">
            </div>
            <div class="process">
                <h3>OUR PROCESS</h3>
                <hr>
                <p>We have created a comprehensive process from beginning to end that will successfully ensure the
                    collection, transportation, reuse, and recycling of ewaste product in order to fulfill our
                    commitment and mission to improve the environment.</p>
                <br>
                <p>When you arrange for your e-waste to be picked up, our facilitators will gather and deliver the waste
                    to our R2-certified facilities. Our own fleet of vehicles oversees this reverse logistics procedure,
                    which is made possible by our channel partners. By doing this, we can directly guarantee the secure
                    delivery of both hazardous and non-hazardous e-waste to our facility.</p>
                <br>
                <p>We firmly believe that by reusing, reducing, and recycling, which is the three R’s of sustainability,
                    we can achieve our objective of responsible disposal of eWaste and building a greener environment
                    around us. Because of this, all of the e-waste is initially divided into different categories based
                    on the state of the product.</p>
            </div>
        </div>

        <div class="team">
            <h3>OUR TEAM</h3>
            <hr>

            <div class="amit">
                <img src="IMAGES/Profile 1.png" alt="Error">
                <div class="name">
                    <p class="name-person">Amit Sahu</p>
                    <p class="role">TEAM LEAD [BACK-END DEV.]</p>
                    <p class="team-name">BYTECLEAN</p>
                </div>
            </div>
            <div class="names-hr"></div>


            <div class="manmohan">
                <div class="name">
                    <p class="name-person">Manmohan Singh</p>
                    <p class="role">BACK-END DEV.</p>
                    <p class="team-name">BYTECLEAN</p>
                </div>
                <img src="IMAGES/Manmohan 1.png" alt="Error">
            </div>
            <div class="names2-hr"></div>


            <div class="amit">
                <img src="IMAGES/abhi 1.png" alt="Error">
                <div class="name">
                    <p class="name-person">Abhijeet Sushir</p>
                    <p class="role">FRONT-END DEVELOPER</p>
                    <p class="team-name">BYTECLEAN</p>
                </div>
            </div>
        </div>

        <?php

            include 'database/about_connect.php';

        ?>

        <div class="connects">
            <img src="IMAGES/connect.png" alt="Error">
            <div class="container2">
                <h2 class="center-text">Connect With Us</h2>
                <form action="about.php" method="post">
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" placeholder="Enter your Name">
                    <br>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" placeholder="Enter your Email">
                    <br>
                    <label for="contact">Mobile Number</label><br>
                    <input type="number" id="contact" name="contact" placeholder="Enter your Mobile Number">
                    <br>

                    <label for="message">Message</label><br>
                    <input type="text" id="message" name="message" placeholder="Enter your Address">
                    <br><br>
                    <input class="btn-submit" name="submit" type="submit" value="Submit" onclick="connects()">
                </form>
            </div>

        </div>
    </main>

    <footer>
        <div class="footer">
            <div class="connect">
                <p>CONNECT WITH US!</p>
            </div>
            <div class="social-links">
                <a target="_blank" href="https://instagram.com/amit_sahu_13?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i> Instagram</a>
                <a target="_blank" href="https://www.linkedin.com/in/amit-sahu-08ab62220/"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
                <a target="_blank" href="https://www.youtube.com/watch?v=DpEiNciVLwM"><i class="fa-brands fa-youtube"></i> Youtube</a>
            </div>
            <div class="copyright">
                <p>COPYRIGHT &copy; BYTECLEAN | 2023 - MEDICAPS UNIVERSITY</p>
            </div>
        </div>
    </footer>
    <script src="JAVA-SCRIPTS/alert.js"></script>
</body>

</html>