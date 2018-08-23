<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

get_header();
?>

<div class="row">
    <div class="col s10">
      	<div class="card">
			<div class="card-content">
				
				<!--titulo publicaciones-->
				<div class="card blue">
					<div class="card-content" >
						<h1 class="white-text page-title">Lista de recetas por <?php the_archive_title(); ?></h1>				
					</div>                                
				</div>

				<!--ultimas publicaciones-->
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					?>

					<div class="row">
									

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								
								get_template_part( 'template-parts/content', get_post_type() );
								
							endwhile;
							?>

						
					</div>
					<?php
					the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
				?>	
			</div>
		</div>				
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();