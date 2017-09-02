<?php
/**
 * The single post template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage JsLib
 * @since JsLib 1.0
 */

get_header(); ?>

<div id="main">

						<div class="inner">
							
                                <?php get_template_part('parts/site','header'); ?>

                            <?php if(have_posts()){ 
                                the_post();
                            ?>

							<!-- Section -->
								<section>
									<header class="main">
										<h1><?php the_title(); ?></h1>
									</header>

									<?php the_content(); ?>
								</section>
                            
                            <?php } ?>
						</div>
					</div>




<?php 
get_sidebar();

get_footer(); ?>

