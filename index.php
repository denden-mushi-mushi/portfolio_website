<?php
session_start();

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

/* ========================================
    contact_wrapper
========================================= */

$error = array(
    'name' => '',
    'email' => '',
    'message' => ''
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, $_POST);

    //フォームの送信時にエラーをチェックする
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }

    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }

    if ($post['message'] === '') {
        $error['message'] = 'blank';
    }

    if ($error['name'] === '' && $error['email'] === '' && $error['message'] === '') {

        //エラーがないので送信
        $_SESSION['form'] = $post;
        $to = 'myEmail';
        $from = $post['email'];
        $subject = 'お問い合わせが届きました';
        $body = <<<EOT
        名前： {$post['name']}
        メールアドレス： {$post['email']}
        内容：
        {$post['message']}
        EOT;
        mb_send_mail($to, $subject, $body, "From: {$from}");

        header('Location: complite.php');
        exit();
    }
}

session_destroy();

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
    <!-- css for swiper.js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

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
                <li><a id="go_home" href="#home_wrapper">Home</a></li>
                <li><a id="go_about" href="#about_wrapper">About</a></li>
                <li><a id="go_skills" href="#skills_wrapper">Skills</a></li>
                <li><a id="go_portfolio" href="#portfolio_wrapper">Portfolio</a></li>
                <li><a id="go_contact" href="#contact_wrapper">Contact</a></li>
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
            <div class="swiper mySwiper rock_climbing">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/rock_climbing/rock_climbing1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/rock_climbing/rock_climbing2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/rock_climbing/rock_climbing3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/rock_climbing/rock_climbing4.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/rock_climbing/rock_climbing5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/rock_climbing/rock_climbing6.jpeg" />
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <h2>I climb mountains in winter.</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide height">
                        <img src="images/winter/winter_mountain1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/winter/winter_mountain2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/winter/winter_mountain3.jpg" />
                    </div>
                    <div class="swiper-slide height">
                        <img src="images/winter/winter_mountain4.jpg" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
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
                    <a href="https://lucky-iki-2813.flier.jp/Portfolio_default/">
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
                    <a href="http://kazukitheme.wp.xdomain.jp/">
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
            <form action="index.php#contact_wrapper" method="post" onsubmit="return check()" novalidate>

                <input type="text" name="name" placeholder="Name" class="box" value="<?php if (isset($post['name'])) {
                                                                                            echo htmlspecialchars($post['name']);
                                                                                        } ?>">
                <?php if ($error['name'] === 'blank') : ?>
                    <p class="error_message">*Please enter your name.</p>
                <?php endif ?>

                <input type="email" name="email" placeholder="Email" class="box" value="<?php if (isset($post['email'])) {
                                                                                            echo htmlspecialchars($post['email']);
                                                                                        } ?>">
                <?php if ($error['email'] === 'blank') : ?>
                    <p class="error_message">*Please enter your email address</p>
                <?php endif ?>
                <?php if ($error['email'] === 'email') : ?>
                    <p class="error_message">*The email you entered is not correct. Please retry.</p>
                <?php endif ?>

                <!-- Shift + Alt + F is prohibited in textarea -->
                <textarea name="message" placeholder="message" class="box message" cols="30" rows="10"><?php if (isset($post['message'])) {
                                                                                                            echo htmlspecialchars($post['message']);
                                                                                                        } ?></textarea>
                <?php if ($error['message'] === 'blank') : ?>
                    <p class="error_message">*Please enter your message</p>
                <?php endif ?>

                <button type="submit">Send</button>
            </form>
        </div>
        <!-- contact section ends -->

        <!-- footer starts -->

        <footer>
            <p id="copyright">&copy; 2021 Kazuki.</p>
        </footer>
    </div>


    <!-- Read jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Read Swiper -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Read original js-file -->
    <script type="module" src="js/header.js"></script>
    <script type="module" src="js/scroll.js"></script>
    <script src="js/script.js"></script>
</body>

</html>