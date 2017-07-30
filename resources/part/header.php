<?php
    require_once '../resources/config.php';
?>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php
        
            echo $title;
            
            
        ?></title>
        <link rel="stylesheet" href="css/form.css">

        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

    </head>

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