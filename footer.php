<?php

$stay_up_to_date_yes_no = get_field('stay_up_to_date_yes_no', 'options');
$email_yes_no = get_field('email_yes_no', 'options');

$link_1_text = get_field('link_1_text', 'options');
$link_1_url = get_field('link_1_url', 'options');
$link_2_text = get_field('link_2_text', 'options');
$link_2_url = get_field('link_2_url', 'options');
$link_3_text = get_field('link_3_text', 'options');
$link_3_url = get_field('link_3_url', 'options');
$link_4_text = get_field('link_4_text', 'options');
$link_4_url = get_field('link_4_url', 'options');
$link_5_text = get_field('link_5_text', 'options');
$link_5_url = get_field('link_5_url', 'options');
$link_6_text = get_field('link_6_text', 'options');

$other_link_text_1 = get_field('other_link_text_1', 'options');
$other_link_url_1 = get_field('other_link_url_1', 'options');
$other_link_text_2 = get_field('other_link_text_2', 'options');
$other_link_url_2 = get_field('other_link_url_2', 'options');
$other_link_text_3 = get_field('other_link_text_3', 'options');
$other_link_url_3 = get_field('other_link_url_3', 'options');
$other_link_text_4 = get_field('other_link_text_4', 'options');
$other_link_url_4 = get_field('other_link_url_4', 'options');
$other_link_text_5 = get_field('other_link_text_5', 'options');
$other_link_url_5 = get_field('other_link_url_5', 'options');


$contact_email = get_field('contact_email', 'options');
$contact_phone_number = get_field('contact_phone_number', 'options');
$first_line_address = get_field('first_line_address', 'options');
$second_line_address = get_field('second_line_address', 'options');
$third_line_address = get_field('third_line_address', 'options');

$footer_logo = get_field('footer_logo', 'options');
?>


<style>
	.main_links ul li:nth-child(1) a::after {
		content: '<?= $link_1_text; ?>';
	}

	.main_links ul li:nth-child(2) a::after {
		content: '<?= $link_2_text; ?>';
	}

	.main_links ul li:nth-child(3) a::after {
		content: '<?= $link_3_text; ?>';
	}

	.main_links ul li:nth-child(4) a::after {
		content: '<?= $link_4_text; ?>';
	}

	.main_links ul li:nth-child(5) a::after {
		content: "<?= $link_5_text; ?>";
	}

	.main_links ul li:nth-child(6) a::after {
		content: "<?= $link_6_text; ?>";
	}

	.other_links ul li:nth-child(1) a::after {
		content: '<?= $other_link_text_1; ?>';
	}

	.other_links ul li:nth-child(2) a::after {
		content: '<?= $other_link_text_2; ?>';
	}

	.other_links ul li:nth-child(3) a::after {
		content: '<?= $other_link_text_3; ?>';
	}

	.other_links ul li:nth-child(4) a::after {
		content: '<?= $other_link_text_4; ?>';
	}

	.other_links ul li:nth-child(5) a::after {
		content: '<?= $other_link_text_5; ?>';
	}
</style>

<section class="full_width big_foot">
	<div class="stay_up_to_date">
		<div class="top_line"></div>
		<h1>STAY UP TO DATE</h1>
		<div class="shadow_line"></div>
	</div>

	<!-- <button class="butty"><img src="<?= get_template_directory_uri(); ?>/img/facebook-icon.svg" alt=""></button> -->
	<!-- <button class="butty"><img src="<?= get_template_directory_uri(); ?>/img/facebook-icon.svg" alt=""></button> -->

	<div class="fixed_width">
		<form action="" method="" class="pair_octagonal_buttons octagonal_email section">
			<div class="octagonal_button octagonal_input"><input type="email" id="email" name="email" placeholder="ENTER YOUR EMAIL" autocomplete="off"></div>
			<button class="octagonal_button submit" type="submit">SIGN UP <img class="light_img" src="<?= get_template_directory_uri(); ?>/img/arrow-pointing-right.svg" alt=""></button>
		</form>
		<div class="disclaimer">
			<p>By submitting this form i agree to receive marketing emails from The Refuge</p>
		</div>
	</div>


	<section class="full_width section footer">
		<div class="fixed_width">
			<div class="main_links">
				<ul>
					<li><a href="<?= $link_1_url; ?>"><span><?= $link_1_text; ?></span></a></li>
					<li><a href="<?= $link_2_url; ?>"><span><?= $link_2_text; ?></span></a></li>
					<li><a href="<?= $link_3_url; ?>"><span><?= $link_3_text; ?></span></a></li>
					<li><a href="<?= $link_4_url; ?>"><span><?= $link_4_text; ?></span></a></li>
					<li><a href="<?= $link_5_url; ?>"><span><?= $link_5_text; ?></span></a></li>
					<li><a href="<?= $link_6_url; ?>"><span><?= $link_6_text; ?></span></a></li>
				</ul>
			</div>
			<div class="other_links">
				<ul>
					<li><a href="<?= $other_link_url_1; ?>"><span><?= $other_link_text_1; ?></span></a></li>
					<li><a href="<?= $other_link_url_2; ?>"><span><?= $other_link_text_2; ?></span></a></li>
					<li><a href="<?= $other_link_url_3; ?>"><span><?= $other_link_text_3; ?></span></a></li>
					<li><a href="<?= $other_link_url_4; ?>"><span><?= $other_link_text_4; ?></span></a></li>
					<li><a href="<?= $other_link_url_5; ?>"><span><?= $other_link_text_5; ?></span></a></li>
				</ul>
			</div>
			<div class="find_us">
				<div class="contact_deets">
					<a href="<?= $contact_email; ?>"><?= $contact_email; ?></a>
					<a href=""><?= $contact_phone_number; ?></a>
				</div>
				<div class="address">
					<p><?= $first_line_address; ?> <br> <?= $second_line_address; ?> <br> <?= $third_line_address; ?></p>
				</div>
			</div>
			<div class="socials">
				<div class="social_links">
					<?php if (have_rows('social_media_link', 'options')) : ?>
						<?php while (have_rows('social_media_link', 'options')) : the_row();
							// Get sub field values.
							$social_media_icon = get_sub_field('social_media_icon');
							$social_media_name = get_sub_field('social_media_name');
							$social_media_link = get_sub_field('social_media_link');
						?>
							<a href="<?= $social_media_link; ?>">
								<button class="butty">
									<img class="" src="<?= $social_media_icon; ?>" alt="">
								</button>
								<?= $social_media_name; ?>
							</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="back_to_top">
					<a href="#top" class="octagonal_button back_top">
						<img class="light_img" src="<?= get_template_directory_uri(); ?>/img/arrow-pointing-right.svg" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="full_width section signiture_parent">
		<div class="fixed_width signiture">
			<h6 class="refuge_logo"><?= $footer_logo; ?></h6>
			<span>&copy; 2024 // Website by hlg.</span>
		</div>
	</section>
</section>



<?php wp_footer(); ?>

</body>

</html>