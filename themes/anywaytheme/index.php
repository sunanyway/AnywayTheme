<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

<div id="primary">
	<div id="content" role="main">
		
		<header class="page-header">
			<h1 class="page-title">最新文章</h1>
		</header>

		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="home_post">
					<div class="home_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></div>
					<a class="home_pic" href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
					<div class="home_abstract">
						 <?php if(is_category() || is_archive() || is_home() ) { ?>
							<a href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(strip_tags($post->post_content), 0,250,"..."); ?></a>
						<?php
						 } else {
							the_content('Read the rest of this entry &raquo;'); 
						 } ?>
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
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>