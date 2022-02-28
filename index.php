<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kazuki Portfolio</title>

    <!-- css -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style/style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
</head>

<body>
    <!-- four background color section starts -->
    <div class="card_wrapper">
        <div class="card">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- four background color section ends -->

    <!-- header section starts -->
    <header>
        <div id="user">
            <img src="images/winter/winter_mountain4.jpg" alt="my_icon">
            <h1 id="name">Kazuki</h1>
            <p>Front end programmer</p>
        </div>

        <nav>
            <ul>
                <li><a href="#home_wrapper">Home</a></li>
                <li><a href="#about_wrapper">About</a></li>
                <li><a href="#skills_wrapper">Skills</a></li>
                <li><a href="#portfolio_wrapper">Portfolio</a></li>
                <li><a href="#contact_wrapper">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- toggle button -->
    <div id="toggle_cover">
        <div id="toggle"></div>
    </div>

    <!-- circle expands -->
    <div id="circle"></div>

    <!-- header section ends -->


    <div class="wrapper">
        <!-- home section starts -->
        <div id="home_wrapper">
            <h1>I'm Kazuki</h1>
            <p>Thank you for visiting my website!
                I'm a Japanese Programmer and live in Nagano in
                Japan.

                If you have any question, please send a message
                with my <a href="#contact_wrapper">contact form</a>.
            </p>
            <p><a id="about_me" href="#about_wrapper">About me</a></p>
        </div>
        <!-- home section ends -->

        <!-- about section start -->
            <div id="about_wrapper">
                <h1 class="heading">About me</h1>
                <dl>
                    <dt>Age: </dt>
                    <dd>今の年齢をphpで</dd>

                    <dt>Post: </dt>
                    <dd>Front end programmer</dd>

                    <dt>Address</dt>
                    <dd>Nagano, Japan</dd>

                </dl>
            </div>
        <!-- about section ends -->
    </div>


    <script src="js/nav.js"></script>
</body>

</html>