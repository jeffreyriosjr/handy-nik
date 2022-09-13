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



?>

<!-- Header Section --> 

<main id="primary" class="container-fluid site-main">
    <section class="we-defend-top">    
        <div class="home">
            <div class="row home-page">
                <div class="col-sm-3 header">
                    <p class="the-header mb-0" data-aos="slide-left" data-aos-easing="ease-in" data-aos-duration="1000"><?php echo $main_description; ?></p>
                </div>   
        </div>
        <div class="col-sm-3 slider">
            
        </div>   
    </div>
    </section>
    
</main>


<?php
the_content();
get_footer();
