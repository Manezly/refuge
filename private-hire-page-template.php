<?php /* Template Name: Private Hire Template */ get_header(); ?>

<?php
// Private Hire Top Heading Stuff
$private_hire_top_text = get_field('private_hire_top_text');
$private_hire_badge_link = get_field('private_hire_badge_link');
$private_hire_badge_light = get_field('private_hire_badge_light');
$private_hire_badge_dark = get_field('private_hire_badge_dark');

// SEO section
$large_text = get_field('large_text');
$seo_button_link = get_field('seo_button_link');
$seo_button_text = get_field('seo_button_text');
$intro_description1 = get_field('intro_description1');
$intro_description2 = get_field('intro_description2');
$intro_image_1 = get_field('intro_image_1');
$intro_image_2 = get_field('intro_image_2');

?>

<div class="all">
    <section class="full_width section private_hire_heading">
        <div class="fixed_width">
            <div class="eat_with_me_container">
                <div>
                    <div class="eat_with_me private_hire_heading_container">
                        <span class="letter large_letter refuge_animation">P</span>
                        <span class="letter large_letter refuge_animation">R</span>
                        <span class="letter large_letter refuge_animation">I</span>
                        <span class="letter large_letter refuge_animation">V</span>
                        <span class="letter large_letter refuge_animation">A</span>
                        <span class="letter large_letter refuge_animation">T</span>
                        <span class="letter large_letter refuge_animation">E</span>
                        <span class="letter">&nbsp;</span>
                        <span class="letter large_letter refuge_animation">H</span>
                        <span class="letter large_letter refuge_animation">I</span>
                        <span class="letter large_letter refuge_animation">R</span>
                        <span class="letter large_letter refuge_animation">E</span>
                    </div>
                    <div class="eat_with_me private_hire_heading_container">
                        <span class="letter large_letter refuge_animation">F</span>
                        <span class="letter large_letter refuge_animation">O</span>
                        <span class="letter large_letter refuge_animation">R</span>
                        <span class="letter">&nbsp;</span>
                        <span class="letter large_letter refuge_animation">A</span>
                        <span class="letter large_letter refuge_animation">L</span>
                        <span class="letter large_letter refuge_animation">L</span>
                    </div>
                    <div class="eat_with_me private_hire_heading_container">
                        <span class="letter large_letter refuge_animation">O</span>
                        <span class="letter large_letter refuge_animation">C</span>
                        <span class="letter large_letter refuge_animation">C</span>
                        <span class="letter large_letter refuge_animation">A</span>
                        <span class="letter large_letter refuge_animation">S</span>
                        <span class="letter large_letter refuge_animation">S</span>
                        <span class="letter large_letter refuge_animation">I</span>
                        <span class="letter large_letter refuge_animation">O</span>
                        <span class="letter large_letter refuge_animation">N</span>
                        <span class="letter large_letter refuge_animation">S</span>
                    </div>
                </div>
            </div>
            <a href="<?= $private_hire_badge_link; ?>" class="book_badge badge">
                <img class="badge_light bubble" src="<?= $private_hire_badge_light; ?>" alt="book">
                <img class="badge_dark bubble" src="<?= $private_hire_badge_dark; ?>" alt="book">
            </a>
        </div>
    </section>

    <section class="full_width section gallery private_hire_slide">
        <div class="fixed_width">
            <div class="swiper linked_swiper octagonal_button">
                <div class="swiper-wrapper">
                    <?php if (have_rows('private_hire_location_slider_components')) : ?>
                        <?php while (have_rows('private_hire_location_slider_components')) : the_row();
                            // Get sub field values.
                            $location_name = get_sub_field('location_name');
                            $location_short_name = get_sub_field('location_short_name');
                            $location_slider_image = get_sub_field('location_slider_image');
                            $location_info = get_sub_field('location_info');
                        ?>
                            <div class="swiper-slide area_title_slide octagonal_button"><?= $location_short_name; ?></div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>


            <div class="swiper-container private_hire_swiper parent_container">
                <div class="swiper-wrapper">
                    <?php if (have_rows('private_hire_location_slider_components')) : ?>
                        <?php while (have_rows('private_hire_location_slider_components')) : the_row();
                            // Get sub field values.
                            $location_name = get_sub_field('location_name');
                            $location_slider_image = get_sub_field('location_slider_image');
                            $location_info = get_sub_field('location_info');
                            $slide_button_link = get_sub_field('slide_button_link');
                            $slide_button_text = get_sub_field('slide_button_text');
                        ?>
                            <div class="swiper-slide">
                                <div class="gallery_img">
                                    <img src="<?= $location_slider_image; ?>" />
                                    <a href="<?= $slide_button_link; ?>" class="octagonal_button"><?= $slide_button_text; ?><img src="<?= get_template_directory_uri(); ?>/img/black-diag-arrow.png" alt=""></a>
                                </div>
                                <div class="inf_slider_container">
                                    <div class="inf_slider">
                                        <span><?= $location_info; ?></span>
                                    </div>
                                    <div class="inf_slider">
                                        <span><?= $location_info; ?></span>
                                    </div>
                                </div>
                                <h3><?= $location_name; ?></h3>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
    </section>

    <section class="full_width section seo_parent" id="sticky_nav_container">
        <div class="fixed_width seo">
            <div class="seo_left">
                <h3><?= $large_text; ?></h3>
                <button class="pair_octagonal_buttons">
                    <a href="<?= $seo_button_link; ?>" class="octagonal_button entry_animation">
                        <div class="book1"><?= $seo_button_text; ?></div>
                        <div class="book2"><?= $seo_button_text; ?></div>
                    </a>
                    <a class="arrow octagonal_button">
                        <div class="arrow1">
                            <img src="<?= get_template_directory_uri(); ?>/img/arrow-pointing-right.svg" alt="">
                        </div>
                        <div class="arrow2">
                            <img src="<?= get_template_directory_uri(); ?>/img/arrow-pointing-right.svg" alt="">
                        </div>
                    </a>
                </button>
            </div>
            <div class="seo_right">
                <p><?= $intro_description1; ?></p>
                <br>
                <p><?= $intro_description2; ?></p>
            </div>
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