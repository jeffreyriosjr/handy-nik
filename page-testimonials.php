<?php
/**
 * Template Name: Testimonial Page
 * @package we-defend-fresno
 */

get_header();

$testimonial_header = get_field('testimonial_header');

?>

 <main id="testimonials" class="testimonials">
        <section id="testimonial-section" class="testimonial-page">
            <div class ="container">
				<div class="row testimonial">
                <div class="col-md-6 w-auto">    
                <h1 data-aos="slide-left" data-aos-easing="ease-in" data-aos-duration="2000" class="testimonial-header">
                        <?php echo $testimonial_header; ?>
                    </h1>
			<?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
        </div>
        </div>
    </div>
           
        </section>
        
    </main>
<?php
get_sidebar();
get_footer();

