<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
	<footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
              dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
            <p class="social">
              <a href="#"><span class="icofont-twitter"></span></a>
              <a href="#"><span class="icofont-facebook"></span></a>
              <a href="#"><span class="icofont-dribbble"></span></a>
              <a href="#"><span class="icofont-behance"></span></a>
            </p>
          </div>
          <div class="col-md-7 ml-auto">
            <div class="row site-section pt-0">
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Navigation</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Services</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Collaboration</a></li>
                  <li><a href="#">Todos</a></li>
                  <li><a href="#">Events</a></li>
                </ul>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Downloads</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Get from the App Store</a></li>
                  <li><a href="#">Get from the Play Store</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <p class="copyright">&copy; Copyright Programming Fields. All Rights Reserved</p>
            <div class="credits">
            </div>
          </div>
        </div>

      </div>
    </footer>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri();?> /assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?> /assets/vendor/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?> /assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?> /assets/vendor/easing/easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?> /assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri();?> /assets/vendor/sticky/sticky.js"></script>
  <script src="<?php echo get_template_directory_uri();?> /assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri();?> /assets/vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo get_template_directory_uri();?> /assets/js/main.js"></script>

	<?php wp_footer(); ?>

	</body>
</html>