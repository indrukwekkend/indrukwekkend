<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

	<?php get_template_part('templates/head'); ?>

	<body <?php body_class(); ?>>
		<!--[if IE]>
			<div class="alert alert-warning">
				<?php _e('Je gebruikt een <strong>verouderde</strong> browser. Doe elke ontwikkelaar een plezier en <a href="http://browsehappy.com/">update jou browser</a>!', 'sage'); ?>
			</div>
		<![endif]-->

		<?php do_action( 'get_header' );?>
		<?php get_template_part( 'templates/header' );?>
				
		<main>

			<?php include Wrapper\template_path(); ?>

		</main>

		<?php if (Setup\display_sidebar() && false) : ?>

			<aside class="sidebar">

				<?php include Wrapper\sidebar_path(); ?>

			</aside>

		<?php endif; ?>


		<?php get_template_part('templates/parts/overlay', 'teamleden'); ?>
		<?php get_template_part('templates/parts/overlay', 'vacatures'); ?>
		<?php get_template_part('templates/parts/overlay', 'cases'); ?>
		<?php do_action( 'get_footer' );?>
		<?php get_template_part( 'templates/footer' );?>
		<?php wp_footer();?>
	</body>
</html>
