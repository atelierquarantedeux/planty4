<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OceanWP WordPress theme
 */

?>

	<footer>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer_menu',
					'container'      => 'false',
					'menu_class'     => 'cssFooter',
				)
			);
			?>

	</footer> 
</div> 

<?php wp_footer(); ?>

</body>
</html>
