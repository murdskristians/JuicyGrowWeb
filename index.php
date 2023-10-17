<?php
session_start();
$lang = $_SESSION['lang'] ?? 'en';

include $_SERVER['DOCUMENT_ROOT'] . '/translations/translations.php';
global $main_page_translations;

// Decode the JSON string into a PHP associative array
$translations = json_decode($main_page_translations, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JuicyGrow</title>
    <link rel="stylesheet" href="/styles/styles.css">

</head>
<body>


<div id="screen-sides-picture"></div>
<div id="screen-sides-picture"></div>
<div id="screen-sides-picture"></div>

<div id="main-content" style="position: relative">
    <div id="logo-container">
        <img id="logo" src="/images/logo.png" alt="logo JuicyGrow">
    </div>


    <div id="language-container">
        <a id="en_btn">EN</a>
        <a id="de_btn">DE</a>
    </div>


    <div class="slider-with-text-container">
        <div id="slide-wrapper">
            <div id="slide-1-container-1" class="slide-containers">
                <img id="slider-1-img-1" class="slides" src="/images/slider-1-img-1.jpg" alt="slide1.png">
            </div>
            <div id="slide-1-container-2" class="slide-containers" style="display: none">
                <img id="slider-1-img-2" class="slides" src="/images/slider-1-img-2.webp" alt="slide2.png">
            </div>
        </div>

        <div class="green-block" id="green-block-1">
            <p id="green-block-1-title" class="green-block-element green-block-title">
                <?php echo $translations[$lang]['green-block-1-title']; ?>
            </p>

            <p id="green-block-1-chapter-1" class="green-block-1-chapter green-block-element">
                <?php echo $translations[$lang]['green-block-1-chapter-1']; ?>
            </p>

            <p id="green-block-1-chapter-2" class="green-block-1-chapter green-block-element">
                <?php echo $translations[$lang]['green-block-1-chapter-2']; ?>
            </p>
        </div>
    </div>


    <div class="slider-with-text-container">
        <div id="slide-wrapper-2">
            <div id="slide-2-container-1" class="slide-containers">
                <img id="slider-2-img-1" class="slides" src="/images/slider-2-img-1.jpeg" alt="slide1.png">
            </div>
            <div id="slide-2-container-2" class="slide-containers" style="display: none">
                <img id="slider-2-img-2" class="slides" src="/images/slider-2-img-2.webp" alt="slide1.png">
            </div>
            <div id="slide-2-container-3" class="slide-containers" style="display: none">
                <img id="slider-2-img-3" class="slides" src="/images/slider-2-img-3.webp" alt="slide3.png">
            </div>
        </div>

        <div class="green-block" id="green-block-2">
            <p id="green-block-2-title" class="green-block-2-element green-block-title">
                <?php echo $translations[$lang]['green-block-2-title']; ?>
            </p>

            <p id="green-block-2-subtitle-1" class="green-block-2-element green-block-subtitle">
                <?php echo $translations[$lang]['green-block-2-subtitle-1']; ?>
            </p>
            <p id="green-block-2-chapter-1" class="green-block-1-chapter green-block-2-element">
                <?php echo $translations[$lang]['green-block-2-chapter-1']; ?>
            </p>

            <p id="green-block-2-subtitle-2" class="green-block-2-element green-block-subtitle">
                <?php echo $translations[$lang]['green-block-2-subtitle-2']; ?>
            </p>
            <p id="green-block-2-chapter-2" class="green-block-1-chapter green-block-2-element">
                <?php echo $translations[$lang]['green-block-2-chapter-2']; ?>
            </p>
        </div>
    </div>


    <div class="slider-with-text-container">
        <div id="slide-wrapper-3">
            <div id="slide-3-container-1" class="slide-containers">
                <img id="slider-3-img-1" class="slides" src="/images/slider-3-img-1.webp" alt="slide1.png">
            </div>
            <div id="slide-3-container-2" class="slide-containers" style="display: none">
                <img id="slider-3-img-2" class="slides" src="/images/slider-3-img-2.webp" alt="slide2.png">
            </div>
            <div id="slide-3-container-3" class="slide-containers" style="display: none">
                <img id="slider-3-img-3" class="slides" src="/images/slider-3-img-3.webp" alt="slide3.png">
            </div>
        </div>


        <div class="green-block" id="green-block-3">
            <p id="green-block-3-title-1" class="green-block-element green-block-title">
                <?php echo $translations[$lang]['green-block-3-title-1']; ?>
            </p>
            <p id="green-block-3-title-2" class="green-block-element green-block-title">
                <?php echo $translations[$lang]['green-block-3-title-2']; ?>
            </p>

            <p id="green-block-3-subtitle-1" class="green-block-element green-block-subtitle">
                <?php echo $translations[$lang]['green-block-3-subtitle-1']; ?>
            </p>
            <p id="green-block-3-chapter-1" class="green-block-1-chapter green-block-element">
                <?php echo $translations[$lang]['green-block-3-chapter-1']; ?>
            </p>

            <p id="green-block-3-subtitle-2" class="green-block-element green-block-subtitle">
                <?php echo $translations[$lang]['green-block-3-subtitle-2']; ?>
            </p>
            <p id="green-block-3-chapter-2" class="green-block-1-chapter green-block-element">
                <?php echo $translations[$lang]['green-block-3-chapter-2']; ?>
            </p>
        </div>
    </div>


    <div class="slider-with-text-container">
        <div id="slide-wrapper-4">
            <div id="slide-4-container-1" class="slide-containers">
                <img id="slider-4-img-1" class="slides" src="/images/slider-4-img-1.webp" alt="slide1.png">
            </div>
            <div id="slide-4-container-2" class="slide-containers" style="display: none">
                <img id="slider-4-img-2" class="slides" src="/images/slider-4-img-2.webp" alt="slide2.png">
            </div>
            <div id="slide-4-container-3" class="slide-containers" style="display: none">
                <img id="slider-4-img-3" class="slides" src="/images/slider-4-img-3.webp" alt="slide3.png">
            </div>
        </div>


        <div class="green-block" id="green-block-4">
            <p id="green-block-4-title-1" class="green-block-element green-block-title">
                <?php echo $translations[$lang]['green-block-4-title-1']; ?>
            </p>
            <p id="green-block-4-title-2" class="green-block-element green-block-title">
                <?php echo $translations[$lang]['green-block-4-title-2']; ?>
            </p>

            <p id="green-block-4-subtitle-1" class="green-block-element green-block-subtitle">
                <?php echo $translations[$lang]['green-block-4-subtitle-1']; ?>
            </p>
            <p id="green-block-4-chapter-1" class="green-block-4-chapter green-block-4-element">
                <?php echo $translations[$lang]['green-block-4-chapter-1']; ?>
            </p>
            <p id="green-block-4-subtitle-1" class="green-block-element green-block-subtitle">
                <?php echo $translations[$lang]['green-block-4-subtitle-2']; ?>
            </p>
            <p id="green-block-4-chapter-2" class="green-block-4-chapter green-block-4-element">
                <?php echo $translations[$lang]['green-block-4-chapter-2']; ?>
            </p>
        </div>
    </div>

    <div id="footer-container">
        <p id="footer-element-1" class="footer-element">
            Email
        </p>

        <p id="footer-element-2" class="footer-element">
            info@juicygrow.net
        </p>

        <p id="footer-element-3" class="footer-element">
            © 2023 by Juicy Grow All rights reserved.
        </p>
    </div>
</div>


<script src="js/slider.js?<?php echo microtime(); ?>"></script>
<script src="js/languageChange.js?<?php echo microtime(); ?>"></script>
</body>
</html>