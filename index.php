<?php

/* ========================================
    about_wrapper
========================================= */

// my age 
$now = date('Ymd');
$birthday = '20000309';

// my information
$myInformation = array(
    'Age' => floor(($now - $birthday) / 10000),
    'Post' => 'Front end programmer',
    'Address' => 'Nagano, Japan'
);

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
        <div class="section" id="home_wrapper">
            <h1>I'm <span>Kazuki</span></h1>
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
        <div class="section" id="about_wrapper">
            <h1 class="heading">About Me</h1>
            <?php foreach ($myInformation as $information => $value) : ?>
                <dl>
                    <dt><?php echo $information; ?>:</dt>
                    <dd><?php echo $value; ?></dd>
                </dl>
            <?php endforeach; ?>

            <h2>I do rock climbing.</h2>
            <h2>I climb mountains in winter.</h2>
        </div>
        <!-- about section ends -->

        <!-- skills section starts -->
        <div class="section" id="skills_wrapper">
            <h1 class="heading">My Skills</h1>
            <dl>
                <dt>Languages</dt>
                <dd>HTML & SCSS / JavaScript / PHP</dd>

                <dt>Library & Framework</dt>
                <dd>Bootstrap / jQuery / swiper.js / Three.js</dd>
                <dd>Laravel</dd>

                <dt>Others</dt>
                <dd>WorePress</dd>
                <dd>github(<a href="https://github.com/kazuki-is-a-pen">My acount is here.</a>)</dd>
            </dl>
        </div>
        <!-- skills section ends -->

        <!-- portfolio section starts -->
        <div class="section" id="portfolio_wrapper">
            <h1 class="heading">Portfolio</h1>
            <div id="portfolios">
                <div class="portfolio">
                    <a href="#">
                        <img src="images/portfolio/portfolio1.png" alt="My portfolio image">
                        <span>First<br> Portfolio Website</span>
                    </a>

                </div>

                <div class="portfolio">
                    <a href="https://kazukiportfolio.com">
                        <img src="images/portfolio/portfolio2.png" alt="My portfolio image">
                        <span>New<br> Portfolio Website</span>
                    </a>
                </div>

                <div class="portfolio">
                    <a href="#">
                        <img src="images/portfolio/portfolio3.png" alt="My portfolio image">
                        <span>"WordPress"<br>My Theme</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- portfolio section ends -->

        <!-- contact section starts -->
        <div class="section" id="contact_wrapper">
            <h1 class="heading">Contact Me</h1>
            <form action="" method="post" novalidate="">
                <p class="form_content">Name</p>
                <input type="text" name="name" id="name" value="" maxlength="200">

                <p class="form_content">Email</p>
                <input type="email" name="email" id="email" value="" maxlength="200">

                <p class="form_content">Message</p>
                <textarea name="message" id="message" maxlength="1000"></textarea>

                <input type="submit" value="Comfirmation" id="button" style="font-size: 25px;">

            </form>
        </div>
        <!-- contact section ends -->
    </div>


    <script src="js/script.js"></script>
</body>

</html>