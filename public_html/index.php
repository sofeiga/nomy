<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NOMY</title>
        <link rel="stylesheet" href="css/form.css">

        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

    </head>

    <body>

        <h1 class="heading">Welcome to<br> the <span>booking app</span></h1>


        <video width="300" height="150" autoplay="autoplay" loop="loop">
            <source src="video/cafestock.mp4" type="video/mp4" />
        </video>


        <div id="forms">
            <img src="img/logo-nomy.png" alt="logo" id="logoImg">


            <div id="login">
                <h3 id="loginIntro">Please login to proceed!</h3>
                <form action="login.php" method="post">
                    <input type="text" name="email" placeholder="Enter your e-mail" class="loginInput" id="loginInput1" required><br>
                    <input type="password" name="password" placeholder="Enter your password" class="loginInput" id="loginInput2" required><br>

                    <button type="submit" id="loginBtn"><span id="loginTxt">Log In</span></button>
                </form>


            </div>

            <div id="register">
                <form method="post" action="register.php">
                    <input type="text" name="first" placeholder="Enter your first name" class="registerInput" id="registerInput1" required><br>
                    <input type="text" name="last" placeholder="Enter your last name" class="registerInput" id="registerInput2" required><br>
                    <input type="email" name="email" placeholder="Enter your e-mail address" class="registerInput" id="registerInput3" required><br>
                    <input type="password" name="pwd" placeholder="Enter your password" class="registerInput" id="registerInput4" required><br>

                    <button type="submit" id="signupBtn"><span id="signupTxt">Sign Up</span></button>
                </form>
            </div>
            <div id="buttons">
                <div id="loginCTA">
                    <h1>L<br>o<br>g<br>i<br>n<br></h1>
                </div>

                <div id="registerCTA">
                    <h1>S<br>i<br>g<br>n<br>u<br>p<br></h1>
                </div>
            </div>

        </div>
        <div id="abtUsBtn"><a href="#" id="abtusTxt">Who are we?</a></div>

        
        
        <script src="js/script.js"></script>
    </body>

</html>