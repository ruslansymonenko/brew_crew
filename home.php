<?php
/*
Template Name: home
*/

// … template file code
?>

<?php get_header(); ?>

        <main class="main">
            <div class="main_page_wrapper" id="mainPage">
                <section class="main_page">
                    <div class="container main_page_container">
                        <div class="main_page-text">
                            <h1>Справжнє пиво тільки тут!</h1>
                            <h1>Brew Crew</h1>
                            <h2>Ми любимо пиво та навчимо його любити й вас</h2>
                            <a href="#goods"><button class="view_products_btn btn">Наші товари</button></a>
                        </div>
                        <div class="main_page-img">
                            <img src="./src/assets/img/main_page_img.png" alt="">
                        </div>
                    </div>
                </section>
            </div>

            <section class="store_page" id="goods">
                <div class="container store_container">
                    <h2 class="store_page-header">Наш магазин має широкий вибір пива</h2>
                    <div class="goods_types_btns">
                        <button class="good_type_btn btn">Світле пиво</button>
                        <button class="good_type_btn btn">Нефільтроване пиво</button>
                        <button class="good_type_btn btn">Темне пиво</button>
                    </div>
                    <div class="store_page-slider">
                        <button class="slider_btn prev_slide-btn--goods">
                            <img src="./src/assets/icons/left_arr.png" alt="">
                        </button>
                        <button class="slider_btn next_slide-btn--goods">
                            <img src="./src/assets/icons/right_arr.png" alt="">
                        </button>

                        <div class="goods_slider">
                            <div class="goods_slider-line">
                                <div class="goods_slider-item-active goods_slider-item">
                                    <img src="./src/assets/img/goods/corona.jpg" alt="" class="goods_slider-item--img">
                                    <h3 class="goods_slider-item--name">Corona Extra</h3>
                                    <p class="good_slider-item--descr">Особливе мексиканське пиво "Corona Extra" ("Корона Екстра") п'ється по-особливому легко й приємно. Світле пиво, що освіжає, прийнято подавати зі шматочком лайма.</p>
                                </div>
                                <div class="goods_slider-item-active goods_slider-item">
                                    <img src="./src/assets/img/goods/stella-artois.jpg" alt="" class="goods_slider-item--img">
                                    <h3 class="goods_slider-item--name">Stella Artois</h3>
                                    <p class="good_slider-item--descr">Лагер преміального типу Стелла Артуа має величезну популярність у всьому світі. Завдяки особливому рецепту та способу приготування, напій став легко впізнаваним та улюбленим.</p>
                                </div>
                                <div class="goods_slider-item-active goods_slider-item">
                                    <img src="./src/assets/img/goods/flensburger-pilsener.jpg" alt="" class="goods_slider-item--img">
                                    <h3 class="goods_slider-item--name">Flensburger</h3>
                                    <p class="good_slider-item--descr">Унікальне своєрідне німецьке пиво «Flensburger» («Фленсбургер») представлене у спеціальній скляній пляшці з пробкою, яка краще зберігає смак та аромат напою. Пиво має солом'яний колір та стандартну для німців суху структуру.</p>
                                </div>
                                <div class="goods_slider-item">
                                    <img src="./src/assets/img/goods/bavaria.jpg" alt="" class="goods_slider-item--img">
                                    <h3 class="goods_slider-item--name">Bavaria</h3>
                                    <p class="good_slider-item--descr">Bavaria Holland 5% 0,5 л – унікальний напій золотисто-солом'яного відтінку з густою стійкою шапкою піни. Присмак пива плавний, вершковий, заможний, з енергійними хмільними, трав'яними та лимонними акордами</p>
                                </div>
                                <div class="goods_slider-item">
                                    <img src="./src/assets/img/goods/grimbergen.jpg" alt="" class="goods_slider-item--img">
                                    <h3 class="goods_slider-item--name">Grimbergen Blonde</h3>
                                    <p class="good_slider-item--descr">Насичене нефільтроване пиво Grimbergen Blonde («Грімберген Блонд») можна порівняти з відомим бельгійським елем. Пиво зварене методом верхового бродіння, воно має середню міцність (5-7%)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="info_page" id="infoPage">
                <div class="container info_page_container">
                    <h2 class="info_page_header">Трохи інформації про нас</h2>
                    <div class="info_slider-container">
                        <button class="slider_btn prev_slide-btn--info">
                            <img src="./src/assets/icons/left_arr.png" alt="">
                        </button>
                        <button class="slider_btn next_slide-btn--info">
                            <img src="./src/assets/icons/right_arr.png" alt="">
                        </button>

                        <div class="info_page-slider">
                            <div class="info_slider-line">
                                <div class="info_page-slider-item">
                                    <img src="./src/assets/img/info-page-slider/beer-bottles.jpg" alt="">
                                    <p>У нас у магазині ви можете придбати пиво із різних куточків світу. Ми ретельно відбираємо свій асортимент, щоб ви могли насолодитися тільки кращими сортами пива.</p>
                                </div>
                                <div class="info_page-slider-item">
                                    <img src="./src/assets/img/info-page-slider/beer-bar.jpg" alt="">
                                    <p>Також ви можете скуштувати різноманітні сорти пива в нашому барі</p>
                                </div>
                                <div class="info_page-slider-item">
                                    <img src="./src/assets/img/info-page-slider/beer-img.jpg" alt="">
                                    <p>Ми відбираємо найякісніше пиво для наших клієнтів. Приходь до нас та переконайся сам</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact_form_page" id="contacts">
                <div class="container contact_form_container">
                    <h2 class="contact_form-header">Контактна форма</h2>
                    <div class="contact_field">
                        <form action="#" class="contact_form">
                            <input type="text" placeholder="Ваше ім'я">
                            <input type="text" placeholder="Ваш телефон">
                            <button class="btn">Надіслати</button>
                        </form>
                    </div>
                </div>

                <img src="./src/assets/img/decorations/beer-wave.png" alt="" class="contact_form-decoration">
            </section>
        </main>

<?php get_footer(); ?>