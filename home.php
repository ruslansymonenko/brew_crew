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
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/img/main_page_img.png" alt="">
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
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/icons/left_arr.png" alt="">
                        </button>
                        <button class="slider_btn next_slide-btn--goods">
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/icons/right_arr.png" alt="">
                        </button>

                        <div class="goods_slider">
                            <div class="goods_slider-line">
                            <?php
                                global $post;

                                $myposts = get_posts([ 
                                    'numberposts' => -1,
                                    'category_name' => 'goods-slider'
                                ]);

                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        
                                        <div class="goods_slider-item-active goods_slider-item">
                                            <?php the_post_thumbnail(
                                                array('70%', '60%'),
                                                array('class' => 'goods_slider-item--img')
                                            ); ?> 
                                            <h3 class="goods_slider-item--name"><?php the_title(); ?></h3>
                                            <div class="good_slider-item--descr"><?php the_content(); ?></div>
                                        </div>

                                        <?php 
                                    }
                                } else {
                                
                                }

                                wp_reset_postdata();
                                ?>
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
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/icons/left_arr.png" alt="">
                        </button>
                        <button class="slider_btn next_slide-btn--info">
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/icons/right_arr.png" alt="">
                        </button>

                        <div class="info_page-slider">
                            <div class="info_slider-line">
                                <?php
                                global $post;

                                $myposts = get_posts([ 
                                    'numberposts' => -1,
                                    'category_name' => 'info-slider'
                                ]);

                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        
                                        <div class="info_page-slider-item">
                                            <?php the_post_thumbnail(); ?> 
                                            <?php the_content(); ?>
                                        </div>

                                        <?php 
                                    }
                                } else {
                                
                                }

                                wp_reset_postdata();
                                ?>
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

                <img src="<?php bloginfo('template_url'); ?>/src/assets/img/decorations/beer-wave.png" alt="" class="contact_form-decoration">
            </section>
        </main>

<?php get_footer(); ?>