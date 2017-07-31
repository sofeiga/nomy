<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salsa Food</title>
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
                <h1>Salsa Food</h1>    
                
                <img src="img/salsa.png" alt="Shanghai Pic" id="REST-pic">
                
            </div>
            
            <div id="restaurant-desc">
            
                <h1>About Us</h1>    
                <div id="specialty-section">
                
                    <img src="img/icons/specialty3.svg" alt="Specialty" id="specialtyIcon">
                
                    <p>Mexican Food</p>
                
                    <div class="clear"></div>
                </div>
                
                <div id="location-section">
                
                    <img src="img/icons/location.svg" alt="Specialty" id="locationIcon">
                
                    <p>Iasi, Romania</p>
                    
                    <div class="clear"></div>
                </div>
                
                
                  <div id="price-section">
                
                    <img src="img/icons/pricerange.svg" alt="Specialty" id="priceIcon">
                
                    <p>10 $ - 30 $</p>
                    
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
            
            <p>Going on the idea that in the Romanians every newly opened restaurant has good food to attract clients we said to hurry to catch the "offer". 
The culinary objective is very well positioned near the Palas complex, but although it is on the main street, it has been a bit difficult to identify it, not having (at the moment) any kind of street advertising.

We went into the restaurant, where we were welcomed by a waiter who drove us to a free meal and took our order without waiting. As a 48-hour restaurant, I had the surprise that our waiter could offer us suggestions and information about menu items. The menu contains a wide range of dishes that offer you the choice between burito, quesedila, tacos, enchilladas and a multitude of sauces. Moreover, all dishes also have vegetarian variants.</p>
            
            <p>Shanghai Chicken is the house specialty – a perfect combination of freshly cooked chicken and specific spices and condiments – a harmony of flavours, colours and aromas!

You won’t find anywhere a Shanghai Chicken prepared like we prepare!</p>
            
            <p>Summarizing the experience we can say that the food was very good, efficient serving and modern "Mexican" music and decor. 
We will definitely come back to test other dishes as well as the Tequila bar! 
</p>
       <div id="contact-info">
           <h1>Contact information</h1>
       <div id="social-wrapper">
          <h3>Social Handles</h3>
           <a href="https://www.facebook.com/salsaiasi/"><img src="img/icons/facebook-white.svg" alt="Facebook" id="facebook-icon"></a>
           
           <a href="https://www.facebook.com/salsaiasi/"><img src="img/icons/twitter-white.svg" alt="Twitter" id="twitter-icon"></a>
           </div>
           
           
           <div id="contact-wrapper">
              <h3>Contact Information</h3>
               <div id="icons-wrap">
               <img src="img/icons/phone-receiver-white.svg" alt="Phone No." id="phone-icon">
               <p>
+40 0232 452 557</p>
               
               <img src="img/icons/home-button.svg" alt="Homepage" id="home-icon">
               <a href="http://www.salsafood.ro/">http://www.salsafood.ro/</a>
               
               
               <img src="img/icons/black-back-closed-envelope-shape.svg" alt="E-Mail" id="mail-icon">
               <p>contact@salsafood.ro</p>
           </div>
           <div class="clear"></div>
           </div>
            </div>
        </div>
    
    </div>
    
    <footer id="footer">
        <img src="img/icons/cancel.svg" alt="Close" id="close-icon">
        <p>This web application is made for educational purposes only. All restaurants featured are not represented in any way by the Nomy web application.</p></footer>
    
    <script src="js/script.js"></script>
</body>
</html>
