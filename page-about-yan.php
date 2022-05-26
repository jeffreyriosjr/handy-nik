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
            <div class ="about">
                <h1 class="yan-header mb-0">
                        <?php echo $section_one_header; ?>
                </h1>
                    <img class="yan-image" src="<?php echo $section_one_image; ?>"></img>
                <div class="yan-section">
                    <div class="row mt-3 justify-content-center">
                        <div class="col-sm-9 yan-middle d-flex">
                            <div class="col-sm">
                                <img class="quotations-one pb-5" src="<?php echo $quotation_image_one; ?>"></img>
                            </div>
                            <div class="col-sm-9">    
                                <p class ="yan-description pt-3"></p><?php echo $section_one_description; ?></p>
                            </div>
                            <div class="col-sm">
                                <img class="quotations-two mt-5" src="<?php echo $quotation_image_two; ?>"></img>
                            </div>
                        </div>
                    </div>
               </div>
           </div>

           </section>  


<!-- Yan's Cases Section -->

<section class="cases-section">
    <div class="cases">
        <div class="header">
            <h1 class="cases-headline text-center"><?php echo $cases_headline ;?></h1>
        </div>

                                    <!-- Top Three Cases -->

    <div class="row case-columns-one text-center">
      <div class="case-one col-sm-4">
        <h2 class="case-one-header"><?php echo $case_header_title_one; ?></h2>
         <p class="case-one-desc"><?php echo $case_type_one; ?></p>   
      </div>
    <div class="case-two col-sm-4">
        <h3 class="case-two-header"><?php echo $case_header_title_two; ?></h3>
        <p class="case-two-desc"><?php echo $case_type_two; ?></p>
    </div>
    <div class="case-three col-sm-4">
    <h3 class="case-three-header"><?php echo $case_header_title_three; ?></h3>
    <p class="case-three-desc"><?php echo $case_type_three; ?></p>
    </div>
    </div>


<br>
<br>
    <!-- Bottom Three Cases -->

    <div class="row case-columns-two text-center">
        <div class="case-four col-sm-4">
        <h3 class="case-four-header"><?php echo $case_header_title_four; ?></h3>
        <p class="case-four-desc"><?php echo $case_type_four; ?></p>
    </div>
    <div class="case-five col-sm-4">
        <h3 class="case-five-header"><?php echo $case_header_title_five; ?></h3>
        <p class="case-five-desc"><?php echo $case_type_five; ?></p>
    </div>
        <div class="case-six col-sm-4">
        <h3 class="case-six-header"><?php echo $case_header_title_six; ?></h3>
        <p class="case-six-desc"><?php echo $case_type_six; ?></p>
                </div>
            </div>
        </div>
    </section>
</main>




<?php
get_footer();