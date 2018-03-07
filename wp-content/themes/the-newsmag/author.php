<?php
/**
 * The template for displaying author pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The NewsMag
 */
get_header();
?>

<?php do_action('the_newsmag_before_body_content'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				echo '<h1 class="page-title"><span>' . sprintf(esc_html__('Author: %s', 'the-newsmag'), esc_html(get_the_author())) . '</span></h1>';
				the_newsmag_author_bio();
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while (have_posts()) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part('template-parts/content', get_post_format());

			endwhile;

			the_posts_pagination();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php the_newsmag_sidebar_select(); ?>

<?php do_action('the_newsmag_after_body_content'); ?>

<?php get_footer(); ?>
