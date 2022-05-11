<?php 
/**
 * 
 * This is the template that displays the home page content.
 * 
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package handy-nick
 */
get_header();

$main_description = sanitize_textarea_field(get_field('main_description'));
$main_logo = get_field('main_logo');
$main_background_image = get_field('main_background_image');

?>

<!-- Header Section --> 

<main id="primary" class="container-fluid site-main">
    <section class="we-defend-top">
        <img src="<?php echo $main_background_image; ?>" class="img-fluid main-background-image"></img>     
        <div class="home">
            <div class="row home-page">
                <div class="col-sm-3 header">
                    <p class="the-header mb-0" data-aos="slide-left" data-aos-easing="ease-in" data-aos-duration="1000"><?php echo $main_description; ?></p>
                </div>   
                <!-- <div class="col-sm-3 lorem-1" data-aos="zoom-in-up" data-aos-easing="ease-out" data-aos-duration="2500" data-aos-delay="3000"><?php echo do_shortcode('[smartslider3 slider="4"]');?>
                </div> -->
               
                <div class=" col-sm-3 call-button" data-aos="slide-right" data-aos-easing="ease-in" data-aos-duration="1000"> 
                    <a class="call-now text-center">Call Now!</a>
                </div>
                <!-- <div class="lorem-2 col-sm-3" data-aos="zoom-in-down" data-aos-easing="ease-out" data-aos-duration="2500"data-aos-delay="3000"><?php echo do_shortcode('[smartslider3 slider="5"]'); ?>
                </div> -->
        </div>   
    </div>
    </section>
    
</main>


<?php
get_footer();