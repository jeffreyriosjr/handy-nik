<?php
if ($args):
    $testimonial_opening_quotation = esc_url(get_field('opening_quotation'));
    $testimonial_closing_quotation = esc_url(get_field('closing_quotation'));
    $color_scheme = get_field('color_scheme');
    $main_color_scheme_style_feature_inverted = return_style_string('','', $color_scheme['main_feature_color'], '#5ca197');
    $counter = 0; ?>
    <div id="testimonyCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner m-auto" style="width: 95%">
            <?php foreach ($args as $post): setup_postdata( $post );
                $name = esc_html(get_field('name'));
                $occupation = esc_html(get_field('occupation'));
            ?>
            <div class="carousel-item <?php if ($counter === 0) echo 'active'?>">
                <div class="row gx-0">
                    <?php if ($testimonial_opening_quotation): ?>
                        <div class="col-1">
                            <img class="testimonial-quotes" src="<?php echo $testimonial_opening_quotation?>" alt="<?php if (alt_description($testimonial_opening_quotation)): echo alt_description($testimonial_opening_quotation); else: echo 'Opening Quotation'; endif; ?>">
                        </div>
                    <?php endif; ?>
                    <div class="col">
                        <div class="testimonial-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php if ($testimonial_closing_quotation): ?>
                        <div class="col-1 d-flex flex-column justify-content-end">
                            <img class="testimonial-quotes" src="<?php echo $testimonial_closing_quotation?>" alt="<?php if (alt_description($testimonial_closing_quotation)): echo alt_description($testimonial_closing_quotation); else: echo 'Closing Quotation'; endif; ?>">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <p class="testimonial-resident" style="<?= $main_color_scheme_style_feature_inverted ?>">
                            <?php echo ucfirst($name); if ($occupation) echo ' - ' . $occupation; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php $counter+=1;  endforeach; wp_reset_postdata(); ?>
        </div>
        <button class="carousel-control-prev w-auto" type="button" data-bs-target="#testimonyCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next w-auto" type="button" data-bs-target="#testimonyCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php endif; ?>