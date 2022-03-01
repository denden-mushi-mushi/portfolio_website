<?php
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: index.php');
    exit();
} 

//セッションを消す
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
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about_wrapper">About</a></li>
                <li><a href="index.php#skills_wrapper">Skills</a></li>
                <li><a href="index.php#portfolio_wrapper">Portfolio</a></li>
                <li><a href="index.php#contact_wrapper">Contact</a></li>
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
        <h1 class="sc_mg sc_mg1">Thank you!</h1>
        <h2 class="sc_mg sc_mg2">Your message was successfully sent.</h2>
    </div>

</body>

</html>