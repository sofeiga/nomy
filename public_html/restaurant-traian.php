<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Hotel Traian</title>
    <link rel="stylesheet" href="restaurant-style.css">
    
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <!-- Menu -->
    
    <nav id="primary-navigation">
        <a href="/homepage.html" id="header-logo">
            <img src="img/logo-nomy.png" alt="Nomy Logo" width="140px">
        </a>
        <ul>
             <li>
                <a href="homepage.html">Home</a>
            </li>

            <li>
                <a href="restaurant-listing.html">Restaurants</a>
            </li>

            <li>
                <a href="event-listing.html">Events</a>
            </li>

            <li>
                <a href="#">About Us</a>
            </li>

        </ul>
        <div class="clear"></div>
        <div class="userData">
            <h1>Placeholder</h1>
        </div>
    </nav>
    
    <!-- Content -->
    
    <div id="content-wrapper">
    
        <!-- Profile Box -->
        
        <div id="profile-box">
            
            <div id="restaurant-img">
                <h1>Grand Hotel Traian</h1>    
                
                <img src="img/traian.jpg" alt="Traian Pic" id="REST-pic">
                
            </div>
            
            <div id="restaurant-desc">
            
                <h1>About Us</h1>    
                <div id="specialty-section">
                
                    <img src="img/icons/specialty3.svg" alt="Specialty" id="specialtyIcon">
                
                    <p>Luxury Cooking</p>
                
                    <div class="clear"></div>
                </div>
                
                <div id="location-section">
                
                    <img src="img/icons/location.svg" alt="Specialty" id="locationIcon">
                
                    <p>Iasi, Romania</p>
                    
                    <div class="clear"></div>
                </div>
                
                
                  <div id="price-section">
                
                    <img src="img/icons/pricerange.svg" alt="Specialty" id="priceIcon">
                
                    <p>300 $ - 500 $</p>
                    
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
            </p>
            
            <p>The Traian Restaurant, or the Grand Café Traian, is located in the Traian Hotel building, built by Scarlat Pastia, Mayor of Iasi, between 1877-1879. Although the shops in Unirii Square and on the Arcu and Lăpuşneanu streets made a considerable profit, the mayor decided to demolish them to build a national theater. The project was not carried out, but instead of the cultural edifice, the Hotel Traian was built.</p>
            
            <p>Thanks to the quality of the Eiffel Bridge in Ungheni, Scarlat Pastia also appeals to the famous French engineer Gustave Eiffel (the author of the masterpieces of modern art such as the Eiffel Tower in Paris and the New York Statue of Liberty) to build the building project. The building was built in French neo-classical style, on a metal structure (at that time a novelty), with cast iron columns and metal platforms.</p>
            
            <p>In the premises of Traian Restaurant took place important events such as the banquet of the XXIth anniversary of the "Junimea" Literary Society (1884), the celebration of the centenary of Horia's Resurrection, Cloşca and Crişan (October 21, 1884), attended by Mihai Eminescu And Ion Creanga. Ion Luca Caragiale read for the first time the manuscript of the play A Lost Letter, and in 1918, for a short period, the Romanian Government functioned in the building.</p>
            
       <div id="contact-info">
           <h1>Contact information</h1>
       <div id="social-wrapper">
          <h3>Social Handles</h3>
           <a href="https://www.facebook.com/restauranttraian.iasi/"><img src="img/icons/facebook-white.svg" alt="Facebook" id="facebook-icon"></a>
           
           <a href="https://www.facebook.com/restauranttraian.iasi/"><img src="img/icons/twitter-white.svg" alt="Twitter" id="twitter-icon"></a>
           </div>
           
           
           <div id="contact-wrapper">
              <h3>Contact Information</h3>
               <div id="icons-wrap">
               <img src="img/icons/phone-receiver-white.svg" alt="Phone No." id="phone-icon">
               <p>
+40 0232 452 557</p>
               
               <img src="img/icons/home-button.svg" alt="Homepage" id="home-icon">
               <a href="http://restauranttraian.ro/">www.restauranttraian.ro/</a>
               
               
               <img src="img/icons/black-back-closed-envelope-shape.svg" alt="E-Mail" id="mail-icon">
               <p>contact@restauranttraian.ro</p>
           </div>
           <div class="clear"></div>
           </div>
            </div>
        </div>
    
    </div>
    
    <footer id="footer">
        <img src="img/icons/cancel.svg" alt="Close" id="close-icon">
        <p>This web application is made for educational purposes only. All restaurants featured are not represented in any way by the Nomy web application.</p></footer>
    
    <script src="script.js"></script>
</body>
</html>
