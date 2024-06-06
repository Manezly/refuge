<?php /* Template Name: Whats On Template */ get_header(); ?>

<?php
// Whats On 


?>

<div class="all what">
    <section class="full_width section whats_on_container">
        <div class="fixed_width">
            <div class="eat_with_me_container">
                <div>
                    <div class="eat_with_me drink whats_on_title">
                        <span class="letter med_letter refuge_animation">W</span>
                        <span class="letter med_letter refuge_animation">H</span>
                        <span class="letter med_letter refuge_animation">A</span>
                        <span class="letter med_letter refuge_animation">T</span>
                        <span class="apostraphe">'</span>
                        <span class="letter med_letter refuge_animation">S</span>
                        <span class="">&nbsp;</span>
                        <span class="letter med_letter refuge_animation">O</span>
                        <span class="letter med_letter refuge_animation">N</span>
                    </div>
                </div>
            </div>
            <div class="events_container" id="sticky_nav_container">
                <?php if (have_rows('events')) : ?>
                    <?php while (have_rows('events')) : the_row();
                        // Get sub field values.
                        $top_event_button_text_left = get_sub_field('top_event_button_text_left');
                        $top_event_button_text_right = get_sub_field('top_event_button_text_right');
                        $link_to_event = get_sub_field('link_to_event');
                        $event_date_day = get_sub_field('event_date_day');
                        $event_day_month = get_sub_field('event_day_month');
                        $event_name = get_sub_field('event_name');
                        $event_image = get_sub_field('event_image');
                    ?>
                        <div class="single_event_grid">
                            <a href="">
                                <div class="top_event_text_container">
                                    <button class="octagonal_button"><?= $top_event_button_text_left; ?></button>
                                    <button class="octagonal_button"><?= $top_event_button_text_right; ?></button>
                                </div>
                                <div class="single_event_img_container octagonal_button">
                                    <img src="<?= $event_image; ?>" alt="">
                                    <button class="click_me octagonal_button">Click To See More</button>
                                </div>
                                <div class="grid_event_bottom">
                                    <div class="bot_left_side">
                                        <div class="grid_event_bottom_date octagonal_button">
                                            <span><?= $event_date_day; ?></span>
                                            <span><?= $event_day_month; ?></span>
                                        </div>
                                        <div class="grid_event_bottom_text">
                                            <?= $event_name; ?>
                                        </div>
                                    </div>

                                    <div class="grid_event_bottom_arrow">
                                        <img src="<?= get_template_directory_uri(); ?>/img/full_black_diag.svg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </section>
</div>

<?php get_footer(); ?>