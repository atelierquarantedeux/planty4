<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plantyUnderscoreChild
 */

?>
</div>
	<footer>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'container'      => 'false',
					'menu_class'     => 'cssFooter',
				)
			);
			?>

	</footer> 
 

<?php wp_footer(); ?>

</body>
</html>
