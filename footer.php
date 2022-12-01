<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<footer id="footer">

				<!-- Icons -->
					<ul class="icons">
						<!--<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>-->
						<li><a href="https://www.facebook.com/lizzkitchen2020" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<!--<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						-->
						<li><a href="#" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Lizzkitchen.com</li><li>Design: <a href="mailto:shawn@webimmersion.com">Web Immersion</a></li>
					</ul>

			</footer>

</body>
</html>
