<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Beer Workshop</title>
        <link rel="stylesheet" href="css/restaurant-style.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        <!-- Menu -->

        <?php include '../resources/part/header.php'; ?>

        <!-- Content -->

        <div id="content-wrapper">

            <!-- Profile Box -->

            <div id="profile-box">

                <div id="restaurant-img">
                    <h1>The Beer Workshop</h1>    

                    <img src="img/atelierul.jpg" alt="AB Pic" id="REST-pic">

                </div>

                <div id="restaurant-desc">

                    <h1>About Us</h1>    
                    <div id="specialty-section">

                        <img src="img/icons/specialty3.svg" alt="Specialty" id="specialtyIcon">

                        <p>Traditional food and homebrewn beer</p>

                        <div class="clear"></div>
                    </div>

                    <div id="location-section">

                        <img src="img/icons/location.svg" alt="Specialty" id="locationIcon">

                        <p>Iasi, Romania</p>

                        <div class="clear"></div>
                    </div>


                    <div id="price-section">

                        <img src="img/icons/pricerange.svg" alt="Specialty" id="priceIcon">

                        <p>50 $ - 100 $</p>

                        <div class="clear"></div>
                    </div>

                    <button type="button" id="bookBtn"><span>Book</span></button>

                </div>

                <div class="clear"></div>

            </div>

            <!-- Page Info -->

            <div id="page-content">
                <h1 id="desc-heading">Description</h1>
                <p>
                    At the Beer workshop, loyal customers receive free of charge the service of locking their personal pints. We are the only in-house in Iasi which offers a locked box for your personalized mug, the one that truly represents you. In order to use this service, you needn’t do much.</p>

                <p>Known being the fact that the motto of the Beer Workshop is“the place where you can eat and drink by the book ", it is understandable that you will find here a library well garnished.</p>

                <p>Since September 16, 2011, the opening date of the Beer workshop, there have played in our location a series of successful bands from the musical area of Iasi. </p>

                <p>
                </p>
                <div id="contact-info">
                    <h1>Contact information</h1>
                    <div id="social-wrapper">
                        <h3>Social Handles</h3>
                        <a href="https://www.facebook.com/atelieruldebere/"><img src="img/icons/facebook-white.svg" alt="Facebook" id="facebook-icon"></a>

                        <a href="https://www.facebook.com/atelieruldebere/"><img src="img/icons/twitter-white.svg" alt="Twitter" id="twitter-icon"></a>
                    </div>


                    <div id="contact-wrapper">
                        <h3>Contact Information</h3>
                        <div id="icons-wrap">
                            <img src="img/icons/phone-receiver-white.svg" alt="Phone No." id="phone-icon">
                            <p>
                                +40 0232 452 557</p>

                            <img src="img/icons/home-button.svg" alt="Homepage" id="home-icon">
                            <a href="http://www.atelieruldebere.ro/en/">www.atelieruldebere.ro</a>


                            <img src="img/icons/black-back-closed-envelope-shape.svg" alt="E-Mail" id="mail-icon">
                            <p>AB@atelieruldebere.ro</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

        </div>



        <script src="js/script.js"></script>
    </body>
</html>
