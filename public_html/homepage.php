<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>

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
                <form action="book.php" method="get">
                    <select class="bookingInput">
                    <option class="optionStyle">Select a restaurant</option>
                    <option>Atelierul de Bere</option>
                    <option>Salsa Food</option>
                    <option>Shanghai</option>
                    <option>Restaurant Traian</option>
                    <option>Fenice Palas</option>
                </select>

                    <input type="text" name="date" id="datepicker" placeholder="Select a date" class="bookingInput">
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
            </div>
            
            <div class="clear"></div>
        </section>

        <section>

        </section>



    </div>

    <script src="script.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
</body>

</html>