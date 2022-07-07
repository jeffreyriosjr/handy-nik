<?php
/**
 * Template Name: Contact Us
 * @package we-defend-fresno
 */

get_header();

$contact_heading = get_field('contact_heading');
$contact_form_section = get_field('contact_form_section');
$background_image = get_field('background_image');
$contact_us =get_field('contact_us');

?>
<main id="contact-us" class="site-main contact-us">
	<section id="contact-form" class="contact-form">
		<div class="contact-yan container-fluid d-flex" style="background-image: url('<?php echo $background_image; ?> '); background-size: cover; background-repeat: no-repeat;">
		<div class="col-sm-6">
		<h1 class="contact-heading" data-aos="slide-left" data-aos-easing="ease-in" data-aos-duration="1000"><?php echo $contact_heading; ?>
			</h1>
		</div>
		<div class="handy-nick-quote m-0">
        <?php echo do_shortcode("[ninja_form id=2]"); ?>
        </div>
		</div>

     </section>
        
    </main>
<?php

get_footer();