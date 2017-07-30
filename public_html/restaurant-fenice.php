<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fenice Palas</title>
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
                <h1>Fenice Palas</h1>    
                
                <img src="img/fenice.jpg" alt="Fenice Pic" id="REST-pic">
                
            </div>
            
            <div id="restaurant-desc">
            
                <h1>About Us</h1>    
                <div id="specialty-section">
                
                    <img src="img/icons/specialty3.svg" alt="Specialty" id="specialtyIcon">
                
                    <p>Arab Food</p>
                
                    <div class="clear"></div>
                </div>
                
                <div id="location-section">
                
                    <img src="img/icons/location.svg" alt="Specialty" id="locationIcon">
                
                    <p>Iasi, Romania</p>
                    
                    <div class="clear"></div>
                </div>
                
                
                  <div id="price-section">
                
                    <img src="img/icons/pricerange.svg" alt="Specialty" id="priceIcon">
                
                    <p>100 $ - 300 $</p>
                    
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
            
            <p>Sophisticated and tempting restaurant Elegant interior, luxurious atmosphere
Outstanding food and good service
The best of the best for unique people!
Fenice Palas</p>
            
            <p></p>
            
            <p>
</p>
       <div id="contact-info">
           <h1>Contact information</h1>
       <div id="social-wrapper">
          <h3>Social Handles</h3>
           <a href="https://www.facebook.com/fenice.palas/"><img src="img/icons/facebook-white.svg" alt="Facebook" id="facebook-icon"></a>
           
           <a href="https://www.facebook.com/fenice.palas/"><img src="img/icons/twitter-white.svg" alt="Twitter" id="twitter-icon"></a>
           </div>
           
           
           <div id="contact-wrapper">
              <h3>Contact Information</h3>
               <div id="icons-wrap">
               <img src="img/icons/phone-receiver-white.svg" alt="Phone No." id="phone-icon">
               <p>
+40 0232 452 557</p>
               
               <img src="img/icons/home-button.svg" alt="Homepage" id="home-icon">
               <a href="http://www.fenicepalas.ro/">www.fenicepalas.ro/</a>
               
               
               <img src="img/icons/black-back-closed-envelope-shape.svg" alt="E-Mail" id="mail-icon">
               <p>contact@fenicepalas.ro</p>
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
