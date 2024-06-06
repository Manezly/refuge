<?php /* Template Name: Home Template */ get_header(); ?>

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

// Featured
$featured_image_left = get_field('featured_image_left');
$featured_image_right = get_field('featured_image_right');
$featured_left_title = get_field('featured_left_title');
$featured_right_title = get_field('featured_right_title');
$featured_left_fade_in_text = get_field('featured_left_fade_in_text');
$featured_right_fade_in_text = get_field('featured_right_fade_in_text');
$featured_left_link = get_field('featured_left_link');
$featured_right_link = get_field('featured_right_link');

// Events
$event_section_title = get_field('event_section_title');
$view_all_events_link = get_field('view_all_events_link');
$view_all_events_button_text = get_field('view_all_events_button_text');
$next_event_image = get_field('next_event_image');
$next_event_link = get_field('next_event_link');
$next_event_day_of_the_month_1 = get_field('next_event_day_of_the_month_1');
$next_event_date_range_hyphen = get_field('next_event_date_range_hyphen');
$next_event_day_of_the_month_2 = get_field('next_event_day_of_the_month_2');
$next_event_month = get_field('next_event_month');
$next_event_title = get_field('next_event_title');

$upcoming_event_1_image = get_field('upcoming_event_1_image');
$upcoming_event_1_day_of_month_1 = get_field('upcoming_event_1_day_of_month_1');
$upcoming_event_1_date_range_hyphen = get_field('upcoming_event_1_date_range_hyphen');
$upcoming_event_1_day_of_month_2 = get_field('upcoming_event_1_day_of_month_2');
$upcoming_event_1_month = get_field('upcoming_event_1_month');
$upcoming_event_1_title = get_field('upcoming_event_1_title');

