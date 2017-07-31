<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomy | Reservation Page</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="js/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css" />

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
<?php include '../resources/part/header.php'; ?>
    <div id="content-wrapper">

        <section id="CTA">
            <div class="slideshow">
                
                <div><img src="img/atelierul.jpg" alt="Atelierul de Bere" class="imgCarusel">
                <div class="restaurant-content">
                    <h1>Specialty of the week</h1>
                    <p class="specialty-title">Roast beef</p>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum vLorem ipsum Lorem ipsum Lorem ipsum</p>
                    <img src="img/roast-beef.jpg" alt="AB Specialty">
                </div></div>
               
                 <div><img src="img/salsa.png" alt="Atelierul de Bere" class="imgCarusel">
                <div class="restaurant-content">
                    <h1>Specialty of the week</h1>
                    <p class="specialty-title">Burrito</p>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum vLorem ipsum Lorem ipsum Lorem ipsum</p>
                    <img src="img/burrito.jpeg" alt="Salsa Specialty">
                </div></div>
                
                <div><img src="img/shanghai.jpg" alt="Shanghai" class="imgCarusel">
                <div class="restaurant-content">
                    <h1>Specialty of the week</h1>
                    <p class="specialty-title">Chicken Gong Pau</p>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum vLorem ipsum Lorem ipsum Lorem ipsum</p>
                    <img src="img/roast-beef.jpg" alt="AB Specialty">
                </div><</div>
                
                <div><img src="img/fenice.jpg" alt="Atelierul de Bere" class="imgCarusel">
                <div class="restaurant-content">
                    <h1>Specialty of the week</h1>
                    <p class="specialty-title">Halla</p>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum vLorem ipsum Lorem ipsum Lorem ipsum</p>
                    <img src="img/roast-beef.jpg" alt="AB Specialty">
                </div></div>
                
                <div><img src="img/traian.jpg" alt="Atelierul de Bere" class="imgCarusel">
                <div class="restaurant-content">
                    <h1>Specialty of the week</h1>
                    <p class="specialty-title">Roast beef</p>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum vLorem ipsum Lorem ipsum Lorem ipsum</p>
                    <img src="img/roast-beef.jpg" alt="AB Specialty">
                </div><</div>

            </div>
            <div id="booking">
                <div id="button-change">
                <h2 id="rest-btn">Restaurants</h2><h2 id="event-btn">Events</h2>
                </div>
                <form action="book.php" method="get" id="first-form">
                    <select class="bookingInput">
                    <option class="optionStyle">Select a restaurant</option>
                    <option>Atelierul de Bere</option>
                    <option>Salsa Food</option>
                    <option>Shanghai</option>
                    <option>Restaurant Traian</option>
                    <option>Fenice Palas</option>
                </select>

                    <input type="text" name="date" class="datepicker bookingInput" placeholder="Select a date">
                    <input type="text" name="timepicker" class="wickedpicker bookingInput" placeholder="Select a time">
                    <select class="bookingInput">
                    <option class="optionStyle">Select the number of bookies</option>
                     <option>1</option>
                      <option>2</option>
                       <option>3</option>
                        <option>4</option>
                         <option>5</option>
                          <option>6</option>
                           <option>7</option>
                </select>


                    <div id="tableSelection">
                        <input type="checkbox" name="tableselect" id="tableSelect">
                        <p>I want to select my own table.</p>
                    </div>

                    <button type="submit" id="bookBtn"><span id="bookTxt">Book</span></button>
                </form>
<div id="booking-events" style="display:none;">
          <form action="" method="get">
                    <select class="bookingInput">
                    <option class="optionStyle">Select an event</option>
                    <option>Beer Night</option>
                    <option>Arabic Night</option>
                    <option>Mexican Fiesta</option>
                    <option>Masquerade</option>
                
                </select>

                    <input type="text" name="date" class="datepicker bookingInput" placeholder="Select a date">
                    <input type="text" name="timepicker" class="wickedpicker bookingInput" placeholder="Select a time">
                    <select class="bookingInput">
                    <option class="optionStyle">Select the number of bookies</option>
                     <option>1</option>
                      <option>2</option>
                       <option>3</option>
                        <option>4</option>
                         <option>5</option>
                          <option>6</option>
                           <option>7</option>
                </select>


                     <button type="submit" id="bookBtn"><span id="bookTxt">Book</span></button>
</div>

            </div>
        
            <div class="clear"></div>
        </section>

        <section>

        </section>



    </div>

                <script src="js/script.js"></script>
    <script type="text/javascript" src="js/slick/slick.min.js"></script>
</body>

</html>