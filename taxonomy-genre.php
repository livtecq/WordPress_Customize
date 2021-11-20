<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package livtecq
 */

get_header();
?>

	<main id="primary" class="site-main col-md-8">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>livtecショップ</h1>
                <!-- カスタム分類のナビゲーション作成 -->
                <?php $terms = get_terms('genre'); ?>
                <ul class="nav">
                    <?php foreach ($terms as $term): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name); ?></a></li>
                    <?php endforeach; ?>
                </ul>

                <h2><?php the_archive_title(); ?></h2>

				<!-- <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?> -->

			</header><!-- .page-header -->

			<ul>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

				<!-- /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() ); -->

<?php
			endwhile;
?>
			</ul>

<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
