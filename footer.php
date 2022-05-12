<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package we-defend-fresno
 */

?>


<footer id="colophon" class="site-footer">
	
<!-- contains a nav menu and address -->
<div class="container-fluid">
  <h1 class="footer-header">Stay In Touch!</h1>
					
					<div class="footer-all row">
						<!-- <div class="col <?php if (!has_nav_menu('footer-community-menu')) echo " text-center"; ?>">
							<?php
							wp_nav_menu( array( 
								'theme_location' => 'footer-menu', 
								'container' => 'ul',
								'menu_class' => 'footer-menu',
								) ); 
							?>
						</div>
						<?php if (has_nav_menu('footer-community-menu')):?>
						<div class="col-lg-6">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-community-menu',
                                    'container' => 'ul',
                                    'menu_class' => 'nav',
                                ));
                            ?>
						</div>
						<?php endif;?> -->

            <div class="container p-4 pb-0 text-center">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="footer-btn btn  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>

					</div>
				</div>
			</div>
                              </div>

	</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
	AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
  </script>
</body>
</html>
