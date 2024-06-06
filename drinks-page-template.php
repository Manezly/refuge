<?php /* Template Name: Drink Template */ get_header(); ?>

<?php
// Refuge picture & book image
$header_day_time_image = get_field('day_time_header_image');
$header_night_time_image = get_field('night_time_header_image');
$booking_link = get_field('booking_link');
$book_badge_light_mode = get_field('book_badge_light_mode');
$book_badge_dark_mode = get_field('book_badge_dark_mode');

// SEO section
$large_text = get_field('large_text');
$seo_button_link = get_field('seo_button_link');
$seo_button_text = get_field('seo_button_text');
$intro_description1 = get_field('intro_description1');
$intro_description2 = get_field('intro_description2');
$intro_image_1 = get_field('intro_image_1');
$intro_image_2 = get_field('intro_image_2');

// Pre Show Dining
$pre_show_dining_title = get_field('pre_show_dining_title');
$pre_show_dining_description = get_field('pre_show_dining_description');
$pre_show_dining_paragraph = get_field('pre_show_dining_paragraph');
$pre_show_dining_price = get_field('pre_show_dining_price');
$pre_show_dining_minimum = get_field('pre_show_dining_minimum');
$pre_show_dining_menu_name = get_field('pre_show_dining_menu_name');
$pre_show_dining_date_time = get_field('pre_show_dining_date_time');
$pre_show_dining_image = get_field('pre_show_dining_image');

?>

<div class="all">
    <section class="full_width refuge">
        <div class="fixed_width">
            <div class="eat_with_me_container">
                <div>
                    <div class="eat_with_me drink">
                        <span class="letter med_letter refuge_animation">D</span>
                        <span class="letter med_letter refuge_animation">R</span>
                        <span class="letter med_letter refuge_animation">I</span>
                        <span class="letter med_letter refuge_animation">N</span>
                        <span class="letter med_letter refuge_animation">K</span>
                    </div>
                    <div class="eat_with_me drink">
                        <span class="letter med_letter refuge_animation">W</span>
                        <span class="letter med_letter refuge_animation">I</span>
                        <span class="letter med_letter refuge_animation">T</span>
                        <span class="letter med_letter refuge_animation">H</span>
                        <span class="letter">&nbsp;</span>
                        <span class="letter med_letter refuge_animation">U</span>
                        <span class="letter med_letter refuge_animation">S</span>
                    </div>
                </div>
                <a href="#menu"><span>Menu</span><img class="dark_img" src="<?= get_template_directory_uri(); ?>/img/arrow-pointing-right.svg" alt=""></a>
            </div>
        </div>
    </section>

    <section class="full_width section seo_parent eat" id="sticky_nav_container">
        <div class="fixed_width seo">
            <div class="seo_left">
                <h3><?= $large_text; ?></h3>
                <div>
                    <p><?= $intro_description1; ?></p>
                    <p><?= $intro_description2; ?></p>
                    <button class="pair_octagonal_buttons">
                        <a href="<?= $seo_button_link; ?>" class="octagonal_button entry_animation">
                            <div class="book1"><?= $seo_button_text; ?></div>
                            <div class="book2"><?= $seo_button_text; ?></div>
                        </a>
                        <a class="arrow octagonal_button drink_arrow">
                            <div class="arrow1">
                                <img src="<?= get_template_directory_uri(); ?>/img/arrow-pointing-right.svg" alt="">
                            </div>
                            <div class="arrow2">
                                <img src="<?= get_template_directory_uri(); ?>/img/arrow-pointing-right.svg" alt="">
                            </div>
                        </a>
                    </button>
                </div>
            </div>
            <div class="seo_right">
                <div class="top_img">
                    <img src="<?= $intro_image_1; ?>" alt="">
                </div>
                <div class="bot_img">
                    <img src="<?= $intro_image_2; ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- MENU / Swiper Alternative Mobile -->
    <section class="full_width section swiper_replacement menu" id="menu">
        <div class="fixed_width">
            <div class="line"></div>
            <?php if (have_rows('menu')) : ?>
                <?php while (have_rows('menu')) : the_row();
                    // Get sub field values.
                    $menu_name = get_sub_field('menu_name');
                    $menu_image = get_sub_field('menu_image');
                ?>
                    <div class="swiper_replacement_article menu_article">
                        <a href="" class="menu_link_container"></a>
                        <div class="details drinky_detail">
                            <div class="menu_left">
                                <h3><?= $menu_name; ?></h3>
                                <div><img src="<?= $menu_image; ?>" alt=""></div>
                            </div>
                            <div class="menu_right drink">
                                <div class="menu_arrow">
                                    <a href=""><img class="img_1" src="<?= get_template_directory_uri(); ?>/img/full_black_diag.svg" alt=""></a>
                                    <a href=""><img class="img_2" src="<?= get_template_directory_uri(); ?>/img/arrow_diag_down_blackborder.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="full_width section gallery">
        <div class="fixed_width">
            <div class="swiper-container gallery_swiper">
                <div class="swiper-wrapper">
                    <?php if (have_rows('galley_slider')) : ?>
                        <?php while (have_rows('galley_slider')) : the_row();
                            // Get sub field values.
                            $gallery_image = get_sub_field('gallery_image');
                            $gallery_image_link = get_sub_field('gallery_image_link');
                        ?>
                            <div class="swiper-slide">
                                <a href="<?= $gallery_image_link; ?>"></a>
                                <img src="<?= $gallery_image; ?>" />
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
    </section>
</div>

<?php get_footer(); ?>