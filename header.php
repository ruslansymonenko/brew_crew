<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <title>Brew Crew</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container header_container">
                <div class="header_logo">
                    <img src="./src/assets/icons/main_icon.png" alt="">
                    <a href="#mainPage"><span>Brew Crew</span></a>
                </div>

                <nav class="header_nav">
                    <ul class="header_nav-list">
                        <li class="header_nav-list-item">
                            <a href="#infoPage">Інформація</a>
                        </li>
                        <li class="header_nav-list-item">
                            <a href="#contacts">Контакти</a>
                        </li>
                    </ul>
                </nav>

                <button class="header_login_btn">
                    <img src="./src/assets/icons/user_logo_icon.png" alt="">
                </button>
            </div>
        </header>