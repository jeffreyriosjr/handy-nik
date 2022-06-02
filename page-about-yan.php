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
 * @package we-defend-fresno
 * 
 * **/
 
get_header();

$section_one_header = get_field('section_one_header');
$section_one_description = get_field('section_one_description');
$section_one_image = get_field('section_one_image');
$quotation_image_one = get_field('quotation_image_one');
$quotation_image_two = get_field('quotation_image_two');
$cases_headline = get_field('cases_headline');
$cases_header_image = get_field('cases_header_image');
$case_header_title_one = get_field('case_header_title_one');
$case_type_one = get_field('case_type_one');
$case_header_title_two = get_field('case_header_title_two');
$case_type_two = get_field('case_type_two');
$case_header_title_three = get_field('case_header_title_three');
$case_type_three = get_field('case_type_three');
$case_header_title_four = get_field('case_header_title_four');
$case_type_four = get_field('case_type_four');
$case_header_title_five = get_field('case_header_title_five');
$case_type_five = get_field('case_type_five');
$case_header_title_six = get_field('case_header_title_six');
$case_type_six = get_field('case_type_six');

?>

<main id="primary about-yan" class="site-main about-yan">

<!-- About Yan Section -->

<section id="about-yan" class="about-page">
  <div class="about container-fluid" style="background-image: url('<?php echo $quotation_image_one; ?> '); background-size: cover; background-repeat: no-repeat;">
    <div class="box">
      <img src="<?php echo $section_one_image; ?>" alt="" class="box-img">
        <h1 class="nik-header">Nakia Calllaway</h1>
          <h5>Web Devloper - Web Designer</h5>
            <p>A web developer is a programmer who specializes in, or is specifically engaged in, the development of World Wide Web applications, or applications that are run over HTTP from a web server to a web browser.</p>
    </div>
  </div>
</section>  

</main>

<?php
get_footer();