$upcoming_event_2_image = get_field('upcoming_event_2_image');
$upcoming_event_2_day_of_month_1 = get_field('upcoming_event_2_day_of_month_1');
$upcoming_event_2_date_range_hyphen = get_field('upcoming_event_2_date_range_hyphen');
$upcoming_event_2_day_of_month_2 = get_field('upcoming_event_2_day_of_month_2');
$upcoming_event_2_month = get_field('upcoming_event_2_month');
$upcoming_event_2_title = get_field('upcoming_event_2_title');
?>
<div class="all">
    <section class="full_width refuge">
        <div class="fixed_width">
            <div>
                <span class="large_letter letter refuge_animation">R</span>
                <span class="large_letter letter refuge_animation">E</span>
                <span class="large_letter letter refuge_animation">F</span>
                <span class="large_letter letter refuge_animation">U</span>
                <span class="large_letter letter refuge_animation">G</span>
                <span class="large_letter letter refuge_animation">E</span>
            </div>
            <div class="lounge_image_container" id="sticky_nav_container">
                <img class="light_mode_pic" src="<?= $header_day_time_image; ?>" alt="light mode image">

                <img class="dark_mode_pic" src="<?= $header_night_time_image; ?>" alt="dark mode image">
                <div class="magnet book_badge_container">
                    <a href="<?= $booking_link; ?>" class="book_badge">
                        <img class="badge_light" src="<?= $book_badge_light_mode; ?>" alt="book">
                        <img class="badge_dark" src="<?= $book_badge_dark_mode; ?>" alt="book">
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="full_width section seo_parent">
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

    <section class="full_width section">
        <div class="fixed_width featured">
            <div class="featured_left featured_button_float">
                <a href="<?= $featured_left_link; ?>" class="featured_link_container"></a>
                <div class="fade_out_cover"></div>
                <div class="image_container">
                    <img src="<?= $featured_image_left; ?>" alt="roast-platter">
                    <button class="octagonal_button dark featured_button">
                        <a href="">
                            LEARN MORE <img src="<?= get_template_directory_uri(); ?>/img/full_black_diag.svg" alt="">
                        </a>
                    </button>
                    <div class="blur_container"></div>
                    <h4><?= $featured_left_fade_in_text; ?>.</h4>
                </div>
                <h2><?= $featured_left_title; ?></h2>
            </div>
            <div class="featured_right featured_button_float">
                <a href="<?= $featured_right_link; ?>" class="featured_link_container"></a>
                <div class="fade_out_cover"></div>
                <div class="image_container">
                    <img src="<?= $featured_image_right; ?>" alt="hummus">
                    <button class="octagonal_button light featured_button">
                        <a href="">
                            LEARN MORE <img src="<?= get_template_directory_uri(); ?>/img/full_black_diag.svg" alt="">
                        </a>
                    </button>
                    <div class="blur_container"></div>
                    <h4><?= $featured_right_fade_in_text; ?></h4>
                </div>
                <h2><?= $featured_right_title; ?></h2>
            </div>
        </div>
    </section>

    <section class="full_width section swiper_parent">
        <div class="fixed_width">
            <div class="swiper mySwiper mouseover_parent">
                <div class="swiper-wrapper mouseover_container">
                    <div class="line"></div>

                    <?php if (have_rows('internal_links')) : ?>
                        <?php while (have_rows('internal_links')) : the_row();
                            // Get sub field values.
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');
                            $page_link = get_sub_field('page_link');
                        ?>
                            <div class="swiper-slide mouseover">
                                <a href="<?php echo $page_link; ?>" class="link_full_container"></a>
                                <div>
                                    <h3><?php echo $title; ?></h3>
                                    <a href="<?php echo $page_link; ?>"><img src="<?= get_template_directory_uri(); ?>/img/black-diag-arrow.png" alt=""></a>
                                </div>
                                <p class="mouseover_desktop_paragraph"><?php echo $description; ?></p>
                            </div>
                            <div class="line"></div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="swiper cardSwiper">
                <div class="swiper-wrapper card_wrapper">
                    <?php if (have_rows('internal_links')) : ?>
                        <?php while (have_rows('internal_links')) : the_row();

                            // Get sub field values.
                            $image = get_sub_field('image');

                        ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $image; ?>" />
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper Alternative Mobile -->
    <section class="full_width section swiper_replacement">
        <div class="fixed_width">
            <div class="line"></div>
            <?php if (have_rows('internal_links')) : ?>
                <?php while (have_rows('internal_links')) : the_row();

                    // Get sub field values.
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $page_link = get_sub_field('page_link');
                    $image = get_sub_field('image');

                ?>
                    <div class="swiper_replacement_article">
                        <div class="details">
                            <div>
                                <h3><?= $title; ?></h3>
                                <a href=""><img src="<?= get_template_directory_uri(); ?>/img/black-diag-arrow.png" alt=""></a>
                            </div>
                            <p class="mouseover_desktop_paragraph"><?= $description; ?></p>
                        </div>
                        <div class="swiper_replacement_image_container">
                            <button class="read_more"><img class="dark_img" src="<?= get_template_directory_uri(); ?>/img/arrow-pointing-right.svg" alt=""></button>
                            <img src="<?= $image; ?>" alt="next-event-picture">
                        </div>
                    </div>
                    <div class="line"></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="full_width section whats_on">
        <div class="fixed_width">
            <!-- <div class="title">
                <h1>WHAT'S ON</h1>
                <button class="pair_octagonal_buttons">
                    <a class="octagonal_button entry_animation">
                        <div class="book1">VIEW ALL EVENTS</div>
                        <div class="book2">VIEW ALL EVENTS</div>
                    </a>
                    <a class="arrow octagonal_button">
                        <div class="arrow1">
                            <img src="images/arrow.png" alt="">
                        </div>
                        <div class="arrow2">
                            <img src="images/arrow.png" alt="">
                        </div>
                    </a>
                </button>
            </div>
            <div class="events">
                <div class="next single_event">
                    <div class="next_image_container">
                        <img src="images/Refuge-next-event.png" alt="next-event-picture">
                        <a class="octagonal_button text_fade coming_next">
                            COMING UP NEXT
                        </a>
                    </div>
                    <div class="event_bottom">
                        <button class="octagonal_button date">
                            <div class="pair">
                                <div class="num">02</div>
                                <div class="month">FEB</div>
                            </div>
                        </button>
                        <div class="event_title">
                            <h5>New Year's Eve At The Refuge</h5>
                            <a href=""><img src="images/black-diag-arrow.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="upcoming single_event">
                    <div class="next_image_container">
                        <img src="images/refuge-next-event-1.png" alt="next-event-picture">
                    </div>
                    <div class="event_bottom">
                        <button class="octagonal_button date small">
                            <div class="pair">
                                <div class="num">30</div>
                                <div class="month">MAR</div>
                            </div>
                        </button>
                        <div class="event_title">
                            <h5>The Refuge's 7th Birthday Bash</h5>
                            <a href=""><img src="images/black-diag-arrow.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="upcoming single_event">
                    <div class="next_image_container">
                        <img src="images/refuge-next-event-2.png" alt="next-event-picture">
                    </div>
                    <div class="event_bottom">
                        <button class="octagonal_button date small">
                            <div class="pair">
                                <div class="num">26</div>
                                <div class="dash"></div>
                                <div class="num">27</div>
                                <div class="month">APR</div>
                            </div>
                        </button>
                        <div class="event_title">
                            <h5>Come As You Are Weekender April 2024
                            </h5>
                            <a href=""><img src="images/black-diag-arrow.png" alt=""></a>   
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="title">
                <h1><?= $event_section_title; ?></h1>
                <button class="pair_octagonal_buttons">
                    <a href="<?= $view_all_events_link; ?>" class="octagonal_button entry_animation">
                        <div class="book1"><?= $view_all_events_button_text; ?></div>
                        <div class="book2"><?= $view_all_events_button_text; ?></div>
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
            <div class="swiper what_on_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide upcoming single_event">
                        <a class="whats_on_link" href=""> </a>
                        <div class="next_image_container">
                            <img src="<?= $next_event_image; ?>" alt="next-event-picture">
                            <button class="octagonal_button text_fade coming_next">
                                COMING UP NEXT
                            </button>
                        </div>
                        <div class="event_bottom">
                            <button class="octagonal_button date">
                                <div class="pair">
                                    <div class="num"><?= $next_event_day_of_the_month_1; ?></div>
                                    <?php
                                    if ($next_event_date_range_hyphen) {
                                        echo '<div class="dash"></div>';
                                    }
                                    ?>
                                    <div class="num"><?= $next_event_day_of_the_month_2; ?></div>
                                    <div class="month"><?= $next_event_month; ?></div>
                                </div>
                            </button>
                            <div class="event_title">
                                <h5><?= $next_event_title; ?></h5>
                                <a href="<?= $next_event_link; ?>"><img src="<?= get_template_directory_uri(); ?>/img/black-diag-arrow.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide upcoming single_event">
                        <a class="whats_on_link" href=""> </a>
                        <div class="next_image_container">
                            <img src="<?= $upcoming_event_1_image; ?>" alt="next-event-picture">
                        </div>
                        <div class="event_bottom">
                            <button class="octagonal_button date small">
                                <div class="pair">
                                    <div class="num"><?= $upcoming_event_1_day_of_month_1; ?></div>
                                    <?php
                                    if ($upcoming_event_1_date_range_hyphen) {
                                        echo '<div class="dash"></div>';
                                    }
                                    ?>
                                    <div class="num"><?= $upcoming_event_1_day_of_month_2; ?></div>
                                    <div class="month"><?= $upcoming_event_1_month; ?></div>
                                </div>
                            </button>
                            <div class="event_title">
                                <h5><?= $upcoming_event_1_title; ?></h5>
                                <a href=""><img src="<?= get_template_directory_uri(); ?>/img/black-diag-arrow.png" alt=""></a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide upcoming single_event">
                        <a class="whats_on_link" href=""> </a>
                        <div class="next_image_container">
                            <img src="<?= $upcoming_event_2_image; ?>" alt="next-event-picture">
                        </div>
                        <div class="event_bottom">
                            <button class="octagonal_button date small">
                                <div class="pair">
                                    <div class="num"><?= $upcoming_event_2_day_of_month_1; ?></div>
                                    <?php
                                    if ($upcoming_event_2_date_range_hyphen) {
                                        echo '<div class="dash"></div>';
                                    }
                                    ?>
                                    <div class="num"><?= $upcoming_event_2_day_of_month_2; ?></div>
                                    <div class="month"><?= $upcoming_event_2_month; ?></div>
                                </div>
                            </button>
                            <div class="event_title">
                                <h5><?= $upcoming_event_2_title; ?></h5>
                                <a href=""><img src="<?= get_template_directory_uri(); ?>/img/black-diag-arrow.png" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
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