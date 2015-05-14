<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<section id="primary">
	<div id="content" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php
				printf( __( 'Category Archives: %s', 'twentyeleven' ), '<span>' . single_cat_title( '', false ) . '</span>' );
			?></h1>

			<?php
				$category_description = category_description();
				if ( ! empty( $category_description ) )
					echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
			?>
		</header>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="home_post">
				<div class="home_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></div>
				<a class="home_pic" href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
				<div class="home_abstract">
					<a href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(strip_tags($post->post_content), 0,250,"..."); ?></a>
				 </div>
				 <div class="home_post_info"><?php the_time('y-n-j') ?> / <?php if(function_exists('the_views')) {the_views();} ?> / <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">阅读全文 ></a></div>
			</div>
		<?php endwhile; ?>

		<?php wp_pagenavi(); ?>

	<?php else : ?>

		<article id="post-0" class="post no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-0 -->

	<?php endif; ?>

	</div><!-- #content -->
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>