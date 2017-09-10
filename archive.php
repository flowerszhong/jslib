<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jslib
 */

get_header(); ?>

	<div id="main">
    <div class="inner">
        <?php get_template_part('parts/site','header'); ?>

		<?php
		if ( have_posts() ) : ?>

			<header class="major mt20">
				<?php
					the_archive_title( '<h2 class="archive-title">[ ', ' ]</h2>' );
				?>
			</header><!-- .page-header -->

			<?php
			echo '<div class="posts">';
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'parts/content', 'loop' );

			endwhile;
			echo '</div>';

			the_posts_navigation();

		else :

			get_template_part( 'parts/content', 'none' );

        endif; ?>
        </div>

	</div>

<?php
get_sidebar();
get_footer();
